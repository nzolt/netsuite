<?php

namespace Nzolt\NetSuite;

class SiteCategoryTranslation
{

    /**
     * @var Language $locale
     */
    protected $locale = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $storeDetailedDescription
     */
    protected $storeDetailedDescription = null;

    /**
     * @var string $pageTitle
     */
    protected $pageTitle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Language
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param Language $locale
     * @return \Nzolt\NetSuite\SiteCategoryTranslation
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \Nzolt\NetSuite\SiteCategoryTranslation
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Nzolt\NetSuite\SiteCategoryTranslation
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\SiteCategoryTranslation
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreDetailedDescription()
    {
      return $this->storeDetailedDescription;
    }

    /**
     * @param string $storeDetailedDescription
     * @return \Nzolt\NetSuite\SiteCategoryTranslation
     */
    public function setStoreDetailedDescription($storeDetailedDescription)
    {
      $this->storeDetailedDescription = $storeDetailedDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getPageTitle()
    {
      return $this->pageTitle;
    }

    /**
     * @param string $pageTitle
     * @return \Nzolt\NetSuite\SiteCategoryTranslation
     */
    public function setPageTitle($pageTitle)
    {
      $this->pageTitle = $pageTitle;
      return $this;
    }

}
