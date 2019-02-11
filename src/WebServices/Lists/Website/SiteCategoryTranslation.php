<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Website;

use Nzolt\NetSuite\WebServices\Platform\Common\Types\Language;

/**
 * SiteCategoryTranslation
 */
class SiteCategoryTranslation {

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
    protected $storeDetailedDescription;

    /**
     * @access public
     * @var string
     */
    protected $pageTitle;

    static $paramtypesmap = array(
    	"locale" => "Language",
    	"language" => "string",
    	"displayName" => "string",
    	"description" => "string",
    	"storeDetailedDescription" => "string",
    	"pageTitle" => "string",
    );

    /**
     * Set locale
     *
     * @param Language $locale
     * @return SiteCategoryTranslation
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
     * @return SiteCategoryTranslation
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
     * @return SiteCategoryTranslation
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
     * @return SiteCategoryTranslation
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
     * Set storeDetailedDescription
     *
     * @param string $storeDetailedDescription
     * @return SiteCategoryTranslation
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
     * Set pageTitle
     *
     * @param string $pageTitle
     * @return SiteCategoryTranslation
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

}