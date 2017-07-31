<?php

namespace CRMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ApiBundle\Form\Type\HireType;

use ApiBundle\Entity\Hire;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormView;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

        return $this->render('CRMBundle:Default:index.html.twig', [

        ]);
    }



}
