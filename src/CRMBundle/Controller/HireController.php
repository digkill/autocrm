<?php

namespace CRMBundle\Controller;

use ApiBundle\Entity\Hire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Hire controller.
 *
 */
class HireController extends Controller
{
    /**
     * Lists all hire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hires = $em->getRepository('ApiBundle:Hire')->findAll();

        return $this->render('hire/index.html.twig', array(
            'hires' => $hires,
        ));
    }

    /**
     * Creates a new hire entity.
     *
     */
    public function newAction(Request $request)
    {
        $hire = new Hire();
        $form = $this->createForm('CRMBundle\Form\HireType', $hire);
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
    public function showAction(Hire $hire)
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
    public function editAction(Request $request, Hire $hire)
    {
        $deleteForm = $this->createDeleteForm($hire);
        $editForm = $this->createForm('CRMBundle\Form\HireType', $hire);
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
    public function deleteAction(Request $request, Hire $hire)
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
    private function createDeleteForm(Hire $hire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hire_delete', array('id' => $hire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
