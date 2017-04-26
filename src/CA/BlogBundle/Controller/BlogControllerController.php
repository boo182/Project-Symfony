<?php

namespace CA\BlogBundle\Controller;

use CA\BlogBundle\Entity\User;
use CA\BlogBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogControllerController extends Controller {
	public function indexAction() {



		$em = $this->getDoctrine()->getManager();

          $posts = $em->getRepository('CABlogBundle:Post')->findAll();
		
		return $this->render('CABlogBundle:BlogController:index.html.twig', array(
				 "posts" => $posts,
				 
			));
	}

}
