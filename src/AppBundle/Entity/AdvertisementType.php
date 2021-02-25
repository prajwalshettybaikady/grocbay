<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdvertisementType
 *
 * @ORM\Table(name="advertisement_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdvertisementTypeRepository")
 */
class AdvertisementType
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
     * @ORM\Column(name="typeName", type="string", length=255, unique=true)
     */
    private $typeName;

    /**
     *@ORM\OneToMany(targetEntity="Advertisement", mappedBy="advertisementType", cascade={"persist","remove"})
     */
    private $advertisement;

    public function __toString(){
        return $this->typeName;
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
     * Set typeName
     *
     * @param string $typeName
     *
     * @return AdvertisementType
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
     * Constructor
     */
    public function __construct()
    {
        $this->advertisement = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add advertisement
     *
     * @param \AppBundle\Entity\Advertisement $advertisement
     *
     * @return AdvertisementType
     */
    public function addAdvertisement(\AppBundle\Entity\Advertisement $advertisement)
    {
        $this->advertisement[] = $advertisement;

        return $this;
    }

    /**
     * Remove advertisement
     *
     * @param \AppBundle\Entity\Advertisement $advertisement
     */
    public function removeAdvertisement(\AppBundle\Entity\Advertisement $advertisement)
    {
        $this->advertisement->removeElement($advertisement);
    }

    /**
     * Get advertisement
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdvertisement()
    {
        return $this->advertisement;
    }
}
