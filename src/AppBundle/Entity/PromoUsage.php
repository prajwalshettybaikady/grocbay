<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromoUsage
 *
 * @ORM\Table(name="promo_usage")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PromoUsageRepository")
 */
class PromoUsage
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
     * @var int
     *
     * @ORM\Column(name="count", type="integer")
     */
    private $count;


    /**
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="promoUsage")
     *@ORM\JoinColumn(name="customer_d", referencedColumnName="id")
     */
    private $customer;


    /**
     * @ORM\ManyToOne(targetEntity="Promocode", inversedBy="promoUsage")
     *@ORM\JoinColumn(name="promo_d", referencedColumnName="id")
     */
    private $promocode;


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
     * Set count
     *
     * @param integer $count
     *
     * @return PromoUsage
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     *
     * @return PromoUsage
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
     * Set promocode
     *
     * @param \AppBundle\Entity\Promocode $promocode
     *
     * @return PromoUsage
     */
    public function setPromocode(\AppBundle\Entity\Promocode $promocode = null)
    {
        $this->promocode = $promocode;

        return $this;
    }

    /**
     * Get promocode
     *
     * @return \AppBundle\Entity\Promocode
     */
    public function getPromocode()
    {
        return $this->promocode;
    }
}
