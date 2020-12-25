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
     * @Route("/profile/disable/{id}", name="profile_disable", methods={"PUT"})
     */
    public function disableUser(Request $request, User $user, UserPasswordEncoderInterface $encoder)
    {
        if($this->getUser() != $user) throw new \Exception(self::NOT_VALID_USER);
        if(!$encoder->isPasswordValid($user, $request->request->get('password'))) throw new \Exception(self::PASSWORDS_DO_NOT_MATCH);
        
        $em = $this->getDoctrine()->getManager();

        $cookie_name = 'last_role_' . $user->getId();

        if($user->getDisable()){
            $role = $this->getCookies($request);
            $role = $role != '' ? $role : 'ROLE_USER';
            $user->setDisable(false);
            $user->setRoles([$role[$cookie_name]]);
            
            $this->setNewCookie($cookie_name, '', time() + 0);
        }else{
            $role = $user->getRoles();
            $this->setNewCookie($cookie_name, $role[0], time() + (86400 * 365 * 10));
            $user->setDisable(true);
            $user->setRoles(['ROLE_DISABLE']);
        }

        $em->flush();

        return $this->redirectToRoute("profile");
    }

    /**
     * @Route("/profile/delete/{id}", name="profile_delete", methods={"DELETE"})
     */
    public function deleteUser(Request $request, User $user, TaskRepository $taskRepository, UserPasswordEncoderInterface $encoder)
    {
        if($this->getUser() != $user) throw new \Exception(self::NOT_VALID_USER);
        if (!$this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) throw new \Exception(self::NOT_VALID_TOKEN);
        if(!$encoder->isPasswordValid($user, $request->request->get('password'))) throw new \Exception(self::PASSWORDS_DO_NOT_MATCH);
    
        $taskRepository->deleteAll($this->getUser());
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();   
        return $this->redirectToRoute("register");
    }

}