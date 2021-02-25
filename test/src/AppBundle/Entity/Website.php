<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Website
 *
 * @ORM\Table(name="website")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WebsiteRepository")
 */
class Website
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
     * @ORM\Column(name="topbar", type="string", length=200, nullable=true)
     */
    private $topbar;

    /**
     * @var string
     *
     * @ORM\Column(name="topbarColor", type="string", length=200, nullable=true)
     */
    private $topbarColor;

    /**
     * @var string
     *
     * @ORM\Column(name="topbarBackground", type="string", length=200, nullable=true)
     */
    private $topbarBackground;

    /**
     * @var string
     *
     * @ORM\Column(name="headerColor", type="string", length=200, nullable=true)
     */
    private $headerColor;

    /**
     * @var string
     *
     * @ORM\Column(name="headerBackground", type="string", length=20, nullable=true)
     */
    private $headerBackground;

    /**
     * @var string
     *
     * @ORM\Column(name="background", type="string", length=200, nullable=true)
     */
    private $background;

    /**
     * @var string
     *
     * @ORM\Column(name="backgroundColor", type="string", length=200, nullable=true)
     */
    private $backgroundColor;

    /**
     * @var string
     *
     * @ORM\Column(name="footerBackground", type="string", length=200, nullable=true)
     */
    private $footerBackground;

    /**
     * @var string
     *
     * @ORM\Column(name="footerColor", type="string", length=200, nullable=true)
     */
    private $footerColor;

    /**
     * @var string
     *
     * @ORM\Column(name="primaryColor", type="string", length=200, nullable=true)
     */
    private $primaryColor;

    /**
     * @var string
     *
     * @ORM\Column(name="primaryBackground", type="string", length=200, nullable=true)
     */
    private $primaryBackground;

    /**
     * @var string
     *
     * @ORM\Column(name="googleKey", type="string", length=200, nullable=true)
     */
    private $googleKey;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookKey", type="string", length=200, nullable=true)
     */
    private $facebookKey;


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
     * Set topbar
     *
     * @param string $topbar
     *
     * @return Website
     */
    public function setTopbar($topbar)
    {
        $this->topbar = $topbar;

        return $this;
    }

    /**
     * Get topbar
     *
     * @return string
     */
    public function getTopbar()
    {
        return $this->topbar;
    }

    /**
     * Set topbarColor
     *
     * @param string $topbarColor
     *
     * @return Website
     */
    public function setTopbarColor($topbarColor)
    {
        $this->topbarColor = $topbarColor;

        return $this;
    }

    /**
     * Get topbarColor
     *
     * @return string
     */
    public function getTopbarColor()
    {
        return $this->topbarColor;
    }

    /**
     * Set topbarBackground
     *
     * @param string $topbarBackground
     *
     * @return Website
     */
    public function setTopbarBackground($topbarBackground)
    {
        $this->topbarBackground = $topbarBackground;

        return $this;
    }

    /**
     * Get topbarBackground
     *
     * @return string
     */
    public function getTopbarBackground()
    {
        return $this->topbarBackground;
    }

    /**
     * Set headerColor
     *
     * @param string $headerColor
     *
     * @return Website
     */
    public function setHeaderColor($headerColor)
    {
        $this->headerColor = $headerColor;

        return $this;
    }

    /**
     * Get headerColor
     *
     * @return string
     */
    public function getHeaderColor()
    {
        return $this->headerColor;
    }

    /**
     * Set headerBackground
     *
     * @param string $headerBackground
     *
     * @return Website
     */
    public function setHeaderBackground($headerBackground)
    {
        $this->headerBackground = $headerBackground;

        return $this;
    }

    /**
     * Get headerBackground
     *
     * @return string
     */
    public function getHeaderBackground()
    {
        return $this->headerBackground;
    }

    /**
     * Set background
     *
     * @param string $background
     *
     * @return Website
     */
    public function setBackground($background)
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get background
     *
     * @return string
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * Set backgroundColor
     *
     * @param string $backgroundColor
     *
     * @return Website
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * Get backgroundColor
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * Set footerBackground
     *
     * @param string $footerBackground
     *
     * @return Website
     */
    public function setFooterBackground($footerBackground)
    {
        $this->footerBackground = $footerBackground;

        return $this;
    }

    /**
     * Get footerBackground
     *
     * @return string
     */
    public function getFooterBackground()
    {
        return $this->footerBackground;
    }

    /**
     * Set footerColor
     *
     * @param string $footerColor
     *
     * @return Website
     */
    public function setFooterColor($footerColor)
    {
        $this->footerColor = $footerColor;

        return $this;
    }

    /**
     * Get footerColor
     *
     * @return string
     */
    public function getFooterColor()
    {
        return $this->footerColor;
    }

    /**
     * Set primaryColor
     *
     * @param string $primaryColor
     *
     * @return Website
     */
    public function setPrimaryColor($primaryColor)
    {
        $this->primaryColor = $primaryColor;

        return $this;
    }

    /**
     * Get primaryColor
     *
     * @return string
     */
    public function getPrimaryColor()
    {
        return $this->primaryColor;
    }

    /**
     * Set primaryBackground
     *
     * @param string $primaryBackground
     *
     * @return Website
     */
    public function setPrimaryBackground($primaryBackground)
    {
        $this->primaryBackground = $primaryBackground;

        return $this;
    }

    /**
     * Get primaryBackground
     *
     * @return string
     */
    public function getPrimaryBackground()
    {
        return $this->primaryBackground;
    }

    /**
     * Set googleKey
     *
     * @param string $googleKey
     *
     * @return Website
     */
    public function setGoogleKey($googleKey)
    {
        $this->googleKey = $googleKey;

        return $this;
    }

    /**
     * Get googleKey
     *
     * @return string
     */
    public function getGoogleKey()
    {
        return $this->googleKey;
    }

    /**
     * Set facebookKey
     *
     * @param string $facebookKey
     *
     * @return Website
     */
    public function setFacebookKey($facebookKey)
    {
        $this->facebookKey = $facebookKey;

        return $this;
    }

    /**
     * Get facebookKey
     *
     * @return string
     */
    public function getFacebookKey()
    {
        return $this->facebookKey;
    }
}

