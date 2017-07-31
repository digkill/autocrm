<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations;

use AppBundle\Entity\Rate;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class RateController
 * @package AppBundle\Controller
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

        $rates = $em->getRepository('AppBundle:Rate')->findAll();

        $data = array("rates" => $rates);
        $view = $this->view($data);
        return $this->handleView($view);
    }

    /**
     * Creates a new rate entity.
     *
     */
    public function newAction(Request $request)
    {
        $rate = new Rate();
        $form = $this->createForm('AppBundle\Form\RateType', $rate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rate);
            $em->flush();

            return $this->redirectToRoute('rate_show', array('id' => $rate->getId()));
        }

        return $this->render('rate/new.html.twig', array(
            'rate' => $rate,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rate entity.
     *
     */
    public function showAction(Rate $rate)
    {
        $deleteForm = $this->createDeleteForm($rate);

        return $this->render('rate/show.html.twig', array(
            'rate' => $rate,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rate entity.
     *
     */
    public function editAction(Request $request, Rate $rate)
    {
        $deleteForm = $this->createDeleteForm($rate);
        $editForm = $this->createForm('AppBundle\Form\RateType', $rate);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rate_edit', array('id' => $rate->getId()));
        }

        return $this->render('rate/edit.html.twig', array(
            'rate' => $rate,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rate entity.
     *
     */
    public function deleteAction(Request $request, Rate $rate)
    {
        $form = $this->createDeleteForm($rate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rate);
            $em->flush();
        }

        return $this->redirectToRoute('rate_index');
    }

    /**
     * Creates a form to delete a rate entity.
     *
     * @param Rate $rate The rate entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rate $rate)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rate_delete', array('id' => $rate->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
