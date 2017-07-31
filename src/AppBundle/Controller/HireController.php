<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations;

use AppBundle\Entity\Point;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HireController
 * @package AppBundle\Controller
 * @Annotations\RouteResource("hire")
 */
class HireController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Lists all hire entities.
     *
     */
    public function cgetAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hires = $em->getRepository('AppBundle:Hire')->findAll();

        $data = array("hires" => $hires);
        $view = $this->view($data);
        return $this->handleView($view);
    }

    /**
     * @param Request $request
     * @return View|\Symfony\Component\Form\Form
     */
    public function postAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\HireType', null, [
            'csrf_protection' => false,
            'allow_extra_fields' => true,
        ]);

        // $form->handleRequest($request);

        $form->submit($request->request->all());

        if (!$form->isValid()) {

            return $form;
        }

        /**
         * @var $hire Hire
         */
        $hire = $form->getData();

        $em = $this->getDoctrine()->getManager();
        $em->persist($hire);
        $em->flush();

        $routeOptions = [
            'id' => $hire->getId(),
            '_format' => $request->get('_format'),
        ];

        return $this->routeRedirectView('get_hires', $routeOptions, Response::HTTP_CREATED);
    }


    public function getByCarAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $hires = $em->getRepository('AppBundle:Hire')->findAllForCar($id);

        $data = array("hires" => $hires);
        $view = $this->view($data);
        return $this->handleView($view);
    }


    /**
     * Creates a new hire entity.
     *
     */
    /*   public function newAction(Request $request)
       {
           $hire = new Hire();
           $form = $this->createForm('AppBundle\Form\HireType', $hire);
           $form->handleRequest($request);

           if ($form->isSubmitted() && $form->isValid()) {
               $em = $this->getDoctrine()->getManager();
               $em->persist($hire);
               $em->flush();

               return $this->redirectToRoute('hire_show', array('id' => $hire->getId()));
           }

           return $this->render('hire/new.html.twig', array(
               'hire' => $hire,
               'form' => $form->createView(),
           ));
       }

       /**
        * Finds and displays a hire entity.
        *
        */
    /*  public function showAction(Hire $hire)
      {
          $deleteForm = $this->createDeleteForm($hire);

          return $this->render('hire/show.html.twig', array(
              'hire' => $hire,
              'delete_form' => $deleteForm->createView(),
          ));
      }

      /**
       * Displays a form to edit an existing hire entity.
       *
       */
    /*   public function editAction(Request $request, Hire $hire)
       {
           $deleteForm = $this->createDeleteForm($hire);
           $editForm = $this->createForm('AppBundle\Form\HireType', $hire);
           $editForm->handleRequest($request);

           if ($editForm->isSubmitted() && $editForm->isValid()) {
               $this->getDoctrine()->getManager()->flush();

               return $this->redirectToRoute('hire_edit', array('id' => $hire->getId()));
           }

           return $this->render('hire/edit.html.twig', array(
               'hire' => $hire,
               'edit_form' => $editForm->createView(),
               'delete_form' => $deleteForm->createView(),
           ));
       }

       /**
        * Deletes a hire entity.
        *
        */
    /*  public function deleteAction(Request $request, Hire $hire)
      {
          $form = $this->createDeleteForm($hire);
          $form->handleRequest($request);

          if ($form->isSubmitted() && $form->isValid()) {
              $em = $this->getDoctrine()->getManager();
              $em->remove($hire);
              $em->flush();
          }

          return $this->redirectToRoute('hire_index');
      }

      /**
       * Creates a form to delete a hire entity.
       *
       * @param Hire $hire The hire entity
       *
       * @return \Symfony\Component\Form\Form The form
       */
    /*  private function createDeleteForm(Hire $hire)
      {
          return $this->createFormBuilder()
              ->setAction($this->generateUrl('hire_delete', array('id' => $hire->getId())))
              ->setMethod('DELETE')
              ->getForm();
      }*/
}
