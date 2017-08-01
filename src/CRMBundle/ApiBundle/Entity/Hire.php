<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hire
 *
 * @ORM\Table(name="hire")
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\HireRepository")
 */
class Hire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="cost", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $cost;

    /**
     * @var \ApiBundle\Entity\Car
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Car")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     * })
     */
    private $car;

    /**
     * @var \ApiBundle\Entity\Point
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Point")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="point_id", referencedColumnName="id")
     * })
     */
    private $point;

    /**
     * @var \ApiBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;

    /**
     * @var \ApiBundle\Entity\Worker
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Worker")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="worker_id", referencedColumnName="id")
     * })
     */
    private $worker;


}

