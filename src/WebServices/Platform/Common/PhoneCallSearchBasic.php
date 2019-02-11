<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * PhoneCallSearchBasic
 */
class PhoneCallSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $assigned;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $company;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $completedDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $contact;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $createdBy;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $createdDate;

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
    protected $isPrivate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $owner;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $phone;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $priority;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $status;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $title;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"assigned" => "SearchMultiSelectField",
    	"company" => "SearchMultiSelectField",
    	"completedDate" => "SearchDateField",
    	"contact" => "SearchMultiSelectField",
    	"createdBy" => "SearchMultiSelectField",
    	"createdDate" => "SearchDateField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isPrivate" => "SearchBooleanField",
    	"lastModifiedDate" => "SearchDateField",
    	"owner" => "SearchBooleanField",
    	"phone" => "SearchStringField",
    	"priority" => "SearchEnumMultiSelectField",
    	"startDate" => "SearchDateField",
    	"status" => "SearchEnumMultiSelectField",
    	"title" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set assigned
     *
     * @param SearchMultiSelectField $assigned
     * @return PhoneCallSearchBasic
     */
    public function setAssigned(SearchMultiSelectField $assigned) {
        $this->assigned = $assigned;
        return $this;
    }

    /**
     * Get assigned
     *
     * @return SearchMultiSelectField
     */
    public function getAssigned() {
        return $this->assigned;
    }


    /**
     * Set company
     *
     * @param SearchMultiSelectField $company
     * @return PhoneCallSearchBasic
     */
    public function setCompany(SearchMultiSelectField $company) {
        $this->company = $company;
        return $this;
    }

    /**
     * Get company
     *
     * @return SearchMultiSelectField
     */
    public function getCompany() {
        return $this->company;
    }


    /**
     * Set completedDate
     *
     * @param SearchDateField $completedDate
     * @return PhoneCallSearchBasic
     */
    public function setCompletedDate(SearchDateField $completedDate) {
        $this->completedDate = $completedDate;
        return $this;
    }

    /**
     * Get completedDate
     *
     * @return SearchDateField
     */
    public function getCompletedDate() {
        return $this->completedDate;
    }


    /**
     * Set contact
     *
     * @param SearchMultiSelectField $contact
     * @return PhoneCallSearchBasic
     */
    public function setContact(SearchMultiSelectField $contact) {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return SearchMultiSelectField
     */
    public function getContact() {
        return $this->contact;
    }


    /**
     * Set createdBy
     *
     * @param SearchMultiSelectField $createdBy
     * @return PhoneCallSearchBasic
     */
    public function setCreatedBy(SearchMultiSelectField $createdBy) {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return SearchMultiSelectField
     */
    public function getCreatedBy() {
        return $this->createdBy;
    }


    /**
     * Set createdDate
     *
     * @param SearchDateField $createdDate
     * @return PhoneCallSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate) {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return SearchDateField
     */
    public function getCreatedDate() {
        return $this->createdDate;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
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
     * Set isPrivate
     *
     * @param SearchBooleanField $isPrivate
     * @return PhoneCallSearchBasic
     */
    public function setIsPrivate(SearchBooleanField $isPrivate) {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * Get isPrivate
     *
     * @return SearchBooleanField
     */
    public function getIsPrivate() {
        return $this->isPrivate;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return PhoneCallSearchBasic
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
     * Set owner
     *
     * @param SearchBooleanField $owner
     * @return PhoneCallSearchBasic
     */
    public function setOwner(SearchBooleanField $owner) {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Get owner
     *
     * @return SearchBooleanField
     */
    public function getOwner() {
        return $this->owner;
    }


    /**
     * Set phone
     *
     * @param SearchStringField $phone
     * @return PhoneCallSearchBasic
     */
    public function setPhone(SearchStringField $phone) {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return SearchStringField
     */
    public function getPhone() {
        return $this->phone;
    }


    /**
     * Set priority
     *
     * @param SearchEnumMultiSelectField $priority
     * @return PhoneCallSearchBasic
     */
    public function setPriority(SearchEnumMultiSelectField $priority) {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Get priority
     *
     * @return SearchEnumMultiSelectField
     */
    public function getPriority() {
        return $this->priority;
    }


    /**
     * Set startDate
     *
     * @param SearchDateField $startDate
     * @return PhoneCallSearchBasic
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
     * Set status
     *
     * @param SearchEnumMultiSelectField $status
     * @return PhoneCallSearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return SearchEnumMultiSelectField
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set title
     *
     * @param SearchStringField $title
     * @return PhoneCallSearchBasic
     */
    public function setTitle(SearchStringField $title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return SearchStringField
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return PhoneCallSearchBasic
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