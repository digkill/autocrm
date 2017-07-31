<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations;

use AppBundle\Entity\Car;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class CarController
 * @package AppBundle\Controller
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
        $cars = $em->getRepository('AppBundle:Car')->findAll();

        $data = array("cars" => $cars);
        $view = $this->view($data);
        return $this->handleView($view);
    }



    /**
     * Creates a new car entity.
     *
     */

    /*
    public function newAction(Request $request)
    {
        $car = new Car();
        $form = $this->createForm('AppBundle\Form\CarType', $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($car);
            $em->flush();

            return $this->redirectToRoute('car_show', array('id' => $car->getId()));
        }

        return $this->render('car/new.html.twig', array(
            'car' => $car,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a car entity.
     *
     */
    /*
    public function showAction(Car $car)
    {
        $deleteForm = $this->createDeleteForm($car);

        return $this->render('car/show.html.twig', array(
            'car' => $car,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing car entity.
     *
     */
    /*
    public function editAction(Request $request, Car $car)
    {
        $deleteForm = $this->createDeleteForm($car);
        $editForm = $this->createForm('AppBundle\Form\CarType', $car);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('car_edit', array('id' => $car->getId()));
        }

        return $this->render('car/edit.html.twig', array(
            'car' => $car,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a car entity.
     *
     */
    /*
    public function deleteAction(Request $request, Car $car)
    {
        $form = $this->createDeleteForm($car);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($car);
            $em->flush();
        }

        return $this->redirectToRoute('car_index');
    }

    /**
     * Creates a form to delete a car entity.
     *
     * @param Car $car The car entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*
    private function createDeleteForm(Car $car)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('car_delete', array('id' => $car->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    */
}
