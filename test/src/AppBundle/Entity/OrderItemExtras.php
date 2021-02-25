<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderItemExtras
 *
 * @ORM\Table(name="order_item_extras")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderItemExtrasRepository")
 */
class OrderItemExtras
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
     * @ORM\Column(name="itemName", type="string", length=255)
     */
    private $itemName;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="CustomerOrderItems", inversedBy="orderItemExtras")
     *@ORM\JoinColumn(name="order_item_d", referencedColumnName="id")
     */
    private $customerOrderItems;


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
     * @return OrderItemExtras
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
     * Set itemName
     *
     * @param string $itemName
     *
     * @return OrderItemExtras
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

    /**
     * Get itemName
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return OrderItemExtras
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set customerOrderItems
     *
     * @param \AppBundle\Entity\CustomerOrderItems $customerOrderItems
     *
     * @return OrderItemExtras
     */
    public function setCustomerOrderItems(\AppBundle\Entity\CustomerOrderItems $customerOrderItems = null)
    {
        $this->customerOrderItems = $customerOrderItems;

        return $this;
    }

    /**
     * Get customerOrderItems
     *
     * @return \AppBundle\Entity\CustomerOrderItems
     */
    public function getCustomerOrderItems()
    {
        return $this->customerOrderItems;
    }
}
