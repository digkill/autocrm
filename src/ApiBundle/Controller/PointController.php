<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations;

use ApiBundle\Entity\Point;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class PointController
 * @package ApiBundle\Controller
 * @Annotations\RouteResource("point")
 */
class PointController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Lists all point entities.
     *
     */
    public function cgetAction()
    {
        $em = $this->getDoctrine()->getManager();

        $points = $em->getRepository('ApiBundle:Point')->findAll();

        $data = array("points" => $points);
        $view = $this->view($data);
        return $this->handleView($view);
    }

}
