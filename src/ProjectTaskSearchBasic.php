<?php

namespace Nzolt\NetSuite;

class ProjectTaskSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchDoubleField $actualWork
     */
    protected $actualWork = null;

    /**
     * @var SearchMultiSelectField $assignee
     */
    protected $assignee = null;

    /**
     * @var SearchMultiSelectField $company
     */
    protected $company = null;

    /**
     * @var SearchEnumMultiSelectField $constraintType
     */
    protected $constraintType = null;

    /**
     * @var SearchMultiSelectField $contact
     */
    protected $contact = null;

    /**
     * @var SearchDoubleField $cost
     */
    protected $cost = null;

    /**
     * @var SearchDoubleField $costBase
     */
    protected $costBase = null;

    /**
     * @var SearchDoubleField $costBaseBaseline
     */
    protected $costBaseBaseline = null;

    /**
     * @var SearchDoubleField $costBaseline
     */
    protected $costBaseline = null;

    /**
     * @var SearchDoubleField $costBaseVariance
     */
    protected $costBaseVariance = null;

    /**
     * @var SearchDoubleField $costVariance
     */
    protected $costVariance = null;

    /**
     * @var SearchDoubleField $costVariancePercent
     */
    protected $costVariancePercent = null;

    /**
     * @var SearchDateField $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchDateField $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchDateField $endDateBaseline
     */
    protected $endDateBaseline = null;

    /**
     * @var SearchDoubleField $endDateVariance
     */
    protected $endDateVariance = null;

    /**
     * @var SearchDoubleField $estimatedWork
     */
    protected $estimatedWork = null;

    /**
     * @var SearchDoubleField $estimatedWorkBaseline
     */
    protected $estimatedWorkBaseline = null;

    /**
     * @var SearchDoubleField $estimatedWorkVariance
     */
    protected $estimatedWorkVariance = null;

    /**
     * @var SearchDoubleField $estimatedWorkVariancePercent
     */
    protected $estimatedWorkVariancePercent = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchDateField $finishByDate
     */
    protected $finishByDate = null;

    /**
     * @var SearchLongField $id
     */
    protected $id = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isMilestone
     */
    protected $isMilestone = null;

    /**
     * @var SearchBooleanField $isSummaryTask
     */
    protected $isSummaryTask = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchBooleanField $nonBillableTask
     */
    protected $nonBillableTask = null;

    /**
     * @var SearchMultiSelectField $owner
     */
    protected $owner = null;

    /**
     * @var SearchMultiSelectField $parent
     */
    protected $parent = null;

    /**
     * @var SearchDoubleField $percentWorkComplete
     */
    protected $percentWorkComplete = null;

    /**
     * @var SearchMultiSelectField $predecessor
     */
    protected $predecessor = null;

    /**
     * @var SearchStringField $predecessors
     */
    protected $predecessors = null;

    /**
     * @var SearchEnumMultiSelectField $priority
     */
    protected $priority = null;

    /**
     * @var SearchDoubleField $remainingWork
     */
    protected $remainingWork = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchDateField $startDateBaseline
     */
    protected $startDateBaseline = null;

    /**
     * @var SearchDoubleField $startDateVariance
     */
    protected $startDateVariance = null;

    /**
     * @var SearchEnumMultiSelectField $status
     */
    protected $status = null;

    /**
     * @var SearchMultiSelectField $successor
     */
    protected $successor = null;

    /**
     * @var SearchStringField $title
     */
    protected $title = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchDoubleField
     */
    public function getActualWork()
    {
      return $this->actualWork;
    }

    /**
     * @param SearchDoubleField $actualWork
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setActualWork($actualWork)
    {
      $this->actualWork = $actualWork;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAssignee()
    {
      return $this->assignee;
    }

    /**
     * @param SearchMultiSelectField $assignee
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setAssignee($assignee)
    {
      $this->assignee = $assignee;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param SearchMultiSelectField $company
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getConstraintType()
    {
      return $this->constraintType;
    }

    /**
     * @param SearchEnumMultiSelectField $constraintType
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setConstraintType($constraintType)
    {
      $this->constraintType = $constraintType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param SearchMultiSelectField $contact
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param SearchDoubleField $cost
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostBase()
    {
      return $this->costBase;
    }

    /**
     * @param SearchDoubleField $costBase
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setCostBase($costBase)
    {
      $this->costBase = $costBase;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostBaseBaseline()
    {
      return $this->costBaseBaseline;
    }

    /**
     * @param SearchDoubleField $costBaseBaseline
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setCostBaseBaseline($costBaseBaseline)
    {
      $this->costBaseBaseline = $costBaseBaseline;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostBaseline()
    {
      return $this->costBaseline;
    }

    /**
     * @param SearchDoubleField $costBaseline
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setCostBaseline($costBaseline)
    {
      $this->costBaseline = $costBaseline;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostBaseVariance()
    {
      return $this->costBaseVariance;
    }

    /**
     * @param SearchDoubleField $costBaseVariance
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setCostBaseVariance($costBaseVariance)
    {
      $this->costBaseVariance = $costBaseVariance;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostVariance()
    {
      return $this->costVariance;
    }

    /**
     * @param SearchDoubleField $costVariance
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setCostVariance($costVariance)
    {
      $this->costVariance = $costVariance;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostVariancePercent()
    {
      return $this->costVariancePercent;
    }

    /**
     * @param SearchDoubleField $costVariancePercent
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setCostVariancePercent($costVariancePercent)
    {
      $this->costVariancePercent = $costVariancePercent;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreatedDate()
    {
      return $this->createdDate;
    }

    /**
     * @param SearchDateField $createdDate
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setCreatedDate($createdDate)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchDateField $endDate
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDateBaseline()
    {
      return $this->endDateBaseline;
    }

    /**
     * @param SearchDateField $endDateBaseline
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setEndDateBaseline($endDateBaseline)
    {
      $this->endDateBaseline = $endDateBaseline;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEndDateVariance()
    {
      return $this->endDateVariance;
    }

    /**
     * @param SearchDoubleField $endDateVariance
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setEndDateVariance($endDateVariance)
    {
      $this->endDateVariance = $endDateVariance;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedWork()
    {
      return $this->estimatedWork;
    }

    /**
     * @param SearchDoubleField $estimatedWork
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setEstimatedWork($estimatedWork)
    {
      $this->estimatedWork = $estimatedWork;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedWorkBaseline()
    {
      return $this->estimatedWorkBaseline;
    }

    /**
     * @param SearchDoubleField $estimatedWorkBaseline
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setEstimatedWorkBaseline($estimatedWorkBaseline)
    {
      $this->estimatedWorkBaseline = $estimatedWorkBaseline;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedWorkVariance()
    {
      return $this->estimatedWorkVariance;
    }

    /**
     * @param SearchDoubleField $estimatedWorkVariance
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setEstimatedWorkVariance($estimatedWorkVariance)
    {
      $this->estimatedWorkVariance = $estimatedWorkVariance;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedWorkVariancePercent()
    {
      return $this->estimatedWorkVariancePercent;
    }

    /**
     * @param SearchDoubleField $estimatedWorkVariancePercent
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setEstimatedWorkVariancePercent($estimatedWorkVariancePercent)
    {
      $this->estimatedWorkVariancePercent = $estimatedWorkVariancePercent;
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
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
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
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getFinishByDate()
    {
      return $this->finishByDate;
    }

    /**
     * @param SearchDateField $finishByDate
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setFinishByDate($finishByDate)
    {
      $this->finishByDate = $finishByDate;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param SearchLongField $id
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
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
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsMilestone()
    {
      return $this->isMilestone;
    }

    /**
     * @param SearchBooleanField $isMilestone
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setIsMilestone($isMilestone)
    {
      $this->isMilestone = $isMilestone;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSummaryTask()
    {
      return $this->isSummaryTask;
    }

    /**
     * @param SearchBooleanField $isSummaryTask
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setIsSummaryTask($isSummaryTask)
    {
      $this->isSummaryTask = $isSummaryTask;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getNonBillableTask()
    {
      return $this->nonBillableTask;
    }

    /**
     * @param SearchBooleanField $nonBillableTask
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setNonBillableTask($nonBillableTask)
    {
      $this->nonBillableTask = $nonBillableTask;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param SearchMultiSelectField $owner
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param SearchMultiSelectField $parent
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPercentWorkComplete()
    {
      return $this->percentWorkComplete;
    }

    /**
     * @param SearchDoubleField $percentWorkComplete
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setPercentWorkComplete($percentWorkComplete)
    {
      $this->percentWorkComplete = $percentWorkComplete;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPredecessor()
    {
      return $this->predecessor;
    }

    /**
     * @param SearchMultiSelectField $predecessor
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setPredecessor($predecessor)
    {
      $this->predecessor = $predecessor;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPredecessors()
    {
      return $this->predecessors;
    }

    /**
     * @param SearchStringField $predecessors
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setPredecessors($predecessors)
    {
      $this->predecessors = $predecessors;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param SearchEnumMultiSelectField $priority
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRemainingWork()
    {
      return $this->remainingWork;
    }

    /**
     * @param SearchDoubleField $remainingWork
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setRemainingWork($remainingWork)
    {
      $this->remainingWork = $remainingWork;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchDateField $startDate
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDateBaseline()
    {
      return $this->startDateBaseline;
    }

    /**
     * @param SearchDateField $startDateBaseline
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setStartDateBaseline($startDateBaseline)
    {
      $this->startDateBaseline = $startDateBaseline;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getStartDateVariance()
    {
      return $this->startDateVariance;
    }

    /**
     * @param SearchDoubleField $startDateVariance
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setStartDateVariance($startDateVariance)
    {
      $this->startDateVariance = $startDateVariance;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchEnumMultiSelectField $status
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSuccessor()
    {
      return $this->successor;
    }

    /**
     * @param SearchMultiSelectField $successor
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setSuccessor($successor)
    {
      $this->successor = $successor;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchStringField $title
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\ProjectTaskSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
