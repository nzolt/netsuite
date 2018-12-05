<?php

namespace Nzolt\NetSuite;

class SiteCategorySearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnDateField[] $dateViewed
     */
    protected $dateViewed = null;

    /**
     * @var SearchColumnStringField[] $description
     */
    protected $description = null;

    /**
     * @var SearchColumnBooleanField[] $excludeFromSitemap
     */
    protected $excludeFromSitemap = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnStringField[] $fullName
     */
    protected $fullName = null;

    /**
     * @var SearchColumnBooleanField[] $hidden
     */
    protected $hidden = null;

    /**
     * @var SearchColumnLongField[] $hits
     */
    protected $hits = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnStringField[] $longDescription
     */
    protected $longDescription = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnStringField[] $pageTitle
     */
    protected $pageTitle = null;

    /**
     * @var SearchColumnEnumSelectField[] $sitemapPriority
     */
    protected $sitemapPriority = null;

    /**
     * @var SearchColumnStringField[] $urlComponent
     */
    protected $urlComponent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateViewed()
    {
      return $this->dateViewed;
    }

    /**
     * @param SearchColumnDateField[] $dateViewed
     * @return \Nzolt\NetSuite\SiteCategorySearchRowBasic
     */
    public function setDateViewed(array $dateViewed = null)
    {
      $this->dateViewed = $dateViewed;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return \Nzolt\NetSuite\SiteCategorySearchRowBasic
     */
    public function setDescription(array $description = null)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getExcludeFromSitemap()
    {
      return $this->excludeFromSitemap;
    }

    /**
     * @param SearchColumnBooleanField[] $excludeFromSitemap
     * @return \Nzolt\NetSuite\SiteCategorySearchRowBasic
     */
    public function setExcludeFromSitemap(array $excludeFromSitemap = null)
    {
      $this->excludeFromSitemap = $excludeFromSitemap;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\SiteCategorySearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFullName()
    {
      return $this->fullName;
    }

    /**
     * @param SearchColumnStringField[] $fullName
     * @return \Nzolt\NetSuite\SiteCategorySearchRowBasic
     */
    public function setFullName(array $fullName = null)
    {
      $this->fullName = $fullName;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getHidden()
    {
      return $this->hidden;
    }

    /**
     * @param SearchColumnBooleanField[] $hidden
     * @return \Nzolt\NetSuite\SiteCategorySearchRowBasic
     */
    public function setHidden(array $hidden = null)
    {
      $this->hidden = $hidden;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getHits()
    {
      return $this->hits;
    }

    /**
     * @param SearchColumnLongField[] $hits
     * @return \Nzolt\NetSuite\SiteCategorySearchRowBasic
     */
    public function setHits(array $hits = null)
    {
      $this->hits = $hits;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\SiteCategorySearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLongDescription()
    {
      return $this->longDescription;
    }

    /**
     * @param SearchColumnStringField[] $longDescription
     * @return \Nzolt\NetSuite\SiteCategorySearchRowBasic
     */
    public function setLongDescription(array $longDescription = null)
    {
      $this->longDescription = $longDescription;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return \Nzolt\NetSuite\SiteCategorySearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPageTitle()
    {
      return $this->pageTitle;
    }

    /**
     * @param SearchColumnStringField[] $pageTitle
     * @return \Nzolt\NetSuite\SiteCategorySearchRowBasic
     */
    public function setPageTitle(array $pageTitle = null)
    {
      $this->pageTitle = $pageTitle;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSitemapPriority()
    {
      return $this->sitemapPriority;
    }

    /**
     * @param SearchColumnEnumSelectField[] $sitemapPriority
     * @return \Nzolt\NetSuite\SiteCategorySearchRowBasic
     */
    public function setSitemapPriority(array $sitemapPriority = null)
    {
      $this->sitemapPriority = $sitemapPriority;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUrlComponent()
    {
      return $this->urlComponent;
    }

    /**
     * @param SearchColumnStringField[] $urlComponent
     * @return \Nzolt\NetSuite\SiteCategorySearchRowBasic
     */
    public function setUrlComponent(array $urlComponent = null)
    {
      $this->urlComponent = $urlComponent;
      return $this;
    }

}
