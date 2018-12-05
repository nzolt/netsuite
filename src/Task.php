<?php

namespace Nzolt\NetSuite;

class Task extends Record
{

    /**
     * @var RecordRef $company
     */
    protected $company = null;

    /**
     * @var RecordRef $contact
     */
    protected $contact = null;

    /**
     * @var RecordRef $supportCase
     */
    protected $supportCase = null;

    /**
     * @var RecordRef $transaction
     */
    protected $transaction = null;

    /**
     * @var RecordRef $milestone
     */
    protected $milestone = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var RecordRef $assigned
     */
    protected $assigned = null;

    /**
     * @var boolean $sendEmail
     */
    protected $sendEmail = null;

    /**
     * @var boolean $timedEvent
     */
    protected $timedEvent = null;

    /**
     * @var Duration $estimatedTime
     */
    protected $estimatedTime = null;

    /**
     * @var Duration $estimatedTimeOverride
     */
    protected $estimatedTimeOverride = null;

    /**
     * @var Duration $actualTime
     */
    protected $actualTime = null;

    /**
     * @var Duration $timeRemaining
     */
    protected $timeRemaining = null;

    /**
     * @var float $percentTimeComplete
     */
    protected $percentTimeComplete = null;

    /**
     * @var float $percentComplete
     */
    protected $percentComplete = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var \DateTime $dueDate
     */
    protected $dueDate = null;

    /**
     * @var \DateTime $completedDate
     */
    protected $completedDate = null;

    /**
     * @var TaskPriority $priority
     */
    protected $priority = null;

    /**
     * @var TaskStatus $status
     */
    protected $status = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var boolean $accessLevel
     */
    protected $accessLevel = null;

    /**
     * @var TaskReminderType $reminderType
     */
    protected $reminderType = null;

    /**
     * @var TaskReminderMinutes $reminderMinutes
     */
    protected $reminderMinutes = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var RecordRef $owner
     */
    protected $owner = null;

    /**
     * @var TaskContactList $contactList
     */
    protected $contactList = null;

    /**
     * @var TaskTimeItemList $timeItemList
     */
    protected $timeItemList = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return RecordRef
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param RecordRef $company
     * @return \Nzolt\NetSuite\Task
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param RecordRef $contact
     * @return \Nzolt\NetSuite\Task
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupportCase()
    {
      return $this->supportCase;
    }

