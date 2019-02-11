<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Common\Types\Language;

/**
 * Translation
 */
class Translation {

    /**
     * @access public
     * @var Language
     */
    protected $locale;

    /**
     * @access public
     * @var string
     */
    protected $language;

    /**
     * @access public
     * @var string
     */
    protected $displayName;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var string
     */
    protected $salesDescription;

    /**
     * @access public
     * @var string
     */
    protected $storeDisplayName;

    /**
     * @access public
     * @var string
     */
    protected $storeDescription;

    /**
     * @access public
     * @var string
     */
    protected $storeDetailedDescription;

    /**
     * @access public
     * @var string
     */
    protected $featuredDescription;

    /**
     * @access public
     * @var string
     */
    protected $specialsDescription;

    /**
     * @access public
     * @var string
     */
    protected $pageTitle;

    /**
     * @access public
     * @var string
     */
    protected $noPriceMessage;

    /**
     * @access public
     * @var string
     */
    protected $outOfStockMessage;

    static $paramtypesmap = array(
    	"locale" => "Language",
    	"language" => "string",
    	"displayName" => "string",
    	"description" => "string",
    	"salesDescription" => "string",
    	"storeDisplayName" => "string",
    	"storeDescription" => "string",
    	"storeDetailedDescription" => "string",
    	"featuredDescription" => "string",
    	"specialsDescription" => "string",
    	"pageTitle" => "string",
    	"noPriceMessage" => "string",
    	"outOfStockMessage" => "string",
    );

    /**
     * Set locale
     *
     * @param Language $locale
     * @return Translation
     */
    public function setLocale(Language $locale) {
        $this->locale = $locale;
        return $this;
    }

    /**
     * Get locale
     *
     * @return Language
     */
    public function getLocale() {
        return $this->locale;
    }


    /**
     * Set language
     *
     * @param string $language
     * @return Translation
     */
    public function setLanguage($language) {
        $this->language = $language;
        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage() {
        return $this->language;
    }


    /**
     * Set displayName
     *
     * @param string $displayName
     * @return Translation
     */
    public function setDisplayName($displayName) {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * Get displayName
     *
     * @return string
     */
    public function getDisplayName() {
        return $this->displayName;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return Translation
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set salesDescription
     *
     * @param string $salesDescription
     * @return Translation
     */
    public function setSalesDescription($salesDescription) {
        $this->salesDescription = $salesDescription;
        return $this;
    }

    /**
     * Get salesDescription
     *
     * @return string
     */
    public function getSalesDescription() {
        return $this->salesDescription;
    }


    /**
     * Set storeDisplayName
     *
     * @param string $storeDisplayName
     * @return Translation
     */
    public function setStoreDisplayName($storeDisplayName) {
        $this->storeDisplayName = $storeDisplayName;
        return $this;
    }

    /**
     * Get storeDisplayName
     *
     * @return string
     */
    public function getStoreDisplayName() {
        return $this->storeDisplayName;
    }


    /**
     * Set storeDescription
     *
     * @param string $storeDescription
     * @return Translation
     */
    public function setStoreDescription($storeDescription) {
        $this->storeDescription = $storeDescription;
        return $this;
    }

    /**
     * Get storeDescription
     *
     * @return string
     */
    public function getStoreDescription() {
        return $this->storeDescription;
    }


    /**
     * Set storeDetailedDescription
     *
     * @param string $storeDetailedDescription
     * @return Translation
     */
    public function setStoreDetailedDescription($storeDetailedDescription) {
        $this->storeDetailedDescription = $storeDetailedDescription;
        return $this;
    }

    /**
     * Get storeDetailedDescription
     *
     * @return string
     */
    public function getStoreDetailedDescription() {
        return $this->storeDetailedDescription;
    }


    /**
     * Set featuredDescription
     *
     * @param string $featuredDescription
     * @return Translation
     */
    public function setFeaturedDescription($featuredDescription) {
        $this->featuredDescription = $featuredDescription;
        return $this;
    }

    /**
     * Get featuredDescription
     *
     * @return string
     */
    public function getFeaturedDescription() {
        return $this->featuredDescription;
    }


    /**
     * Set specialsDescription
     *
     * @param string $specialsDescription
     * @return Translation
     */
    public function setSpecialsDescription($specialsDescription) {
        $this->specialsDescription = $specialsDescription;
        return $this;
    }

    /**
     * Get specialsDescription
     *
     * @return string
     */
    public function getSpecialsDescription() {
        return $this->specialsDescription;
    }


    /**
     * Set pageTitle
     *
     * @param string $pageTitle
     * @return Translation
     */
    public function setPageTitle($pageTitle) {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string
     */
    public function getPageTitle() {
        return $this->pageTitle;
    }


    /**
     * Set noPriceMessage
     *
     * @param string $noPriceMessage
     * @return Translation
     */
    public function setNoPriceMessage($noPriceMessage) {
        $this->noPriceMessage = $noPriceMessage;
        return $this;
    }

    /**
     * Get noPriceMessage
     *
     * @return string
     */
    public function getNoPriceMessage() {
        return $this->noPriceMessage;
    }


    /**
     * Set outOfStockMessage
     *
     * @param string $outOfStockMessage
     * @return Translation
     */
    public function setOutOfStockMessage($outOfStockMessage) {
        $this->outOfStockMessage = $outOfStockMessage;
        return $this;
    }

    /**
     * Get outOfStockMessage
     *
     * @return string
     */
    public function getOutOfStockMessage() {
        return $this->outOfStockMessage;
    }

}