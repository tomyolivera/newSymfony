<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskType;
use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    /**
     * @Route("/task", name="task_index")
     */
    public function index(TaskRepository $taskRepository): Response
    {
        return $this->render('task/index.html.twig', [
            'tasks' => $taskRepository->findBy([
                'user' => $this->getUser()
            ])
        ]);
    }

    /**
     * @Route("/task/new", name="task_new", methods={"GET","POST"})
     */
    public function new(Request $request, TaskRepository $taskRepository): Response
    {
        $count = $taskRepository->getTotalTasksByUser($this->getUser());
        if($count[0][1] >= 15) return $this->redirectToRoute('task_index');

        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $user = $this->getUser();
            $task->setUser($user);
            $entityManager->persist($task);
            $entityManager->flush();
            
            return $this->redirectToRoute('task_index');
        }   
        
        return $this->render('task/new.html.twig', [
            'task' => $task,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/task/{id}/edit", name="task_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Task $task): Response
    {
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('task_index');
        }
        
        if($this->getUser() == $task->getUser()){
            return $this->render('task/edit.html.twig', [
                'task' => $task,
                'form' => $form->createView(),
            ]);
        }else{
            return $this->redirectToRoute('task_index');
        }

    }

    /**
     * @Route("/task/{id}/delete", name="task_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Task $task): Response
    {
        if ($task->getUser() !== $this->getUser()) throw new \Exception(self::NOT_VALID_USER);
        if (!$this->isCsrfTokenValid('delete'.$task->getId(), $request->request->get('_token'))) throw new \Exception(self::NOT_VALID_TOKEN);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($task);
        $entityManager->flush();

        return $this->redirectToRoute('task_index');
    }

    /**
     * @Route("/task/deleteAll", options={"expose"=true}, name="task_delete_all", methods={"DELETE"})
     */
    public function deleteAll(Request $request, TaskRepository $taskRepository): Response
    {
        if(!$request->isXmlHttpRequest()) throw new \Exception(self::IS_NOT_XML);
        if (!$this->isCsrfTokenValid('delete', $request->request->get('_token'))) throw new \Exception(self::NOT_VALID_TOKEN);

        $taskRepository->deleteAll($this->getUser());
        return new JsonResponse('');
        // return $this->redirectToRoute('task_index');
    }
}
