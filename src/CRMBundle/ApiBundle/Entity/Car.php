<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity
 */
class Car
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
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=20, precision=0, scale=0, nullable=false, unique=false)
     */
    private $number;

    /**
     * @var \ApiBundle\Entity\Mark
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Mark")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mark_id", referencedColumnName="id")
     * })
     */
    private $mark;


}

