<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promocode
 *
 * @ORM\Table(name="promocode")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PromocodeRepository")
 */
class Promocode
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="AppBundle\Doctrine\RandomIdGenerator")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="promoCode", type="string", length=255)
     */
    private $promoCode;
    /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=255)
     */
    private $branch;
    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="string", length=255)
     */
    private $quantity=1;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime")
     */
    private $endDate;


    /**
     * @var string
     *
     * @ORM\Column(name="discountType", type="string", length=255)
     */
    private $discountType="amount";
     /**
     * @var string
     *
     * @ORM\Column(name="items", type="string", length=255)
     */
    private $items;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="boolean")
     */
    private $type=true;
        /**
     * @var string
     *
     * @ORM\Column(name="max_discount", type="string", length=255)
     */
    private $maxDiscount=100;
            /**
     * @var string
     *
     * @ORM\Column(name="max_discount_amount", type="string", length=255)
     */
    private $maxDiscountAmount=1000;
    
    /**
     * @var float
     *
     * @ORM\Column(name="discountValue", type="float")
     */
    private $discountValue=0.0;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive=true;

    /**
     * @var string
     *
     * @ORM\Column(name="usageType", type="string", length=255)
     */
    private $usageType="limited";

    /**
     * @var int
     *
     * @ORM\Column(name="usageLimit", type="integer")
     */
    private $usageLimit=1;

    /**
     * @var string
     *
     * @ORM\Column(name="promocodeType", type="string", length=255)
     */
    private $promocodeType="amountBased";
        /**
     * @var string
     *
     * @ORM\Column(name="promocodeFor", type="string", length=255)
     */
    private $promocodeFor="4";

    /**
     * @var float
     *
     * @ORM\Column(name="minOrderAmountValidation", type="boolean")
     */
    private $minOrderAmountValidation=true;

    /**
     * @var float
     *
     * @ORM\Column(name="newUsersOnly", type="boolean")
     */
    private $newUsersOnly=false;

    /**
     * @var float
     *
     * @ORM\Column(name="minOrderAmount", type="float")
     */
    private $minOrderAmount=0.0;

    /**
     * @var string
     *
     * @ORM\Column(name="sponser", type="string", length=255)
     */
    private $sponser="admin";

    /**
     *
     * @ORM\ManyToMany(targetEntity="Customer", inversedBy="promocode")
     * @ORM\JoinTable(
     *  name="customer_with_promocode",
     *  joinColumns={
     *      @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="promocode_id", referencedColumnName="id")
     *  }
     * )
     */
    private $applicableCustomer;

    /**
     *@ORM\OneToMany(targetEntity="PromoUsage", mappedBy="promocode", cascade={"persist","remove"})
     */
    private $promoUsage;


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
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Promocode
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

        /**
     * Set branch
     *
     * @param string $branch
     *
     * @return Promocode
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
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Promocode
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set discountType
     *
     * @param string $discountType
     *
     * @return Promocode
     */
    public function setDiscountType($discountType)
    {
        $this->discountType = $discountType;

        return $this;
    }

    /**
     * Get discountType
     *
     * @return string
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * Set discountValue
     *
     * @param float $discountValue
     *
     * @return Promocode
     */
    public function setDiscountValue($discountValue)
    {
        $this->discountValue = $discountValue;

        return $this;
    }

    /**
     * Get discountValue
     *
     * @return float
     */
    public function getDiscountValue()
    {
        return $this->discountValue;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Promocode
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return Promocode
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }
     /**
     * Set maxDiscount
     *
     * @param string $maxDiscount
     *
     * @return Promocode
     */
    public function setMaxDiscount($maxDiscount)
    {
        $this->maxDiscount = $maxDiscount;

        return $this;
    }

    /**
     * Get maxDiscountAmount
     *
     * @return string
     */
    public function getMaxDiscountAmount()
    {
        return $this->maxDiscountAmount;
    }
         /**
     * Set maxDiscountAmount
     *
     * @param string $maxDiscountAmount
     *
     * @return Promocode
     */
    public function setMaxDiscountAmount($maxDiscountAmount)
    {
        $this->maxDiscountAmount = $maxDiscountAmount;

        return $this;
    }

    /**
     * Get maxDiscount
     *
     * @return string
     */
    public function getMaxDiscount()
    {
        return $this->maxDiscount;
    }
    /**
     * Set usageType
     *
     * @param string $usageType
     *
     * @return Promocode
     */
    public function setUsageType($usageType)
    {
        $this->usageType = $usageType;

        return $this;
    }

    /**
     * Get usageType
     *
     * @return string
     */
    public function getUsageType()
    {
        return $this->usageType;
    }

    /**
     * Set usageLimit
     *
     * @param integer $usageLimit
     *
     * @return Promocode
     */
    public function setUsageLimit($usageLimit)
    {
        $this->usageLimit = $usageLimit;

        return $this;
    }

    /**
     * Get usageLimit
     *
     * @return int
     */
    public function getUsageLimit()
    {
        return $this->usageLimit;
    }

    /**
     * Set promocodeType
     *
     * @param string $promocodeType
     *
     * @return Promocode
     */
    public function setPromocodeType($promocodeType)
    {
        $this->promocodeType = $promocodeType;

        return $this;
    }

    /**
     * Get promocodeFor
     *
     * @return string
     */
    public function getPromocodeFor()
    {
        return $this->promocodeFor;
    }
    /**
     * Set promocodeFor
     *
     * @param string $promocodeFor
     *
     * @return Promocode
     */
    public function setPromocodeFor($promocodeFor)
    {
        $this->promocodeFor = $promocodeFor;

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
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Promocode
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
    /**
     * Get promocodeType
     *
     * @return string
     */
    public function getPromocodeType()
    {
        return $this->promocodeType;
    }
    /**
     * Set minOrderAmount
     *
     * @param float $minOrderAmount
     *
     * @return Promocode
     */
    public function setMinOrderAmount($minOrderAmount)
    {
        $this->minOrderAmount = $minOrderAmount;

        return $this;
    }

    /**
     * Get minOrderAmount
     *
     * @return float
     */
    public function getMinOrderAmount()
    {
        return $this->minOrderAmount;
    }

    /**
     * Set sponser
     *
     * @param string $sponser
     *
     * @return Promocode
     */
    public function setSponser($sponser)
    {
        $this->sponser = $sponser;

        return $this;
    }

    /**
     * Get sponser
     *
     * @return string
     */
    public function getSponser()
    {
        return $this->sponser;
    }
    /**
     * Set items
     *
     * @param string $items
     *
     * @return Promocode
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get items
     *
     * @return string
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->applicableCustomer = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add applicableCustomer
     *
     * @param \AppBundle\Entity\Customer $applicableCustomer
     *
     * @return Promocode
     */
    public function addApplicableCustomer(\AppBundle\Entity\Customer $applicableCustomer)
    {
        $this->applicableCustomer[] = $applicableCustomer;

        return $this;
    }

    /**
     * Remove applicableCustomer
     *
     * @param \AppBundle\Entity\Customer $applicableCustomer
     */
    public function removeApplicableCustomer(\AppBundle\Entity\Customer $applicableCustomer)
    {
        $this->applicableCustomer->removeElement($applicableCustomer);
    }

    /**
     * Get applicableCustomer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApplicableCustomer()
    {
        return $this->applicableCustomer;
    }

    /**
     * Set minOrderAmountValidation
     *
     * @param boolean $minOrderAmountValidation
     *
     * @return Promocode
     */
    public function setMinOrderAmountValidation($minOrderAmountValidation)
    {
        $this->minOrderAmountValidation = $minOrderAmountValidation;

        return $this;
    }

    /**
     * Get minOrderAmountValidation
     *
     * @return boolean
     */
    public function getMinOrderAmountValidation()
    {
        return $this->minOrderAmountValidation;
    }

    /**
     * Set promoCode
     *
     * @param string $promoCode
     *
     * @return Promocode
     */
    public function setPromoCode($promoCode)
    {
        $this->promoCode = $promoCode;

        return $this;
    }

    /**
     * Get promoCode
     *
     * @return string
     */
    public function getPromoCode()
    {
        return $this->promoCode;
    }

    /**
     * Set newUsersOnly
     *
     * @param boolean $newUsersOnly
     *
     * @return Promocode
     */
    public function setNewUsersOnly($newUsersOnly)
    {
        $this->newUsersOnly = $newUsersOnly;

        return $this;
    }

    /**
     * Get newUsersOnly
     *
     * @return boolean
     */
    public function getNewUsersOnly()
    {
        return $this->newUsersOnly;
    }

    /**
     * Add promoUsage
     *
     * @param \AppBundle\Entity\PromoUsage $promoUsage
     *
     * @return Promocode
     */
    public function addPromoUsage(\AppBundle\Entity\PromoUsage $promoUsage)
    {
        $this->promoUsage[] = $promoUsage;

        return $this;
    }

    /**
     * Remove promoUsage
     *
     * @param \AppBundle\Entity\PromoUsage $promoUsage
     */
    public function removePromoUsage(\AppBundle\Entity\PromoUsage $promoUsage)
    {
        $this->promoUsage->removeElement($promoUsage);
    }

    /**
     * Get promoUsage
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPromoUsage()
    {
        return $this->promoUsage;
    }
}
