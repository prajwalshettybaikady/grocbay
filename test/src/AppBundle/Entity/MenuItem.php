<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

/**
 * MenuItem
 *
 * @ORM\Table(name="menu_item")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MenuItemRepository")
 */
class MenuItem
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
     * @ORM\Column(name="itemName", type="string", length=255)
     */
    private $itemName;

    /**
     * @var string
     *
     * @ORM\Column(name="nested", type="string", length=255,nullable=true)
     */
    private $nested;
        /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=255)
     */
    private $branch;
    /**
     * @var string
     *
     * @ORM\Column(name="priority", type="string", nullable=true)
     */
    private $itemPriority=0;
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255,nullable=true)
     */
    private $type='0';
    /**
     * @var string
     *
     * @ORM\Column(name="delivery", type="string", length=255,nullable=true)
     */
    private $delivery='slot';
    /**
     * @var string
     *
     * @ORM\Column(name="maxItem", type="string", length=255)
     */

        private $maxItem;

    /**
     * @var string
     *
     * @ORM\Column(name="totalQty", type="string", length=255)
     */

        private $totalQty;

    /**
     * @var string
     *
     * @ORM\Column(name="itemSlug", type="string", length=255)
     */


    private $itemSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="vegType", type="string", length=255)
     */
    private $vegType="veg";
    

    /**
     * @var string
     *
     * @ORM\Column(name="itemShortDescription", type="text", nullable=true)
     */
    private $itemShortDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="itemDescription", type="text", nullable=true)
     */
    private $itemDescription;
        /**
     * @var string
     *
     * @ORM\Column(name="brand", type="text", nullable=true)
     */
    private $brand=49;


    /**
     * @var string
     *
     * @ORM\Column(name="itemFeaturedImage", type="string", length=255, unique=true, nullable=true )
     */
    private $itemFeaturedImage;

    /**
     * @Assert\Image()
     * @Assert\File(maxSize="6000000")
     */
    private $itemFeaturedImageFile;

    /**
     * @var string
     *
     * @ORM\Column(name="regularPrice", type="float")
     */
    private $regularPrice=0.0;

    /**
     * @var string
     *
     * @ORM\Column(name="salePrice", type="float")
     */
    private $salePrice=0.0;

    /**
     * @var string
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive=true;
    /**
     * @var string
     *
     * @ORM\Column(name="isSubscription", type="boolean")
     */
    private $isSubscription=true;
    /**
     * @var string
     *
     * @ORM\Column(name="salesTax", type="float")
     */
    private $salesTax=18.0;

    /**
     *@ORM\OneToMany(targetEntity="PriceVariation", mappedBy="menuItem", cascade={"persist","remove"})
     */
    private $priceVariation;
    /**
     * @var string
     *
     * @ORM\Column(name="alert", type="string", length=255, unique=true, nullable=true )
     */
    private $alert;
    /**
     * @var string
     *
     * @ORM\Column(name="duration", type="string", length=255, unique=true, nullable=true )
     */
    private $duration=0;
  /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255, unique=true, nullable=true )
     */
    private $category;

    /**
     *@ORM\OneToMany(targetEntity="ExtraPackage", mappedBy="menuItem", cascade={"persist","remove"})
     */
    private $extraPackage;


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
     * Set itemName
     *
     * @param string $itemName
     *
     * @return MenuItem
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

        /**
     * Set branch
     *
     * @param string $branch
     *
     * @return MenuItem
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
     * Get itemPriority
     *
     * @return string
     */
    public function getItemPriority()
    {
        return $this->itemPriority;
    }

    /**
     * Set itemPriority
     *
     * @param string $itemPriority
     *
     * @return MenuItem
     */
    public function setItemPriority($itemPriority)
    {
        $this->itemPriority = $itemPriority;

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
    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return MenuItem
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

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
     * @return MenuItem
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
    /**
     * Get delivery
     *
     * @return string
     */
    public function getDelivery()
    {
        return $this->delivery;
    }
    /**
     * Set delivery
     *
     * @param string $delivery
     *
     * @return MenuItem
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }
        /**
     * Get nested
     *
     * @return string
     */
    public function getNested()
    {
        return $this->nested;
    }
    /**
     * Set nested
     *
     * @param string $nested
     *
     * @return MenuItem
     */
    public function setNested($nested)
    {
        $this->nested = $nested;

        return $this;
    }
    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }
    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return MenuItem
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }
    /**
     * Get alert
     *
     * @return string
     */
    public function getAlert()
    {
        return $this->alert;
    }
    /**
     * Set alert
     *
     * @param string $alert
     *
     * @return MenuItem
     */
    public function setAlert($alert)
    {
        $this->alert = $alert;

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
     * Set itemSlug
     *
     * @param string $itemSlug
     *
     * @return MenuItem
     */
    public function setItemSlug($itemSlug)
    {
        $this->itemSlug = $itemSlug;

        return $this;
    }

    /**
     * Get itemSlug
     *
     * @return string
     */
    public function getItemSlug()
    {
        return $this->itemSlug;
    }

    /**
     * Set maxItem
     *
     * @param string $maxItem
     *
     * @return MenuItem
     */
    public function setMaxItem($maxItem)
    {
        $this->maxItem = $maxItem;

        return $this;
    }

    /**
     * Get maxItem
     *
     * @return string
     */
    public function getMaxItem()
    {
        return $this->maxItem;
    }


    /**
     * Set totalQty
     *
     * @param string $totalQty
     *
     * @return MenuItem
     */
    public function setTotalQty($totalQty)
    {
        $this->totalQty = $totalQty;

        return $this;
    }

    /**
     * Get totalQty
     *
     * @return string
     */
    public function getTotalQty()
    {
        return $this->totalQty;
    }






    /**
     * Set itemShortDescription
     *
     * @param string $itemShortDescription
     *
     * @return MenuItem
     */
    public function setItemShortDescription($itemShortDescription)
    {
        $this->itemShortDescription = $itemShortDescription;

        return $this;
    }

    /**
     * Get itemShortDescription
     *
     * @return string
     */
    public function getItemShortDescription()
    {
        return $this->itemShortDescription;
    }

    /**
     * Set itemDescription
     *
     * @param string $itemDescription
     *
     * @return MenuItem
     */
    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;

        return $this;
    }

    /**
     * Get itemDescription
     *
     * @return string
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    /**
     * Set regularPrice
     *
     * @param string $regularPrice
     *
     * @return MenuItem
     */
    public function setRegularPrice($regularPrice)
    {
        $this->regularPrice = $regularPrice;

        return $this;
    }

    /**
     * Get regularPrice
     *
     * @return string
     */
    public function getRegularPrice()
    {
        return $this->regularPrice;
    }

    /**
     * Set salePrice
     *
     * @param string $salePrice
     *
     * @return MenuItem
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * Get salePrice
     *
     * @return string
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * Set salesTax
     *
     * @param float $salesTax
     *
     * @return MenuItem
     */
    public function setSalesTax($salesTax)
    {
        $this->salesTax = $salesTax;

        return $this;
    }

    /**
     * Get salesTax
     *
     * @return float
     */
    public function getSalesTax()
    {
        return $this->salesTax;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory siteLogo where uploaded
        // documents should be saved
        return __DIR__.'/../../../uploads/items/';
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setItemFeaturedImageFile(UploadedFile $file)
    {
        $this->itemFeaturedImageFile = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getItemFeaturedImageFile()
    {
        return $this->itemFeaturedImageFile;
    }

    public function setItemFeaturedImage($itemFeaturedImage){
        $this->itemFeaturedImage=$itemFeaturedImage;
        return $this;
    }

    public function getItemFeaturedImage()
    {
        return $this->itemFeaturedImage;
    }

    public function preFeaturedImageUpload()
    {
        if (null !== $this->itemFeaturedImageFile) {
            // do whatever you want to generate a unique name
            $this->itemFeaturedImage = mt_rand(111111,999999).'.'.$this->itemFeaturedImageFile->guessExtension();
        }
    }
    

    protected function getFeaturedImageUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return $this->getUploadRootDir()."images/";
    }


    public function iconUpload()
    {
        $this->preFeaturedImageUpload();
        // the file property can be empty if the field is not required
        if (null === $this->getItemFeaturedImageFile()) {
            return;
        }
        $temp1=$this->getItemFeaturedImageFile();
        
        
       // $this->siteLogo = uniqid().'.'.$this->file->guessExtension();
        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        
        
        $temp1->move(
            $this->getFeaturedImageUploadDir(),
            $this->itemFeaturedImage//getFile()->getClientOriginalName()
        );
        
        // clean up the file property as you won't need it anymore
        $this->itemFeaturedImageFile = null;

        unset($this->itemFeaturedImageFile);
    }


    public function getAbsoluteItemFeaturedImagePath()
    {
        return null === $this->itemFeaturedImage
            ? null
            : $this->getFeaturedImageUploadDir().'/'.$this->itemFeaturedImage;
    }

    public function removeFeaturedImageUpload()
    {
        if($this->itemFeaturedImage!="default.png" || $this->itemFeaturedImage!=null)
            if ($file = $this->getAbsoluteItemFeaturedImagePath()) {
                unlink($file);
            }
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return MenuItem
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
     /**
     * Set isSubscription
     *
     * @param boolean $isSubscription
     *
     * @return MenuItem
     */
    public function setIsSubscription($isSubscription)
    {
        $this->isSubscription = $isSubscription;

        return $this;
    }

    /**
     * Get isSubscription
     *
     * @return boolean
     */
    public function getIsSubscription()
    {
        return $this->isSubscription;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->priceVariation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add priceVariation
     *
     * @param \AppBundle\Entity\PriceVariation $priceVariation
     *
     * @return MenuItem
     */
    public function addPriceVariation(\AppBundle\Entity\PriceVariation $priceVariation)
    {
        $priceVariation->setMenuItem($this);
        $this->priceVariation[] = $priceVariation;

        return $this;
    }

    /**
     * Remove priceVariation
     *
     * @param \AppBundle\Entity\PriceVariation $priceVariation
     */
    public function removePriceVariation(\AppBundle\Entity\PriceVariation $priceVariation)
    {
        $this->priceVariation->removeElement($priceVariation);
    }

    /**
     * Get priceVariation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPriceVariation()
    {
        return $this->priceVariation;
    }

     /**
     * Set category
     *
     * @param string $category
     *
     * @return MenuItem
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add extraPackage
     *
     * @param \AppBundle\Entity\ExtraPackage $extraPackage
     *
     * @return MenuItem
     */
    public function addExtraPackage(\AppBundle\Entity\ExtraPackage $extraPackage)
    {
        $this->extraPackage[] = $extraPackage;

        return $this;
    }

    /**
     * Remove extraPackage
     *
     * @param \AppBundle\Entity\ExtraPackage $extraPackage
     */
    public function removeExtraPackage(\AppBundle\Entity\ExtraPackage $extraPackage)
    {
        $this->extraPackage->removeElement($extraPackage);
    }

    /**
     * Get extraPackage
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExtraPackage()
    {
        return $this->extraPackage;
    }

    /**
     * Set vegType
     *
     * @param string $vegType
     *
     * @return MenuItem
     */
    public function setVegType($vegType)
    {
        $this->vegType = $vegType;

        return $this;
    }

    /**
     * Get vegType
     *
     * @return string
     */
    public function getVegType()
    {
        return $this->vegType;
    }
}
