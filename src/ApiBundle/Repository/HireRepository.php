<?php

namespace ApiBundle\Repository;

use \Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

class HireRepository extends EntityRepository implements HireRepositoryInterface
{

    public function findAllForCar($carId)
    {
        $qb = $this->createQueryBuilder('self')
            ->join('self.car', 'car')
            ->addSelect('car')
            ->leftJoin('car.mark', 'mark')
            ->addSelect('mark')
            ->leftJoin('self.point', 'point')
            ->addSelect('point')
            ->leftJoin('self.worker', 'worker')
            ->addSelect('worker')
            ->leftJoin('self.customer', 'customer')
            ->addSelect('customer')
            ->leftJoin('car.rate', 'rate')
            ->addSelect('rate')
            ->andWhere('car.id = ?0')
            ->orderBy('self.startDate', 'DESC')
            ->setParameters(array($carId));
        return $qb->getQuery()
            ->setMaxResults(1)
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }


    public function markAvgPoint()
    {
        $entityManager = $this->getEntityManager();
        $rsm = new ResultSetMapping();
        $rsm->addScalarResult('avgtime', 'avgTime');
        $rsm->addScalarResult('pointname', 'pointName');
        $rsm->addScalarResult('markname', 'markName');

        $sql = '
        SELECT p.name as pointName, m.name as markName, 
          AVG(h.end_date - h.start_date) as avgTime
            FROM hire h
              LEFT JOIN car c ON (h.car_id = c.id)
              LEFT JOIN point p ON (h.point_id = p.id)
              LEFT JOIN mark m ON (c.mark_id = m.id)
              GROUP BY p.id, m.id
        ';

        $query = $entityManager->createNativeQuery($sql, $rsm);
        return $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }
}