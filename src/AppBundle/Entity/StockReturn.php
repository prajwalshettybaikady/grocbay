<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

/**
 * StockReturn
 *
 * @ORM\Table(name="stock_return")
 * @ORM\Entity
 */
class StockReturn
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
     * @ORM\Column(name="customerId", type="string", length=255)
     */
    private $customerId;
    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=255)
     */
    private $reason;
        /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;
    /**
     * @var string
     *
     * @ORM\Column(name="itemId", type="string", length=255)
     */
    private $itemId;
        /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;

      /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address; 
   /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=255)
     */
    private $branch;
       /**
     * @var string
     *
     * @ORM\Column(name="deliveryTime", type="string", length=255)
     */
    private $deliveryTime;    

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
     * @var string
     *
     * @ORM\Column(name="quantity", type="string", length=255)
     */
    private $quantity; 
  /**
     * @var string
     *
     * @ORM\Column(name="deliveryBoy", type="string", length=255)
     */
    private $deliveryBoy; 
  /**
     * @var string
     *
     * @ORM\Column(name="assignedBy", type="string", length=255)
     */
    private $assignedBy; 
  /**
     * @var string
     *
     * @ORM\Column(name="addedTime", type="string", length=255)
     */
    private $addedTime; 
      /**
     * @var string
     *
     * @ORM\Column(name="assignedTime", type="string", length=255)
     */
    private $assignedTime; 
          /**
     * @var string
     *
     * @ORM\Column(name="AcceptedTime", type="string", length=255)
     */
    private $AcceptedTime; 
      
                  /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=255)
     */
    private $mode; 
                      /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255)
     */
    private $longitude; 
    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255)
     */
    private $latitude; 
        /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type; 
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
     * Set branch
     *
     * @param string $branch
     *
     * @return StockReturn
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
     * Get customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }
    /**
     * Set customerId
     *
     * @param string $customerId
     *
     * @return StockReturm
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }
    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return StockReturm
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }
     /**
     * Get longitude
     *
     * @return string
     */
    public function longitude()
    {
        return $this->longitude;
    }
    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return StockReturm
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

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
     * Set type
     *
     * @param string $type
     *
     * @return StockReturm
     */
    public function setType($type)
    {
        $this->type = $type;

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
     * @return StockReturm
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

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
     * Set ref
     *
     * @param string $ref
     *
     * @return StockReturm
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

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
     * Set address
     *
     * @param string $address
     *
     * @return StockReturm
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

   
    /**
     * Set status
     *
     * @param string $status
     *
     * @return StockReturm
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
     * @return StockReturm
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
     * Get deliveryTime
     *
     * @return string
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    } 
         /**
     * Set date
     *
     * @param string $deliveryTime
     *
     * @return StockReturm
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;

        return $this;
    }
    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    } 
         /**
     * Set date
     *
     * @param string $quantity
     *
     * @return StockReturm
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
  /**
     * Get deliveryBoy
     *
     * @return string
     */
    public function getDeliveryBoy()
    {
        return $this->deliveryBoy;
    } 
         /**
     * Set date
     *
     * @param string $deliveryBoy
     *
     * @return StockReturm
     */
    public function setDeliveryBoy($deliveryBoy)
    {
        $this->deliveryBoy = $deliveryBoy;

        return $this;
    }
     /**
     * Get assignedBy
     *
     * @return string
     */
    public function getAssignedBy()
    {
        return $this->assignedBy;
    } 
         /**
     * Set assignedBy
     *
     * @param string $assignedBy
     *
     * @return StockReturm
     */
    public function setAssignedBy($assignedBy)
    {
        $this->assignedBy = $assignedBy;

        return $this;
    }
     /**
     * Get addedTime
     *
     * @return string
     */
    public function getAddedTime()
    {
        return $this->addedTime;
    } 
         /**
     * Set addedTime
     *
     * @param string $addedTime
     *
     * @return StockReturm
     */
    public function setAddedTime($addedTime)
    {
        $this->addedTime = $addedTime;

        return $this;
    }
     /**
     * Get assignedTime
     *
     * @return string
     */
    public function getAssignedTime()
    {
        return $this->addedTime;
    } 

         /**
     * Set assignedTime
     *
     * @param string $assignedTime
     *
     * @return StockReturm
     */
    public function setAssignedTime($assignedTime)
    {
        $this->assignedTime = $assignedTime;

        return $this;
    }

      /**
     * Set AcceptedTime
     *
     * @param string $AcceptedTime
     *
     * @return StockReturm
     */
    public function setAcceptedTime($AcceptedTime)
    {
        $this->AcceptedTime = $AcceptedTime;

        return $this;
    }
    /**
     * Get AcceptedTime
     *
     * @return string
     */
    public function getAcceptedTime()
    {
        return $this->AcceptedTime;
    } 
      /**
     * Set mode
     *
     * @param string $mode
     *
     * @return StockReturm
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
     * Set note
     *
     * @param string $note
     *
     * @return StockReturm
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
     * Set reason
     *
     * @param string $reason
     *
     * @return StockReturm
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
}
