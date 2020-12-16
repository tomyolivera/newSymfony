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
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProfileController extends AbstractController
{
    const NOT_VALID_TOKEN = "The token is not valid";
    const NOT_ALLOWED = "You are not allowed for this action";
    const PASSWORD_DO_NOT_MATCH = "This password is not valid";
    
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
    public function deleteUser(Request $request, User $user, TaskRepository $taskRepository, UserPasswordEncoderInterface $encoder)
    {
        if (!$this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) 
            throw new \Exception(self::NOT_VALID_TOKEN);
        if(!$encoder->isPasswordValid($user, $request->request->get('password')))
            throw new \Exception(self::PASSWORD_DO_NOT_MATCH);
    
        $taskRepository->deleteAll($this->getUser());
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();   
        return $this->redirectToRoute("register");
    }

}