<?php

namespace Nzolt\NetSuite;

class TaskSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $accessLevel
     */
    protected $accessLevel = null;

    /**
     * @var SearchColumnDoubleField[] $actualTime
     */
    protected $actualTime = null;

    /**
     * @var SearchColumnSelectField[] $assigned
     */
    protected $assigned = null;

    /**
     * @var SearchColumnSelectField[] $company
     */
    protected $company = null;

    /**
     * @var SearchColumnDateField[] $completedDate
     */
    protected $completedDate = null;

    /**
     * @var SearchColumnSelectField[] $contact
     */
    protected $contact = null;

    /**
     * @var SearchColumnDateField[] $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchColumnDateField[] $dueDate
     */
    protected $dueDate = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedTime
     */
    protected $estimatedTime = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedTimeOverride
     */
    protected $estimatedTimeOverride = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isJobSummaryTask
     */
    protected $isJobSummaryTask = null;

    /**
     * @var SearchColumnBooleanField[] $isJobTask
     */
    protected $isJobTask = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnStringField[] $markdone
     */
    protected $markdone = null;

    /**
     * @var SearchColumnStringField[] $message
     */
    protected $message = null;

    /**
     * @var SearchColumnSelectField[] $milestone
     */
    protected $milestone = null;

    /**
     * @var SearchColumnLongField[] $order
     */
    protected $order = null;

    /**
     * @var SearchColumnSelectField[] $owner
     */
    protected $owner = null;

    /**
     * @var SearchColumnDoubleField[] $percentComplete
     */
    protected $percentComplete = null;

    /**
     * @var SearchColumnDoubleField[] $percentTimeComplete
     */
    protected $percentTimeComplete = null;

    /**
     * @var SearchColumnEnumSelectField[] $priority
     */
    protected $priority = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchColumnStringField[] $startTime
     */
    protected $startTime = null;

    /**
     * @var SearchColumnEnumSelectField[] $status
     */
    protected $status = null;

    /**
     * @var SearchColumnDoubleField[] $timeRemaining
     */
    protected $timeRemaining = null;

    /**
     * @var SearchColumnStringField[] $title
     */
    protected $title = null;

    /**
     * @var SearchColumnSelectField[] $transaction
     */
    protected $transaction = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccessLevel()
    {
      return $this->accessLevel;
    }

    /**
     * @param SearchColumnStringField[] $accessLevel
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setAccessLevel(array $accessLevel = null)
    {
      $this->accessLevel = $accessLevel;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getActualTime()
    {
      return $this->actualTime;
    }

    /**
     * @param SearchColumnDoubleField[] $actualTime
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setActualTime(array $actualTime = null)
    {
      $this->actualTime = $actualTime;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAssigned()
    {
      return $this->assigned;
    }

    /**
     * @param SearchColumnSelectField[] $assigned
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setAssigned(array $assigned = null)
    {
      $this->assigned = $assigned;
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
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setCompany(array $company = null)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCompletedDate()
    {
      return $this->completedDate;
    }

    /**
     * @param SearchColumnDateField[] $completedDate
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setCompletedDate(array $completedDate = null)
    {
      $this->completedDate = $completedDate;
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
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setContact(array $contact = null)
    {
      $this->contact = $contact;
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
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setCreatedDate(array $createdDate = null)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDueDate()
    {
      return $this->dueDate;
    }

    /**
     * @param SearchColumnDateField[] $dueDate
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setDueDate(array $dueDate = null)
    {
      $this->dueDate = $dueDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedTime()
    {
      return $this->estimatedTime;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedTime
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setEstimatedTime(array $estimatedTime = null)
    {
      $this->estimatedTime = $estimatedTime;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedTimeOverride()
    {
      return $this->estimatedTimeOverride;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedTimeOverride
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setEstimatedTimeOverride(array $estimatedTimeOverride = null)
    {
      $this->estimatedTimeOverride = $estimatedTimeOverride;
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
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
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
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsJobSummaryTask()
    {
      return $this->isJobSummaryTask;
    }

    /**
     * @param SearchColumnBooleanField[] $isJobSummaryTask
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setIsJobSummaryTask(array $isJobSummaryTask = null)
    {
      $this->isJobSummaryTask = $isJobSummaryTask;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsJobTask()
    {
      return $this->isJobTask;
    }

    /**
     * @param SearchColumnBooleanField[] $isJobTask
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setIsJobTask(array $isJobTask = null)
    {
      $this->isJobTask = $isJobTask;
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
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMarkdone()
    {
      return $this->markdone;
    }

    /**
     * @param SearchColumnStringField[] $markdone
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setMarkdone(array $markdone = null)
    {
      $this->markdone = $markdone;
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
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setMessage(array $message = null)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getMilestone()
    {
      return $this->milestone;
    }

    /**
     * @param SearchColumnSelectField[] $milestone
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setMilestone(array $milestone = null)
    {
      $this->milestone = $milestone;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param SearchColumnLongField[] $order
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setOrder(array $order = null)
    {
      $this->order = $order;
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
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setOwner(array $owner = null)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPercentComplete()
    {
      return $this->percentComplete;
    }

    /**
     * @param SearchColumnDoubleField[] $percentComplete
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setPercentComplete(array $percentComplete = null)
    {
      $this->percentComplete = $percentComplete;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPercentTimeComplete()
    {
      return $this->percentTimeComplete;
    }

    /**
     * @param SearchColumnDoubleField[] $percentTimeComplete
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setPercentTimeComplete(array $percentTimeComplete = null)
    {
      $this->percentTimeComplete = $percentTimeComplete;
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
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setPriority(array $priority = null)
    {
      $this->priority = $priority;
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
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param SearchColumnStringField[] $startTime
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setStartTime(array $startTime = null)
    {
      $this->startTime = $startTime;
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
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setStatus(array $status = null)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTimeRemaining()
    {
      return $this->timeRemaining;
    }

    /**
     * @param SearchColumnDoubleField[] $timeRemaining
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setTimeRemaining(array $timeRemaining = null)
    {
      $this->timeRemaining = $timeRemaining;
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
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setTitle(array $title = null)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTransaction()
    {
      return $this->transaction;
    }

    /**
     * @param SearchColumnSelectField[] $transaction
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setTransaction(array $transaction = null)
    {
      $this->transaction = $transaction;
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
     * @return \Nzolt\NetSuite\TaskSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
