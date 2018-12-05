<?php

namespace Nzolt\NetSuite;

class ProjectTask extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $eventId
     */
    protected $eventId = null;

    /**
     * @var float $percentTimeComplete
     */
    protected $percentTimeComplete = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var RecordRef $company
     */
    protected $company = null;

    /**
     * @var RecordRef $contact
     */
    protected $contact = null;

    /**
     * @var RecordRef $order
     */
    protected $order = null;

    /**
     * @var RecordRef $owner
     */
    protected $owner = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var RecordRef $priority
     */
    protected $priority = null;

    /**
     * @var float $estimatedWork
     */
    protected $estimatedWork = null;

    /**
     * @var float $estimatedWorkBaseline
     */
    protected $estimatedWorkBaseline = null;

    /**
     * @var ProjectTaskConstraintType $constraintType
     */
    protected $constraintType = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $startDateBaseline
     */
    protected $startDateBaseline = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var \DateTime $finishByDate
     */
    protected $finishByDate = null;

    /**
     * @var \DateTime $endDateBaseline
     */
    protected $endDateBaseline = null;

    /**
     * @var float $actualWork
     */
    protected $actualWork = null;

    /**
     * @var float $remainingWork
     */
    protected $remainingWork = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var boolean $isMilestone
     */
    protected $isMilestone = null;

    /**
     * @var string $isOnCriticalPath
     */
    protected $isOnCriticalPath = null;

    /**
     * @var float $slackMinutes
     */
    protected $slackMinutes = null;

    /**
     * @var \DateTime $lateEnd
     */
    protected $lateEnd = null;

    /**
     * @var \DateTime $lateStart
     */
    protected $lateStart = null;

    /**
     * @var ProjectTaskStatus $status
     */
    protected $status = null;

    /**
     * @var boolean $nonBillableTask
     */
    protected $nonBillableTask = null;

    /**
     * @var ProjectTaskAssigneeList $assigneeList
     */
    protected $assigneeList = null;

    /**
     * @var ProjectTaskPredecessorList $predecessorList
     */
    protected $predecessorList = null;

    /**
     * @var ProjectTaskTimeItemList $timeItemList
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
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEventId()
    {
      return $this->eventId;
    }

    /**
     * @param RecordRef $eventId
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setEventId($eventId)
    {
      $this->eventId = $eventId;
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
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setPercentTimeComplete($percentTimeComplete)
    {
      $this->percentTimeComplete = $percentTimeComplete;
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
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
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
     * @return \Nzolt\NetSuite\ProjectTask
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
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param RecordRef $order
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setOrder($order)
    {
      $this->order = $order;
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
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
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
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param RecordRef $priority
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedWork()
    {
      return $this->estimatedWork;
    }

    /**
     * @param float $estimatedWork
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setEstimatedWork($estimatedWork)
    {
      $this->estimatedWork = $estimatedWork;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedWorkBaseline()
    {
      return $this->estimatedWorkBaseline;
    }

    /**
     * @param float $estimatedWorkBaseline
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setEstimatedWorkBaseline($estimatedWorkBaseline)
    {
      $this->estimatedWorkBaseline = $estimatedWorkBaseline;
      return $this;
    }

    /**
     * @return ProjectTaskConstraintType
     */
    public function getConstraintType()
    {
      return $this->constraintType;
    }

    /**
     * @param ProjectTaskConstraintType $constraintType
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setConstraintType($constraintType)
    {
      $this->constraintType = $constraintType;
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
     * @return \Nzolt\NetSuite\ProjectTask
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
    public function getStartDateBaseline()
    {
      if ($this->startDateBaseline == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDateBaseline);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDateBaseline
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setStartDateBaseline(\DateTime $startDateBaseline = null)
    {
      if ($startDateBaseline == null) {
       $this->startDateBaseline = null;
      } else {
        $this->startDateBaseline = $startDateBaseline->format(\DateTime::ATOM);
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
     * @return \Nzolt\NetSuite\ProjectTask
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
    public function getFinishByDate()
    {
      if ($this->finishByDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->finishByDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $finishByDate
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setFinishByDate(\DateTime $finishByDate = null)
    {
      if ($finishByDate == null) {
       $this->finishByDate = null;
      } else {
        $this->finishByDate = $finishByDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDateBaseline()
    {
      if ($this->endDateBaseline == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDateBaseline);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDateBaseline
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setEndDateBaseline(\DateTime $endDateBaseline = null)
    {
      if ($endDateBaseline == null) {
       $this->endDateBaseline = null;
      } else {
        $this->endDateBaseline = $endDateBaseline->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getActualWork()
    {
      return $this->actualWork;
    }

    /**
     * @param float $actualWork
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setActualWork($actualWork)
    {
      $this->actualWork = $actualWork;
      return $this;
    }

    /**
     * @return float
     */
    public function getRemainingWork()
    {
      return $this->remainingWork;
    }

    /**
     * @param float $remainingWork
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setRemainingWork($remainingWork)
    {
      $this->remainingWork = $remainingWork;
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
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMilestone()
    {
      return $this->isMilestone;
    }

    /**
     * @param boolean $isMilestone
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setIsMilestone($isMilestone)
    {
      $this->isMilestone = $isMilestone;
      return $this;
    }

    /**
     * @return string
     */
    public function getIsOnCriticalPath()
    {
      return $this->isOnCriticalPath;
    }

    /**
     * @param string $isOnCriticalPath
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setIsOnCriticalPath($isOnCriticalPath)
    {
      $this->isOnCriticalPath = $isOnCriticalPath;
      return $this;
    }

    /**
     * @return float
     */
    public function getSlackMinutes()
    {
      return $this->slackMinutes;
    }

    /**
     * @param float $slackMinutes
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setSlackMinutes($slackMinutes)
    {
      $this->slackMinutes = $slackMinutes;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLateEnd()
    {
      if ($this->lateEnd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lateEnd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lateEnd
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setLateEnd(\DateTime $lateEnd = null)
    {
      if ($lateEnd == null) {
       $this->lateEnd = null;
      } else {
        $this->lateEnd = $lateEnd->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLateStart()
    {
      if ($this->lateStart == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lateStart);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lateStart
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setLateStart(\DateTime $lateStart = null)
    {
      if ($lateStart == null) {
       $this->lateStart = null;
      } else {
        $this->lateStart = $lateStart->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ProjectTaskStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param ProjectTaskStatus $status
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonBillableTask()
    {
      return $this->nonBillableTask;
    }

    /**
     * @param boolean $nonBillableTask
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setNonBillableTask($nonBillableTask)
    {
      $this->nonBillableTask = $nonBillableTask;
      return $this;
    }

    /**
     * @return ProjectTaskAssigneeList
     */
    public function getAssigneeList()
    {
      return $this->assigneeList;
    }

    /**
     * @param ProjectTaskAssigneeList $assigneeList
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setAssigneeList($assigneeList)
    {
      $this->assigneeList = $assigneeList;
      return $this;
    }

    /**
     * @return ProjectTaskPredecessorList
     */
    public function getPredecessorList()
    {
      return $this->predecessorList;
    }

    /**
     * @param ProjectTaskPredecessorList $predecessorList
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setPredecessorList($predecessorList)
    {
      $this->predecessorList = $predecessorList;
      return $this;
    }

    /**
     * @return ProjectTaskTimeItemList
     */
    public function getTimeItemList()
    {
      return $this->timeItemList;
    }

    /**
     * @param ProjectTaskTimeItemList $timeItemList
     * @return \Nzolt\NetSuite\ProjectTask
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
     * @return \Nzolt\NetSuite\ProjectTask
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
     * @return \Nzolt\NetSuite\ProjectTask
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
     * @return \Nzolt\NetSuite\ProjectTask
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
