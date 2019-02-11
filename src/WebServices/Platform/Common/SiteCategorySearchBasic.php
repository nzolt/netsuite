<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;

/**
 * SiteCategorySearchBasic
 */
class SiteCategorySearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dateViewed;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $description;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $excludeFromSitemap;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $name;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $sitemapPriority;

    static $paramtypesmap = array(
    	"dateViewed" => "SearchDateField",
    	"description" => "SearchStringField",
    	"excludeFromSitemap" => "SearchBooleanField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"name" => "SearchMultiSelectField",
    	"sitemapPriority" => "SearchEnumMultiSelectField",
    );

    /**
     * Set dateViewed
     *
     * @param SearchDateField $dateViewed
     * @return SiteCategorySearchBasic
     */
    public function setDateViewed(SearchDateField $dateViewed) {
        $this->dateViewed = $dateViewed;
        return $this;
    }

    /**
     * Get dateViewed
     *
     * @return SearchDateField
     */
    public function getDateViewed() {
        return $this->dateViewed;
    }


    /**
     * Set description
     *
     * @param SearchStringField $description
     * @return SiteCategorySearchBasic
     */
    public function setDescription(SearchStringField $description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return SearchStringField
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set excludeFromSitemap
     *
     * @param SearchBooleanField $excludeFromSitemap
     * @return SiteCategorySearchBasic
     */
    public function setExcludeFromSitemap(SearchBooleanField $excludeFromSitemap) {
        $this->excludeFromSitemap = $excludeFromSitemap;
        return $this;
    }

    /**
     * Get excludeFromSitemap
     *
     * @return SearchBooleanField
     */
    public function getExcludeFromSitemap() {
        return $this->excludeFromSitemap;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return SiteCategorySearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return SiteCategorySearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return SiteCategorySearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return SiteCategorySearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set name
     *
     * @param SearchMultiSelectField $name
     * @return SiteCategorySearchBasic
     */
    public function setName(SearchMultiSelectField $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return SearchMultiSelectField
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set sitemapPriority
     *
     * @param SearchEnumMultiSelectField $sitemapPriority
     * @return SiteCategorySearchBasic
     */
    public function setSitemapPriority(SearchEnumMultiSelectField $sitemapPriority) {
        $this->sitemapPriority = $sitemapPriority;
        return $this;
    }

    /**
     * Get sitemapPriority
     *
     * @return SearchEnumMultiSelectField
     */
    public function getSitemapPriority() {
        return $this->sitemapPriority;
    }

}