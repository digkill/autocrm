<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations;

use ApiBundle\Entity\Rate;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class RateController
 * @package ApiBundle\Controller
 * @Annotations\RouteResource("rate")
 */
class RateController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Lists all rate entities.
     *
     */
    public function cgetAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rates = $em->getRepository('ApiBundle:Rate')->findAll();

        $data = array("rates" => $rates);
        $view = $this->view($data);
        return $this->handleView($view);
    }

}
