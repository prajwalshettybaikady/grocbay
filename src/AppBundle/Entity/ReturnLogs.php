<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

/**
 * ReturnLogs
 *
 * @ORM\Table(name="return_logs")
 * @ORM\Entity
 */
class ReturnLogs
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
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="itemId", type="string", length=255)
     */
    private $itemId;
        /**
     * @var string
     *
     * @ORM\Column(name="qty", type="string", length=255)
     */
    private $qty;

      /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status; 

       /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    
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
     * Set qty
     *
     * @param string $qty
     *
     * @return ReturnLogs
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    /**
     * Set itemId
     *
     * @param string $itemId
     *
     * @return ReturnLogs
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get qty
     *
     * @return string
     */
    public function getQty()
    {
        return $this->qty;
    }
    /**
     * Set postpaid
     *
     * @param string $postpaid
     *
     * @return ReturnLogs
     */
    public function setPostpaid($postpaid)
    {
        $this->postpaid = $postpaid;

        return $this;
    }

  
      /**
     * Set ref
     *
     * @param string $ref
     *
     * @return ReturnLogs
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
     * @return ReturnLogs
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
    
}
