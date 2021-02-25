<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * ShoppingLists
 * @ORM\Table(name="shopping_lists")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ShoppingListsRepository")
 */
class ShoppingLists
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
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="shoppingLists")
     * 
     */
    private $customer;

    /**
     * @ORM\ManyToOne(targetEntity="MenuItem", inversedBy="shoppingLists")
     *
     */
     private $item;

     /**
     * @ORM\ManyToOne(targetEntity="ShoppingListsName", inversedBy="shoppingLists")
     *
     */
     private $listname;
   /**
     * @var string
     *
     * @ORM\Column(name="variation", type="string", length=255)
     */
    private $variation;
     /**
     * @var string
     * @ORM\Column(name="qty", type="string", length=255)
     */

     private $qty;
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
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return ShoppingLists
     */
    public function setCustomerId($customerId)
    {
        $this->customer = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customer;
    }

    /**
     * Set itemId
     *
     * @param integer $itemId
     *
     * @return ShoppingLists
     */
    public function setItemId($itemId)
    {
        $this->item = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->item;
    }


     /**
     * Set listnameid
     *
     * @param integer $itemId
     *
     * @return ShoppingLists
     */
    public function setListNameId($itemId)
    {
        $this->listname = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return int
     */
    public function getListNameId()
    {
        return $this->listname;
    }

    
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    
    public function getQty()
    {
        return $this->qty;
    }
   /**
     * Set variation
     *
     * @param string $variation
     *
     * @return ShoppingLists
     */
        public function setVariation($variation)
    {
        $this->variation = $variation;

        return $this;
    }

      /**
     * Get variation
     *
     * @return ShoppingLists
     */
    public function getVariation()
    {
        return $this->variation;
    }

}

