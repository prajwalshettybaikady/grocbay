<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PackageExtras
 *
 * @ORM\Table(name="package_extras")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PackageExtrasRepository")
 */
class PackageExtras
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
     * @ORM\Column(name="typeName", type="string", length=255)
     */
    private $typeName;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="priority", type="integer")
     */
    private $priority = 0;

    /**
     *@ORM\ManyToOne(targetEntity="ExtraPackage", inversedBy="packageExtras", cascade={"persist"})
     *@ORM\JoinColumn(name="extra_package_id", referencedColumnName="id")
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
     * Set typeName
     *
     * @param string $typeName
     *
     * @return PackageExtras
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;

        return $this;
    }

    /**
     * Get typeName
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return PackageExtras
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
     * Set priority
     *
     * @param string $priority
     *
     * @return PackageExtras
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

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
     * Set extraPackage
     *
     * @param \AppBundle\Entity\ExtraPackage $extraPackage
     *
     * @return PackageExtras
     */
    public function setExtraPackage(\AppBundle\Entity\ExtraPackage $extraPackage = null)
    {
        $this->extraPackage = $extraPackage;

        return $this;
    }

    /**
     * Get extraPackage
     *
     * @return \AppBundle\Entity\ExtraPackage
     */
    public function getExtraPackage()
    {
        return $this->extraPackage;
    }
}
