<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraPackage
 *
 * @ORM\Table(name="extra_package")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExtraPackageRepository")
 */
class ExtraPackage
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
     * @ORM\Column(name="packageName", type="string", length=255)
     */
    private $packageName;

    /**
     * @var string
     *
     * @ORM\Column(name="pricingType", type="string", length=255)
     */
    private $pricingType;

    /**
     *@ORM\ManyToOne(targetEntity="MenuItem", inversedBy="extraPackage", cascade={"persist"})
     *@ORM\JoinColumn(name="menu_item_id", referencedColumnName="id")
     */
    private $menuItem;

    /**
     *@ORM\OneToMany(targetEntity="PackageExtras", mappedBy="extraPackage", cascade={"persist","remove"})
     */
    private $packageExtras;


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
     * Set packageName
     *
     * @param string $packageName
     *
     * @return ExtraPackage
     */
    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;

        return $this;
    }

    /**
     * Get packageName
     *
     * @return string
     */
    public function getPackageName()
    {
        return $this->packageName;
    }

    /**
     * Set pricingType
     *
     * @param string $pricingType
     *
     * @return ExtraPackage
     */
    public function setPricingType($pricingType)
    {
        $this->pricingType = $pricingType;

        return $this;
    }

    /**
     * Get pricingType
     *
     * @return string
     */
    public function getPricingType()
    {
        return $this->pricingType;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->packageExtras = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set menuItem
     *
     * @param \AppBundle\Entity\MenuItem $menuItem
     *
     * @return ExtraPackage
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

    /**
     * Add packageExtra
     *
     * @param \AppBundle\Entity\PackageExtras $packageExtra
     *
     * @return ExtraPackage
     */
    public function addPackageExtra(\AppBundle\Entity\PackageExtras $packageExtra)
    {
        $packageExtra->setExtraPackage($this);
        $this->packageExtras[] = $packageExtra;

        return $this;
    }

    /**
     * Remove packageExtra
     *
     * @param \AppBundle\Entity\PackageExtras $packageExtra
     */
    public function removePackageExtra(\AppBundle\Entity\PackageExtras $packageExtra)
    {
        $this->packageExtras->removeElement($packageExtra);
    }

    /**
     * Get packageExtras
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPackageExtras()
    {
        return $this->packageExtras;
    }
}
