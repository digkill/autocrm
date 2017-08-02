<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hire
 *
 * @ORM\Table(name="hire", indexes={@ORM\Index(name="idx_b8017efcc3c6f69f", columns={"car_id"}), @ORM\Index(name="idx_b8017efcc028cea2", columns={"point_id"}), @ORM\Index(name="idx_b8017efc9395c3f3", columns={"customer_id"}), @ORM\Index(name="idx_b8017efc6b20ba36", columns={"worker_id"})})
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\HireRepository")
 */
class Hire
{
    const STATUS_NEW = 0;
    const STATUS_PAID = 1;
    const STATUS_TAKEN = 2;
    const STATUS_RETURNED = 3;
    const STATUS_CANCELED = 4;
    const STATUS_ERROR = 5;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=false)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="cost", type="integer", nullable=false)
     */
    private $cost;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hire_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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


    public function __construct()
    {
        $this->startDate = new \DateTime();
        $this->status = self::STATUS_NEW;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Hire
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Hire
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Hire
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     *
     * @return Hire
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set car
     *
     * @param \ApiBundle\Entity\Car $car
     *
     * @return Hire
     */
    public function setCar(\ApiBundle\Entity\Car $car = null)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car
     *
     * @return \ApiBundle\Entity\Car
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set point
     *
     * @param \ApiBundle\Entity\Point $point
     *
     * @return Hire
     */
    public function setPoint(\ApiBundle\Entity\Point $point = null)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point
     *
     * @return \ApiBundle\Entity\Point
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Set customer
     *
     * @param \ApiBundle\Entity\Customer $customer
     *
     * @return Hire
     */
    public function setCustomer(\ApiBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \ApiBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set worker
     *
     * @param \ApiBundle\Entity\Worker $worker
     *
     * @return Hire
     */
    public function setWorker(\ApiBundle\Entity\Worker $worker = null)
    {
        $this->worker = $worker;

        return $this;
    }

    /**
     * Get worker
     *
     * @return \ApiBundle\Entity\Worker
     */
    public function getWorker()
    {
        return $this->worker;
    }
}
