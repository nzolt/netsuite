<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * ItemDemandPlanSearchBasic
 */
class ItemDemandPlanSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $alternateSourceItem;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $analysisDuration;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $demandDate;

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
    protected $item;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $location;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $memo;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $projectionDuration;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $projectionInterval;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $projectionMethod;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $projectionStartDate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantity;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $units;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"alternateSourceItem" => "SearchMultiSelectField",
    	"analysisDuration" => "SearchLongField",
    	"demandDate" => "SearchDateField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"item" => "SearchMultiSelectField",
    	"lastModifiedDate" => "SearchDateField",
    	"location" => "SearchMultiSelectField",
    	"memo" => "SearchStringField",
    	"projectionDuration" => "SearchLongField",
    	"projectionInterval" => "SearchMultiSelectField",
    	"projectionMethod" => "SearchEnumMultiSelectField",
    	"projectionStartDate" => "SearchDateField",
    	"quantity" => "SearchDoubleField",
    	"subsidiary" => "SearchMultiSelectField",
    	"units" => "SearchMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set alternateSourceItem
     *
     * @param SearchMultiSelectField $alternateSourceItem
     * @return ItemDemandPlanSearchBasic
     */
    public function setAlternateSourceItem(SearchMultiSelectField $alternateSourceItem) {
        $this->alternateSourceItem = $alternateSourceItem;
        return $this;
    }

    /**
     * Get alternateSourceItem
     *
     * @return SearchMultiSelectField
     */
    public function getAlternateSourceItem() {
        return $this->alternateSourceItem;
    }


    /**
     * Set analysisDuration
     *
     * @param SearchLongField $analysisDuration
     * @return ItemDemandPlanSearchBasic
     */
    public function setAnalysisDuration(SearchLongField $analysisDuration) {
        $this->analysisDuration = $analysisDuration;
        return $this;
    }

    /**
     * Get analysisDuration
     *
     * @return SearchLongField
     */
    public function getAnalysisDuration() {
        return $this->analysisDuration;
    }


    /**
     * Set demandDate
     *
     * @param SearchDateField $demandDate
     * @return ItemDemandPlanSearchBasic
     */
    public function setDemandDate(SearchDateField $demandDate) {
        $this->demandDate = $demandDate;
        return $this;
    }

    /**
     * Get demandDate
     *
     * @return SearchDateField
     */
    public function getDemandDate() {
        return $this->demandDate;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return ItemDemandPlanSearchBasic
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
     * @return ItemDemandPlanSearchBasic
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
     * @return ItemDemandPlanSearchBasic
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
     * @return ItemDemandPlanSearchBasic
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
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return ItemDemandPlanSearchBasic
     */
    public function setItem(SearchMultiSelectField $item) {
        $this->item = $item;
        return $this;
    }

    /**
     * Get item
     *
     * @return SearchMultiSelectField
     */
    public function getItem() {
        return $this->item;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return ItemDemandPlanSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return SearchDateField
     */
    public function getLastModifiedDate() {
        return $this->lastModifiedDate;
    }


    /**
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return ItemDemandPlanSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return SearchMultiSelectField
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set memo
     *
     * @param SearchStringField $memo
     * @return ItemDemandPlanSearchBasic
     */
    public function setMemo(SearchStringField $memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return SearchStringField
     */
    public function getMemo() {
        return $this->memo;
    }


    /**
     * Set projectionDuration
     *
     * @param SearchLongField $projectionDuration
     * @return ItemDemandPlanSearchBasic
     */
    public function setProjectionDuration(SearchLongField $projectionDuration) {
        $this->projectionDuration = $projectionDuration;
        return $this;
    }

    /**
     * Get projectionDuration
     *
     * @return SearchLongField
     */
    public function getProjectionDuration() {
        return $this->projectionDuration;
    }


    /**
     * Set projectionInterval
     *
     * @param SearchMultiSelectField $projectionInterval
     * @return ItemDemandPlanSearchBasic
     */
    public function setProjectionInterval(SearchMultiSelectField $projectionInterval) {
        $this->projectionInterval = $projectionInterval;
        return $this;
    }

    /**
     * Get projectionInterval
     *
     * @return SearchMultiSelectField
     */
    public function getProjectionInterval() {
        return $this->projectionInterval;
    }


    /**
     * Set projectionMethod
     *
     * @param SearchEnumMultiSelectField $projectionMethod
     * @return ItemDemandPlanSearchBasic
     */
    public function setProjectionMethod(SearchEnumMultiSelectField $projectionMethod) {
        $this->projectionMethod = $projectionMethod;
        return $this;
    }

    /**
     * Get projectionMethod
     *
     * @return SearchEnumMultiSelectField
     */
    public function getProjectionMethod() {
        return $this->projectionMethod;
    }


    /**
     * Set projectionStartDate
     *
     * @param SearchDateField $projectionStartDate
     * @return ItemDemandPlanSearchBasic
     */
    public function setProjectionStartDate(SearchDateField $projectionStartDate) {
        $this->projectionStartDate = $projectionStartDate;
        return $this;
    }

    /**
     * Get projectionStartDate
     *
     * @return SearchDateField
     */
    public function getProjectionStartDate() {
        return $this->projectionStartDate;
    }


    /**
     * Set quantity
     *
     * @param SearchDoubleField $quantity
     * @return ItemDemandPlanSearchBasic
     */
    public function setQuantity(SearchDoubleField $quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return SearchDoubleField
     */
    public function getQuantity() {
        return $this->quantity;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return ItemDemandPlanSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary) {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return SearchMultiSelectField
     */
    public function getSubsidiary() {
        return $this->subsidiary;
    }


    /**
     * Set units
     *
     * @param SearchMultiSelectField $units
     * @return ItemDemandPlanSearchBasic
     */
    public function setUnits(SearchMultiSelectField $units) {
        $this->units = $units;
        return $this;
    }

    /**
     * Get units
     *
     * @return SearchMultiSelectField
     */
    public function getUnits() {
        return $this->units;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return ItemDemandPlanSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}