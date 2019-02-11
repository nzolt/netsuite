<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * ProjectTaskSearchBasic
 */
class ProjectTaskSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $actualWork;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $assignee;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $company;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $constraintType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $contact;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $cost;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $costBase;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $costBaseBaseline;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $costBaseline;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $costBaseVariance;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $costVariance;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $costVariancePercent;

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
     * @var SearchDateField
     */
    protected $endDateBaseline;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $endDateVariance;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedWork;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedWorkBaseline;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedWorkVariance;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedWorkVariancePercent;

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
     * @var SearchDateField
     */
    protected $finishByDate;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $id;

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
    protected $isMilestone;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isSummaryTask;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $nonBillableTask;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $owner;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $parent;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $percentWorkComplete;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $predecessor;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $predecessors;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $priority;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $remainingWork;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDateBaseline;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $startDateVariance;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $status;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $successor;

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
    	"actualWork" => "SearchDoubleField",
    	"assignee" => "SearchMultiSelectField",
    	"company" => "SearchMultiSelectField",
    	"constraintType" => "SearchEnumMultiSelectField",
    	"contact" => "SearchMultiSelectField",
    	"cost" => "SearchDoubleField",
    	"costBase" => "SearchDoubleField",
    	"costBaseBaseline" => "SearchDoubleField",
    	"costBaseline" => "SearchDoubleField",
    	"costBaseVariance" => "SearchDoubleField",
    	"costVariance" => "SearchDoubleField",
    	"costVariancePercent" => "SearchDoubleField",
    	"createdDate" => "SearchDateField",
    	"endDate" => "SearchDateField",
    	"endDateBaseline" => "SearchDateField",
    	"endDateVariance" => "SearchDoubleField",
    	"estimatedWork" => "SearchDoubleField",
    	"estimatedWorkBaseline" => "SearchDoubleField",
    	"estimatedWorkVariance" => "SearchDoubleField",
    	"estimatedWorkVariancePercent" => "SearchDoubleField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"finishByDate" => "SearchDateField",
    	"id" => "SearchLongField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isMilestone" => "SearchBooleanField",
    	"isSummaryTask" => "SearchBooleanField",
    	"lastModifiedDate" => "SearchDateField",
    	"nonBillableTask" => "SearchBooleanField",
    	"owner" => "SearchMultiSelectField",
    	"parent" => "SearchMultiSelectField",
    	"percentWorkComplete" => "SearchDoubleField",
    	"predecessor" => "SearchMultiSelectField",
    	"predecessors" => "SearchStringField",
    	"priority" => "SearchEnumMultiSelectField",
    	"remainingWork" => "SearchDoubleField",
    	"startDate" => "SearchDateField",
    	"startDateBaseline" => "SearchDateField",
    	"startDateVariance" => "SearchDoubleField",
    	"status" => "SearchEnumMultiSelectField",
    	"successor" => "SearchMultiSelectField",
    	"title" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set actualWork
     *
     * @param SearchDoubleField $actualWork
     * @return ProjectTaskSearchBasic
     */
    public function setActualWork(SearchDoubleField $actualWork) {
        $this->actualWork = $actualWork;
        return $this;
    }

    /**
     * Get actualWork
     *
     * @return SearchDoubleField
     */
    public function getActualWork() {
        return $this->actualWork;
    }


    /**
     * Set assignee
     *
     * @param SearchMultiSelectField $assignee
     * @return ProjectTaskSearchBasic
     */
    public function setAssignee(SearchMultiSelectField $assignee) {
        $this->assignee = $assignee;
        return $this;
    }

    /**
     * Get assignee
     *
     * @return SearchMultiSelectField
     */
    public function getAssignee() {
        return $this->assignee;
    }


    /**
     * Set company
     *
     * @param SearchMultiSelectField $company
     * @return ProjectTaskSearchBasic
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
     * Set constraintType
     *
     * @param SearchEnumMultiSelectField $constraintType
     * @return ProjectTaskSearchBasic
     */
    public function setConstraintType(SearchEnumMultiSelectField $constraintType) {
        $this->constraintType = $constraintType;
        return $this;
    }

    /**
     * Get constraintType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getConstraintType() {
        return $this->constraintType;
    }


    /**
     * Set contact
     *
     * @param SearchMultiSelectField $contact
     * @return ProjectTaskSearchBasic
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
     * Set cost
     *
     * @param SearchDoubleField $cost
     * @return ProjectTaskSearchBasic
     */
    public function setCost(SearchDoubleField $cost) {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Get cost
     *
     * @return SearchDoubleField
     */
    public function getCost() {
        return $this->cost;
    }


    /**
     * Set costBase
     *
     * @param SearchDoubleField $costBase
     * @return ProjectTaskSearchBasic
     */
    public function setCostBase(SearchDoubleField $costBase) {
        $this->costBase = $costBase;
        return $this;
    }

    /**
     * Get costBase
     *
     * @return SearchDoubleField
     */
    public function getCostBase() {
        return $this->costBase;
    }


    /**
     * Set costBaseBaseline
     *
     * @param SearchDoubleField $costBaseBaseline
     * @return ProjectTaskSearchBasic
     */
    public function setCostBaseBaseline(SearchDoubleField $costBaseBaseline) {
        $this->costBaseBaseline = $costBaseBaseline;
        return $this;
    }

    /**
     * Get costBaseBaseline
     *
     * @return SearchDoubleField
     */
    public function getCostBaseBaseline() {
        return $this->costBaseBaseline;
    }


    /**
     * Set costBaseline
     *
     * @param SearchDoubleField $costBaseline
     * @return ProjectTaskSearchBasic
     */
    public function setCostBaseline(SearchDoubleField $costBaseline) {
        $this->costBaseline = $costBaseline;
        return $this;
    }

    /**
     * Get costBaseline
     *
     * @return SearchDoubleField
     */
    public function getCostBaseline() {
        return $this->costBaseline;
    }


    /**
     * Set costBaseVariance
     *
     * @param SearchDoubleField $costBaseVariance
     * @return ProjectTaskSearchBasic
     */
    public function setCostBaseVariance(SearchDoubleField $costBaseVariance) {
        $this->costBaseVariance = $costBaseVariance;
        return $this;
    }

    /**
     * Get costBaseVariance
     *
     * @return SearchDoubleField
     */
    public function getCostBaseVariance() {
        return $this->costBaseVariance;
    }


    /**
     * Set costVariance
     *
     * @param SearchDoubleField $costVariance
     * @return ProjectTaskSearchBasic
     */
    public function setCostVariance(SearchDoubleField $costVariance) {
        $this->costVariance = $costVariance;
        return $this;
    }

    /**
     * Get costVariance
     *
     * @return SearchDoubleField
     */
    public function getCostVariance() {
        return $this->costVariance;
    }


    /**
     * Set costVariancePercent
     *
     * @param SearchDoubleField $costVariancePercent
     * @return ProjectTaskSearchBasic
     */
    public function setCostVariancePercent(SearchDoubleField $costVariancePercent) {
        $this->costVariancePercent = $costVariancePercent;
        return $this;
    }

    /**
     * Get costVariancePercent
     *
     * @return SearchDoubleField
     */
    public function getCostVariancePercent() {
        return $this->costVariancePercent;
    }


    /**
     * Set createdDate
     *
     * @param SearchDateField $createdDate
     * @return ProjectTaskSearchBasic
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
     * @return ProjectTaskSearchBasic
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
     * Set endDateBaseline
     *
     * @param SearchDateField $endDateBaseline
     * @return ProjectTaskSearchBasic
     */
    public function setEndDateBaseline(SearchDateField $endDateBaseline) {
        $this->endDateBaseline = $endDateBaseline;
        return $this;
    }

    /**
     * Get endDateBaseline
     *
     * @return SearchDateField
     */
    public function getEndDateBaseline() {
        return $this->endDateBaseline;
    }


    /**
     * Set endDateVariance
     *
     * @param SearchDoubleField $endDateVariance
     * @return ProjectTaskSearchBasic
     */
    public function setEndDateVariance(SearchDoubleField $endDateVariance) {
        $this->endDateVariance = $endDateVariance;
        return $this;
    }

    /**
     * Get endDateVariance
     *
     * @return SearchDoubleField
     */
    public function getEndDateVariance() {
        return $this->endDateVariance;
    }


    /**
     * Set estimatedWork
     *
     * @param SearchDoubleField $estimatedWork
     * @return ProjectTaskSearchBasic
     */
    public function setEstimatedWork(SearchDoubleField $estimatedWork) {
        $this->estimatedWork = $estimatedWork;
        return $this;
    }

    /**
     * Get estimatedWork
     *
     * @return SearchDoubleField
     */
    public function getEstimatedWork() {
        return $this->estimatedWork;
    }


    /**
     * Set estimatedWorkBaseline
     *
     * @param SearchDoubleField $estimatedWorkBaseline
     * @return ProjectTaskSearchBasic
     */
    public function setEstimatedWorkBaseline(SearchDoubleField $estimatedWorkBaseline) {
        $this->estimatedWorkBaseline = $estimatedWorkBaseline;
        return $this;
    }

    /**
     * Get estimatedWorkBaseline
     *
     * @return SearchDoubleField
     */
    public function getEstimatedWorkBaseline() {
        return $this->estimatedWorkBaseline;
    }


    /**
     * Set estimatedWorkVariance
     *
     * @param SearchDoubleField $estimatedWorkVariance
     * @return ProjectTaskSearchBasic
     */
    public function setEstimatedWorkVariance(SearchDoubleField $estimatedWorkVariance) {
        $this->estimatedWorkVariance = $estimatedWorkVariance;
        return $this;
    }

    /**
     * Get estimatedWorkVariance
     *
     * @return SearchDoubleField
     */
    public function getEstimatedWorkVariance() {
        return $this->estimatedWorkVariance;
    }


    /**
     * Set estimatedWorkVariancePercent
     *
     * @param SearchDoubleField $estimatedWorkVariancePercent
     * @return ProjectTaskSearchBasic
     */
    public function setEstimatedWorkVariancePercent(SearchDoubleField $estimatedWorkVariancePercent) {
        $this->estimatedWorkVariancePercent = $estimatedWorkVariancePercent;
        return $this;
    }

    /**
     * Get estimatedWorkVariancePercent
     *
     * @return SearchDoubleField
     */
    public function getEstimatedWorkVariancePercent() {
        return $this->estimatedWorkVariancePercent;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return ProjectTaskSearchBasic
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
     * @return ProjectTaskSearchBasic
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
     * Set finishByDate
     *
     * @param SearchDateField $finishByDate
     * @return ProjectTaskSearchBasic
     */
    public function setFinishByDate(SearchDateField $finishByDate) {
        $this->finishByDate = $finishByDate;
        return $this;
    }

    /**
     * Get finishByDate
     *
     * @return SearchDateField
     */
    public function getFinishByDate() {
        return $this->finishByDate;
    }


    /**
     * Set id
     *
     * @param SearchLongField $id
     * @return ProjectTaskSearchBasic
     */
    public function setId(SearchLongField $id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return SearchLongField
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return ProjectTaskSearchBasic
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
     * @return ProjectTaskSearchBasic
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
     * Set isMilestone
     *
     * @param SearchBooleanField $isMilestone
     * @return ProjectTaskSearchBasic
     */
    public function setIsMilestone(SearchBooleanField $isMilestone) {
        $this->isMilestone = $isMilestone;
        return $this;
    }

    /**
     * Get isMilestone
     *
     * @return SearchBooleanField
     */
    public function getIsMilestone() {
        return $this->isMilestone;
    }


    /**
     * Set isSummaryTask
     *
     * @param SearchBooleanField $isSummaryTask
     * @return ProjectTaskSearchBasic
     */
    public function setIsSummaryTask(SearchBooleanField $isSummaryTask) {
        $this->isSummaryTask = $isSummaryTask;
        return $this;
    }

    /**
     * Get isSummaryTask
     *
     * @return SearchBooleanField
     */
    public function getIsSummaryTask() {
        return $this->isSummaryTask;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return ProjectTaskSearchBasic
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
     * Set nonBillableTask
     *
     * @param SearchBooleanField $nonBillableTask
     * @return ProjectTaskSearchBasic
     */
    public function setNonBillableTask(SearchBooleanField $nonBillableTask) {
        $this->nonBillableTask = $nonBillableTask;
        return $this;
    }

    /**
     * Get nonBillableTask
     *
     * @return SearchBooleanField
     */
    public function getNonBillableTask() {
        return $this->nonBillableTask;
    }


    /**
     * Set owner
     *
     * @param SearchMultiSelectField $owner
     * @return ProjectTaskSearchBasic
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
     * Set parent
     *
     * @param SearchMultiSelectField $parent
     * @return ProjectTaskSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get parent
     *
     * @return SearchMultiSelectField
     */
    public function getParent() {
        return $this->parent;
    }


    /**
     * Set percentWorkComplete
     *
     * @param SearchDoubleField $percentWorkComplete
     * @return ProjectTaskSearchBasic
     */
    public function setPercentWorkComplete(SearchDoubleField $percentWorkComplete) {
        $this->percentWorkComplete = $percentWorkComplete;
        return $this;
    }

    /**
     * Get percentWorkComplete
     *
     * @return SearchDoubleField
     */
    public function getPercentWorkComplete() {
        return $this->percentWorkComplete;
    }


    /**
     * Set predecessor
     *
     * @param SearchMultiSelectField $predecessor
     * @return ProjectTaskSearchBasic
     */
    public function setPredecessor(SearchMultiSelectField $predecessor) {
        $this->predecessor = $predecessor;
        return $this;
    }

    /**
     * Get predecessor
     *
     * @return SearchMultiSelectField
     */
    public function getPredecessor() {
        return $this->predecessor;
    }


    /**
     * Set predecessors
     *
     * @param SearchStringField $predecessors
     * @return ProjectTaskSearchBasic
     */
    public function setPredecessors(SearchStringField $predecessors) {
        $this->predecessors = $predecessors;
        return $this;
    }

    /**
     * Get predecessors
     *
     * @return SearchStringField
     */
    public function getPredecessors() {
        return $this->predecessors;
    }


    /**
     * Set priority
     *
     * @param SearchEnumMultiSelectField $priority
     * @return ProjectTaskSearchBasic
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
     * Set remainingWork
     *
     * @param SearchDoubleField $remainingWork
     * @return ProjectTaskSearchBasic
     */
    public function setRemainingWork(SearchDoubleField $remainingWork) {
        $this->remainingWork = $remainingWork;
        return $this;
    }

    /**
     * Get remainingWork
     *
     * @return SearchDoubleField
     */
    public function getRemainingWork() {
        return $this->remainingWork;
    }


    /**
     * Set startDate
     *
     * @param SearchDateField $startDate
     * @return ProjectTaskSearchBasic
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
     * Set startDateBaseline
     *
     * @param SearchDateField $startDateBaseline
     * @return ProjectTaskSearchBasic
     */
    public function setStartDateBaseline(SearchDateField $startDateBaseline) {
        $this->startDateBaseline = $startDateBaseline;
        return $this;
    }

    /**
     * Get startDateBaseline
     *
     * @return SearchDateField
     */
    public function getStartDateBaseline() {
        return $this->startDateBaseline;
    }


    /**
     * Set startDateVariance
     *
     * @param SearchDoubleField $startDateVariance
     * @return ProjectTaskSearchBasic
     */
    public function setStartDateVariance(SearchDoubleField $startDateVariance) {
        $this->startDateVariance = $startDateVariance;
        return $this;
    }

    /**
     * Get startDateVariance
     *
     * @return SearchDoubleField
     */
    public function getStartDateVariance() {
        return $this->startDateVariance;
    }


    /**
     * Set status
     *
     * @param SearchEnumMultiSelectField $status
     * @return ProjectTaskSearchBasic
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
     * Set successor
     *
     * @param SearchMultiSelectField $successor
     * @return ProjectTaskSearchBasic
     */
    public function setSuccessor(SearchMultiSelectField $successor) {
        $this->successor = $successor;
        return $this;
    }

    /**
     * Get successor
     *
     * @return SearchMultiSelectField
     */
    public function getSuccessor() {
        return $this->successor;
    }


    /**
     * Set title
     *
     * @param SearchStringField $title
     * @return ProjectTaskSearchBasic
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
     * @return ProjectTaskSearchBasic
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