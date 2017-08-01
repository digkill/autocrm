<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthCode
 *
 * @ORM\Table(name="oauth2_auth_codes")
 * @ORM\Entity
 */
class AuthCode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="oauth2_auth_codes_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ApiBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $client;

    /**
     * @var \ApiBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}

