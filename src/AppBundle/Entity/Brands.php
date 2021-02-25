<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Brands
 *
 * @ORM\Table(name="brands")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BrandsRepository")
 */
class Brands
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
     * @ORM\Column(name="categoryName", type="string", length=255)
     */
    private $categoryName;

    /**
     * @var string
     *
     * @ORM\Column(name="categorySlug", type="string", length=255)
     */
    private $categorySlug;
    /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=255)
     */
    private $branch;
    /**
     * @var string
     *
     * @ORM\Column(name="iconImage", type="string", length=255, unique=true)
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
     * @ORM\Column(name="categoryDescription", type="text", nullable=true)
     */
    private $categoryDescription;

     /**
     * @var string
     *
     * @ORM\Column(name="parent_id", type="boolean")
     */
    private $parent_id;

    /**
     *@ORM\OneToMany(targetEntity="MenuItem", mappedBy="category", cascade={"persist","remove"})
     */
    private $menuItem;


    
    public function __toString(){
        return $this->categoryName;
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
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return Brands
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set categorySlug
     *
     * @param string $categorySlug
     *
     * @return Brands
     */
    public function setCategorySlug($categorySlug)
    {
        $this->categorySlug = $categorySlug;

        return $this;
    }

    /**
     * Get categorySlug
     *
     * @return string
     */
    public function getCategorySlug()
    {
        return $this->categorySlug;
    }

    /**
     * Set categoryDescription
     *
     * @param string $categoryDescription
     *
     * @return Brands
     */
    public function setCategoryDescription($categoryDescription)
    {
        $this->categoryDescription = $categoryDescription;

        return $this;
    }

    /**
     * Get categoryDescription
     *
     * @return string
     */
    public function getCategoryDescription()
    {
        return $this->categoryDescription;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory siteLogo where uploaded
        // documents should be saved
        return __DIR__.'/../../../uploads/sub-category/';
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
            $this->iconImage =uniqid().$this->categorySlug.'.'.$this->iconFile->guessExtension();
        }
    }
    

        /**
     * Set branch
     *
     * @param string $branch
     *
     * @return Brands
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
                // unlink($file);
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
            $this->bannerImage = uniqid().$this->categorySlug.'.'.$this->bannerFile->guessExtension();
        }
    }
    

    protected function getBannerUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return $this->getUploadRootDir()."banners/";
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
                // unlink($file);
            }
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->menuItem = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add menuItem
     *
     * @param \AppBundle\Entity\MenuItem $menuItem
     *
     * @return Brands
     */
    public function addMenuItem(\AppBundle\Entity\MenuItem $menuItem)
    {
        $this->menuItem[] = $menuItem;

        return $this;
    }

    /**
     * Remove menuItem
     *
     * @param \AppBundle\Entity\MenuItem $menuItem
     */
    public function removeMenuItem(\AppBundle\Entity\MenuItem $menuItem)
    {
        $this->menuItem->removeElement($menuItem);
    }

    /**
     * Get menuItem
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMenuItem()
    {
        return $this->menuItem;
    }

   /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * @param mixed $parent
     */
    public function setParentId($parent)
    {
        $this->parent_id = $parent;
    }

}
