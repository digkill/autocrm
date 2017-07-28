<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table("hire")
 * @ORM\Entity
 */
class Hire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Car")
     * @var Car
     */
    protected $car;

    /**
     * @ORM\Column(type="start_date")
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @ORM\Column(type="end_date")
     * @var \DateTime
     */
    protected $endDate;

    /**
     * @ORM\Column(type="return_date")
     * @var \DateTime
     */
    protected $returnDate;

    /**
     * @ORM\ManyToOne(targetEntity="Department")
     * @var Department
     */
    protected $department;

    /**
     * @ORM\ManyToOne(targetEntity="Client")
     * @var Client
     */
    protected $client;

}