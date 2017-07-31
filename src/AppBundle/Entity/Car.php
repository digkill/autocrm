<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table("car")
 * @ORM\Entity
 */
class Car
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Mark")
     * @var Mark
     */
    protected $mark;


    /**
     * @ORM\Column(name="number",type="string",length=20)
     * @var string
     */
    protected $number;

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
     * Set mark
     *
     * @param \AppBundle\Entity\Mark $mark
     *
     * @return Car
     */
    public function setMark(\AppBundle\Entity\Mark $mark = null)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return \AppBundle\Entity\Mark
     */
    public function getMark()
    {
        return $this->mark;
    }


}
