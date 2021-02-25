<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Restaurants
 *
 * @ORM\Table(name="restaurants")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RestaurantsRepository")
 */
class Restaurants
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
     * @ORM\Column(name="restaurantName", type="string", length=255, unique=true)
     */
    private $restaurantName;

    /**
     * @var string
     *
     * @ORM\Column(name="minimum_order_amount", type="string", length=255, nullable=true)
     */
    private $minimumOrderAmount=0;

    /**
     * @var string
     *
     * @ORM\Column(name="nested", type="boolean")
     */
    private $nested=true;
    /**
     * @var string
     *
     * @ORM\Column(name="restaurantSlug", type="string", length=255, unique=true)
     */
    private $restaurantSlug;
    /**
     * @var string
     *
     * @ORM\Column(name="privacy", type="string", length=6000, unique=true)
     */
    private $privacy;
        /**
     * @var string
     *
     * @ORM\Column(name="returns", type="string", length=6000, unique=true)
     */
    private $returns;
        /**
     * @var string
     *
     * @ORM\Column(name="refund", type="string", length=6000, unique=true)
     */
    private $refund;
        /**
     * @var string
     *
     * @ORM\Column(name="wallet", type="string", length=6000, unique=true)
     */
    private $wallet;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurantAddress", type="text", nullable=true)
     */
    private $restaurantAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurantLocation", type="text", nullable=true)
     */
    private $restaurantLocation="-";

    /**
     * @var string
     *
     * @ORM\Column(name="restaurantLat", type="string", length=255, nullable=true)
     */
    private $restaurantLat;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurantLong", type="string", length=255, nullable=true)
     */
    private $restaurantLong;
    /**
     * @var string
     *
     * @ORM\Column(name="countryCode", type="string", length=255, nullable=true)
     */
    private $countryCode="+91";
        /**
     * @var string
     *
     * @ORM\Column(name="currencyFormat", type="string", length=255, nullable=true)
     */
    private $currencyFormat="Rs";

            /**
     * @var string
     *
     * @ORM\Column(name="dashboardColor", type="string", length=255, nullable=true)
     */
    private $dashboardColor;
    /**
     * @var string
     *
     * @ORM\Column(name="slot", type="string", length=255, nullable=true)
     */
    private $slot;
    /**
     * @var string
     *
     * @ORM\Column(name="featured", type="string", length=255, nullable=true)
     */
    private $featured;
    /**
     * @var string
     *
     * @ORM\Column(name="category_label", type="string", length=255, nullable=true)
     */
    private $category_label;
    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255, nullable=true)
     */
    private $category;
    /**
     * @var string
     *
     * @ORM\Column(name="category_two_label", type="string", length=255, nullable=true)
     */
    private $category_two_label;
    /**
     * @var string
     *
     * @ORM\Column(name="category_two", type="string", length=255, nullable=true)
     */
    private $category_two;
    /**
     * @var string
     *
     * @ORM\Column(name="category_three", type="string", length=255, nullable=true)
     */
    private $category_three;
    /**
     * @var string
     *
     * @ORM\Column(name="category_three_label", type="string", length=255, nullable=true)
     */
    private $category_three_label;
    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="string", length=255, nullable=true)
     */
    private $discount;
     /**
     * @var string
     *
     * @ORM\Column(name="firebase", type="string", length=255, nullable=true)
     */
    private $firebase;
    /**
     * @var string
     *
     * @ORM\Column(name="sms", type="string", length=255, nullable=true)
     */
    private $sms;
        /**
     * @var string
     *
     * @ORM\Column(name="apiKey", type="string", length=255, nullable=true)
     */
    private $apiKey;
    /**
     * @var string
     *
     * @ORM\Column(name="primaryMobile", type="string", length=255, unique=true)
     */
    private $primaryMobile;
    /**
     * @var string
     *
     * @ORM\Column(name="featured_label", type="string", length=255, unique=true)
     */
    private $featured_label;
        /**
     * @var string
     *
     * @ORM\Column(name="discount_label", type="string", length=255, unique=true)
     */
    private $discount_label;
    /**
     * @var string
     *
     * @ORM\Column(name="secondaryMobile", type="string", length=255, nullable=true)
     */
    private $secondaryMobile;

    /**
     * @var string
     *
     * @ORM\Column(name="primaryEmail", type="string", length=255, unique=true)
     */
    private $primaryEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="secondaryEmail", type="string", length=255, nullable=true)
     */
    private $secondaryEmail;
    /**
     * @var string
     *
     * @ORM\Column(name="gst", type="string", length=255)
     */
    private $gst;  
    /**
     * @var string
     *
     * @ORM\Column(name="vegType", type="string", length=255)
     */
    private $vegType="veg";

    /**
     * @var string
     *
     * @ORM\Column(name="openTime", type="time", nullable=true)
     */
    private $openTime;

    /**
     * @var string
     *
     * @ORM\Column(name="closeTime", type="time", nullable=true)
     */
    private $closeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="isOpen", type="boolean")
     */
    private $isOpen=true;

    /**
     * @var string
     *
     * @ORM\Column(name="isFeatured", type="boolean")
     */
    private $isFeatured=false;

    /**
     * @var string
     *
     * @ORM\Column(name="taxType", type="string", length=255)
     */
    private $taxType="inclusive";

    /**
     * @var string
     *
     * @ORM\Column(name="tax", type="float")
     */
    private $tax=12.0;

    /**
     * @var string
     *
     * @ORM\Column(name="serviceFee", type="float")
     */
    private $serviceFee=10.0;

    /**
     * @var string
     *
     * @ORM\Column(name="popularity", type="float")
     */
    private $popularity=0.0;

    /**
     * @var string
     *
     * @ORM\Column(name="minOrderAmount", type="float")
     */
    private $minOrderAmount=0.0;

    /**
     * @var string
     *
     * @ORM\Column(name="deliveryCharge", type="float")
     */
    private $deliveryCharge=0.0;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurantTerms", type="text", nullable=true)
     */
    private $restaurantTerms;

    /**
     * @var string
     *
     * @ORM\Column(name="iconImage", type="string", length=255, unique=true, nullable=true)
     */
    private $iconImage;

    /**
     * @Assert\Image()
     * @Assert\File(maxSize="6000000")
     */
    private $iconFile;

    /**
     * @var string
     *
     * @ORM\Column(name="bannerImage", type="string", length=255, unique=true, nullable=true)
     */
    private $bannerImage;

    /**
     * @Assert\Image()
     * @Assert\File(maxSize="6000000")
     */
    private $bannerFile;
        /**
     * @var string
     *
     * @ORM\Column(name="defaultImage", type="string", length=255, unique=true, nullable=true)
     */
    private $defaultImage;

    /**
     * @Assert\Image()
     * @Assert\File(maxSize="6000000")
     */
    private $defaultFile;

    /**
     * @var string
     *
     * @ORM\Column(name="orderType", type="json_array")
     */
    private $orderType = [];

     /**
     * @var string
     *
     * @ORM\Column(name="allowoutofstock", type="boolean", length=6000, unique=true)
     */
    private $allowOutOfStock;   

    
    public function __toString(){
        return $this->restaurantName;
    }

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
     * Set restaurantName
     *
     * @param string $restaurantName
     *
     * @return Restaurants
     */
    public function setRestaurantName($restaurantName)
    {
        $this->restaurantName = $restaurantName;

        return $this;
    }

    /**
     * Get minimumOrderAmount
     *
     * @return string
     */
    public function getMinimumOrderAmount()
    {
        return $this->minimumOrderAmount;
    }
    /**
     * Set minimumOrderAmount
     *
     * @param string $minimumOrderAmount
     *
     * @return Restaurants
     */
    public function setMinimumOrderAmount($minimumOrderAmount)
    {
        $this->minimumOrderAmount = $minimumOrderAmount;

        return $this;
    }
    /**
     * Get featured
     *
     * @return string
     */
    public function getFeatured()
    {
        return $this->featured;
    }
    /**
     * Set featured
     *
     * @param string $featured
     *
     * @return Restaurants
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;

        return $this;
    }
    /**
     * Get category_two_label
     *
     * @return string
     */
    public function getCategoryTwoLabel()
    {
        return $this->category_two_label;
    }
    /**
     * Set category_two_label
     *
     * @param string $category_two_label
     *
     * @return Restaurants
     */
    public function setCategoryTwoLabel($category_two_label)
    {
        $this->category_two_label = $category_two_label;

        return $this;
    }
    /**
     * Get category_two
     *
     * @return string
     */
    public function getCategoryTwo()
    {
        return $this->category_two;
    }
    /**
     * Set category_two
     *
     * @param string $category_two
     *
     * @return Restaurants
     */
    public function setCategoryTwo($category_two)
    {
        $this->category_two = $category_two;

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
     * Set category
     *
     * @param string $category
     *
     * @return Restaurants
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
   /**
     * Get category_label
     *
     * @return string
     */
    public function getCategoryLabel()
    {
        return $this->category_label;
    }
    /**
     * Set category_label
     *
     * @param string $category_label
     *
     * @return Restaurants
     */
    public function setCategoryLabel($category_label)
    {
        $this->category_label = $category_label;

        return $this;
    }
    /**
     * Get category_three_label
     *
     * @return string
     */
    public function getCategoryThreeLabel()
    {
        return $this->category_three_label;
    }
    /**
     * Set category_three_label
     *
     * @param string $category_three_label
     *
     * @return Restaurants
     */
    public function setCategoryThreeLabel($category_three_label)
    {
        $this->category_three_label = $category_three_label;

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
     * @return Restaurants
     */
    public function setNested($nested)
    {
        $this->nested = $nested;

        return $this;
    }
    /**
     * Get category_three
     *
     * @return string
     */
    public function getCategoryThree()
    {
        return $this->category_three;
    }
    /**
     * Set category_three
     *
     * @param string $category_three
     *
     * @return Restaurants
     */
    public function setCategoryThree($category_three)
    {
        $this->category_three = $category_three;

        return $this;
    }
    /**
     * Get slot
     *
     * @return string
     */
    public function getSlot()
    {
        return $this->slot;
    }
    /**
     * Set slot
     *
     * @param string $slot
     *
     * @return Restaurants
     */
    public function setSlot($slot)
    {
        $this->slot = $slot;

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
     * Set discount
     *
     * @param string $discount
     *
     * @return Restaurants
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }
    /**
     * Get restaurantName
     *
     * @return string
     */
    public function getRestaurantName()
    {
        return $this->restaurantName;
    }
    /**
     * Set restaurantSlug
     *
     * @param string $restaurantSlug
     *
     * @return Restaurants
     */
    public function setRestaurantSlug($restaurantSlug)
    {
        $this->restaurantSlug = $restaurantSlug;

        return $this;
    }

    /**
     * Get firebase
     *
     * @return string
     */
    public function getFirebase()
    {
        return $this->firebase;
    }

    /**
     * Set firebase
     *
     * @param string $firebase
     *
     * @return Restaurants
     */
    public function setFirebase($firebase)
    {
        $this->firebase = $firebase;

        return $this;
    }
        /**
     * Get featured_label
     *
     * @return string
     */
    public function getFeaturedLabel()
    {
        return $this->featured_label;
    }

    /**
     * Set featured_label
     *
     * @param string $featured_label
     *
     * @return Restaurants
     */
    public function setFeaturedLabel($featured_label)
    {
        $this->featured_label = $featured_label;

        return $this;
    }
     /**
     * Get gst
     *
     * @return string
     */
    public function getGst()
    {
        return $this->gst;
    }
        /**
     * Set gst
     *
     * @param string $gst
     *
     * @return Restaurants
     */
    public function setGst($gst)
    {
        $this->gst = $gst;

        return $this;
    }
      /**
     * Get discount_label
     *
     * @return string
     */
    public function getDiscountLabel()
    {
        return $this->discount_label;
    }

    /**
     * Set discount_label
     *
     * @param string $discount_label
     *
     * @return Restaurants
     */
    public function setDiscountLabel($discount_label)
    {
        $this->discount_label = $discount_label;

        return $this;
    }
    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return Restaurants
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get currencyFormat
     *
     * @return string
     */
    public function getCurrencyFormat()
    {
        return $this->currencyFormat;
    }

    /**
     * Set currencyFormat
     *
     * @param string $currencyFormat
     *
     * @return Restaurants
     */
    public function setCurrencyFormat($currencyFormat)
    {
        $this->currencyFormat = $currencyFormat;

        return $this;
    }

/**
     * Get dashboardColor
     *
     * @return string
     */
    public function getDashboardColor()
    {
        return $this->dashboardColor;
    }

    /**
     * Set dashboardColor
     *
     * @param string $dashboardColor
     *
     * @return Restaurants
     */
    public function setDashboardColor($dashboardColor)
    {
        $this->dashboardColor = $dashboardColor;

        return $this;
    }
    /**
     * Get sms
     *
     * @return string
     */
    public function getSms()
    {
        return $this->sms;
    }

    /**
     * Set sms
     *
     * @param string $sms
     *
     * @return Restaurants
     */
    public function setSms($sms)
    {
        $this->sms = $sms;

        return $this;
    }
    /**
     * Get returns
     *
     * @return string
     */
    public function getReturns()
    {
        return $this->returns;
    }

    /**
     * Set returns
     *
     * @param string $returns
     *
     * @return Restaurants
     */
    public function setReturns($returns)
    {
        $this->returns = $returns;

        return $this;
    }
        /**
     * Get refund
     *
     * @return string
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * Set refund
     *
     * @param string $refund
     *
     * @return Restaurants
     */
    public function setRefund($refund)
    {
        $this->refund = $refund;

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
     * Set wallet
     *
     * @param string $wallet
     *
     * @return Restaurants
     */
    public function setWallet($wallet)
    {
        $this->wallet = $wallet;

        return $this;
    }
        /**
     * Get apiKey
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set apiKey
     *
     * @param string $apiKey
     *
     * @return Restaurants
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * Get restaurantSlug
     *
     * @return string
     */
    public function getRestaurantSlug()
    {
        return $this->restaurantSlug;
    }

    /**
     * Set restaurantAddress
     *
     * @param string $restaurantAddress
     *
     * @return Restaurants
     */
    public function setRestaurantAddress($restaurantAddress)
    {
        $this->restaurantAddress = $restaurantAddress;

        return $this;
    }

    /**
     * Get restaurantAddress
     *
     * @return string
     */
    public function getRestaurantAddress()
    {
        return $this->restaurantAddress;
    }

    /**
     * Set primaryMobile
     *
     * @param string $primaryMobile
     *
     * @return Restaurants
     */
    public function setPrimaryMobile($primaryMobile)
    {
        $this->primaryMobile = $primaryMobile;

        return $this;
    }

    /**
     * Get primaryMobile
     *
     * @return string
     */
    public function getPrimaryMobile()
    {
        return $this->primaryMobile;
    }

    /**
     * Set secondaryMobile
     *
     * @param string $secondaryMobile
     *
     * @return Restaurants
     */
    public function setSecondaryMobile($secondaryMobile)
    {
        $this->secondaryMobile = $secondaryMobile;

        return $this;
    }

    /**
     * Get secondaryMobile
     *
     * @return string
     */
    public function getSecondaryMobile()
    {
        return $this->secondaryMobile;
    }

    /**
     * Set primaryEmail
     *
     * @param string $primaryEmail
     *
     * @return Restaurants
     */
    public function setPrimaryEmail($primaryEmail)
    {
        $this->primaryEmail = $primaryEmail;

        return $this;
    }

    /**
     * Get primaryEmail
     *
     * @return string
     */
    public function getPrimaryEmail()
    {
        return $this->primaryEmail;
    }

    /**
     * Set secondaryEmail
     *
     * @param string $secondaryEmail
     *
     * @return Restaurants
     */
    public function setSecondaryEmail($secondaryEmail)
    {
        $this->secondaryEmail = $secondaryEmail;

        return $this;
    }

    /**
     * Get secondaryEmail
     *
     * @return string
     */
    public function getSecondaryEmail()
    {
        return $this->secondaryEmail;
    }

    /**
     * Set restaurantTerms
     *
     * @param string $restaurantTerms
     *
     * @return Restaurants
     */
    public function setRestaurantTerms($restaurantTerms)
    {
        $this->restaurantTerms = $restaurantTerms;

        return $this;
    }

    /**
     * Get restaurantTerms
     *
     * @return string
     */
    public function getRestaurantTerms()
    {
        return $this->restaurantTerms;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory siteLogo where uploaded
        // documents should be saved
        return __DIR__.'/../../../uploads/restaurant/';
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setIconFile(UploadedFile $file)
    {
        $this->iconFile = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getIconFile()
    {
        return $this->iconFile;
    }

    public function setIconImage($iconImage){
        $this->iconImage=$iconImage;
        return $this;
    }

    public function getIconImage()
    {
        return $this->iconImage;
    }

    public function preIconUpload()
    {
        if (null !== $this->iconFile) {
            // do whatever you want to generate a unique name
            $this->iconImage = $this->restaurantSlug.'.'.$this->iconFile->guessExtension();
        }
    }
    

    protected function getIconUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return $this->getUploadRootDir()."icons/";
    }


    public function iconUpload()
    {
        $this->preIconUpload();
        // the file property can be empty if the field is not required
        if (null === $this->getIconFile()) {
            return;
        }
        $temp1=$this->getIconFile();
        
        
       // $this->siteLogo = uniqid().'.'.$this->file->guessExtension();
        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        
        
        $temp1->move(
            $this->getIconUploadDir(),
            $this->iconImage//getFile()->getClientOriginalName()
        );
        
        // clean up the file property as you won't need it anymore
        $this->iconFile = null;

        unset($this->iconFile);
    }


    public function getAbsoluteIconImagePath()
    {
        return null === $this->iconImage
            ? null
            : $this->getIconUploadDir().'/'.$this->iconImage;
    }

    public function removeIconUpload()
    {
        if($this->iconImage!="default.png" || $this->iconImage!=null)
            if ($file = $this->getAbsoluteIconImagePath()) {
                unlink($file);
            }
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setBannerFile(UploadedFile $file)
    {
        $this->bannerFile = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getDefaultFile()
    {
        return $this->defaultFile;
    }
   /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setDefaultFile(UploadedFile $file)
    {
        $this->defaultFile = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getBannerFile()
    {
        return $this->bannerFile;
    }
    public function setBannerImage($bannerImage){
        $this->bannerImage=$bannerImage;
        return $this;
    }

    public function getBannerImage()
    {
        return $this->bannerImage;
    }
      public function setDefaultImage($defaultImage){
        $this->defaultImage=$defaultImage;
        return $this;
    }

    public function getDefaultImage()
    {
        return $this->defaultImage;
    }

    public function preBannerUpload()
    {
        if (null !== $this->bannerFile) {
            // do whatever you want to generate a unique name
            $this->bannerImage = $this->restaurantSlug.'.'.$this->bannerFile->guessExtension();
        }
    }
        public function preDefaultUpload()
    {
        if (null !== $this->defaultFile) {
            // do whatever you want to generate a unique name
            $this->defaultImage = $this->restaurantSlug.'-'.mt_rand(1111,9999).'.'.$this->defaultFile->guessExtension();
        }
    }
    


    protected function getBannerUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return $this->getUploadRootDir()."banners/";
    }


    public function defaultUpload()
    {
        $this->preDefaultUpload();
        // the file property can be empty if the field is not required
        if (null === $this->getDefaultFile()) {
            return;
        }
        $temp1=$this->getDefaultFile();
        
        
       // $this->siteLogo = uniqid().'.'.$this->file->guessExtension();
        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        
        
        $temp1->move(
            $this->getBannerUploadDir(),
            $this->defaultImage//getFile()->getClientOriginalName()
        );
        
        // clean up the file property as you won't need it anymore
        $this->defaultFile = null;

        unset($this->defaultFile);
    }
    public function bannerUpload()
    {
        $this->preBannerUpload();
        // the file property can be empty if the field is not required
        if (null === $this->getBannerFile()) {
            return;
        }
        $temp1=$this->getBannerFile();
        
        
       // $this->siteLogo = uniqid().'.'.$this->file->guessExtension();
        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        
        
        $temp1->move(
            $this->getBannerUploadDir(),
            $this->bannerImage//getFile()->getClientOriginalName()
        );
        
        // clean up the file property as you won't need it anymore
        $this->bannerFile = null;

        unset($this->bannerFile);
    }


    public function getAbsoluteBannerImagePath()
    {
        return null === $this->bannerImage
            ? null
            : $this->getBannerUploadDir().'/'.$this->bannerImage;
    }

    public function removeBannerUpload()
    {
        if($this->bannerImage!="default.png" || $this->bannerImage!=null)
            if ($file = $this->getAbsoluteBannerImagePath()) {
                unlink($file);
            }
    }

    /**
     * Set openTime
     *
     * @param \DateTime $openTime
     *
     * @return Restaurants
     */
    public function setOpenTime($openTime)
    {
        $this->openTime = $openTime;

        return $this;
    }

    /**
     * Get openTime
     *
     * @return \DateTime
     */
    public function getOpenTime()
    {
        return $this->openTime;
    }

    /**
     * Set closeTime
     *
     * @param \DateTime $closeTime
     *
     * @return Restaurants
     */
    public function setCloseTime($closeTime)
    {
        $this->closeTime = $closeTime;

        return $this;
    }

    /**
     * Get closeTime
     *
     * @return \DateTime
     */
    public function getCloseTime()
    {
        return $this->closeTime;
    }

    /**
     * Set isOpen
     *
     * @param boolean $isOpen
     *
     * @return Restaurants
     */
    public function setIsOpen($isOpen)
    {
        $this->isOpen = $isOpen;

        return $this;
    }

    /**
     * Get isOpen
     *
     * @return boolean
     */
    public function getIsOpen()
    {
        return $this->isOpen;
    }

    /**
     * Set tax
     *
     * @param  $tax
     *
     * @return Restaurants
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax
     *
     * @return \double
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set restaurantLocation
     *
     * @param string $restaurantLocation
     *
     * @return Restaurants
     */
    public function setRestaurantLocation($restaurantLocation)
    {
        $this->restaurantLocation = $restaurantLocation;

        return $this;
    }

    /**
     * Get restaurantLocation
     *
     * @return string
     */
    public function getRestaurantLocation()
    {
        return $this->restaurantLocation;
    }

    /**
     * Set restaurantLat
     *
     * @param string $restaurantLat
     *
     * @return Restaurants
     */
    public function setRestaurantLat($restaurantLat)
    {
        $this->restaurantLat = $restaurantLat;

        return $this;
    }

    /**
     * Get restaurantLat
     *
     * @return string
     */
    public function getRestaurantLat()
    {
        return $this->restaurantLat;
    }

    /**
     * Set restaurantLong
     *
     * @param string $restaurantLong
     *
     * @return Restaurants
     */
    public function setRestaurantLong($restaurantLong)
    {
        $this->restaurantLong = $restaurantLong;

        return $this;
    }
 /**
     * Get privacy
     *
     * @return string
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

    /**
     * Set privacy
     *
     * @param string $privacy
     *
     * @return Restaurants
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;

        return $this;
    }
    /**
     * Get restaurantLong
     *
     * @return string
     */
    public function getRestaurantLong()
    {
        return $this->restaurantLong;
    }

    /**
     * Set taxType
     *
     * @param string $taxType
     *
     * @return Restaurants
     */
    public function setTaxType($taxType)
    {
        $this->taxType = $taxType;

        return $this;
    }

    /**
     * Get taxType
     *
     * @return string
     */
    public function getTaxType()
    {
        return $this->taxType;
    }
    
    /**
     * Set popularity
     *
     * @param float $popularity
     *
     * @return Restaurants
     */
    public function setPopularity($popularity)
    {
        $this->popularity = $popularity;

        return $this;
    }

    /**
     * Get popularity
     *
     * @return float
     */
    public function getPopularity()
    {
        return $this->popularity;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Restaurants
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set serviceFee
     *
     * @param float $serviceFee
     *
     * @return Restaurants
     */
    public function setServiceFee($serviceFee)
    {
        $this->serviceFee = $serviceFee;

        return $this;
    }

    /**
     * Get serviceFee
     *
     * @return float
     */
    public function getServiceFee()
    {
        return $this->serviceFee;
    }

    /**
     * Set minOrderAmount
     *
     * @param float $minOrderAmount
     *
     * @return Restaurants
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
     * Set deliveryCharge
     *
     * @param float $deliveryCharge
     *
     * @return Restaurants
     */
    public function setDeliveryCharge($deliveryCharge)
    {
        $this->deliveryCharge = $deliveryCharge;

        return $this;
    }

    /**
     * Get deliveryCharge
     *
     * @return float
     */
    public function getDeliveryCharge()
    {
        return $this->deliveryCharge;
    }

    /**
     * Set isFeatured
     *
     * @param boolean $isFeatured
     *
     * @return Restaurants
     */
    public function setIsFeatured($isFeatured)
    {
        $this->isFeatured = $isFeatured;

        return $this;
    }

    /**
     * Get isFeatured
     *
     * @return boolean
     */
    public function getIsFeatured()
    {
        return $this->isFeatured;
    }

    /**
     * Set orderType
     *
     * @param array $orderType
     *
     * @return Restaurants
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * Get orderType
     *
     * @return array
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Get allowOutOfStock
     *
     * @return string
     */
    public function getAllowOutOfStock()
    {
        return $this->allowOutOfStock;
    }
    /**
     * Set allowOutOfStock
     *
     * @param string $allowOutOfStock
     *
     * @return Restaurants
     */
    public function setAllowOutOfStock($allowOutOfStock)
    {
        $this->allowOutOfStock = $allowOutOfStock;

        return $this;
    }
}
