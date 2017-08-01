<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mark
 *
 * @ORM\Table(name="mark")
 * @ORM\Entity
 */
class Mark
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
     * @ORM\Column(name="name", type="string", length=60, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=60, precision=0, scale=0, nullable=false, unique=false)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=60, precision=0, scale=0, nullable=false, unique=false)
     */
    private $model;

    /**
     * @var integer
     *
     * @ORM\Column(name="places", type="integer", length=11, precision=0, scale=0, nullable=false, unique=false)
     */
    private $places;

    /**
     * @var integer
     *
     * @ORM\Column(name="year_of_issue", type="integer", length=4, precision=0, scale=0, nullable=false, unique=false)
     */
    private $yearOfIssue;

    /**
     * @var float
     *
     * @ORM\Column(name="engine_capacity", type="float", precision=0, scale=0, nullable=false, unique=false)
     */
    private $engineCapacity;


}

