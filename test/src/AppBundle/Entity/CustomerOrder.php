<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerOrder
 *
 * @ORM\Table(name="customer_order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CustomerOrderRepository")
 */
class CustomerOrder
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255)
     * @ORM\Id
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="orderDate", type="datetime")
     */
    private $orderDate;

    /**
     * @var string
     *
     * @ORM\Column(name="actualAmount", type="string", length=255)
     */
    private $actualAmount;
    /**
     * @var string
     *
     * @ORM\Column(name="tray", type="string", length=255)
     */
    private $tray;
    /**
     * @var string
     *
     * @ORM\Column(name="picker", type="string", length=255)
     */
    private $picker=0;
       /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=255)
     */
    private $branch;
        /**
     * @var string
     *
     * @ORM\Column(name="transactionId", type="string", length=255,nullable=true)
     */
    private $transactionId;
    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=255)
     */
    private $area;
    /**
     * @var string
     *
     * @ORM\Column(name="slotReason", type="string", length=255)
     */
    private $slotReason;
    /**
     * @var string
     *
     * @ORM\Column(name="returnStatus", type="string", length=255)
     */
    private $returnStatus;
    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="string", length=255)
     */
    private $cost=0;
     /**
     * @var string
     *
     * @ORM\Column(name="membership", type="string", length=255)
     */
    private $membership=0;
    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255)
     */
    private $version=0;
    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;
    /**
     * @var string
     *
     * @ORM\Column(name="totalTax", type="string", length=255)
     */
    private $totalTax;

    /**
     * @var string
     *
     * @ORM\Column(name="deliveryCharge", type="string", length=255)
     */
    private $deliveryCharge=0;

    /**
     * @var string
     *
     * @ORM\Column(name="promocode", type="string", length=255, nullable=true)
     */
    private $promocode;

    /**
     * @var string
     *
     * @ORM\Column(name="channel", type="string", length=255, nullable=true)
     */
    private $channel;
    /**
     * @var string
     *
     * @ORM\Column(name="totalDiscount", type="string", length=255)
     */
    private $totalDiscount=0;

    /**
     * @var string
     *
     * @ORM\Column(name="orderAmount", type="string", length=255)
     */
    private $orderAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="customerName", type="string", length=255)
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", nullable=true)
     */
    private $address;
    /**
     * @var string
     *
     * @ORM\Column(name="deliveryBoy", type="text", nullable=true)
     */
    private $deliveryBoy;
    /**
     * @var string
     *
     * @ORM\Column(name="landmark", type="text", nullable=true)
     */
    private $landmark;

    /**
     * @var string
     *
     * @ORM\Column(name="logitude", type="string", length=255, nullable=true)
     */
    private $logitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="orderType", type="string", length=255)
     */
    private $orderType;

    /**
     * @var string
     *
     * @ORM\Column(name="paymentType", type="string", length=255)
     */
    private $paymentType;

    /**
     * @var string
     *
     * @ORM\Column(name="paymentStatus", type="string", length=255)
     */
    private $paymentStatus;
        /**
     * @var string
     *
     * @ORM\Column(name="trayStatus", type="string", length=255)
     */
    private $trayStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="orderStatus", type="string", length=255)
     */
    private $orderStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="proccessTime", type="datetime",nullable=true)
     */
    private $proccessTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cancelTime", type="datetime",nullable=true)
     */
    private $cancelTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="readyTime", type="datetime",nullable=true)
     */
    private $readyTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dispatchTime", type="datetime",nullable=true)
     */
    private $dispatchTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="onwayTime", type="datetime",nullable=true)
     */
    private $onwayTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deliveryTime", type="datetime",nullable=true)
     */
    private $deliveryTime;
    /**
     * @var string
     *
     * @ORM\Column(name="loyalty", type="string", length=255)
     */
    private $loyalty=0; 
    /**
     * @var string
     *
     * @ORM\Column(name="wallet", type="string", length=255)
     */
    private $wallet=0; 
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="completeTime", type="datetime",nullable=true)
     */
    private $completeTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sortTime", type="datetime",nullable=true)
     */
    private $sortTime;

    /**
     * @var string
     *
     * @ORM\Column(name="restoAppFee", type="string", length=255)
     */
    private $restoAppFee;

    /**
     * @var string
     *
     * @ORM\Column(name="restPay", type="string", length=255)
     */
    private $restPay;

    /**
     * @var string
     *
     * @ORM\Column(name="fixtime", type="string", length=255)
     */
    private $fixtime;
    /**
     * @var string
     *
     * @ORM\Column(name="fixdate", type="string", length=255)
     */
    private $fixdate;
    /**
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="customerOrder")
     *@ORM\JoinColumn(name="customer_d", referencedColumnName="id")
     */
    private $customer;

    /**
     *@ORM\OneToMany(targetEntity="CustomerOrderItems", mappedBy="customerOrder", cascade={"persist","remove"})
     */
    private $customerOrderItems;

   /**
     * Set id
     *
     * @param string $id
     *
     * @return CustomerOrder
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
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
     * @return CustomerOrder
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Get slotReason
     *
     * @return string
     */
    public function getSlotReason()
    {
        return $this->slotReason;
    }
    /**
     * Set slotReason
     *
     * @param string $slotReason
     *
     * @return CustomerOrder
     */
    public function setSlotReason($slotReason)
    {
        $this->slotReason = $slotReason;

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
     * Get membership
     *
     * @return string
     */
    public function getMembership()
    {
        return $this->membership;
    }
    /**
     * Set membership
     *
     * @param string $membership
     *
     * @return CustomerOrder
     */
    public function setMembership($membership)
    {
        $this->membership = $membership;

        return $this;
    }
    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version
     *
     * @param string $version
     *
     * @return CustomerOrder
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }
    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return CustomerOrder
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->Cost;
    }
    /**
     * Set picker
     *
     * @param string $picker
     *
     * @return CustomerOrder
     */
    public function setPicker($picker)
    {
        $this->picker = $picker;

        return $this;
    }

    /**
     * Get picker
     *
     * @return string
     */
    public function getPicker()
    {
        return $this->picker;
    }
    /**
     * Set orderDate
     *
     * @param \DateTime $orderDate
     *
     * @return CustomerOrder
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }
   
   /**
     * Set returnStatus
     *
     * @param string $returnStatus
     *
     * @return CustomerOrder
     */
    public function setReturnStatus($returnStatus)
    {
        $this->returnStatus = $returnStatus;

        return $this;
    }

    /**
     * Get returnStatus
     *
     * @return string
     */
    public function getReturnStatus()
    {
        return $this->returnStatus;
    }
       /**
     * Set transactionId
     *
     * @param string $transactionId
     *
     * @return CustomerOrder
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * Get transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    /**
     * Set totalTax
     *
     * @param string $totalTax
     *
     * @return CustomerOrder
     */
    public function setTotalTax($totalTax)
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    /**
     * Get totalTax
     *
     * @return string
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }
    /**
     * Set tray
     *
     * @param string $tray
     *
     * @return CustomerOrder
     */
    public function setTray($tray)
    {
        $this->tray = $tray;

        return $this;
    }

    /**
     * Get tray
     *
     * @return string
     */
    public function getTray()
    {
        return $this->tray;
    }
     /**
     * Set note
     *
     * @param string $note
     *
     * @return CustomerOrder
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
     * Set area
     *
     * @param string $area
     *
     * @return CustomerOrder
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }
          /**
     * Set orderFrom
     *
     * @param string $orderFrom
     *
     * @return CustomerOrder
     */
    public function setOrderFrom($orderFrom)
    {
        $this->orderFrom = $orderFrom;
        return $this;
    }

    /**
     * Get orderFrom
     *
     * @return string
     */
    public function getOrderFrom()
    {
        return $this->orderFrom;
    }
 /**
     * Set deliveryBoy
     *
     * @param string $deliveryBoy
     *
     * @return CustomerOrder
     */
    public function setDeliveryBoy($deliveryBoy)
    {
        $this->deliveryBoy = $deliveryBoy;

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
     * Set totalDiscount
     *
     * @param string $totalDiscount
     *
     * @return CustomerOrder
     */
    public function setTotalDiscount($totalDiscount)
    {
        $this->totalDiscount = $totalDiscount;

        return $this;
    }

    /**
     * Get totalDiscount
     *
     * @return string
     */
    public function getTotalDiscount()
    {
        return $this->totalDiscount;
    }

    /**
     * Set orderAmount
     *
     * @param string $orderAmount
     *
     * @return CustomerOrder
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;

        return $this;
    }

    /**
     * Get orderAmount
     *
     * @return string
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return CustomerOrder
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
     * Set loyalty
     *
     * @param string $loyalty
     *
     * @return CustomerOrder
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
     * Set wallet
     *
     * @param string $wallet
     *
     * @return CustomerOrder
     */
    public function setWallet($wallet)
    {
        $this->wallet = $wallet;

        return $this;
    }

    /**
     * Get wallet
     *
     * @return string
     */
    public function getWallet()
    {
        return $this->wallet;
    }
    /**
     * Set logitude
     *
     * @param string $logitude
     *
     * @return CustomerOrder
     */
    public function setLogitude($logitude)
    {
        $this->logitude = $logitude;

        return $this;
    }

    /**
     * Get logitude
     *
     * @return string
     */
    public function getLogitude()
    {
        return $this->logitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return CustomerOrder
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

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
     * Set orderType
     *
     * @param string $orderType
     *
     * @return CustomerOrder
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * Get orderType
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     *
     * @return CustomerOrder
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set paymentStatus
     *
     * @param string $paymentStatus
     *
     * @return CustomerOrder
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * Get paymentStatus
     *
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }
        /**
     * Set trayStatus
     *
     * @param string $trayStatus
     *
     * @return CustomerOrder
     */
    public function setTrayStatus($trayStatus)
    {
        $this->trayStatus = $trayStatus;

        return $this;
    }

    /**
     * Get trayStatus
     *
     * @return string
     */
    public function getTrayStatus()
    {
        return $this->trayStatus;
    }

    /**
     * Set orderStatus
     *
     * @param string $orderStatus
     *
     * @return CustomerOrder
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     *
     * @return CustomerOrder
     */
    public function setCustomer(\AppBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->customerOrderItems = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add customerOrderItem
     *
     * @param \AppBundle\Entity\CustomerOrderItems $customerOrderItem
     *
     * @return CustomerOrder
     */
    public function addCustomerOrderItem(\AppBundle\Entity\CustomerOrderItems $customerOrderItem)
    {
        $this->customerOrderItems[] = $customerOrderItem;

        return $this;
    }

    /**
     * Remove customerOrderItem
     *
     * @param \AppBundle\Entity\CustomerOrderItems $customerOrderItem
     */
    public function removeCustomerOrderItem(\AppBundle\Entity\CustomerOrderItems $customerOrderItem)
    {
        $this->customerOrderItems->removeElement($customerOrderItem);
    }

    /**
     * Get customerOrderItems
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustomerOrderItems()
    {
        return $this->customerOrderItems;
    }

    /**
     * Set actualAmount
     *
     * @param string $actualAmount
     *
     * @return CustomerOrder
     */
    public function setActualAmount($actualAmount)
    {
        $this->actualAmount = $actualAmount;

        return $this;
    }

    /**
     * Get actualAmount
     *
     * @return string
     */
    public function getActualAmount()
    {
        return $this->actualAmount;
    }

    /**
     * Set customerName
     *
     * @param string $customerName
     *
     * @return CustomerOrder
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set landmark
     *
     * @param string $landmark
     *
     * @return CustomerOrder
     */
    public function setLandmark($landmark)
    {
        $this->landmark = $landmark;

        return $this;
    }

    /**
     * Get landmark
     *
     * @return string
     */
    public function getLandmark()
    {
        return $this->landmark;
    }

    /**
     * Set proccessTime
     *
     * @param \DateTime $proccessTime
     *
     * @return CustomerOrder
     */
    public function setProccessTime($proccessTime)
    {
        $this->proccessTime = $proccessTime;

        return $this;
    }

    /**
     * Get proccessTime
     *
     * @return \DateTime
     */
    public function getProccessTime()
    {
        return $this->proccessTime;
    }

    /**
     * Set cancelTime
     *
     * @param \DateTime $cancelTime
     *
     * @return CustomerOrder
     */
    public function setCancelTime($cancelTime)
    {
        $this->cancelTime = $cancelTime;

        return $this;
    }

    /**
     * Get cancelTime
     *
     * @return \DateTime
     */
    public function getCancelTime()
    {
        return $this->cancelTime;
    }

    /**
     * Set dispatchTime
     *
     * @param \DateTime $dispatchTime
     *
     * @return CustomerOrder
     */
    public function setDispatchTime($dispatchTime)
    {
        $this->dispatchTime = $dispatchTime;

        return $this;
    }

    /**
     * Get dispatchTime
     *
     * @return \DateTime
     */
    public function getDispatchTime()
    {
        return $this->dispatchTime;
    }

    /**
     * Set deliveryTime
     *
     * @param \DateTime $deliveryTime
     *
     * @return CustomerOrder
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;

        return $this;
    }

    /**
     * Get deliveryTime
     *
     * @return \DateTime
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * Set completeTime
     *
     * @param \DateTime $completeTime
     *
     * @return CustomerOrder
     */
    public function setCompleteTime($completeTime)
    {
        $this->completeTime = $completeTime;

        return $this;
    }

    /**
     * Get completeTime
     *
     * @return \DateTime
     */
    public function getCompleteTime()
    {
        return $this->completeTime;
    }

    /**
     * Set deliveryCharge
     *
     * @param string $deliveryCharge
     *
     * @return CustomerOrder
     */
    public function setDeliveryCharge($deliveryCharge)
    {
        $this->deliveryCharge = $deliveryCharge;

        return $this;
    }

    /**
     * Get deliveryCharge
     *
     * @return string
     */
    public function getDeliveryCharge()
    {
        return $this->deliveryCharge;
    }

    /**
     * Set readyTime
     *
     * @param \DateTime $readyTime
     *
     * @return CustomerOrder
     */
    public function setReadyTime($readyTime)
    {
        $this->readyTime = $readyTime;

        return $this;
    }

    /**
     * Get readyTime
     *
     * @return \DateTime
     */
    public function getReadyTime()
    {
        return $this->readyTime;
    }

    /**
     * Set sortTime
     *
     * @param \DateTime $sortTime
     *
     * @return CustomerOrder
     */
    public function setSortTime($sortTime)
    {
        $this->sortTime = $sortTime;

        return $this;
    }

    /**
     * Get sortTime
     *
     * @return \DateTime
     */
    public function getSortTime()
    {
        return $this->sortTime;
    }

    /**
     * Set onwayTime
     *
     * @param \DateTime $onwayTime
     *
     * @return CustomerOrder
     */
    public function setOnwayTime($onwayTime)
    {
        $this->onwayTime = $onwayTime;

        return $this;
    }

    /**
     * Get onwayTime
     *
     * @return \DateTime
     */
    public function getOnwayTime()
    {
        return $this->onwayTime;
    }

    /**
     * Set promocode
     *
     * @param string $promocode
     *
     * @return CustomerOrder
     */
    public function setPromocode($promocode)
    {
        $this->promocode = $promocode;
        return $this;
    }

    /**
     * Get promocode
     *
     * @return string
     */
    public function getPromocode()
    {
        return $this->promocode;
    }

    /**
     * Set restoAppFee
     *
     * @param string $restoAppFee
     *
     * @return CustomerOrder
     */
    public function setRestoAppFee($restoAppFee)
    {
        $this->restoAppFee = $restoAppFee;

        return $this;
    }

    /**
     * Get restoAppFee
     *
     * @return string
     */
    public function getRestoAppFee()
    {
        return $this->restoAppFee;
    }

    /**
     * Set restPay
     *
     * @param string $restPay
     *
     * @return CustomerOrder
     */
    public function setRestPay($restPay)
    {
        $this->restPay = $restPay;

        return $this;
    }

    /**
     * Get restPay
     *
     * @return string
     */
    public function getRestPay()
    {
        return $this->restPay;
    }

     /**
     * Set restPay
     *
     * @param string $restPay
     *
     * @return CustomerOrder
     */
    public function setFixtime($restPay)
    {
        $this->fixtime = $restPay;

        return $this;
    }

    /**
     * Get restPay
     *
     * @return string
     */
    public function getFixtime()
    {
        return $this->fixtime;
    }
    /**
     * Set fixdate
     *
     * @param string $fixdate
     *
     * @return CustomerOrder
     */
    public function setFixdate($fixdate)
    {
        $this->fixdate = $fixdate;

        return $this;
    }

    /**
     * Get fixdate
     *
     * @return string
     */
    public function getFixdate()
    {
        return $this->fixdate;
    }
    /**
     * Set channel
     *
     * @param string $channel
     *
     * @return CustomerOrder
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }
}
