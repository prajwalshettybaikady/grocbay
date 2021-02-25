<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

/**
 * WalletLogs
 *
 * @ORM\Table(name="wallet_logs")
 * @ORM\Entity
 */
class WalletLogs
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
     * @ORM\Column(name="credit", type="string", length=255)
     */
    private $credit;

  
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
     * @ORM\Column(name="debit", type="string", length=255)
     */
    private $debit; 
       /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date; 
       /**
     * @var string
     *
     * @ORM\Column(name="balance", type="string", length=255)
     */
    private $balance; 
     /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type; 
     /**
     * @var string
     *
     * @ORM\Column(name="datetime", type="string", length=255)
     */
    private $datetime; 
         /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=255)
     */
    private $mode; 
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
     * Set credit
     *
     * @param string $credit
     *
     * @return WalletLogs
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return string
     */
    public function getCredit()
    {
        return $this->credit;
    }
    /**
     * Set mode
     *
     * @param string $mode
     *
     * @return WalletLogs
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
     * Set date
     *
     * @param string $date
     *
     * @return WalletLogs
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get credit
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set balance
     *
     * @param string $balance
     *
     * @return WalletLogs
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
     * Set debit
     *
     * @param string $debit
     *
     * @return WalletLogs
     */
    public function setDebit($debit)
    {
        $this->debit = $debit;

        return $this;
    }

    /**
     * Get debit
     *
     * @return string
     */
    public function getDebit()
    {
        return $this->debit;
    }   
      /**
     * Set ref
     *
     * @param string $ref
     *
     * @return WalletLogs
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
     * @return WalletLogs
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
     * Set DateTime
     *
     * @param string $DateTime
     *
     * @return WalletLogs
     */
    public function setDateTime($DateTime)
    {
        $this->datetime = $DateTime;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return string
     */
    public function getDateTime()
    {
        return $this->datetime;
    } 
     /**
     * Set note
     *
     * @param string $note
     *
     * @return WalletLogs
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
     * Set type
     *
     * @param string $type
     *
     * @return WalletLogs
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    } 
}
