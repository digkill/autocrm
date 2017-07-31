<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hire
 *
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\HireRepository")
 * @ORM\Table(name="hire")
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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Car")
     * @var Car
     */
    protected $car;

    /**
     * @ORM\Column(name="start_date", type="datetime")
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @ORM\Column(name="end_date", type="datetime")
     * @var \DateTime
     */
    protected $endDate;

    /**
     * @ORM\ManyToOne(targetEntity="Point")
     * @var Point
     */
    protected $point;

    /**
     * @ORM\ManyToOne(targetEntity="Customer")
     * @var Customer
     */
    protected $customer;

    /**
     * @ORM\ManyToOne(targetEntity="Worker")
     * @var Worker
     */
    protected $worker;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $status = self::STATUS_NEW;


    /**
     * @ORM\ManyToOne(targetEntity="Rate")
     * @var Rate
     */
    protected $rate;

    public function __construct()
    {
        $this->startDate = new \DateTime();
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
     * Set returnDate
     *
     * @param \DateTime $returnDate
     *
     * @return Hire
     */
    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;

        return $this;
    }

    /**
     * Get returnDate
     *
     * @return \DateTime
     */
    public function getReturnDate()
    {
        return $this->returnDate;
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

    /**
     * Set rate
     *
     * @param \ApiBundle\Entity\Rate $rate
     *
     * @return Hire
     */
    public function setRate(\ApiBundle\Entity\Rate $rate = null)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return \ApiBundle\Entity\Rate
     */
    public function getRate()
    {
        return $this->rate;
    }
}
