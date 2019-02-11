<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * ManufacturingRoutingSearchBasic
 */
class ManufacturingRoutingSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $autoCalculateLag;

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
     * @var SearchBooleanField
     */
    protected $isDefault;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isInactive;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $item;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $lagAmount;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $lagType;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $lagUnits;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $location;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $manufacturingCostTemplate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $manufacturingWorkCenter;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $memo;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $operationName;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $operationYield;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $runRate;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $sequence;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $setupTime;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"autoCalculateLag" => "SearchBooleanField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isDefault" => "SearchBooleanField",
    	"isInactive" => "SearchBooleanField",
    	"subsidiary" => "SearchMultiSelectField",
    	"item" => "SearchMultiSelectField",
    	"lagAmount" => "SearchDoubleField",
    	"lagType" => "SearchEnumMultiSelectField",
    	"lagUnits" => "SearchStringField",
    	"location" => "SearchMultiSelectField",
    	"manufacturingCostTemplate" => "SearchMultiSelectField",
    	"manufacturingWorkCenter" => "SearchMultiSelectField",
    	"memo" => "SearchStringField",
    	"name" => "SearchStringField",
    	"operationName" => "SearchStringField",
    	"operationYield" => "SearchDoubleField",
    	"runRate" => "SearchDoubleField",
    	"sequence" => "SearchLongField",
    	"setupTime" => "SearchDoubleField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set autoCalculateLag
     *
     * @param SearchBooleanField $autoCalculateLag
     * @return ManufacturingRoutingSearchBasic
     */
    public function setAutoCalculateLag(SearchBooleanField $autoCalculateLag) {
        $this->autoCalculateLag = $autoCalculateLag;
        return $this;
    }

    /**
     * Get autoCalculateLag
     *
     * @return SearchBooleanField
     */
    public function getAutoCalculateLag() {
        return $this->autoCalculateLag;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return ManufacturingRoutingSearchBasic
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
     * @return ManufacturingRoutingSearchBasic
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
     * @return ManufacturingRoutingSearchBasic
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
     * @return ManufacturingRoutingSearchBasic
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
     * Set isDefault
     *
     * @param SearchBooleanField $isDefault
     * @return ManufacturingRoutingSearchBasic
     */
    public function setIsDefault(SearchBooleanField $isDefault) {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Get isDefault
     *
     * @return SearchBooleanField
     */
    public function getIsDefault() {
        return $this->isDefault;
    }


    /**
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return ManufacturingRoutingSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return SearchBooleanField
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return ManufacturingRoutingSearchBasic
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
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return ManufacturingRoutingSearchBasic
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
     * Set lagAmount
     *
     * @param SearchDoubleField $lagAmount
     * @return ManufacturingRoutingSearchBasic
     */
    public function setLagAmount(SearchDoubleField $lagAmount) {
        $this->lagAmount = $lagAmount;
        return $this;
    }

    /**
     * Get lagAmount
     *
     * @return SearchDoubleField
     */
    public function getLagAmount() {
        return $this->lagAmount;
    }


    /**
     * Set lagType
     *
     * @param SearchEnumMultiSelectField $lagType
     * @return ManufacturingRoutingSearchBasic
     */
    public function setLagType(SearchEnumMultiSelectField $lagType) {
        $this->lagType = $lagType;
        return $this;
    }

    /**
     * Get lagType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getLagType() {
        return $this->lagType;
    }


    /**
     * Set lagUnits
     *
     * @param SearchStringField $lagUnits
     * @return ManufacturingRoutingSearchBasic
     */
    public function setLagUnits(SearchStringField $lagUnits) {
        $this->lagUnits = $lagUnits;
        return $this;
    }

    /**
     * Get lagUnits
     *
     * @return SearchStringField
     */
    public function getLagUnits() {
        return $this->lagUnits;
    }


    /**
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return ManufacturingRoutingSearchBasic
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
     * Set manufacturingCostTemplate
     *
     * @param SearchMultiSelectField $manufacturingCostTemplate
     * @return ManufacturingRoutingSearchBasic
     */
    public function setManufacturingCostTemplate(SearchMultiSelectField $manufacturingCostTemplate) {
        $this->manufacturingCostTemplate = $manufacturingCostTemplate;
        return $this;
    }

    /**
     * Get manufacturingCostTemplate
     *
     * @return SearchMultiSelectField
     */
    public function getManufacturingCostTemplate() {
        return $this->manufacturingCostTemplate;
    }


    /**
     * Set manufacturingWorkCenter
     *
     * @param SearchMultiSelectField $manufacturingWorkCenter
     * @return ManufacturingRoutingSearchBasic
     */
    public function setManufacturingWorkCenter(SearchMultiSelectField $manufacturingWorkCenter) {
        $this->manufacturingWorkCenter = $manufacturingWorkCenter;
        return $this;
    }

    /**
     * Get manufacturingWorkCenter
     *
     * @return SearchMultiSelectField
     */
    public function getManufacturingWorkCenter() {
        return $this->manufacturingWorkCenter;
    }


    /**
     * Set memo
     *
     * @param SearchStringField $memo
     * @return ManufacturingRoutingSearchBasic
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
     * Set name
     *
     * @param SearchStringField $name
     * @return ManufacturingRoutingSearchBasic
     */
    public function setName(SearchStringField $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return SearchStringField
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set operationName
     *
     * @param SearchStringField $operationName
     * @return ManufacturingRoutingSearchBasic
     */
    public function setOperationName(SearchStringField $operationName) {
        $this->operationName = $operationName;
        return $this;
    }

    /**
     * Get operationName
     *
     * @return SearchStringField
     */
    public function getOperationName() {
        return $this->operationName;
    }


    /**
     * Set operationYield
     *
     * @param SearchDoubleField $operationYield
     * @return ManufacturingRoutingSearchBasic
     */
    public function setOperationYield(SearchDoubleField $operationYield) {
        $this->operationYield = $operationYield;
        return $this;
    }

    /**
     * Get operationYield
     *
     * @return SearchDoubleField
     */
    public function getOperationYield() {
        return $this->operationYield;
    }


    /**
     * Set runRate
     *
     * @param SearchDoubleField $runRate
     * @return ManufacturingRoutingSearchBasic
     */
    public function setRunRate(SearchDoubleField $runRate) {
        $this->runRate = $runRate;
        return $this;
    }

    /**
     * Get runRate
     *
     * @return SearchDoubleField
     */
    public function getRunRate() {
        return $this->runRate;
    }


    /**
     * Set sequence
     *
     * @param SearchLongField $sequence
     * @return ManufacturingRoutingSearchBasic
     */
    public function setSequence(SearchLongField $sequence) {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Get sequence
     *
     * @return SearchLongField
     */
    public function getSequence() {
        return $this->sequence;
    }


    /**
     * Set setupTime
     *
     * @param SearchDoubleField $setupTime
     * @return ManufacturingRoutingSearchBasic
     */
    public function setSetupTime(SearchDoubleField $setupTime) {
        $this->setupTime = $setupTime;
        return $this;
    }

    /**
     * Get setupTime
     *
     * @return SearchDoubleField
     */
    public function getSetupTime() {
        return $this->setupTime;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return ManufacturingRoutingSearchBasic
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