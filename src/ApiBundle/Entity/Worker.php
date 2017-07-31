<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table("worker")
 * @ORM\Entity
 */
class Worker
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
     * @ORM\ManyToOne(targetEntity="Post")
     * @var Post
     */
    protected $post;

    /**
     * @ORM\Column(name="salary", type="integer")
     * @var integer
     */
    protected $salary;


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
     * @return Worker
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
     * Set salary
     *
     * @param integer $salary
     *
     * @return Worker
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return integer
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set post
     *
     * @param \ApiBundle\Entity\Post $post
     *
     * @return Worker
     */
    public function setPost(\ApiBundle\Entity\Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \ApiBundle\Entity\Post
     */
    public function getPost()
    {
        return $this->post;
    }
}
