<?php

namespace ApiBundle\Controller;



use ApiBundle\Entity\Hire;
use ApiBundle\Form\HireType;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use ApiBundle\Repository\HireRepository;

use Doctrine\ORM\EntityManager;

/**
 * Class HireController
 *
 * @package ApiBundle\Controller
 *
 * @RouteResource("hire")
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
     * Gets an individual Hire
     *
     * @param int $id
     * @return Response
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     *
     * ApiDoc(
     *     output="ApiBundle\Entity\Hire,
     *     statusCodes={
     *         200 = "Returned when successful",
     *         404 = "Return when not found"
     *     }
     * )
     */
    public function getAction(int $id): Response
    {
        $hire = $this->hireRepository->find($id);
        $view = $this->view($hire);

        if ($hire === null) {
            $view = $this->view(null, Response::HTTP_NOT_FOUND);
        }

        return $this->handleView($view);
    }

    /**
     * Gets a collection of Hire
     *
     * @return Response
     *
     * ApiDoc(
     *     output="ApiBundle\Entity\Hire,
     *     statusCodes={
     *         200 = "Returned when successful",
     *         404 = "Return when not found"
     *     }
     * )
     */
    public function cgetAction(): Response
    {
        $hires = $this->hireRepository->findAll();

        $view = $this->view(['hires' => $hires]);
        return $this->handleView($view);
    }

    /**
     * @param Request $request
     * @return Response
     *
     * ApiDoc(
     *     input="ApiBundle\Form\HireType",
     *     output="ApiBundle\Entity\Hire,
     *     statusCodes={
     *         201 = "Returned when a new BlogPost has been successful created",
     *         404 = "Return when not found"
     *     }
     * )
     */
    public function postAction(Request $request): Response
    {
        $form = $this->createForm('ApiBundle\Form\HireType');

        $form->submit($request->request->all());

        if (!$form->isValid()) {
            $view = $this->view($form);
            return $this->handleView($view);
        }

        /**
         * @var $hire Hire
         */
        $hire = $form->getData();

        $this->getEntityManager()->persist($hire);
        $this->getEntityManager()->flush();

        $routeOptions = [
            'id' => $hire->getId(),
            '_format' => $request->get('_format'),
        ];

        $view = $this->view($routeOptions, Response::HTTP_CREATED);
        return $this->handleView($view);
    }

    /**
     * @param Request $request
     * @param int $id
     * @return Response
     *
     * ApiDoc(
     *     input="ApiBundle\Form\HireType",
     *     output="ApiBundle\Entity\Hire,
     *     statusCodes={
     *         204 = "Returned when an existing BlogPost has been successful updated",
     *         400 = "Return when errors",
     *         404 = "Return when not found"
     *     }
     * )
     */
    public function putAction(Request $request, int $id): Response
    {
        /**
         * @var $hire Hire
         */
        $hire = $this->hireRepository->find($id);

        if ($hire === null) {
            $view = $this->view(null, Response::HTTP_NOT_FOUND);
            return $this->handleView($view);
        }

        $form = $this->createForm(HireType::class, $hire);

        $form->submit($request->request->all());

        if (!$form->isValid()) {
            $view = $this->view($form);
            return $this->handleView($view);
        }

        $this->getEntityManager()->flush();

        $routeOptions = [
            'id' => $hire->getId(),
            '_format' => $request->get('_format'),
        ];

        $view = $this->view($routeOptions);
        return $this->handleView($view);
    }

    /**
     * @param Request $request
     * @param int $id
     * @return Response
     *
     * ApiDoc(
     *     input="ApiBundle\Form\HireType",
     *     output="ApiBundle\Entity\Hire,
     *     statusCodes={
     *         204 = "Returned when an existing BlogPost has been successful updated",
     *         400 = "Return when errors",
     *         404 = "Return when not found"
     *     }
     * )
     */
    public function patchAction(Request $request, int $id): Response
    {
        /**
         * @var $hire Hire
         */
        $hire = $this->hireRepository->find($id);

        if ($hire === null) {
            $view = $this->view(null, Response::HTTP_NOT_FOUND);
            return $this->handleView($view);
        }

        $form = $this->createForm(HireType::class, $hire);

        $form->submit($request->request->all(), false);

        if (!$form->isValid()) {
            $view = $this->view($form);
            return $this->handleView($view);
        }

        $this->getEntityManager()->flush();

        $routeOptions = [
            'id' => $hire->getId(),
            '_format' => $request->get('_format'),
        ];

        $view = $this->view($routeOptions);
        return $this->handleView($view);
    }

    /**
     * @param int $id
     * @return Response
     *
     * ApiDoc(
     *     statusCodes={
     *         204 = "Returned when an existing BlogPost has been successful deleted",
     *         404 = "Return when not found"
     *     }
     * )
     */
    public function deleteAction(int $id): Response
    {
        $hire = $this->hireRepository->find($id);

        if ($hire === null) {
            $view = $this->view(null, Response::HTTP_NOT_FOUND);
            return $this->handleView($view);
        }

        $this->getEntityManager()->remove($hire);
        $this->getEntityManager()->flush();

        $view = $this->view(null, Response::HTTP_NO_CONTENT);
        return $this->handleView($view);
    }

    /**
     * Gets an individual Hire
     *
     * @param int $id
     * @return Response
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     *
     * ApiDoc(
     *     output="ApiBundle\Entity\Hire,
     *     statusCodes={
     *         200 = "Returned when successful",
     *         404 = "Return when not found"
     *     }
     * )
     */
    public function getByCarAction(int $id): Response
    {
        $hires = $this->hireRepository->findAllForCar($id);

        $view = $this->view(["hires" => $hires]);
        return $this->handleView($view);
    }

    /**
     * Gets an individual Hire
     *
     * @return Response
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     *
     * ApiDoc(
     *     output="ApiBundle\Entity\Hire,
     *     statusCodes={
     *         200 = "Returned when successful",
     *         404 = "Return when not found"
     *     }
     * )
     */
    public function markAvgPointAction(): Response
    {
        $hires = $this->hireRepository->markAvgPoint();

        $view = $this->view(["hires" => $hires]);
        return $this->handleView($view);
    }

    /**
     * @return EntityManager
     */
    protected function getEntityManager(): EntityManager
    {
        return $this->getDoctrine()->getManager();
    }
}
