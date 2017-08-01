<?php

namespace CRMBundle\Entity;

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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=60, nullable=false)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=60, nullable=false)
     */
    private $model;

    /**
     * @var integer
     *
     * @ORM\Column(name="places", type="integer", nullable=false)
     */
    private $places;

    /**
     * @var integer
     *
     * @ORM\Column(name="year_of_issue", type="integer", nullable=false)
     */
    private $yearOfIssue;

    /**
     * @var float
     *
     * @ORM\Column(name="engine_capacity", type="float", precision=10, scale=0, nullable=false)
     */
    private $engineCapacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mark_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Mark
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set class
     *
     * @param string $class
     *
     * @return Mark
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Mark
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set places
     *
     * @param integer $places
     *
     * @return Mark
     */
    public function setPlaces($places)
    {
        $this->places = $places;

        return $this;
    }

    /**
     * Get places
     *
     * @return integer
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * Set yearOfIssue
     *
     * @param integer $yearOfIssue
     *
     * @return Mark
     */
    public function setYearOfIssue($yearOfIssue)
    {
        $this->yearOfIssue = $yearOfIssue;

        return $this;
    }

    /**
     * Get yearOfIssue
     *
     * @return integer
     */
    public function getYearOfIssue()
    {
        return $this->yearOfIssue;
    }

    /**
     * Set engineCapacity
     *
     * @param float $engineCapacity
     *
     * @return Mark
     */
    public function setEngineCapacity($engineCapacity)
    {
        $this->engineCapacity = $engineCapacity;

        return $this;
    }

    /**
     * Get engineCapacity
     *
     * @return float
     */
    public function getEngineCapacity()
    {
        return $this->engineCapacity;
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
}
