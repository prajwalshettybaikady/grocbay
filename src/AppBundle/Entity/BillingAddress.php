<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * BillingAddress
 *
 * @ORM\Table(name="billing_address")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BillingAddressRepository")
 */
class BillingAddress
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
     * @ORM\Column(name="addressType", type="string", length=255)
     */
    private $addressType="home";

    /**
     * @var string
     *
     * @ORM\Column(name="fullName", type="string", length=255)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="lattitude", type="string", length=255)
     */
    private $lattitude;

    /**
     * @var string
     *
     * @ORM\Column(name="logingitude", type="string", length=255)
     */
    private $logingitude;

    /**
     * @var string
     *
     * @ORM\Column(name="extraInfo", type="string", length=255, nullable=true)
     */
    private $extraInfo;


    /**
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="billingAddress")
     *@ORM\JoinColumn(name="customer_d", referencedColumnName="id")
     */
    private $customer;

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
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     *
     * @return BillingAddress
     */
    public function setCustomer(\AppBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     *
     * @return BillingAddress
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return BillingAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set lattitude
     *
     * @param string $lattitude
     *
     * @return BillingAddress
     */
    public function setLattitude($lattitude)
    {
        $this->lattitude = $lattitude;

        return $this;
    }

    /**
     * Get lattitude
     *
     * @return string
     */
    public function getLattitude()
    {
        return $this->lattitude;
    }

    /**
     * Set logingitude
     *
     * @param string $logingitude
     *
     * @return BillingAddress
     */
    public function setLogingitude($logingitude)
    {
        $this->logingitude = $logingitude;

        return $this;
    }

    /**
     * Get logingitude
     *
     * @return string
     */
    public function getLogingitude()
    {
        return $this->logingitude;
    }

    /**
     * Set extraInfo
     *
     * @param string $extraInfo
     *
     * @return BillingAddress
     */
    public function setExtraInfo($extraInfo)
    {
        $this->extraInfo = $extraInfo;

        return $this;
    }

    /**
     * Get extraInfo
     *
     * @return string
     */
    public function getExtraInfo()
    {
        return $this->extraInfo;
    }

    /**
     * Set addressType
     *
     * @param string $addressType
     *
     * @return BillingAddress
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;

        return $this;
    }

    /**
     * Get addressType
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->addressType;
    }
}
