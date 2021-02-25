<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RestaurantRatings
 *
 * @ORM\Table(name="restaurant_ratings")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RestaurantRatingsRepository")
 */
class RestaurantRatings
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
     * @ORM\Column(name="ratings", type="integer")
     */
    private $ratings;

    /**
     * @var string
     *
     * @ORM\Column(name="reviews", type="text",nullable=true)
     */
    private $reviews;

    /**
     *@ORM\ManyToOne(targetEntity="Customer", inversedBy="restaurantRatings", cascade={"persist"})
     *@ORM\JoinColumn(name="customer_id", referencedColumnName="id")
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
     * Set ratings
     *
     * @param integer $ratings
     *
     * @return RestaurantRatings
     */
    public function setRatings($ratings)
    {
        $this->ratings = $ratings;

        return $this;
    }

    /**
     * Get ratings
     *
     * @return int
     */
    public function getRatings()
    {
        return $this->ratings;
    }

    /**
     * Set reviews
     *
     * @param string $reviews
     *
     * @return RestaurantRatings
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * Get reviews
     *
     * @return string
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     *
     * @return RestaurantRatings
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
}
