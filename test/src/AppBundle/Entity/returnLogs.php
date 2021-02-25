<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * returnLogs
 *
 * @ORM\Table(name="return_logs")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\returnLogsRepository")
 */
class returnLogs
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
     * @ORM\Column(name="ref", type="string", length=200)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="itemId", type="string", length=200, nullable=true)
     */
    private $itemId;

    /**
     * @var string
     *
     * @ORM\Column(name="qty", type="string", length=200, nullable=true)
     */
    private $qty;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=200, nullable=true)
     */
    private $status;
       /**
     * @var string
     *
     * @ORM\Column(name="itemName", type="string", length=255, nullable=true)
     */
    private $itemName;

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
     * Set ref
     *
     * @param string $ref
     *
     * @return returnLogs
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }
 

    /**
     * Set itemName
     *
     * @param string $itemName
     *
     * @return returnLogs
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

    /**
     * Get qty
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }
    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set itemId
     *
     * @param string $itemId
     *
     * @return returnLogs
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set qty
     *
     * @param string $qty
     *
     * @return returnLogs
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return string
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return returnLogs
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
}

