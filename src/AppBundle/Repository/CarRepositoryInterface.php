<?php

namespace AppBundle\Repository;
use AppBundle\Model\CarInterface;

/**
 * Interface CarRepositoryInterface
 * @package AppBundle\Repository
 */
interface CarRepositoryInterface
{
    /**
     * @param $id
     * @return mixed
     */
    public function findOneById($id);

    /**
     * @param CarInterface $user
     * @param array         $options
     * @return mixed
     */
    public function save(CarInterface $user, array $options = ['flush'=>true]);
}