<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;

/**
 * SubCategory
 *
 * @ORM\Table(name="sub_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubCategoryRepository")
 */
class SubCategory
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
     * @ORM\Column(name="nested", type="string", length=255)
     */
    private $nested=0;

    /**
     * @var string
     *
     * @ORM\Column(name="categorySlug", type="string", length=255)
     */
    private $categorySlug;

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
     * @ORM\Column(name="featured", type="boolean")
     */
    private $featured;
    /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=255)
     */
    private $branch;
     /**
     *@var string
     *
     @ORM\Column(name="parent_id", type="text", nullable=true)
     */
    private $parent_id;
     /**
     *@var string
     *
     @ORM\Column(name="priority", type="string", nullable=false)
     */
    private $priority=0;

     /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status=0; 
   
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
     * Set branch
     *
     * @param string $branch
     *
     * @return SubCategory
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
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return SubCategory
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
     * Set nested
     *
     * @param string $nested
     *
     * @return SubCategory
     */
    public function setNested($nested)
    {
        $this->nested = $nested;

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
     * Set categorySlug
     *
     * @param string $categorySlug
     *
     * @return SubCategory
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
     * Set featured
     *
     * @param string $featured
     *
     * @return SubCategory
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;

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
     * Set categoryDescription
     *
     * @param string $categoryDescription
     *
     * @return SubCategory
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
     /**
     * Set status
     *
     * @param string $status
     *
     * @return SubCategory
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    } 
     /**
     * Set priority
     *
     * @param string $priority
     *
     * @return SubCategory
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

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
     * Get parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

     /**
     * Set parent_id
     *
     * @param string $parent_id
     *
     * @return SubCategory
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;
         return $this;
    }

}
