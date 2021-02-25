<?php

namespace AppBundle\Entity;

/**
 * Membership
 */
class Membership
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $avator;
    /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=255)
     */
    private $branch;
    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $duration;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $parentId;
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
     * Set name
     *
     * @param string $name
     *
     * @return Membership
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }
    /**
     * Set parent_id
     *
     * @param string $parentId
     *
     * @return Membership
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Membership
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
     * Set avator
     *
     * @param string $avator
     *
     * @return Membership
     */
    public function setAvator($avator)
    {
        $this->avator = $avator;

        return $this;
    }

    /**
     * Get avator
     *
     * @return string
     */
    public function getAvator()
    {
        return $this->avator;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Membership
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return Membership
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Membership
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

