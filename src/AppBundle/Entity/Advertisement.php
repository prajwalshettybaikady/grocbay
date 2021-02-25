<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Advertisement
 *
 * @ORM\Table(name="advertisement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdvertisementRepository")
 */
class Advertisement
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
       /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=255)
     */
    private $branch;
    /**
     * @var string
     *
     * @ORM\Column(name="bannerFor", type="string", nullable=true)
     */
    private $bannerFor;
    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", nullable=true)
     */
    private $data;

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
     * @ORM\Column(name="clickLink", type="text", nullable=true)
     */
    private $clickLink;

    /**
     * @var string
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive=true;

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
     * @ORM\ManyToOne(targetEntity="AdvertisementType", inversedBy="advertisement")
     *@ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $advertisementType;


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
     * Set title
     *
     * @param string $title
     *
     * @return Advertisement
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

        /**
     * Set branch
     *
     * @param string $branch
     *
     * @return Advertisement
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
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set bannerFor
     *
     * @param string $bannerFor
     *
     * @return Advertisement
     */
    public function setBannerFor($bannerFor)
    {
        $this->bannerFor = $bannerFor;

        return $this;
    }

    /**
     * Get bannerFor
     *
     * @return string
     */
    public function getBannerFor()
    {
        return $this->bannerFor;
    }
        /**
     * Set data
     *
     * @param string $data
     *
     * @return Advertisement
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Set description
     *
     * @param string $description
     *
     * @return Advertisement
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
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Advertisement
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
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Advertisement
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
     * Set clickLink
     *
     * @param string $clickLink
     *
     * @return Advertisement
     */
    public function setClickLink($clickLink)
    {
        $this->clickLink = $clickLink;

        return $this;
    }

    /**
     * Get clickLink
     *
     * @return string
     */
    public function getClickLink()
    {
        return $this->clickLink;
    }

    /**
     * Set advertisementType
     *
     * @param \AppBundle\Entity\AdvertisementType $advertisementType
     *
     * @return Advertisement
     */
    public function setAdvertisementType(\AppBundle\Entity\AdvertisementType $advertisementType = null)
    {
        $this->advertisementType = $advertisementType;

        return $this;
    }

    /**
     * Get advertisementType
     *
     * @return \AppBundle\Entity\AdvertisementType
     */
    public function getAdvertisementType()
    {
        return $this->advertisementType;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory siteLogo where uploaded
        // documents should be saved
        return __DIR__.'/../../../uploads/banners/';
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

    public function preBannerUpload()
    {
        if (null !== $this->bannerFile) {
            // do whatever you want to generate a unique name
            $this->bannerImage = uniqid("banner").'.'.$this->bannerFile->guessExtension();
        }
    }
    

    protected function getBannerUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return $this->getUploadRootDir()."banner/";
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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Advertisement
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
}
