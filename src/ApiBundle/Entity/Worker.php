<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Worker
 *
 * @ORM\Table(name="worker", indexes={@ORM\Index(name="idx_9fb2bf624b89032c", columns={"post_id"})})
 * @ORM\Entity
 */
class Worker
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="salary", type="integer", nullable=false)
     */
    private $salary;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="worker_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ApiBundle\Entity\Post
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     * })
     */
    private $post;



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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
