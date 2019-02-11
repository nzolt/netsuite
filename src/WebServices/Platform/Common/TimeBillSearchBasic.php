<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * TimeBillSearchBasic
 */
class TimeBillSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $approved;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $billable;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $class;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $customer;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $date;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dateCreated;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $department;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $duration;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $employee;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $exempt;

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
    protected $lastModified;

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
     * @var SearchBooleanField
     */
    protected $paidByPayroll;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $paidExternally;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $payItem;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $productive;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $status;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $temporaryLocalJurisdiction;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $temporaryStateJurisdiction;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $type;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $utilized;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"approved" => "SearchBooleanField",
    	"billable" => "SearchBooleanField",
    	"class" => "SearchMultiSelectField",
    	"customer" => "SearchMultiSelectField",
    	"date" => "SearchDateField",
    	"dateCreated" => "SearchDateField",
    	"department" => "SearchMultiSelectField",
    	"duration" => "SearchDoubleField",
    	"employee" => "SearchMultiSelectField",
    	"exempt" => "SearchBooleanField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"item" => "SearchMultiSelectField",
    	"lastModified" => "SearchDateField",
    	"location" => "SearchMultiSelectField",
    	"memo" => "SearchStringField",
    	"paidByPayroll" => "SearchBooleanField",
    	"paidExternally" => "SearchBooleanField",
    	"payItem" => "SearchMultiSelectField",
    	"productive" => "SearchBooleanField",
    	"status" => "SearchBooleanField",
    	"subsidiary" => "SearchMultiSelectField",
    	"temporaryLocalJurisdiction" => "SearchMultiSelectField",
    	"temporaryStateJurisdiction" => "SearchMultiSelectField",
    	"type" => "SearchEnumMultiSelectField",
    	"utilized" => "SearchBooleanField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set approved
     *
     * @param SearchBooleanField $approved
     * @return TimeBillSearchBasic
     */
    public function setApproved(SearchBooleanField $approved) {
        $this->approved = $approved;
        return $this;
    }

    /**
     * Get approved
     *
     * @return SearchBooleanField
     */
    public function getApproved() {
        return $this->approved;
    }


    /**
     * Set billable
     *
     * @param SearchBooleanField $billable
     * @return TimeBillSearchBasic
     */
    public function setBillable(SearchBooleanField $billable) {
        $this->billable = $billable;
        return $this;
    }

    /**
     * Get billable
     *
     * @return SearchBooleanField
     */
    public function getBillable() {
        return $this->billable;
    }


    /**
     * Set class
     *
     * @param SearchMultiSelectField $class
     * @return TimeBillSearchBasic
     */
    public function setClass(SearchMultiSelectField $class) {
        $this->class = $class;
        return $this;
    }

    /**
     * Get class
     *
     * @return SearchMultiSelectField
     */
    public function getClass() {
        return $this->class;
    }


    /**
     * Set customer
     *
     * @param SearchMultiSelectField $customer
     * @return TimeBillSearchBasic
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
     * Set date
     *
     * @param SearchDateField $date
     * @return TimeBillSearchBasic
     */
    public function setDate(SearchDateField $date) {
        $this->date = $date;
        return $this;
    }

    /**
     * Get date
     *
     * @return SearchDateField
     */
    public function getDate() {
        return $this->date;
    }


    /**
     * Set dateCreated
     *
     * @param SearchDateField $dateCreated
     * @return TimeBillSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated) {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return SearchDateField
     */
    public function getDateCreated() {
        return $this->dateCreated;
    }


    /**
     * Set department
     *
     * @param SearchMultiSelectField $department
     * @return TimeBillSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department) {
        $this->department = $department;
        return $this;
    }

    /**
     * Get department
     *
     * @return SearchMultiSelectField
     */
    public function getDepartment() {
        return $this->department;
    }


    /**
     * Set duration
     *
     * @param SearchDoubleField $duration
     * @return TimeBillSearchBasic
     */
    public function setDuration(SearchDoubleField $duration) {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Get duration
     *
     * @return SearchDoubleField
     */
    public function getDuration() {
        return $this->duration;
    }


    /**
     * Set employee
     *
     * @param SearchMultiSelectField $employee
     * @return TimeBillSearchBasic
     */
    public function setEmployee(SearchMultiSelectField $employee) {
        $this->employee = $employee;
        return $this;
    }

    /**
     * Get employee
     *
     * @return SearchMultiSelectField
     */
    public function getEmployee() {
        return $this->employee;
    }


    /**
     * Set exempt
     *
     * @param SearchBooleanField $exempt
     * @return TimeBillSearchBasic
     */
    public function setExempt(SearchBooleanField $exempt) {
        $this->exempt = $exempt;
        return $this;
    }

    /**
     * Get exempt
     *
     * @return SearchBooleanField
     */
    public function getExempt() {
        return $this->exempt;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return TimeBillSearchBasic
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
     * @return TimeBillSearchBasic
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
     * @return TimeBillSearchBasic
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
     * @return TimeBillSearchBasic
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
     * @return TimeBillSearchBasic
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
     * Set lastModified
     *
     * @param SearchDateField $lastModified
     * @return TimeBillSearchBasic
     */
    public function setLastModified(SearchDateField $lastModified) {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * Get lastModified
     *
     * @return SearchDateField
     */
    public function getLastModified() {
        return $this->lastModified;
    }


    /**
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return TimeBillSearchBasic
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
     * @return TimeBillSearchBasic
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
     * Set paidByPayroll
     *
     * @param SearchBooleanField $paidByPayroll
     * @return TimeBillSearchBasic
     */
    public function setPaidByPayroll(SearchBooleanField $paidByPayroll) {
        $this->paidByPayroll = $paidByPayroll;
        return $this;
    }

    /**
     * Get paidByPayroll
     *
     * @return SearchBooleanField
     */
    public function getPaidByPayroll() {
        return $this->paidByPayroll;
    }


    /**
     * Set paidExternally
     *
     * @param SearchBooleanField $paidExternally
     * @return TimeBillSearchBasic
     */
    public function setPaidExternally(SearchBooleanField $paidExternally) {
        $this->paidExternally = $paidExternally;
        return $this;
    }

    /**
     * Get paidExternally
     *
     * @return SearchBooleanField
     */
    public function getPaidExternally() {
        return $this->paidExternally;
    }


    /**
     * Set payItem
     *
     * @param SearchMultiSelectField $payItem
     * @return TimeBillSearchBasic
     */
    public function setPayItem(SearchMultiSelectField $payItem) {
        $this->payItem = $payItem;
        return $this;
    }

    /**
     * Get payItem
     *
     * @return SearchMultiSelectField
     */
    public function getPayItem() {
        return $this->payItem;
    }


    /**
     * Set productive
     *
     * @param SearchBooleanField $productive
     * @return TimeBillSearchBasic
     */
    public function setProductive(SearchBooleanField $productive) {
        $this->productive = $productive;
        return $this;
    }

    /**
     * Get productive
     *
     * @return SearchBooleanField
     */
    public function getProductive() {
        return $this->productive;
    }


    /**
     * Set status
     *
     * @param SearchBooleanField $status
     * @return TimeBillSearchBasic
     */
    public function setStatus(SearchBooleanField $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return SearchBooleanField
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return TimeBillSearchBasic
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
     * Set temporaryLocalJurisdiction
     *
     * @param SearchMultiSelectField $temporaryLocalJurisdiction
     * @return TimeBillSearchBasic
     */
    public function setTemporaryLocalJurisdiction(SearchMultiSelectField $temporaryLocalJurisdiction) {
        $this->temporaryLocalJurisdiction = $temporaryLocalJurisdiction;
        return $this;
    }

    /**
     * Get temporaryLocalJurisdiction
     *
     * @return SearchMultiSelectField
     */
    public function getTemporaryLocalJurisdiction() {
        return $this->temporaryLocalJurisdiction;
    }


    /**
     * Set temporaryStateJurisdiction
     *
     * @param SearchMultiSelectField $temporaryStateJurisdiction
     * @return TimeBillSearchBasic
     */
    public function setTemporaryStateJurisdiction(SearchMultiSelectField $temporaryStateJurisdiction) {
        $this->temporaryStateJurisdiction = $temporaryStateJurisdiction;
        return $this;
    }

    /**
     * Get temporaryStateJurisdiction
     *
     * @return SearchMultiSelectField
     */
    public function getTemporaryStateJurisdiction() {
        return $this->temporaryStateJurisdiction;
    }


    /**
     * Set type
     *
     * @param SearchEnumMultiSelectField $type
     * @return TimeBillSearchBasic
     */
    public function setType(SearchEnumMultiSelectField $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return SearchEnumMultiSelectField
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set utilized
     *
     * @param SearchBooleanField $utilized
     * @return TimeBillSearchBasic
     */
    public function setUtilized(SearchBooleanField $utilized) {
        $this->utilized = $utilized;
        return $this;
    }

    /**
     * Get utilized
     *
     * @return SearchBooleanField
     */
    public function getUtilized() {
        return $this->utilized;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return TimeBillSearchBasic
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