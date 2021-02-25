<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

/**
 * WalletDue
 *
 * @ORM\Table(name="wallet_due")
 * @ORM\Entity
 */
class WalletDue
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
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

  
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
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note; 
   /**
     * @var string
     *
     * @ORM\Column(name="balance", type="string", length=255)
     */
    private $balance; 
       /**
     * @var string
     *
     * @ORM\Column(name="paid", type="string", length=255)
     */
    private $paid; 
       /**
     * @var string
     *
     * @ORM\Column(name="dueDate", type="string", length=255)
     */
    private $dueDate; 
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
     * @return WalletDue
     */
    public function setUser($user)
    {
        $this->user = $user;

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
     * Set balance
     *
     * @param string $balance
     *
     * @return WalletDue
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }
  /**
     * Set paid
     *
     * @param string $paid
     *
     * @return WalletDue
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * Get prepaid
     *
     * @return string
     */
    public function getPaid()
    {
        return $this->paid;
    }   
      /**
     * Set ref
     *
     * @param string $ref
     *
     * @return WalletDue
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
     * @return WalletDue
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
     * Set dueDate
     *
     * @param string $dueDate
     *
     * @return WalletDue
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getDueDate()
    {
        return $this->dueDate;
    } 
     /**
     * Set note
     *
     * @param string $note
     *
     * @return WalletDue
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    } 
         /**
     * Set date
     *
     * @param string $date
     *
     * @return WalletDue
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
}
