<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slots
 *
 * @ORM\Table(name="slots")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SlotsRepository")
 */
class Slots
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
     * @ORM\Column(name="start", type="string", length=300, nullable=true)
     */
    private $start;

    /**
     * @var string
     *
     * @ORM\Column(name="end", type="string", length=300, nullable=true)
     */
    private $end;

    /**
     * @var string
     *
     * @ORM\Column(name="orders", type="string", length=255, nullable=true)
     */
    private $orders;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=200, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=255, nullable=true)
     */
    private $area;


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
     * Set start
     *
     * @param string $start
     *
     * @return Slots
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param string $end
     *
     * @return Slots
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set orders
     *
     * @param string $orders
     *
     * @return Slots
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get orders
     *
     * @return string
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Slots
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set area
     *
     * @param string $area
     *
     * @return Slots
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }
}

