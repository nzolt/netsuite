<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * TaskSearchBasic
 */
class TaskSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $actualTime;

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
     * @var SearchDateField
     */
    protected $createdDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $endDate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedTime;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedTimeOverride;

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
    protected $isJobSummaryTask;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isJobTask;

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
     * @var SearchLongField
     */
    protected $milestone;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $owner;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $percentComplete;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $percentTimeComplete;

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
     * @var SearchDoubleField
     */
    protected $timeRemaining;

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
    	"actualTime" => "SearchDoubleField",
    	"assigned" => "SearchMultiSelectField",
    	"company" => "SearchMultiSelectField",
    	"completedDate" => "SearchDateField",
    	"contact" => "SearchMultiSelectField",
    	"createdDate" => "SearchDateField",
    	"endDate" => "SearchDateField",
    	"estimatedTime" => "SearchDoubleField",
    	"estimatedTimeOverride" => "SearchDoubleField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isJobSummaryTask" => "SearchBooleanField",
    	"isJobTask" => "SearchBooleanField",
    	"isPrivate" => "SearchBooleanField",
    	"lastModifiedDate" => "SearchDateField",
    	"milestone" => "SearchLongField",
    	"owner" => "SearchMultiSelectField",
    	"percentComplete" => "SearchLongField",
    	"percentTimeComplete" => "SearchLongField",
    	"priority" => "SearchEnumMultiSelectField",
    	"startDate" => "SearchDateField",
    	"status" => "SearchEnumMultiSelectField",
    	"timeRemaining" => "SearchDoubleField",
    	"title" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set actualTime
     *
     * @param SearchDoubleField $actualTime
     * @return TaskSearchBasic
     */
    public function setActualTime(SearchDoubleField $actualTime) {
        $this->actualTime = $actualTime;
        return $this;
    }

    /**
     * Get actualTime
     *
     * @return SearchDoubleField
     */
    public function getActualTime() {
        return $this->actualTime;
    }


    /**
     * Set assigned
     *
     * @param SearchMultiSelectField $assigned
     * @return TaskSearchBasic
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
     * @return TaskSearchBasic
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
     * @return TaskSearchBasic
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
     * @return TaskSearchBasic
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
     * Set createdDate
     *
     * @param SearchDateField $createdDate
     * @return TaskSearchBasic
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
     * Set endDate
     *
     * @param SearchDateField $endDate
     * @return TaskSearchBasic
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
     * Set estimatedTime
     *
     * @param SearchDoubleField $estimatedTime
     * @return TaskSearchBasic
     */
    public function setEstimatedTime(SearchDoubleField $estimatedTime) {
        $this->estimatedTime = $estimatedTime;
        return $this;
    }

    /**
     * Get estimatedTime
     *
     * @return SearchDoubleField
     */
    public function getEstimatedTime() {
        return $this->estimatedTime;
    }


    /**
     * Set estimatedTimeOverride
     *
     * @param SearchDoubleField $estimatedTimeOverride
     * @return TaskSearchBasic
     */
    public function setEstimatedTimeOverride(SearchDoubleField $estimatedTimeOverride) {
        $this->estimatedTimeOverride = $estimatedTimeOverride;
        return $this;
    }

    /**
     * Get estimatedTimeOverride
     *
     * @return SearchDoubleField
     */
    public function getEstimatedTimeOverride() {
        return $this->estimatedTimeOverride;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return TaskSearchBasic
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
     * @return TaskSearchBasic
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
     * @return TaskSearchBasic
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
     * @return TaskSearchBasic
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
     * Set isJobSummaryTask
     *
     * @param SearchBooleanField $isJobSummaryTask
     * @return TaskSearchBasic
     */
    public function setIsJobSummaryTask(SearchBooleanField $isJobSummaryTask) {
        $this->isJobSummaryTask = $isJobSummaryTask;
        return $this;
    }

    /**
     * Get isJobSummaryTask
     *
     * @return SearchBooleanField
     */
    public function getIsJobSummaryTask() {
        return $this->isJobSummaryTask;
    }


    /**
     * Set isJobTask
     *
     * @param SearchBooleanField $isJobTask
     * @return TaskSearchBasic
     */
    public function setIsJobTask(SearchBooleanField $isJobTask) {
        $this->isJobTask = $isJobTask;
        return $this;
    }

    /**
     * Get isJobTask
     *
     * @return SearchBooleanField
     */
    public function getIsJobTask() {
        return $this->isJobTask;
    }


    /**
     * Set isPrivate
     *
     * @param SearchBooleanField $isPrivate
     * @return TaskSearchBasic
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
     * @return TaskSearchBasic
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
     * Set milestone
     *
     * @param SearchLongField $milestone
     * @return TaskSearchBasic
     */
    public function setMilestone(SearchLongField $milestone) {
        $this->milestone = $milestone;
        return $this;
    }

    /**
     * Get milestone
     *
     * @return SearchLongField
     */
    public function getMilestone() {
        return $this->milestone;
    }


    /**
     * Set owner
     *
     * @param SearchMultiSelectField $owner
     * @return TaskSearchBasic
     */
    public function setOwner(SearchMultiSelectField $owner) {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Get owner
     *
     * @return SearchMultiSelectField
     */
    public function getOwner() {
        return $this->owner;
    }


    /**
     * Set percentComplete
     *
     * @param SearchLongField $percentComplete
     * @return TaskSearchBasic
     */
    public function setPercentComplete(SearchLongField $percentComplete) {
        $this->percentComplete = $percentComplete;
        return $this;
    }

    /**
     * Get percentComplete
     *
     * @return SearchLongField
     */
    public function getPercentComplete() {
        return $this->percentComplete;
    }


    /**
     * Set percentTimeComplete
     *
     * @param SearchLongField $percentTimeComplete
     * @return TaskSearchBasic
     */
    public function setPercentTimeComplete(SearchLongField $percentTimeComplete) {
        $this->percentTimeComplete = $percentTimeComplete;
        return $this;
    }

    /**
     * Get percentTimeComplete
     *
     * @return SearchLongField
     */
    public function getPercentTimeComplete() {
        return $this->percentTimeComplete;
    }


    /**
     * Set priority
     *
     * @param SearchEnumMultiSelectField $priority
     * @return TaskSearchBasic
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
     * @return TaskSearchBasic
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
     * @return TaskSearchBasic
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
     * Set timeRemaining
     *
     * @param SearchDoubleField $timeRemaining
     * @return TaskSearchBasic
     */
    public function setTimeRemaining(SearchDoubleField $timeRemaining) {
        $this->timeRemaining = $timeRemaining;
        return $this;
    }

    /**
     * Get timeRemaining
     *
     * @return SearchDoubleField
     */
    public function getTimeRemaining() {
        return $this->timeRemaining;
    }


    /**
     * Set title
     *
     * @param SearchStringField $title
     * @return TaskSearchBasic
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
     * @return TaskSearchBasic
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