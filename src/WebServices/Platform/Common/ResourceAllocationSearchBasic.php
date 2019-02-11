<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * ResourceAllocationSearchBasic
 */
class ResourceAllocationSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $allocationType;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $allocationUnit;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $approvalStatus;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $customer;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $endDate;

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
    protected $nextApprover;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $notes;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $numberHours;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $percentOfTime;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $project;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $requestedBy;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $resource;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDate;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"allocationType" => "SearchMultiSelectField",
    	"allocationUnit" => "SearchEnumMultiSelectField",
    	"approvalStatus" => "SearchEnumMultiSelectField",
    	"customer" => "SearchMultiSelectField",
    	"endDate" => "SearchDateField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"nextApprover" => "SearchMultiSelectField",
    	"notes" => "SearchStringField",
    	"numberHours" => "SearchDoubleField",
    	"percentOfTime" => "SearchDoubleField",
    	"project" => "SearchMultiSelectField",
    	"requestedBy" => "SearchMultiSelectField",
    	"resource" => "SearchMultiSelectField",
    	"startDate" => "SearchDateField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set allocationType
     *
     * @param SearchMultiSelectField $allocationType
     * @return ResourceAllocationSearchBasic
     */
    public function setAllocationType(SearchMultiSelectField $allocationType) {
        $this->allocationType = $allocationType;
        return $this;
    }

    /**
     * Get allocationType
     *
     * @return SearchMultiSelectField
     */
    public function getAllocationType() {
        return $this->allocationType;
    }


    /**
     * Set allocationUnit
     *
     * @param SearchEnumMultiSelectField $allocationUnit
     * @return ResourceAllocationSearchBasic
     */
    public function setAllocationUnit(SearchEnumMultiSelectField $allocationUnit) {
        $this->allocationUnit = $allocationUnit;
        return $this;
    }

    /**
     * Get allocationUnit
     *
     * @return SearchEnumMultiSelectField
     */
    public function getAllocationUnit() {
        return $this->allocationUnit;
    }


    /**
     * Set approvalStatus
     *
     * @param SearchEnumMultiSelectField $approvalStatus
     * @return ResourceAllocationSearchBasic
     */
    public function setApprovalStatus(SearchEnumMultiSelectField $approvalStatus) {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * Get approvalStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getApprovalStatus() {
        return $this->approvalStatus;
    }


    /**
     * Set customer
     *
     * @param SearchMultiSelectField $customer
     * @return ResourceAllocationSearchBasic
     */
    public function setCustomer(SearchMultiSelectField $customer) {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Get customer
     *
     * @return SearchMultiSelectField
     */
    public function getCustomer() {
        return $this->customer;
    }


    /**
     * Set endDate
     *
     * @param SearchDateField $endDate
     * @return ResourceAllocationSearchBasic
     */
    public function setEndDate(SearchDateField $endDate) {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Get endDate
     *
     * @return SearchDateField
     */
    public function getEndDate() {
        return $this->endDate;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return ResourceAllocationSearchBasic
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
     * @return ResourceAllocationSearchBasic
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
     * @return ResourceAllocationSearchBasic
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
     * @return ResourceAllocationSearchBasic
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
     * Set nextApprover
     *
     * @param SearchMultiSelectField $nextApprover
     * @return ResourceAllocationSearchBasic
     */
    public function setNextApprover(SearchMultiSelectField $nextApprover) {
        $this->nextApprover = $nextApprover;
        return $this;
    }

    /**
     * Get nextApprover
     *
     * @return SearchMultiSelectField
     */
    public function getNextApprover() {
        return $this->nextApprover;
    }


    /**
     * Set notes
     *
     * @param SearchStringField $notes
     * @return ResourceAllocationSearchBasic
     */
    public function setNotes(SearchStringField $notes) {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Get notes
     *
     * @return SearchStringField
     */
    public function getNotes() {
        return $this->notes;
    }


    /**
     * Set numberHours
     *
     * @param SearchDoubleField $numberHours
     * @return ResourceAllocationSearchBasic
     */
    public function setNumberHours(SearchDoubleField $numberHours) {
        $this->numberHours = $numberHours;
        return $this;
    }

    /**
     * Get numberHours
     *
     * @return SearchDoubleField
     */
    public function getNumberHours() {
        return $this->numberHours;
    }


    /**
     * Set percentOfTime
     *
     * @param SearchDoubleField $percentOfTime
     * @return ResourceAllocationSearchBasic
     */
    public function setPercentOfTime(SearchDoubleField $percentOfTime) {
        $this->percentOfTime = $percentOfTime;
        return $this;
    }

    /**
     * Get percentOfTime
     *
     * @return SearchDoubleField
     */
    public function getPercentOfTime() {
        return $this->percentOfTime;
    }


    /**
     * Set project
     *
     * @param SearchMultiSelectField $project
     * @return ResourceAllocationSearchBasic
     */
    public function setProject(SearchMultiSelectField $project) {
        $this->project = $project;
        return $this;
    }

    /**
     * Get project
     *
     * @return SearchMultiSelectField
     */
    public function getProject() {
        return $this->project;
    }


    /**
     * Set requestedBy
     *
     * @param SearchMultiSelectField $requestedBy
     * @return ResourceAllocationSearchBasic
     */
    public function setRequestedBy(SearchMultiSelectField $requestedBy) {
        $this->requestedBy = $requestedBy;
        return $this;
    }

    /**
     * Get requestedBy
     *
     * @return SearchMultiSelectField
     */
    public function getRequestedBy() {
        return $this->requestedBy;
    }


    /**
     * Set resource
     *
     * @param SearchMultiSelectField $resource
     * @return ResourceAllocationSearchBasic
     */
    public function setResource(SearchMultiSelectField $resource) {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Get resource
     *
     * @return SearchMultiSelectField
     */
    public function getResource() {
        return $this->resource;
    }


    /**
     * Set startDate
     *
     * @param SearchDateField $startDate
     * @return ResourceAllocationSearchBasic
     */
    public function setStartDate(SearchDateField $startDate) {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Get startDate
     *
     * @return SearchDateField
     */
    public function getStartDate() {
        return $this->startDate;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return ResourceAllocationSearchBasic
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