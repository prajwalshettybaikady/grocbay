<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Stock
 *
 * @ORM\Table(name="stock")
 * @ORM\Entity
 */
class Stock
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="addedBy", type="string", length=255)
     */
    private $addedBy;
        /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;
        /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;
      /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=255)
     */
    private $time; 
      /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=255)
     */
    private $mode; 
      /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=255)
     */
    private $branch; 
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
     * Set addedBy
     *
     * @param string $addedBy
     *
     * @return stock
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;

        return $this;
    }

    /**
     * Get addedBy
     *
     * @return string
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }   
      /**
     * Set ref
     *
     * @param string $ref
     *
     * @return stock
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
     * Set branch
     *
     * @param string $branch
     *
     * @return stock
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Get branch
     *
     * @return string
     */
    public function getBranch()
    {
        return $this->branch;
    }  
    /**
     * Set mode
     *
     * @param string $mode
     *
     * @return stock
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * Set description
     *
     * @param string $description
     *
     * @return stock
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    } 
     /**
     * Set date
     *
     * @param string $date
     *
     * @return stock
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    } 

         /**
     * Set time
     *
     * @param string $time
     *
     * @return stock
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    } 
}
