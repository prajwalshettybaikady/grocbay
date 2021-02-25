<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Brands
 *
 * @ORM\Table(name="wallet")
 * @ORM\Entity
 */
class Wallet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
      /**
     * @var string
     *
     * @ORM\Column(name="loyalty", type="string", length=255)
     */
    private $loyalty=0; 
    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="postpaid", type="string", length=255)
     */
    private $postpaid;
        /**
     * @var string
     *
     * @ORM\Column(name="duration", type="string", length=255)
     */
    private $duration;

      /**
     * @var string
     *
     * @ORM\Column(name="prepaid", type="string", length=255)
     */
    private $prepaid; 

       /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;    

     /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;  

   /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date; 

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return wallet
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
     /**
     * Set loyalty
     *
     * @param string $loyalty
     *
     * @return wallet
     */
    public function setLoyalty($loyalty)
    {
        $this->loyalty = $loyalty;

        return $this;
    }

    /**
     * Get loyalty
     *
     * @return string
     */
    public function getLoyalty()
    {
        return $this->loyalty;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }
    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return wallet
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set postpaid
     *
     * @param string $postpaid
     *
     * @return wallet
     */
    public function setPostpaid($postpaid)
    {
        $this->postpaid = $postpaid;

        return $this;
    }

    /**
     * Get postpaid
     *
     * @return string
     */
    public function getPostpaid()
    {
        return $this->postpaid;
    }
  /**
     * Set prepaid
     *
     * @param string $prepaid
     *
     * @return wallet
     */
    public function setPrepaid($prepaid)
    {
        $this->prepaid = $prepaid;

        return $this;
    }

    /**
     * Get prepaid
     *
     * @return string
     */
    public function getPrepaid()
    {
        return $this->prepaid;
    }   
      /**
     * Set ref
     *
     * @param string $ref
     *
     * @return wallet
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }  
    /**
     * Set status
     *
     * @param string $status
     *
     * @return wallet
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    } 
     /**
     * Set date
     *
     * @param string $date
     *
     * @return wallet
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    } 
}
