<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use ApiBundle\Repository\HireRepository;

/**
 * Class HireController
 * @package ApiBundle\Controller
 * @Annotations\RouteResource("hire")
 */
class HireController extends FOSRestController implements ClassResourceInterface
{

    /**
     * @var Hire $hireRepository
     */
    private $hireRepository;

    public function __construct(HireRepository $hireRepository)
    {
        $this->hireRepository = $hireRepository;
    }

    /**
     * Lists all hire entities.
     *
     */
    public function cgetAction()
    {

        $hires = $this->hireRepository->findAll();

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
        $form = $this->createForm('ApiBundle\Form\HireType', null, [
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


    /*
    public function deleteAction(int $id)
    {
        $hire = $this->hireRepository->find($id);

        if ($hire === null) {
            return new View(null, Response::HTTP_NOT_FOUND);
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($hire);
        $em->flush();

        return new View(null, Response::HTTP_NO_CONTENT);
    }
*/

    public function getByCarAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $hires = $em->getRepository('ApiBundle:Hire')->findAllForCar($id);

        $data = array("hires" => $hires);
        $view = $this->view($data);
        return $this->handleView($view);
    }

    public function markAvgPointAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hires = $em->getRepository('ApiBundle:Hire')->markAvgPoint();

        $data = array("hires" => $hires);
        $view = $this->view($data);
        return $this->handleView($view);
    }
}
