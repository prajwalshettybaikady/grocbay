<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CustomerRepository")
 */
class Customer
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
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @var int
     * @Assert\Length(
     *      min = 10,
     *      max = 12,
     *      minMessage = "Check the length",
     *      maxMessage = "Check the length"
     * )
     *
     * @ORM\Column(name="mobileNo", type="string", length=255, unique=true)
     */
    private $mobileNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;
     /**
     * @var string
     *
     * @ORM\Column(name="gst", type="string", length=255)
     */
    private $gst;   
    /**
     * @var string
     *
     * @ORM\Column(name="membership", type="string", length=255)
     */
    private $membership;
        /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=255)
     */
    private $area;
        /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip='1.1.1.1';
    /**
     * @var string
     *
     * @ORM\Column(name="created_date", type="string", length=255)
     */
    private $createdDate;
    /**
     * @var string
     *
     * @ORM\Column(name="channel", type="string", length=255)
     */
    private $channel;
    /**
     * @var string
     *
     * @ORM\Column(name="device", type="string", length=255)
     */
    private $device;
    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255)
     */
    private $latitude;
        /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255)
     */
    private $longitude;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive = true;
       /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=255)
     */
    private $branch;
    /**
     * @var bool
     *
     * @ORM\Column(name="isOnline", type="boolean")
     */
    private $isOnline = true;

    /**
     * @ORM\Column(type="json_array")
     */
    private $roles = array("0"=>"ROLE_CUSTOMER");

    /**
     * @var string
     *
     * @ORM\Column(name="apiKey", type="string", length=255, nullable=true, unique=true)
     */
    private $apiKey;

    /**
     * @var string
     *
     * @ORM\Column(name="otp", type="string", length=255, nullable=true)
     */
    private $otp;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @Assert\Image()
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="registrationKey", type="text", nullable=true)
     */
    private $registrationKey;

    /**
     *@ORM\OneToMany(targetEntity="BillingAddress", mappedBy="customer", cascade={"persist","remove"})
     */
    private $billingAddress;

    /**
     *@ORM\OneToMany(targetEntity="RestaurantRatings", mappedBy="customer", cascade={"persist","remove"})
     */
    private $restaurantRatings;

    /**
     *@ORM\OneToMany(targetEntity="CustomerOrder", mappedBy="customer", cascade={"persist","remove"})
     */
    private $customerOrder;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Promocode", mappedBy="applicableCustomer")
     */
    private $promocode;

    /**
     *@ORM\OneToMany(targetEntity="PromoUsage", mappedBy="customer", cascade={"persist","remove"})
     */
    private $promoUsage;


    
    public function __toString(){
        return $this->mobileNumber;
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
     * Set email
     *
     * @param string $email
     *
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    /**
     * Set branch
     *
     * @param string $branch
     *
     * @return Customer
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
/** Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Customer
     */
    public function setIp($ip)
    {
        return $this->ip = $ip;
    }

    /**
     * Get createdDate
     *
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set createdDate
     *
     * @param string $createdDate
     *
     * @return Customer
     */
    public function setCreatedDate($createdDate)
    {
        return $this->createdDate = $createdDate;
    }

    /**
     * Get device
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Set device
     *
     * @param string $device
     *
     * @return Customer
     */
    public function setDevice($device)
    {
        return $this->device = $device;
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

    /**
     * Set channel
     *
     * @param string $channel
     *
     * @return Customer
     */
    public function setChannel($channel)
    {
        return $this->channel = $channel;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
      /**
     * Set area
     *
     * @param string $area
     *
     * @return Customer
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
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Customer
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
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Customer
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

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
     * @return Customer
     */
    public function setGst($gst)
    {
        $this->gst = $gst;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Set membership
     *
     * @param string $membership
     *
     * @return Customer
     */
    public function setMembership($membership)
    {
        $this->membership = $membership;

        return $this;
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
     * Set mobileNumber
     *
     * @param string $mobileNumber
     *
     * @return Customer
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    /**
     * Get mobileNumber
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Customer
     */
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 13));
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Customer
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
     * Set isOnline
     *
     * @param boolean $isOnline
     *
     * @return Customer
     */
    public function setIsOnline($isOnline)
    {
        $this->isOnline = $isOnline;

        return $this;
    }

    /**
     * Get isOnline
     *
     * @return boolean
     */
    public function getIsOnline()
    {
        return $this->isOnline;
    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return Customer
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set apiKey
     *
     * @param string $apiKey
     *
     * @return Customer
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

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
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    public function getPath(){
        return $this->path;
    }


    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getRoorDir(){
        return $this->getUploadRootDir().'/default.jpeg';
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    public function getProfileDirPath()
    {
        return __DIR__.'/../../../uploads/profile/image/';
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../'.$this->getUploadDir();
    }
    

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/profile/original';
    }


    public function preUpload()
    {
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $this->path = $this->id.uniqid().'.'.$this->file->guessExtension();
        }
    }


    public function upload()
    {
        $this->preUpload();
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }
        $temp1=$this->getFile();
        
        
       // $this->path = uniqid().'.'.$this->file->guessExtension();
        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        
        
        $temp1->move(
            $this->getUploadRootDir(),
            $this->path//getFile()->getClientOriginalName()
        );
        
        // clean up the file property as you won't need it anymore
        $this->file = null;

        unset($this->file);
    }


    public function removeUpload()
    {
        if($this->path!=null)
            if ($file = $this->getAbsolutePath()) {
                unlink($file);
                unlink($this->getProfileDirPath().$this->path);
            }
    }



    public function setPath($path){
        $this->path=$path;
        return $this;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->billingAddress = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add billingAddress
     *
     * @param \AppBundle\Entity\BillingAddress $billingAddress
     *
     * @return Customer
     */
    public function addBillingAddress(\AppBundle\Entity\BillingAddress $billingAddress)
    {
        $this->billingAddress[] = $billingAddress;

        return $this;
    }

    /**
     * Remove billingAddress
     *
     * @param \AppBundle\Entity\BillingAddress $billingAddress
     */
    public function removeBillingAddress(\AppBundle\Entity\BillingAddress $billingAddress)
    {
        $this->billingAddress->removeElement($billingAddress);
    }

    /**
     * Get billingAddress
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Customer
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set otp
     *
     * @param string $otp
     *
     * @return Customer
     */
    public function setOtp($otp)
    {
        $this->otp = $otp;

        return $this;
    }

    /**
     * Get otp
     *
     * @return string
     */
    public function getOtp()
    {
        return $this->otp;
    }
    
    /**
     * Add restaurantRating
     *
     * @param \AppBundle\Entity\RestaurantRatings $restaurantRating
     *
     * @return Customer
     */
    public function addRestaurantRating(\AppBundle\Entity\RestaurantRatings $restaurantRating)
    {
        $this->restaurantRatings[] = $restaurantRating;

        return $this;
    }

    /**
     * Remove restaurantRating
     *
     * @param \AppBundle\Entity\RestaurantRatings $restaurantRating
     */
    public function removeRestaurantRating(\AppBundle\Entity\RestaurantRatings $restaurantRating)
    {
        $this->restaurantRatings->removeElement($restaurantRating);
    }

    /**
     * Get restaurantRatings
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRestaurantRatings()
    {
        return $this->restaurantRatings;
    }

    /**
     * Add customerOrder
     *
     * @param \AppBundle\Entity\CustomerOrder $customerOrder
     *
     * @return Customer
     */
    public function addCustomerOrder(\AppBundle\Entity\CustomerOrder $customerOrder)
    {
        $this->customerOrder[] = $customerOrder;

        return $this;
    }

    /**
     * Remove customerOrder
     *
     * @param \AppBundle\Entity\CustomerOrder $customerOrder
     */
    public function removeCustomerOrder(\AppBundle\Entity\CustomerOrder $customerOrder)
    {
        $this->customerOrder->removeElement($customerOrder);
    }

    /**
     * Get customerOrder
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustomerOrder()
    {
        return $this->customerOrder;
    }

    /**
     * Set registrationKey
     *
     * @param string $registrationKey
     *
     * @return Customer
     */
    public function setRegistrationKey($registrationKey)
    {
        $this->registrationKey = $registrationKey;

        return $this;
    }

    /**
     * Get registrationKey
     *
     * @return string
     */
    public function getRegistrationKey()
    {
        return $this->registrationKey;
    }

    /**
     * Add promocode
     *
     * @param \AppBundle\Entity\Promocode $promocode
     *
     * @return Customer
     */
    public function addPromocode(\AppBundle\Entity\Promocode $promocode)
    {
        $this->promocode[] = $promocode;

        return $this;
    }

    /**
     * Remove promocode
     *
     * @param \AppBundle\Entity\Promocode $promocode
     */
    public function removePromocode(\AppBundle\Entity\Promocode $promocode)
    {
        $this->promocode->removeElement($promocode);
    }

    /**
     * Get promocode
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPromocode()
    {
        return $this->promocode;
    }

    /**
     * Add promoUsage
     *
     * @param \AppBundle\Entity\PromoUsage $promoUsage
     *
     * @return Customer
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
