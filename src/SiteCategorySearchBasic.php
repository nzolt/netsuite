<?php

namespace Nzolt\NetSuite;

class SiteCategorySearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchDateField $dateViewed
     */
    protected $dateViewed = null;

    /**
     * @var SearchStringField $description
     */
    protected $description = null;

    /**
     * @var SearchBooleanField $excludeFromSitemap
     */
    protected $excludeFromSitemap = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchMultiSelectField $name
     */
    protected $name = null;

    /**
     * @var SearchEnumMultiSelectField $sitemapPriority
     */
    protected $sitemapPriority = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchDateField
     */
    public function getDateViewed()
    {
      return $this->dateViewed;
    }

    /**
     * @param SearchDateField $dateViewed
     * @return \Nzolt\NetSuite\SiteCategorySearchBasic
     */
    public function setDateViewed($dateViewed)
    {
      $this->dateViewed = $dateViewed;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchStringField $description
     * @return \Nzolt\NetSuite\SiteCategorySearchBasic
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getExcludeFromSitemap()
    {
      return $this->excludeFromSitemap;
    }

    /**
     * @param SearchBooleanField $excludeFromSitemap
     * @return \Nzolt\NetSuite\SiteCategorySearchBasic
     */
    public function setExcludeFromSitemap($excludeFromSitemap)
    {
      $this->excludeFromSitemap = $excludeFromSitemap;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\SiteCategorySearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\SiteCategorySearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\SiteCategorySearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\SiteCategorySearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchMultiSelectField $name
     * @return \Nzolt\NetSuite\SiteCategorySearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSitemapPriority()
    {
      return $this->sitemapPriority;
    }

    /**
     * @param SearchEnumMultiSelectField $sitemapPriority
     * @return \Nzolt\NetSuite\SiteCategorySearchBasic
     */
    public function setSitemapPriority($sitemapPriority)
    {
      $this->sitemapPriority = $sitemapPriority;
      return $this;
    }

}
