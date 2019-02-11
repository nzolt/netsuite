<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\Duration;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\TaskPriority;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\TaskStatus;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\TaskReminderType;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\TaskReminderMinutes;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Task
 */
class Task extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $company;

    /**
     * @access public
     * @var RecordRef
     */
    public $contact;

    /**
     * @access public
     * @var RecordRef
     */
    public $supportCase;

    /**
     * @access public
     * @var RecordRef
     */
    public $transaction;

    /**
     * @access public
     * @var RecordRef
     */
    public $milestone;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var string
     */
    protected $title;

    /**
     * @access public
     * @var RecordRef
     */
    public $assigned;

    /**
     * @access public
     * @var boolean
     */
    protected $sendEmail;

    /**
     * @access public
     * @var boolean
     */
    protected $timedEvent;

    /**
     * @access public
     * @var Duration
     */
    protected $estimatedTime;

    /**
     * @access public
     * @var Duration
     */
    protected $estimatedTimeOverride;

    /**
     * @access public
     * @var Duration
     */
    protected $actualTime;

    /**
     * @access public
     * @var Duration
     */
    protected $timeRemaining;

    /**
     * @access public
     * @var float
     */
    protected $percentTimeComplete;

    /**
     * @access public
     * @var float
     */
    protected $percentComplete;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $dueDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $completedDate;

    /**
     * @access public
     * @var TaskPriority
     */
    protected $priority;

    /**
     * @access public
     * @var TaskStatus
     */
    protected $status;

    /**
     * @access public
     * @var string
     */
    protected $message;

    /**
     * @access public
     * @var boolean
     */
    protected $accessLevel;

    /**
     * @access public
     * @var TaskReminderType
     */
    protected $reminderType;

    /**
     * @access public
     * @var TaskReminderMinutes
     */
    protected $reminderMinutes;

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $owner;

    /**
     * @access public
     * @var TaskContactList
     */
    protected $contactList;

    /**
     * @access public
     * @var TaskTimeItemList
     */
    protected $timeItemList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"company" => "RecordRef",
    	"contact" => "RecordRef",
    	"supportCase" => "RecordRef",
    	"transaction" => "RecordRef",
    	"milestone" => "RecordRef",
    	"customForm" => "RecordRef",
    	"title" => "string",
    	"assigned" => "RecordRef",
    	"sendEmail" => "boolean",
    	"timedEvent" => "boolean",
    	"estimatedTime" => "Duration",
    	"estimatedTimeOverride" => "Duration",
    	"actualTime" => "Duration",
    	"timeRemaining" => "Duration",
    	"percentTimeComplete" => "float",
    	"percentComplete" => "float",
    	"parent" => "RecordRef",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"dueDate" => "dateTime",
    	"completedDate" => "dateTime",
    	"priority" => "TaskPriority",
    	"status" => "TaskStatus",
    	"message" => "string",
    	"accessLevel" => "boolean",
    	"reminderType" => "TaskReminderType",
    	"reminderMinutes" => "TaskReminderMinutes",
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"owner" => "RecordRef",
    	"contactList" => "TaskContactList",
    	"timeItemList" => "TaskTimeItemList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set title
     *
     * @param string $title
     * @return Task
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set sendEmail
     *
     * @param boolean $sendEmail
     * @return Task
     */
    public function setSendEmail($sendEmail) {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    /**
     * Get sendEmail
     *
     * @return boolean
     */
    public function getSendEmail() {
        return $this->sendEmail;
    }


    /**
     * Set timedEvent
     *
     * @param boolean $timedEvent
     * @return Task
     */
    public function setTimedEvent($timedEvent) {
        $this->timedEvent = $timedEvent;
        return $this;
    }

    /**
     * Get timedEvent
     *
     * @return boolean
     */
    public function getTimedEvent() {
        return $this->timedEvent;
    }


    /**
     * Set estimatedTime
     *
     * @param Duration $estimatedTime
     * @return Task
     */
    public function setEstimatedTime(Duration $estimatedTime) {
        $this->estimatedTime = $estimatedTime;
        return $this;
    }

    /**
     * Get estimatedTime
     *
     * @return Duration
     */
    public function getEstimatedTime() {
        return $this->estimatedTime;
    }


    /**
     * Set estimatedTimeOverride
     *
     * @param Duration $estimatedTimeOverride
     * @return Task
     */
    public function setEstimatedTimeOverride(Duration $estimatedTimeOverride) {
        $this->estimatedTimeOverride = $estimatedTimeOverride;
        return $this;
    }

    /**
     * Get estimatedTimeOverride
     *
     * @return Duration
     */
    public function getEstimatedTimeOverride() {
        return $this->estimatedTimeOverride;
    }


    /**
     * Set actualTime
     *
     * @param Duration $actualTime
     * @return Task
     */
    public function setActualTime(Duration $actualTime) {
        $this->actualTime = $actualTime;
        return $this;
    }

    /**
     * Get actualTime
     *
     * @return Duration
     */
    public function getActualTime() {
        return $this->actualTime;
    }


    /**
     * Set timeRemaining
     *
     * @param Duration $timeRemaining
     * @return Task
     */
    public function setTimeRemaining(Duration $timeRemaining) {
        $this->timeRemaining = $timeRemaining;
        return $this;
    }

    /**
     * Get timeRemaining
     *
     * @return Duration
     */
    public function getTimeRemaining() {
        return $this->timeRemaining;
    }


    /**
     * Set percentTimeComplete
     *
     * @param float $percentTimeComplete
     * @return Task
     */
    public function setPercentTimeComplete($percentTimeComplete) {
        $this->percentTimeComplete = $percentTimeComplete;
        return $this;
    }

    /**
     * Get percentTimeComplete
     *
     * @return float
     */
    public function getPercentTimeComplete() {
        return $this->percentTimeComplete;
    }


    /**
     * Set percentComplete
     *
     * @param float $percentComplete
     * @return Task
     */
    public function setPercentComplete($percentComplete) {
        $this->percentComplete = $percentComplete;
        return $this;
    }

    /**
     * Get percentComplete
     *
     * @return float
     */
    public function getPercentComplete() {
        return $this->percentComplete;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Task
     */
    public function setStartDate(\DateTime $startDate) {
        $this->startDate = $startDate->format('c');
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate() {
        return new \DateTime($this->startDate);
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Task
     */
    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate->format('c');
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return new \DateTime($this->endDate);
    }


    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return Task
     */
    public function setDueDate(\DateTime $dueDate) {
        $this->dueDate = $dueDate->format('c');
        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate() {
        return new \DateTime($this->dueDate);
    }


    /**
     * Set completedDate
     *
     * @param \DateTime $completedDate
     * @return Task
     */
    public function setCompletedDate(\DateTime $completedDate) {
        $this->completedDate = $completedDate->format('c');
        return $this;
    }

    /**
     * Get completedDate
     *
     * @return \DateTime
     */
    public function getCompletedDate() {
        return new \DateTime($this->completedDate);
    }


    /**
     * Set priority
     *
     * @param TaskPriority $priority
     * @return Task
     */
    public function setPriority(TaskPriority $priority) {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Get priority
     *
     * @return TaskPriority
     */
    public function getPriority() {
        return $this->priority;
    }


    /**
     * Set status
     *
     * @param TaskStatus $status
     * @return Task
     */
    public function setStatus(TaskStatus $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return TaskStatus
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return Task
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }


    /**
     * Set accessLevel
     *
     * @param boolean $accessLevel
     * @return Task
     */
    public function setAccessLevel($accessLevel) {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * Get accessLevel
     *
     * @return boolean
     */
    public function getAccessLevel() {
        return $this->accessLevel;
    }


    /**
     * Set reminderType
     *
     * @param TaskReminderType $reminderType
     * @return Task
     */
    public function setReminderType(TaskReminderType $reminderType) {
        $this->reminderType = $reminderType;
        return $this;
    }

    /**
     * Get reminderType
     *
     * @return TaskReminderType
     */
    public function getReminderType() {
        return $this->reminderType;
    }


    /**
     * Set reminderMinutes
     *
     * @param TaskReminderMinutes $reminderMinutes
     * @return Task
     */
    public function setReminderMinutes(TaskReminderMinutes $reminderMinutes) {
        $this->reminderMinutes = $reminderMinutes;
        return $this;
    }

    /**
     * Get reminderMinutes
     *
     * @return TaskReminderMinutes
     */
    public function getReminderMinutes() {
        return $this->reminderMinutes;
    }


    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Task
     */
    public function setCreatedDate(\DateTime $createdDate) {
        $this->createdDate = $createdDate->format('c');
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return new \DateTime($this->createdDate);
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return Task
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate->format('c');
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate() {
        return new \DateTime($this->lastModifiedDate);
    }


    /**
     * Set contactList
     *
     * @param TaskContactList $contactList
     * @return Task
     */
    public function setContactList(TaskContactList $contactList) {
        $this->contactList = $contactList;
        return $this;
    }

    /**
     * Get contactList
     *
     * @return TaskContactList
     */
    public function getContactList() {
        return $this->contactList;
    }


    /**
     * Set timeItemList
     *
     * @param TaskTimeItemList $timeItemList
     * @return Task
     */
    public function setTimeItemList(TaskTimeItemList $timeItemList) {
        $this->timeItemList = $timeItemList;
        return $this;
    }

    /**
     * Get timeItemList
     *
     * @return TaskTimeItemList
     */
    public function getTimeItemList() {
        return $this->timeItemList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Task
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return Task
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return Task
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}