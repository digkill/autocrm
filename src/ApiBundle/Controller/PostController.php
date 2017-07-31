<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations;

use ApiBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class PostController
 * @package ApiBundle\Controller
 * @Annotations\RouteResource("post")
 */
class PostController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Lists all post entities.
     *
     */
    public function cgetAction()
    {
        $em = $this->getDoctrine()->getManager();

        $posts = $em->getRepository('ApiBundle:Post')->findAll();

        $data = array("posts" => $posts);
        $view = $this->view($data);
        return $this->handleView($view);
    }

}
