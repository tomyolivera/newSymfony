<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskType;
use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    private const IS_NOT_XML = "This is not a XML request";

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
    public function new(Request $request): Response
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
        if ($task->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }
        
        if ($this->isCsrfTokenValid('delete'.$task->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($task);
            $entityManager->flush();
        }

        return $this->redirectToRoute('task_index');
    }

    /**
     * @Route("/task/deleteAll", name="task_delete_all", methods={"DELETE"})
     */
    public function deleteAll(Request $request, TaskRepository $taskRepository): Response
    {
        if ($this->isCsrfTokenValid('delete', $request->request->get('_token'))) {
            $taskRepository->deleteAll($this->getUser());
        }

        return $this->redirectToRoute('task_index');
    }
}
