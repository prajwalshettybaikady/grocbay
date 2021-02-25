<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

/**
 * StockLogs
 *
 * @ORM\Table(name="stock_logs")
 * @ORM\Entity
 */
class StockLogs
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
     * @ORM\Column(name="stockId", type="string", length=255)
     */
    private $stockId;
        /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="qty", type="string", length=255)
     */
    private $qty;
    
      


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
     * Set ref
     *
     * @param string $ref
     *
     * @return StockLogs
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
     * Set type
     *
     * @param string $type
     *
     * @return StockLogs
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
    
         /**
     * Set qty
     *
     * @param string $qty
     *
     * @return StockLogs
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

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
     * Set stockId
     *
     * @param string $stockId
     *
     * @return StockLogs
     */
    public function setStockId($stockId)
    {
        $this->stockId = $stockId;

        return $this;
    }

    /**
     * Get qty
     *
     * @return string
     */
    public function getStockId()
    {
        return $this->stockId;
    } 
}
