<?php

namespace Nzolt\NetSuite;

class ProjectTaskSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnDoubleField[] $actualWork
     */
    protected $actualWork = null;

    /**
     * @var SearchColumnSelectField[] $company
     */
    protected $company = null;

    /**
     * @var SearchColumnEnumSelectField[] $constraintType
     */
    protected $constraintType = null;

    /**
     * @var SearchColumnSelectField[] $contact
     */
    protected $contact = null;

    /**
     * @var SearchColumnDoubleField[] $cost
     */
    protected $cost = null;

    /**
     * @var SearchColumnDoubleField[] $costBase
     */
    protected $costBase = null;

    /**
     * @var SearchColumnDoubleField[] $costBaseBaseline
     */
    protected $costBaseBaseline = null;

    /**
     * @var SearchColumnDoubleField[] $costBaseline
     */
    protected $costBaseline = null;

    /**
     * @var SearchColumnDoubleField[] $costBaseVariance
     */
    protected $costBaseVariance = null;

    /**
     * @var SearchColumnDoubleField[] $costVariance
     */
    protected $costVariance = null;

    /**
     * @var SearchColumnDoubleField[] $costVariancePercent
     */
    protected $costVariancePercent = null;

    /**
     * @var SearchColumnDateField[] $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchColumnDateField[] $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchColumnDateField[] $endDateBaseline
     */
    protected $endDateBaseline = null;

    /**
     * @var SearchColumnDoubleField[] $endDateVariance
     */
    protected $endDateVariance = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedWork
     */
    protected $estimatedWork = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedWorkBaseline
     */
    protected $estimatedWorkBaseline = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedWorkVariance
     */
    protected $estimatedWorkVariance = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedWorkVariancePercent
     */
    protected $estimatedWorkVariancePercent = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnDateField[] $finishByDate
     */
    protected $finishByDate = null;

    /**
     * @var SearchColumnLongField[] $id
     */
    protected $id = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isMilestone
     */
    protected $isMilestone = null;

    /**
     * @var SearchColumnBooleanField[] $isSummaryTask
     */
    protected $isSummaryTask = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnStringField[] $message
     */
    protected $message = null;

    /**
     * @var SearchColumnBooleanField[] $nonBillableTask
     */
    protected $nonBillableTask = null;

    /**
     * @var SearchColumnSelectField[] $owner
     */
    protected $owner = null;

    /**
     * @var SearchColumnSelectField[] $parent
     */
    protected $parent = null;

    /**
     * @var SearchColumnDoubleField[] $percentWorkComplete
     */
    protected $percentWorkComplete = null;

    /**
     * @var SearchColumnSelectField[] $predecessor
     */
    protected $predecessor = null;

    /**
     * @var SearchColumnDoubleField[] $predecessorLagDays
     */
    protected $predecessorLagDays = null;

    /**
     * @var SearchColumnStringField[] $predecessors
     */
    protected $predecessors = null;

    /**
     * @var SearchColumnStringField[] $predecessorType
     */
    protected $predecessorType = null;

    /**
     * @var SearchColumnEnumSelectField[] $priority
     */
    protected $priority = null;

    /**
     * @var SearchColumnDoubleField[] $remainingWork
     */
    protected $remainingWork = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchColumnDateField[] $startDateBaseline
     */
    protected $startDateBaseline = null;

    /**
     * @var SearchColumnDoubleField[] $startDateVariance
     */
    protected $startDateVariance = null;

    /**
     * @var SearchColumnEnumSelectField[] $status
     */
    protected $status = null;

    /**
     * @var SearchColumnSelectField[] $successor
     */
    protected $successor = null;

    /**
     * @var SearchColumnStringField[] $successorType
     */
    protected $successorType = null;

    /**
     * @var SearchColumnStringField[] $title
     */
    protected $title = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getActualWork()
    {
      return $this->actualWork;
    }

    /**
     * @param SearchColumnDoubleField[] $actualWork
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setActualWork(array $actualWork = null)
    {
      $this->actualWork = $actualWork;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param SearchColumnSelectField[] $company
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setCompany(array $company = null)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getConstraintType()
    {
      return $this->constraintType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $constraintType
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setConstraintType(array $constraintType = null)
    {
      $this->constraintType = $constraintType;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param SearchColumnSelectField[] $contact
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setContact(array $contact = null)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param SearchColumnDoubleField[] $cost
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setCost(array $cost = null)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostBase()
    {
      return $this->costBase;
    }

    /**
     * @param SearchColumnDoubleField[] $costBase
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setCostBase(array $costBase = null)
    {
      $this->costBase = $costBase;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostBaseBaseline()
    {
      return $this->costBaseBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $costBaseBaseline
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setCostBaseBaseline(array $costBaseBaseline = null)
    {
      $this->costBaseBaseline = $costBaseBaseline;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostBaseline()
    {
      return $this->costBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $costBaseline
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setCostBaseline(array $costBaseline = null)
    {
      $this->costBaseline = $costBaseline;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostBaseVariance()
    {
      return $this->costBaseVariance;
    }

    /**
     * @param SearchColumnDoubleField[] $costBaseVariance
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setCostBaseVariance(array $costBaseVariance = null)
    {
      $this->costBaseVariance = $costBaseVariance;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostVariance()
    {
      return $this->costVariance;
    }

    /**
     * @param SearchColumnDoubleField[] $costVariance
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setCostVariance(array $costVariance = null)
    {
      $this->costVariance = $costVariance;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostVariancePercent()
    {
      return $this->costVariancePercent;
    }

    /**
     * @param SearchColumnDoubleField[] $costVariancePercent
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setCostVariancePercent(array $costVariancePercent = null)
    {
      $this->costVariancePercent = $costVariancePercent;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate()
    {
      return $this->createdDate;
    }

    /**
     * @param SearchColumnDateField[] $createdDate
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setCreatedDate(array $createdDate = null)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setEndDate(array $endDate = null)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDateBaseline()
    {
      return $this->endDateBaseline;
    }

    /**
     * @param SearchColumnDateField[] $endDateBaseline
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setEndDateBaseline(array $endDateBaseline = null)
    {
      $this->endDateBaseline = $endDateBaseline;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEndDateVariance()
    {
      return $this->endDateVariance;
    }

    /**
     * @param SearchColumnDoubleField[] $endDateVariance
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setEndDateVariance(array $endDateVariance = null)
    {
      $this->endDateVariance = $endDateVariance;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedWork()
    {
      return $this->estimatedWork;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedWork
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setEstimatedWork(array $estimatedWork = null)
    {
      $this->estimatedWork = $estimatedWork;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedWorkBaseline()
    {
      return $this->estimatedWorkBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedWorkBaseline
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setEstimatedWorkBaseline(array $estimatedWorkBaseline = null)
    {
      $this->estimatedWorkBaseline = $estimatedWorkBaseline;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedWorkVariance()
    {
      return $this->estimatedWorkVariance;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedWorkVariance
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setEstimatedWorkVariance(array $estimatedWorkVariance = null)
    {
      $this->estimatedWorkVariance = $estimatedWorkVariance;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedWorkVariancePercent()
    {
      return $this->estimatedWorkVariancePercent;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedWorkVariancePercent
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setEstimatedWorkVariancePercent(array $estimatedWorkVariancePercent = null)
    {
      $this->estimatedWorkVariancePercent = $estimatedWorkVariancePercent;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getFinishByDate()
    {
      return $this->finishByDate;
    }

    /**
     * @param SearchColumnDateField[] $finishByDate
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setFinishByDate(array $finishByDate = null)
    {
      $this->finishByDate = $finishByDate;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param SearchColumnLongField[] $id
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setId(array $id = null)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsMilestone()
    {
      return $this->isMilestone;
    }

    /**
     * @param SearchColumnBooleanField[] $isMilestone
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setIsMilestone(array $isMilestone = null)
    {
      $this->isMilestone = $isMilestone;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSummaryTask()
    {
      return $this->isSummaryTask;
    }

    /**
     * @param SearchColumnBooleanField[] $isSummaryTask
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setIsSummaryTask(array $isSummaryTask = null)
    {
      $this->isSummaryTask = $isSummaryTask;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setMessage(array $message = null)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getNonBillableTask()
    {
      return $this->nonBillableTask;
    }

    /**
     * @param SearchColumnBooleanField[] $nonBillableTask
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setNonBillableTask(array $nonBillableTask = null)
    {
      $this->nonBillableTask = $nonBillableTask;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param SearchColumnSelectField[] $owner
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setOwner(array $owner = null)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param SearchColumnSelectField[] $parent
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setParent(array $parent = null)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPercentWorkComplete()
    {
      return $this->percentWorkComplete;
    }

    /**
     * @param SearchColumnDoubleField[] $percentWorkComplete
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setPercentWorkComplete(array $percentWorkComplete = null)
    {
      $this->percentWorkComplete = $percentWorkComplete;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPredecessor()
    {
      return $this->predecessor;
    }

    /**
     * @param SearchColumnSelectField[] $predecessor
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setPredecessor(array $predecessor = null)
    {
      $this->predecessor = $predecessor;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPredecessorLagDays()
    {
      return $this->predecessorLagDays;
    }

    /**
     * @param SearchColumnDoubleField[] $predecessorLagDays
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setPredecessorLagDays(array $predecessorLagDays = null)
    {
      $this->predecessorLagDays = $predecessorLagDays;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPredecessors()
    {
      return $this->predecessors;
    }

    /**
     * @param SearchColumnStringField[] $predecessors
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setPredecessors(array $predecessors = null)
    {
      $this->predecessors = $predecessors;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPredecessorType()
    {
      return $this->predecessorType;
    }

    /**
     * @param SearchColumnStringField[] $predecessorType
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setPredecessorType(array $predecessorType = null)
    {
      $this->predecessorType = $predecessorType;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param SearchColumnEnumSelectField[] $priority
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setPriority(array $priority = null)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRemainingWork()
    {
      return $this->remainingWork;
    }

    /**
     * @param SearchColumnDoubleField[] $remainingWork
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setRemainingWork(array $remainingWork = null)
    {
      $this->remainingWork = $remainingWork;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDateBaseline()
    {
      return $this->startDateBaseline;
    }

    /**
     * @param SearchColumnDateField[] $startDateBaseline
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setStartDateBaseline(array $startDateBaseline = null)
    {
      $this->startDateBaseline = $startDateBaseline;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getStartDateVariance()
    {
      return $this->startDateVariance;
    }

    /**
     * @param SearchColumnDoubleField[] $startDateVariance
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setStartDateVariance(array $startDateVariance = null)
    {
      $this->startDateVariance = $startDateVariance;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchColumnEnumSelectField[] $status
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setStatus(array $status = null)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSuccessor()
    {
      return $this->successor;
    }

    /**
     * @param SearchColumnSelectField[] $successor
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setSuccessor(array $successor = null)
    {
      $this->successor = $successor;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSuccessorType()
    {
      return $this->successorType;
    }

    /**
     * @param SearchColumnStringField[] $successorType
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setSuccessorType(array $successorType = null)
    {
      $this->successorType = $successorType;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setTitle(array $title = null)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\ProjectTaskSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
