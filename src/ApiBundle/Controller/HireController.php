<?php

namespace ApiBundle\Controller;

use ApiBundle\Entity\Hire;
use ApiBundle\Form\HireType;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use ApiBundle\Repository\HireRepository;

use Doctrine\ORM\EntityManager;

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


    public function getAction(int $id): Hire
    {
        $hire = $this->hireRepository->find($id);

        if ($hire === null) {
            $view = $this->view(null, Response::HTTP_NOT_FOUND);
            return $this->handleView($view);
        }

        return $hire;
    }

    public function cgetAction(): Response
    {
        $hires = $this->hireRepository->findAll();

        $view = $this->view(['hires' => $hires]);
        return $this->handleView($view);
    }


    public function postAction(Request $request): Response
    {
        $form = $this->createForm('ApiBundle\Form\HireType', null, [
            'csrf_protection' => false,
            'allow_extra_fields' => true,
        ]);

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

        $form = $this->createForm(HireType::class, $hire, [
            'csrf_protection' => false,
            'allow_extra_fields' => true,
        ]);

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

        $form = $this->createForm(HireType::class, $hire, [
            'csrf_protection' => false,
            'allow_extra_fields' => true,
        ]);

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


    public function getByCarAction(int $id): Response
    {
        $hires = $this->hireRepository->findAllForCar($id);

        $view = $this->view(["hires" => $hires]);
        return $this->handleView($view);
    }

    public function markAvgPointAction(): Response
    {
        $hires = $this->hireRepository->markAvgPoint();

        $view = $this->view(["hires" => $hires]);
        return $this->handleView($view);
    }

    protected function getEntityManager(): EntityManager
    {
        return $this->getDoctrine()->getManager();
    }
}
