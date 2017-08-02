<?php

namespace CRMBundle\Controller;

use ApiBundle\Entity\Worker;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Worker controller.
 *
 */
class WorkerController extends Controller
{
    /**
     * Lists all worker entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $workers = $em->getRepository('ApiBundle:Worker')->findAll();

        return $this->render('worker/index.html.twig', array(
            'workers' => $workers,
        ));
    }

    /**
     * Creates a new worker entity.
     *
     */
    public function newAction(Request $request)
    {
        $worker = new Worker();
        $form = $this->createForm('CRMBundle\Form\WorkerType', $worker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($worker);
            $em->flush();

            return $this->redirectToRoute('worker_show', array('id' => $worker->getId()));
        }

        return $this->render('worker/new.html.twig', array(
            'worker' => $worker,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a worker entity.
     *
     */
    public function showAction(Worker $worker)
    {
        $deleteForm = $this->createDeleteForm($worker);

        return $this->render('worker/show.html.twig', array(
            'worker' => $worker,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing worker entity.
     *
     */
    public function editAction(Request $request, Worker $worker)
    {
        $deleteForm = $this->createDeleteForm($worker);
        $editForm = $this->createForm('CRMBundle\Form\WorkerType', $worker);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('worker_edit', array('id' => $worker->getId()));
        }

        return $this->render('worker/edit.html.twig', array(
            'worker' => $worker,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a worker entity.
     *
     */
    public function deleteAction(Request $request, Worker $worker)
    {
        $form = $this->createDeleteForm($worker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($worker);
            $em->flush();
        }

        return $this->redirectToRoute('worker_index');
    }

    /**
     * Creates a form to delete a worker entity.
     *
     * @param Worker $worker The worker entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Worker $worker)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('worker_delete', array('id' => $worker->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
