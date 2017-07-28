<?php

namespace AppBundle\Handler;

use AppBundle\Repository\CarRepositoryInterface;
use Symfony\Component\HttpFoundation\Request;

class CarHandler implements HandlerInterface
{
    /**
     * @var CarRepositoryInterface
     */
    private $repository;

    public function __construct(CarRepositoryInterface $userRepositoryInterface)
    {
        $this->repository = $userRepositoryInterface;
    }

    public function get($id)
    {
        return $this->repository->findOneById($id);
    }

    public function all($limit = 10, $offset = 0)
    {
        throw new \DomainException('UserHandler::all is currently not implemented.');
    }

    public function post(array $parameters, array $options = [])
    {

    }

    public function put($resource, array $parameters, array $options = [])
    {

    }


    public function patch($user, array $parameters, array $options = [])
    {

    }

    public function delete($resource)
    {

    }

}