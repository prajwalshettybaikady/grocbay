<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PriceVariation
 *
 * @ORM\Table(name="price_variation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PriceVariationRepository")
 */
class PriceVariation
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
     * @var int
     *
     * @ORM\Column(name="status", type="integer", length=100)
     */
    private $status=0;

    /**
     * @var string
     *
     * @ORM\Column(name="variationName", type="string", length=255)
     */
    private $variationName;
        /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=255, nullable=true)
     */
    private $sku;
        /**
     * @var string
     *
     * @ORM\Column(name="hsn", type="string", length=255, nullable=true)
     */
    private $hsn;
        /**
     * @var string
     *
     * @ORM\Column(name="barcode", type="string", length=255, nullable=true)
     */
    private $barcode;
        /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=255)
     */
    private $weight="0";
        /**
     * @var string
     *
     * @ORM\Column(name="cost", type="string", length=255)
     */
    private $cost="0";
    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

        /**
     * @var float
     *
     * @ORM\Column(name="membership_price", type="float", nullable=true)
     */
    private $membershipPrice=0;

        /**
     * @var string
     *
     * @ORM\Column(name="mrp", type="string")
     */
    private $mrp;
            /**
     * @var string
     *
     * @ORM\Column(name="subscription", type="string")
     */
    private $subscription=0;
        /**
     * @var string
     *
     * @ORM\Column(name="stock", type="string")
     */
    private $stock;


    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer", nullable=true)
     */
    private $priority=0;
        /**
     * @var string
     *
     * @ORM\Column(name="maxItem", type="string")
     */
    private $maxItem;
        /**
     * @var string
     *
     * @ORM\Column(name="minItem", type="string")
     */
    private $minItem;


    /**
     *@ORM\ManyToOne(targetEntity="MenuItem", inversedBy="priceVariation", cascade={"persist"})
     *@ORM\JoinColumn(name="menu_item_id", referencedColumnName="id")
     */
    private $menuItem;


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
     * Set sku
     *
     * @param string $sku
     *
     * @return PriceVariation
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getSku()
    {
        return $this->cost;
    }
    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return PriceVariation
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
     * Set hsn
     *
     * @param string $hsn
     *
     * @return PriceVariation
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
     * Set variationName
     *
     * @param string $variationName
     *
     * @return PriceVariation
     */
    public function setVariationName($variationName)
    {
        $this->variationName = $variationName;

        return $this;
    }

    /**
     * Get variationName
     *
     * @return string
     */
    public function getVariationName()
    {
        return $this->variationName;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return PriceVariation
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
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
     * Set weight
     *
     * @param string $weight
     *
     * @return PriceVariation
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
    /**
     * Set barcode
     *
     * @param float $barcode
     *
     * @return PriceVariation
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode
     *
     * @return float
     */
    public function getBarcode()
    {
        return $this->barcode;
    }
    /**
     * Set membershipPrice
     *
     * @param float $membershipPrice
     *
     * @return PriceVariation
     */
    public function setMembershipPrice($membershipPrice)
    {
        $this->membershipPrice = $membershipPrice;

        return $this;
    }

    /**
     * Get membershipPrice
     *
     * @return float
     */
    public function getMembershipPrice()
    {
        return $this->membershipPrice;
    }
 /**
     * Set maxItem
     *
     * @param string $maxItem
     *
     * @return PriceVariation
     */
    public function setMaxItem($maxItem)
    {
        $this->maxItem = $maxItem;
        return $this;
    }

    /**
     * Get maxItem
     *
     * @return float
     */
    public function getMaxItem()
    {
        return $this->maxItem;
    }

     /**
     * Set subscription
     *
     * @param string $subscription
     *
     * @return PriceVariation
     */
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * Get subscription
     *
     * @return float
     */
    public function getSubscription()
    {
        return $this->subscription;
    }
/**
     * Set minItem
     *
     * @param string $minItem
     *
     * @return PriceVariation
     */
    public function setMinItem($minItem)
    {
        $this->minItem = $minItem;

        return $this;
    }

    /**
     * Get maxItem
     *
     * @return float
     */
    public function getMinItem()
    {
        return $this->minItem;
    }
 /**
     * Set status
     *
     * @param int $status
     *
     * @return PriceVariation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

        /**
     * Set mrp
     *
     * @param string $mrp
     *
     * @return PriceVariation
     */
    public function setMrp($mrp)
    {
        $this->mrp = $mrp;

        return $this;
    }

    /**
     * Get mrp
     *
     * @return string
     */
    public function getMrp()
    {
        return $this->mrp;
    }

     /**
     * Set mrp
     *
     * @param string $stock
     *
     * @return PriceVariation
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return string
     */
    public function getStock()
    {
        return $this->stock;
    }


    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return PriceVariation
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set menuItem
     *
     * @param \AppBundle\Entity\MenuItem $menuItem
     *
     * @return PriceVariation
     */
    public function setMenuItem(\AppBundle\Entity\MenuItem $menuItem = null)
    {
        $this->menuItem = $menuItem;

        return $this;
    }

    /**
     * Get menuItem
     *
     * @return \AppBundle\Entity\MenuItem
     */
    public function getMenuItem()
    {
        return $this->menuItem;
    }
}
