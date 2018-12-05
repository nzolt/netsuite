<?php

namespace Nzolt\NetSuite;

class TaskSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchDoubleField $actualTime
     */
    protected $actualTime = null;

    /**
     * @var SearchMultiSelectField $assigned
     */
    protected $assigned = null;

    /**
     * @var SearchMultiSelectField $company
     */
    protected $company = null;

    /**
     * @var SearchDateField $completedDate
     */
    protected $completedDate = null;

    /**
     * @var SearchMultiSelectField $contact
     */
    protected $contact = null;

    /**
     * @var SearchDateField $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchDateField $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchDoubleField $estimatedTime
     */
    protected $estimatedTime = null;

    /**
     * @var SearchDoubleField $estimatedTimeOverride
     */
    protected $estimatedTimeOverride = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isJobSummaryTask
     */
    protected $isJobSummaryTask = null;

    /**
     * @var SearchBooleanField $isJobTask
     */
    protected $isJobTask = null;

    /**
     * @var SearchBooleanField $isPrivate
     */
    protected $isPrivate = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchLongField $milestone
     */
    protected $milestone = null;

    /**
     * @var SearchMultiSelectField $owner
     */
    protected $owner = null;

    /**
     * @var SearchLongField $percentComplete
     */
    protected $percentComplete = null;

    /**
     * @var SearchLongField $percentTimeComplete
     */
    protected $percentTimeComplete = null;

    /**
     * @var SearchEnumMultiSelectField $priority
     */
    protected $priority = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchEnumMultiSelectField $status
     */
    protected $status = null;

    /**
     * @var SearchDoubleField $timeRemaining
     */
    protected $timeRemaining = null;

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
    public function getActualTime()
    {
      return $this->actualTime;
    }

    /**
     * @param SearchDoubleField $actualTime
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setActualTime($actualTime)
    {
      $this->actualTime = $actualTime;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAssigned()
    {
      return $this->assigned;
    }

    /**
     * @param SearchMultiSelectField $assigned
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setAssigned($assigned)
    {
      $this->assigned = $assigned;
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCompletedDate()
    {
      return $this->completedDate;
    }

    /**
     * @param SearchDateField $completedDate
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setCompletedDate($completedDate)
    {
      $this->completedDate = $completedDate;
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedTime()
    {
      return $this->estimatedTime;
    }

    /**
     * @param SearchDoubleField $estimatedTime
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setEstimatedTime($estimatedTime)
    {
      $this->estimatedTime = $estimatedTime;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedTimeOverride()
    {
      return $this->estimatedTimeOverride;
    }

    /**
     * @param SearchDoubleField $estimatedTimeOverride
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setEstimatedTimeOverride($estimatedTimeOverride)
    {
      $this->estimatedTimeOverride = $estimatedTimeOverride;
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsJobSummaryTask()
    {
      return $this->isJobSummaryTask;
    }

    /**
     * @param SearchBooleanField $isJobSummaryTask
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setIsJobSummaryTask($isJobSummaryTask)
    {
      $this->isJobSummaryTask = $isJobSummaryTask;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsJobTask()
    {
      return $this->isJobTask;
    }

    /**
     * @param SearchBooleanField $isJobTask
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setIsJobTask($isJobTask)
    {
      $this->isJobTask = $isJobTask;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPrivate()
    {
      return $this->isPrivate;
    }

    /**
     * @param SearchBooleanField $isPrivate
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setIsPrivate($isPrivate)
    {
      $this->isPrivate = $isPrivate;
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getMilestone()
    {
      return $this->milestone;
    }

    /**
     * @param SearchLongField $milestone
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setMilestone($milestone)
    {
      $this->milestone = $milestone;
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPercentComplete()
    {
      return $this->percentComplete;
    }

    /**
     * @param SearchLongField $percentComplete
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setPercentComplete($percentComplete)
    {
      $this->percentComplete = $percentComplete;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPercentTimeComplete()
    {
      return $this->percentTimeComplete;
    }

    /**
     * @param SearchLongField $percentTimeComplete
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setPercentTimeComplete($percentTimeComplete)
    {
      $this->percentTimeComplete = $percentTimeComplete;
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTimeRemaining()
    {
      return $this->timeRemaining;
    }

    /**
     * @param SearchDoubleField $timeRemaining
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setTimeRemaining($timeRemaining)
    {
      $this->timeRemaining = $timeRemaining;
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
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
     * @return \Nzolt\NetSuite\TaskSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
