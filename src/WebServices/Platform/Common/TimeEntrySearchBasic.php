<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * TimeEntrySearchBasic
 */
class TimeEntrySearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $approvalStatus;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $billable;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $billingClass;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $billingStatus;

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
     * @var SearchBooleanField
     */
    protected $isCharged;

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
     * @var SearchMultiSelectField
     */
    protected $nextApprover;

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
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

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
    	"approvalStatus" => "SearchMultiSelectField",
    	"billable" => "SearchBooleanField",
    	"billingClass" => "SearchMultiSelectField",
    	"billingStatus" => "SearchBooleanField",
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
    	"isCharged" => "SearchBooleanField",
    	"item" => "SearchMultiSelectField",
    	"lastModified" => "SearchDateField",
    	"location" => "SearchMultiSelectField",
    	"memo" => "SearchStringField",
    	"nextApprover" => "SearchMultiSelectField",
    	"paidByPayroll" => "SearchBooleanField",
    	"paidExternally" => "SearchBooleanField",
    	"payItem" => "SearchMultiSelectField",
    	"productive" => "SearchBooleanField",
    	"subsidiary" => "SearchMultiSelectField",
    	"type" => "SearchEnumMultiSelectField",
    	"utilized" => "SearchBooleanField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set approvalStatus
     *
     * @param SearchMultiSelectField $approvalStatus
     * @return TimeEntrySearchBasic
     */
    public function setApprovalStatus(SearchMultiSelectField $approvalStatus) {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * Get approvalStatus
     *
     * @return SearchMultiSelectField
     */
    public function getApprovalStatus() {
        return $this->approvalStatus;
    }


    /**
     * Set billable
     *
     * @param SearchBooleanField $billable
     * @return TimeEntrySearchBasic
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
     * Set billingClass
     *
     * @param SearchMultiSelectField $billingClass
     * @return TimeEntrySearchBasic
     */
    public function setBillingClass(SearchMultiSelectField $billingClass) {
        $this->billingClass = $billingClass;
        return $this;
    }

    /**
     * Get billingClass
     *
     * @return SearchMultiSelectField
     */
    public function getBillingClass() {
        return $this->billingClass;
    }


    /**
     * Set billingStatus
     *
     * @param SearchBooleanField $billingStatus
     * @return TimeEntrySearchBasic
     */
    public function setBillingStatus(SearchBooleanField $billingStatus) {
        $this->billingStatus = $billingStatus;
        return $this;
    }

    /**
     * Get billingStatus
     *
     * @return SearchBooleanField
     */
    public function getBillingStatus() {
        return $this->billingStatus;
    }


    /**
     * Set class
     *
     * @param SearchMultiSelectField $class
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * Set isCharged
     *
     * @param SearchBooleanField $isCharged
     * @return TimeEntrySearchBasic
     */
    public function setIsCharged(SearchBooleanField $isCharged) {
        $this->isCharged = $isCharged;
        return $this;
    }

    /**
     * Get isCharged
     *
     * @return SearchBooleanField
     */
    public function getIsCharged() {
        return $this->isCharged;
    }


    /**
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * Set nextApprover
     *
     * @param SearchMultiSelectField $nextApprover
     * @return TimeEntrySearchBasic
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
     * Set paidByPayroll
     *
     * @param SearchBooleanField $paidByPayroll
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return TimeEntrySearchBasic
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
     * Set type
     *
     * @param SearchEnumMultiSelectField $type
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
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