<?php
// src/Entity/User.php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    const TYPE_PRATICIAN = "Pratician";
    const TYPE_EMPLOYEE = "Employee";
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex(
     *     pattern="/^[0-9]{4}\/[a-z]{3}$/i",
     *     htmlPattern="^[0-9]{4}\/[a-zA-Z]{3}$",
     * message="You have to enter a valide N° authorization to practice"
     *)
     */
    private $Nae;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facebook_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facebook_access_token;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $googleplus_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $googleplus_access_token;

    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getNae(): ?string
    {
        return $this->Nae;
    }

    public function setNae(string $Nae): self
    {
        $this->Nae = $Nae;

        return $this;
    }

    public function getFacebookId(): ?string
    {
        return $this->facebook_id;
    }

    public function setFacebookId(?string $facebook_id): self
    {
        $this->facebook_id = $facebook_id;

        return $this;
    }

    public function getFacebookAccessToken(): ?string
    {
        return $this->facebook_access_token;
    }

    public function setFacebookAccessToken(?string $facebook_access_token): self
    {
        $this->facebook_access_token = $facebook_access_token;

        return $this;
    }

    public function getGoogleplusId(): ?string
    {
        return $this->googleplus_id;
    }

    public function setGoogleplusId(?string $googleplus_id): self
    {
        $this->googleplus_id = $googleplus_id;

        return $this;
    }

    public function getGoogleplusAccessToken(): ?string
    {
        return $this->googleplus_access_token;
    }

    public function setGoogleplusAccessToken(?string $googleplus_access_token): self
    {
        $this->googleplus_access_token = $googleplus_access_token;

        return $this;
    }

}