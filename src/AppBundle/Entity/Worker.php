<?php

namespace AppBundle\Entity;

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
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="post",type="string",length=60)
     * @var Post
     */
    protected $post;

    /**
     * @ORM\Column(name="salary", type="integer")
     * @var integer
     */
    protected $salary;

    /**
     * @ORM\Column(name="department", type="integer")
     * @var Department
     */
    protected $department;


}