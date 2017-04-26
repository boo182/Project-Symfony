<?php

namespace CA\BlogBundle\Controller;

use CA\BlogBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use CA\BlogBundle\Security\UserVoter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 */

class UserController extends Controller {
	/**
	 * Lists all user entities.
	 *
	 */
	public function indexAction() {
		$user = new User();
    
    $em = $this->getDoctrine()->getManager();

		$users = $em->getRepository('CABlogBundle:User')->findAll();

		return $this->render('user/index.html.twig', array(
				'users' => $users,
        
			));
	}

	

	/**
	 * Creates a new user entity.
	 *
	 */
	public function newAction(Request $request) {
		$user = new User();
		$form = $this->createForm('CA\BlogBundle\Form\UserType', $user);
		$form->handleRequest($request);
		$user->setRoles(["ROLE_BLOGGER"]);
		$mail    = $user->getMail();
		$encoder = $this->container->get('security.password_encoder');
		$encoded = $encoder->encodePassword($user, $user->getPassword());
		$user->setPassword($encoded);
		$session = $request->getSession();
		$session->getFlashBag()->add('info', 'Nouvel utilisateur enregistré');

		if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();

			return $this->redirectToRoute('user_show', array('id' => $user->getId()));
		}

		
		return $this->render('user/new.html.twig', array(
				'user' => $user,
				'form' => $form->createView(),
			));
	}

 


	public function showAction(User $user) {
		//var_dump($user->getUsername());
  
    $deleteForm = $this->createDeleteForm($user);
    $id = $user->getId();
    $em = $this->getDoctrine()->getManager();

    $posts = $em->getRepository('CABlogBundle:Post')->findByUser($user);
		return $this->render('user/show.html.twig', array(
				'user'        => $user,
        'posts' => $posts,
				'delete_form' => $deleteForm->createView(),
			));
	}
  public function showByUsernameAction(User $user) {
    //var_dump($user->getUsername());
  
    $deleteForm = $this->createDeleteForm($user);
    $id = $user->getId();
    $em = $this->getDoctrine()->getManager();

    $posts = $em->getRepository('CABlogBundle:Post')->findByUser($user);
    return $this->render('user/show.html.twig', array(
        'user'        => $user,
        'posts' => $posts,
        'delete_form' => $deleteForm->createView(),
      ));
  }


	/**
	 * Displays a form to edit an existing user entity.
	 *
	 */
	public function editAction(Request $request, User $user) {
    
    $this->denyAccessUnlessGranted('edit', $user);
		
    $deleteForm = $this->createDeleteForm($user);
		$editForm   = $this->createForm('CA\BlogBundle\Form\UserType', $user);
		$editForm->handleRequest($request);
		$user->setRoles(["ROLE_BLOGGER"]);
    // $user->setSalt('1234');
		$encoder = $this->container->get('security.password_encoder');
		$encoded = $encoder->encodePassword($user, $user->getPassword());
		$user->setPassword($encoded);
   
  
    
      if ($editForm->isSubmitted() && $editForm->isValid()) {
      $this->getDoctrine()->getManager()->flush();

      return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
    }

    return $this->render('user/edit.html.twig', array(
        'user'        => $user,
        'edit_form'   => $editForm->createView(),
        'delete_form' => $deleteForm->createView(),
      ));
  }
  



	/**
	 * Deletes a user entity.
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function deleteAction(Request $request, User $user) {
		$form = $this->createDeleteForm($user);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->remove($user);
			$em->flush();
		}

		return $this->redirectToRoute('user_index');
	}

	/**
	 * Creates a form to delete a user entity.
	 *
	 * @param User $user The user entity
	 *
	 * @return \Symfony\Component\Form\Form The form
	 */
	private function createDeleteForm(User $user) {
		return $this->createFormBuilder()
		            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
		->setMethod('DELETE')
		->getForm()
		;
	}
}
