<?php

namespace App\Controller;

use App\Entity\Task;
use App\Entity\User;
use App\Repository\TaskRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    const NOT_VALID_TOKEN = "The token is not valid";
    const NOT_ALLOWED = "You are not allowed for this action";
    
    /**
     * @Route("/profile", name="profile")
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('profile/index.html.twig', [
            'data' => $userRepository->getOwnData($this->getUser())
        ]);
    }

    /**
     * @Route("/profile/delete/{id}", name="profile_delete", methods={"DELETE"})
     */
    public function deleteUser(Request $request, User $user, TaskRepository $taskRepository)
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $taskRepository->deleteAll($this->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();   

            return $this->redirectToRoute("register");
        }else{
            throw new \Exception(self::NOT_VALID_TOKEN);
        }

    }

}