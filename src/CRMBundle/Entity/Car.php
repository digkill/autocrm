<?php

namespace CRMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="car", indexes={@ORM\Index(name="idx_773de69d4290f12b", columns={"mark_id"})})
 * @ORM\Entity
 */
class Car
{
    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=20, nullable=false)
     */
    private $number;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="car_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \CRMBundle\Entity\Mark
     *
     * @ORM\ManyToOne(targetEntity="CRMBundle\Entity\Mark")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mark_id", referencedColumnName="id")
     * })
     */
    private $mark;



    /**
     * Set number
     *
     * @param string $number
     *
     * @return Car
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
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
     * Set mark
     *
     * @param \CRMBundle\Entity\Mark $mark
     *
     * @return Car
     */
    public function setMark(\CRMBundle\Entity\Mark $mark = null)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return \CRMBundle\Entity\Mark
     */
    public function getMark()
    {
        return $this->mark;
    }
}
