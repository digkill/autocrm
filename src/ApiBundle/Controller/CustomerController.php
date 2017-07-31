<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations;

use ApiBundle\Entity\Customer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class CustomerController
 * @package ApiBundle\Controller
 * @Annotations\RouteResource("customer")
 */
class CustomerController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Lists all customer entities.
     *
     */
    public function cgetAction()
    {
        $em = $this->getDoctrine()->getManager();

        $customers = $em->getRepository('ApiBundle:Customer')->findAll();

        $data = array("customers" => $customers);
        $view = $this->view($data);
        return $this->handleView($view);
    }


}
