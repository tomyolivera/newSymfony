<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/dashboard", name="admin")
     */
    public function dashboard()
    {
        return $this->render('admin/index.html.twig');
    }
    
    /**
     * @Route("/admin/users/", name="admin_users")
     */
    public function findUsers(Request $request, PaginatorInterface $paginator): Response
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->getRepository(User::class)->findAll();
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            4 /*limit per page*/
        );
        return $this->render('admin/users.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    /**
     * @Route("/admin/users/edit/{id}", name="admin_users_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user)
    {
        if(!($this->isGranted('ROLE_OWNER') || $this->isGranted('ROLE_ALLOWED_TO_EDIT') && $user->getRoles() != ['ROLE_OWNER'] && $user->getRoles() != ['ROLE_ADMIN'])) throw new \Exception(self::NOT_ALLOWED);
        
        $form = $this->createForm(AdminType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $role = $request->request->get('roles');

            if($role != 'ROLE_USER' && $role != 'ROLE_MOD' && $role != 'ROLE_ADMIN' && $role != '') throw new \Exception(self::NOT_VALID_DATA);
            if($role == $this->getUser()->getRoles()) throw new \Exception(self::NOT_ALLOWED);
            if($role != '' && is_array($role) && count($role) > 1) throw new \Exception(self::NOT_VALID_DATA);

            $em = $this->getDoctrine()->getManager();
            $user->setRoles([$role]);
            $user->getBan() ? $user->setRoles(['ROLE_BAN']) : '';

            $em->flush();

            return $this->redirectToRoute('admin_users');
        }

        return $this->render('admin/_edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * @Route("/admin/users/delete/{id}", name="admin_users_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user)
    {
        if(!($this->isGranted('ROLE_ALLOWED_TO_DELETE') && $user->getRoles() != ['ROLE_OWNER'])) throw new \Exception(self::NOT_ALLOWED);
        if (!$this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) throw new \Exception(self::NOT_VALID_TOKEN);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();
        return $this->redirectToRoute('admin_users');
    }

    /**
     * @Route("/admin/users/ban/{id}", options={"expose"=true}, name="admin_users_ban", methods={"GET", "POST"})
     */
    public function changeBan(Request $request, User $user)
    {
        if(!$request->isXmlHttpRequest()) throw new \Exception(self::IS_NOT_XML);
        if(!($this->isGranted('ROLE_ALLOWED_TO_BAN') && $user->getRoles() != ['ROLE_OWNER'])) throw new \Exception(self::NOT_ALLOWED);

        $em = $this->getDoctrine()->getManager();
        if($user->getBan()){
            $user->setRoles(['ROLE_USER']);
            $user->setBan(false);
        }else{
            $user->setRoles(['ROLE_BAN']);
            $user->setBan(true);
        }
        $em->flush();
        $ban = $user->getBan();
        return new JsonResponse(['ban' => $ban]);
    }

}