    /**
     * @param RecordRef $supportCase
     * @return \Nzolt\NetSuite\Task
     */
    public function setSupportCase($supportCase)
    {
      $this->supportCase = $supportCase;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransaction()
    {
      return $this->transaction;
    }

    /**
     * @param RecordRef $transaction
     * @return \Nzolt\NetSuite\Task
     */
    public function setTransaction($transaction)
    {
      $this->transaction = $transaction;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMilestone()
    {
      return $this->milestone;
    }

    /**
     * @param RecordRef $milestone
     * @return \Nzolt\NetSuite\Task
     */
    public function setMilestone($milestone)
    {
      $this->milestone = $milestone;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\Task
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \Nzolt\NetSuite\Task
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAssigned()
    {
      return $this->assigned;
    }

    /**
     * @param RecordRef $assigned
     * @return \Nzolt\NetSuite\Task
     */
    public function setAssigned($assigned)
    {
      $this->assigned = $assigned;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendEmail()
    {
      return $this->sendEmail;
    }

    /**
     * @param boolean $sendEmail
     * @return \Nzolt\NetSuite\Task
     */
    public function setSendEmail($sendEmail)
    {
      $this->sendEmail = $sendEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTimedEvent()
    {
      return $this->timedEvent;
    }

    /**
     * @param boolean $timedEvent
     * @return \Nzolt\NetSuite\Task
     */
    public function setTimedEvent($timedEvent)
    {
      $this->timedEvent = $timedEvent;
      return $this;
    }

    /**
     * @return Duration
     */
    public function getEstimatedTime()
    {
      return $this->estimatedTime;
    }

    /**
     * @param Duration $estimatedTime
     * @return \Nzolt\NetSuite\Task
     */
    public function setEstimatedTime($estimatedTime)
    {
      $this->estimatedTime = $estimatedTime;
      return $this;
    }

    /**
     * @return Duration
     */
    public function getEstimatedTimeOverride()
    {
      return $this->estimatedTimeOverride;
    }

    /**
     * @param Duration $estimatedTimeOverride
     * @return \Nzolt\NetSuite\Task
     */
    public function setEstimatedTimeOverride($estimatedTimeOverride)
    {
      $this->estimatedTimeOverride = $estimatedTimeOverride;
      return $this;
    }

    /**
     * @return Duration
     */
    public function getActualTime()
    {
      return $this->actualTime;
    }

    /**
     * @param Duration $actualTime
     * @return \Nzolt\NetSuite\Task
     */
    public function setActualTime($actualTime)
    {
      $this->actualTime = $actualTime;
      return $this;
    }

    /**
     * @return Duration
     */
    public function getTimeRemaining()
    {
      return $this->timeRemaining;
    }

    /**
     * @param Duration $timeRemaining
     * @return \Nzolt\NetSuite\Task
     */
    public function setTimeRemaining($timeRemaining)
    {
      $this->timeRemaining = $timeRemaining;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentTimeComplete()
    {
      return $this->percentTimeComplete;
    }

    /**
     * @param float $percentTimeComplete
     * @return \Nzolt\NetSuite\Task
     */
    public function setPercentTimeComplete($percentTimeComplete)
    {
      $this->percentTimeComplete = $percentTimeComplete;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentComplete()
    {
      return $this->percentComplete;
    }

    /**
     * @param float $percentComplete
     * @return \Nzolt\NetSuite\Task
     */
    public function setPercentComplete($percentComplete)
    {
      $this->percentComplete = $percentComplete;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param RecordRef $parent
     * @return \Nzolt\NetSuite\Task
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\Task
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\Task
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
      if ($this->dueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dueDate
     * @return \Nzolt\NetSuite\Task
     */
    public function setDueDate(\DateTime $dueDate = null)
    {
      if ($dueDate == null) {
       $this->dueDate = null;
      } else {
        $this->dueDate = $dueDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDate()
    {
      if ($this->completedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->completedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $completedDate
     * @return \Nzolt\NetSuite\Task
     */
    public function setCompletedDate(\DateTime $completedDate = null)
    {
      if ($completedDate == null) {
       $this->completedDate = null;
      } else {
        $this->completedDate = $completedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return TaskPriority
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param TaskPriority $priority
     * @return \Nzolt\NetSuite\Task
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return TaskStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param TaskStatus $status
     * @return \Nzolt\NetSuite\Task
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Nzolt\NetSuite\Task
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAccessLevel()
    {
      return $this->accessLevel;
    }

    /**
     * @param boolean $accessLevel
     * @return \Nzolt\NetSuite\Task
     */
    public function setAccessLevel($accessLevel)
    {
      $this->accessLevel = $accessLevel;
      return $this;
    }

    /**
     * @return TaskReminderType
     */
    public function getReminderType()
    {
      return $this->reminderType;
    }

    /**
     * @param TaskReminderType $reminderType
     * @return \Nzolt\NetSuite\Task
     */
    public function setReminderType($reminderType)
    {
      $this->reminderType = $reminderType;
      return $this;
    }

    /**
     * @return TaskReminderMinutes
     */
    public function getReminderMinutes()
    {
      return $this->reminderMinutes;
    }

    /**
     * @param TaskReminderMinutes $reminderMinutes
     * @return \Nzolt\NetSuite\Task
     */
    public function setReminderMinutes($reminderMinutes)
    {
      $this->reminderMinutes = $reminderMinutes;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Nzolt\NetSuite\Task
     */
    public function setCreatedDate(\DateTime $createdDate = null)
    {
      if ($createdDate == null) {
       $this->createdDate = null;
      } else {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->lastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastModifiedDate
     * @return \Nzolt\NetSuite\Task
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate = null)
    {
      if ($lastModifiedDate == null) {
       $this->lastModifiedDate = null;
      } else {
        $this->lastModifiedDate = $lastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param RecordRef $owner
     * @return \Nzolt\NetSuite\Task
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return TaskContactList
     */
    public function getContactList()
    {
      return $this->contactList;
    }

    /**
     * @param TaskContactList $contactList
     * @return \Nzolt\NetSuite\Task
     */
    public function setContactList($contactList)
    {
      $this->contactList = $contactList;
      return $this;
    }

    /**
     * @return TaskTimeItemList
     */
    public function getTimeItemList()
    {
      return $this->timeItemList;
    }

    /**
     * @param TaskTimeItemList $timeItemList
     * @return \Nzolt\NetSuite\Task
     */
    public function setTimeItemList($timeItemList)
    {
      $this->timeItemList = $timeItemList;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\Task
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\Task
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\Task
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
