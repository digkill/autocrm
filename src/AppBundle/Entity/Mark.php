<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table("mark")
 * @ORM\Entity
 */
class Mark
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
     * @ORM\Column(name="name",type="string",length=60)
     * @var string
     */
    protected $name;

    /**
     * @ORM\Column(name="class",type="string",length=60)
     * @var string
     */
    protected $class;

    /**
     * @ORM\Column(name="model",type="string",length=60)
     * @var string
     */
    protected $model;

    /**
     * @ORM\Column(name="places",type="integer",length=11)
     * @var integer
     */
    protected $places;

    /**
     * @ORM\Column(name="year_of_issue",type="integer",length=4)
     * @var integer
     */
    protected $yearOfIssue;

    /**
     * @ORM\Column(name="engine_capacity", type="float")
     * @var float
     */
    protected $engineCapacity;

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
}
