<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Address", type="text", nullable=true)
     */
    protected $address;

    /**
     * @var string
     *
     * @ORM\Column(name="Phone", type="text", nullable=true)
     */
    protected $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="Spe_IRC", type="text", nullable=true)
     */
    protected $spe;

    /**
     * @var string
     *
     * @ORM\Column(name="Annee_sortie", type="date", nullable=true)
     */
    protected $annee;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set spe
     *
     * @param string $spe
     *
     * @return User
     */
    public function setSpe($spe)
    {
        $this->spe = $spe;

        return $this;
    }

    /**
     * Get spe
     *
     * @return string
     */
    public function getSpe()
    {
        return $this->spe;
    }

    /**
     * Set annee
     *
     * @param \DateTime $annee
     *
     * @return User
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return \DateTime
     */
    public function getAnnee()
    {
        return $this->annee;
    }
}
