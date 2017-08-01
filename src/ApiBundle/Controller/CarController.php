<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class CarController
 * @package ApiBundle\Controller
 * @Annotations\RouteResource("car")
 */
class CarController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Lists all car entities.
     *
     */
    public function cgetAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cars = $em->getRepository('ApiBundle:Car')->findAll();

        $data = array("cars" => $cars);
        $view = $this->view($data);
        return $this->handleView($view);
    }

}
