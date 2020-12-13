<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminType;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    const IS_NOT_XML = "This is not a XML request";
    const NOT_VALID_TOKEN = "The token is not valid";
    const NOT_ALLOWED = "You are not allowed for this action";
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
        if($this->isGranted('ROLE_OWNER') || $this->isGranted('ROLE_ALLOWED_TO_EDIT') && $user->getRoles() != ['ROLE_OWNER'] && $user->getRoles() != ['ROLE_ADMIN']){
            $form = $this->createForm(AdminType::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->getDoctrine()->getManager()->flush();
                return $this->redirectToRoute('admin_users');
            }

            return $this->render('admin/_edit.html.twig', [
                'user' => $user,
                'form' => $form->createView(),
            ]);
        }else{
            return new \Exception(self::NOT_ALLOWED);
        }
    }
    
    /**
     * @Route("/admin/users/delete/{id}", name="admin_users_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user)
    {
        if($this->isGranted('ROLE_ALLOWED_TO_DELETE') && $user->getRoles() != ['ROLE_OWNER']){
            if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($user);
                $entityManager->flush();
            }else{
                throw new \Exception(self::NOT_VALID_TOKEN);
            }
        }
        return $this->redirectToRoute('admin_users');
    }

    /**
     * @Route("/admin/users/ban/{id}", options={"expose"=true}, name="admin_users_ban", methods={"GET", "POST"})
     */
    public function changeBan(Request $request, User $user)
    {
        if($request->isXmlHttpRequest()){
            if($this->isGranted('ROLE_ALLOWED_TO_BAN') && $user->getRoles() != ['ROLE_OWNER']){
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
            }else{
                throw new \Exception(self::NOT_ALLOWED);
            }
        }else{
            throw new \Exception(self::IS_NOT_XML);
        }
    }

}
