<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations;

use ApiBundle\Entity\Mark;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class MarkController
 * @package ApiBundle\Controller
 * @Annotations\RouteResource("mark")
 */
class MarkController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Lists all mark entities.
     *
     */
    public function cgetAction()
    {
        $em = $this->getDoctrine()->getManager();

        $marks = $em->getRepository('ApiBundle:Mark')->findAll();

        $data = array("marks" => $marks);
        $view = $this->view($data);
        return $this->handleView($view);
    }

}
