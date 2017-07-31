<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations;

use ApiBundle\Entity\Worker;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class WorkerController
 * @package ApiBundle\Controller
 * @Annotations\RouteResource("worker")
 */
class WorkerController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Lists all worker entities.
     *
     */
    public function cgetAction()
    {
        $em = $this->getDoctrine()->getManager();

        $workers = $em->getRepository('ApiBundle:Worker')->findAll();

        $data = array("workers" => $workers);
        $view = $this->view($data);
        return $this->handleView($view);
    }


}
