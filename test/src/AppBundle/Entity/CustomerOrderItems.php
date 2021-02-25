<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerOrderItems
 *
 * @ORM\Table(name="customer_order_items")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CustomerOrderItemsRepository")
 */
class CustomerOrderItems
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
     * @ORM\Column(name="itemId", type="string", length=255)
     */
    private $itemId;

    /**
     * @var string
     *
     * @ORM\Column(name="itemName", type="string", length=255)
     */
    private $itemName;
    /**
     * @var string
     *
     * @ORM\Column(name="barcode", type="string", length=255)
     */
    private $barcode=0;
    /**
     * @var string
     *
     * @ORM\Column(name="isTray", type="string", length=255)
     */
    private $isTray;
        /**
     * @var string
     *
     * @ORM\Column(name="trayQty", type="string", length=255)
     */
    private $trayQty;
    /**
     * @var string
     *
     * @ORM\Column(name="return_time", type="string", length=255, nullable=true)
     */
    private $returnTime=0;
    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=255)
     */
    private $weight=0;
    /**
     * @var string
     *
     * @ORM\Column(name="priceVariavtion", type="string", length=255, nullable=true)
     */
    private $priceVariavtion;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;
    /**
     * @var string
     *
     * @ORM\Column(name="loyalty", type="string", length=255)
     */
    private $loyalty="0";
    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="string", length=255)
     */
    private $cost="0";
   /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=255)
     */
    private $sku;
   /**
     * @var string
     *
     * @ORM\Column(name="hsn", type="string", length=255)
     */
    private $hsn;
    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="string", length=255)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="actualAmount", type="string", length=255)
     */
    private $actualAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="extraAmount", type="string", length=255)
     */
    private $extraAmount=0;
    /**
     * @var string
     *
     * @ORM\Column(name="discountTotal", type="string", length=255, nullable=true)
     */
    private $discountTotal;
     /**
     * @var string
     *
     * @ORM\Column(name="discountPrice", type="string", length=255, nullable=true)
     */
    private $discountPrice;
    /**
     * @var string
     *
     * @ORM\Column(name="tax", type="string", length=255)
     */
    private $tax="0";

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="string", length=255)
     */
    private $discount="0";

    /**
     * @var string
     *
     * @ORM\Column(name="subTotal", type="string", length=255)
     */
    private $subTotal;
    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=255, nullable=true)
     */
    private $reason;
        /**
     * @var string
     *
     * @ORM\Column(name="edited", type="string", length=255)
     */
    private $edited=0;
    /**
     * @ORM\ManyToOne(targetEntity="CustomerOrder", inversedBy="customerOrderItems")
     *@ORM\JoinColumn(name="order_d", referencedColumnName="id")
     */
    private $customerOrder;

    /**
     *@ORM\OneToMany(targetEntity="OrderItemExtras", mappedBy="customerOrderItems", cascade={"persist","remove"})
     */
    private $orderItemExtras;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255)
     */
    private $brand;


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
     * Set weight
     *
     * @param string $weight
     *
     * @return CustomerOrderItems
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set barcode
     *
     * @param string $barcode
     *
     * @return CustomerOrderItems
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }
    /**
     * Get barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }
        /**
     * Set sku
     *
     * @param string $sku
     *
     * @return CustomerOrderItems
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

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
    /**
     * Set reason
     *
     * @param string $reason
     *
     * @return CustomerOrderItems
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
   /**
     * Set edited
     *
     * @param string $edited
     *
     * @return CustomerOrderItems
     */
    public function setEdited($edited)
    {
        $this->edited = $edited;

        return $this;
    }

    /**
     * Get edited
     *
     * @return string
     */
    public function getEdited()
    {
        return $this->edited;
    }

    /**
     * Get sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }
       /**
     * Set hsn
     *
     * @param string $hsn
     *
     * @return CustomerOrderItems
     */
    public function setHsn($hsn)
    {
        $this->hsn = $hsn;

        return $this;
    }

    /**
     * Get hsn
     *
     * @return string
     */
    public function getHsn()
    {
        return $this->hsn;
    }
    /**
     * Set returnTime
     *
     * @param string $returnTime
     *
     * @return CustomerOrderItems
     */
    public function setReturnTime($returnTime)
    {
        $this->returnTime = $returnTime;

        return $this;
    }

    /**
     * Get returnTime
     *
     * @return string
     */
    public function getReturnTime()
    {
        return $this->returnTime;
    }
     /**
     * Set cost
     *
     * @param string $cost
     *
     * @return CustomerOrderItems
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
        return $this->cost;
    }
     /**
     * Set loyalty
     *
     * @param string $loyalty
     *
     * @return CustomerOrderItems
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
     * Set itemId
     *
     * @param string $itemId
     *
     * @return CustomerOrderItems
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

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
     * Set isTray
     *
     * @param string $isTray
     *
     * @return CustomerOrderItems
     */
    public function setIsTray($isTray)
    {
        $this->isTray = $isTray;

        return $this;
    }

    /**
     * Get trayQty
     *
     * @return string
     */
    public function getTrayQty()
    {
        return $this->trayQty;
    }
       /**
     * Set trayQty
     *
     * @param string $trayQty
     *
     * @return CustomerOrderItems
     */
    public function setTrayQty($trayQty)
    {
        $this->trayQty = $trayQty;

        return $this;
    }

    /**
     * Get isTray
     *
     * @return string
     */
    public function getIsTray()
    {
        return $this->isTray;
    }
    /**
     * Set itemName
     *
     * @param string $itemName
     *
     * @return CustomerOrderItems
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

    /**
     * Get itemName
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Set priceVariavtion
     *
     * @param string $priceVariavtion
     *
     * @return CustomerOrderItems
     */
    public function setPriceVariavtion($priceVariavtion)
    {
        $this->priceVariavtion = $priceVariavtion;

        return $this;
    }

    /**
     * Get priceVariavtion
     *
     * @return string
     */
    public function getPriceVariavtion()
    {
        return $this->priceVariavtion;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return CustomerOrderItems
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     *
     * @return CustomerOrderItems
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

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
     * Set tax
     *
     * @param string $tax
     *
     * @return CustomerOrderItems
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax
     *
     * @return string
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set discount
     *
     * @param string $discount
     *
     * @return CustomerOrderItems
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }
    /**
     * Set discountTotal
     *
     * @param string $discountTotal
     *
     * @return CustomerOrderItems
     */
    public function setDiscountTotal($discountTotal)
    {
        $this->discountTotal = $discountTotal;

        return $this;
    }

    /**
     * Get discountTotal
     *
     * @return string
     */
    public function getDiscountTotal()
    {
        return $this->discountTotal;
    }
        /**
     * Set discountPrice
     *
     * @param string $discountPrice
     *
     * @return CustomerOrderItems
     */
    public function setDiscountPrice($discountPrice)
    {
        $this->discountPrice = $discountPrice;

        return $this;
    }

    /**
     * Get discountPrice
     *
     * @return string
     */
    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }
    /**
     * Set subTotal
     *
     * @param string $subTotal
     *
     * @return CustomerOrderItems
     */
    public function setSubTotal($subTotal)
    {
        $this->subTotal = $subTotal;

        return $this;
    }

    /**
     * Get subTotal
     *
     * @return string
     */
    public function getSubTotal()
    {
        return $this->subTotal;
    }

    /**
     * Set customerOrder
     *
     * @param \AppBundle\Entity\CustomerOrder $customerOrder
     *
     * @return CustomerOrderItems
     */
    public function setCustomerOrder(\AppBundle\Entity\CustomerOrder $customerOrder = null)
    {
        $this->customerOrder = $customerOrder;

        return $this;
    }

    /**
     * Get customerOrder
     *
     * @return \AppBundle\Entity\CustomerOrder
     */
    public function getCustomerOrder()
    {
        return $this->customerOrder;
    }

    /**
     * Set actualAmount
     *
     * @param string $actualAmount
     *
     * @return CustomerOrderItems
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
     * Constructor
     */
    public function __construct()
    {
        $this->orderItemExtras = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add orderItemExtra
     *
     * @param \AppBundle\Entity\OrderItemExtras $orderItemExtra
     *
     * @return CustomerOrderItems
     */
    public function addOrderItemExtra(\AppBundle\Entity\OrderItemExtras $orderItemExtra)
    {
        $this->orderItemExtras[] = $orderItemExtra;

        return $this;
    }

    /**
     * Remove orderItemExtra
     *
     * @param \AppBundle\Entity\OrderItemExtras $orderItemExtra
     */
    public function removeOrderItemExtra(\AppBundle\Entity\OrderItemExtras $orderItemExtra)
    {
        $this->orderItemExtras->removeElement($orderItemExtra);
    }

    /**
     * Get orderItemExtras
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrderItemExtras()
    {
        return $this->orderItemExtras;
    }

    /**
     * Set extraAmount
     *
     * @param string $extraAmount
     *
     * @return CustomerOrderItems
     */
    public function setExtraAmount($extraAmount)
    {
        $this->extraAmount = $extraAmount;

        return $this;
    }

    /**
     * Get extraAmount
     *
     * @return string
     */
    public function getExtraAmount()
    {
        return $this->extraAmount;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return CustomerOrderItems
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }
}
