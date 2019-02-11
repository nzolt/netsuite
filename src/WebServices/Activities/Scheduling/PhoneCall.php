<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\PhoneCallStatus;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\PhoneCallPriority;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\PhoneCallReminderType;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\PhoneCallReminderMinutes;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * PhoneCall
 */
class PhoneCall extends Record {

    /**
     * @access public
     * @var string
     */
    protected $message;

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
    public $owner;

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
     * @var boolean
     */
    protected $timedEvent;

    /**
     * @access public
     * @var dateTime
     */
    protected $completedDate;

    /**
     * @access public
     * @var string
     */
    protected $phone;

    /**
     * @access public
     * @var PhoneCallStatus
     */
    protected $status;

    /**
     * @access public
     * @var PhoneCallPriority
     */
    protected $priority;

    /**
     * @access public
     * @var boolean
     */
    protected $accessLevel;

    /**
     * @access public
     * @var PhoneCallReminderType
     */
    protected $reminderType;

    /**
     * @access public
     * @var PhoneCallReminderMinutes
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
     * @var PhoneCallContactList
     */
    protected $contactList;

    /**
     * @access public
     * @var PhoneCallTimeItemList
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
    	"message" => "string",
    	"company" => "RecordRef",
    	"contact" => "RecordRef",
    	"supportCase" => "RecordRef",
    	"transaction" => "RecordRef",
    	"milestone" => "RecordRef",
    	"customForm" => "RecordRef",
    	"title" => "string",
    	"owner" => "RecordRef",
    	"assigned" => "RecordRef",
    	"sendEmail" => "boolean",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"timedEvent" => "boolean",
    	"completedDate" => "dateTime",
    	"phone" => "string",
    	"status" => "PhoneCallStatus",
    	"priority" => "PhoneCallPriority",
    	"accessLevel" => "boolean",
    	"reminderType" => "PhoneCallReminderType",
    	"reminderMinutes" => "PhoneCallReminderMinutes",
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"contactList" => "PhoneCallContactList",
    	"timeItemList" => "PhoneCallTimeItemList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set message
     *
     * @param string $message
     * @return PhoneCall
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
     * Set title
     *
     * @param string $title
     * @return PhoneCall
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
     * @return PhoneCall
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return PhoneCall
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
     * @return PhoneCall
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
     * Set timedEvent
     *
     * @param boolean $timedEvent
     * @return PhoneCall
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
     * Set completedDate
     *
     * @param \DateTime $completedDate
     * @return PhoneCall
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
     * Set phone
     *
     * @param string $phone
     * @return PhoneCall
     */
    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone() {
        return $this->phone;
    }


    /**
     * Set status
     *
     * @param PhoneCallStatus $status
     * @return PhoneCall
     */
    public function setStatus(PhoneCallStatus $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return PhoneCallStatus
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set priority
     *
     * @param PhoneCallPriority $priority
     * @return PhoneCall
     */
    public function setPriority(PhoneCallPriority $priority) {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Get priority
     *
     * @return PhoneCallPriority
     */
    public function getPriority() {
        return $this->priority;
    }


    /**
     * Set accessLevel
     *
     * @param boolean $accessLevel
     * @return PhoneCall
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
     * @param PhoneCallReminderType $reminderType
     * @return PhoneCall
     */
    public function setReminderType(PhoneCallReminderType $reminderType) {
        $this->reminderType = $reminderType;
        return $this;
    }

    /**
     * Get reminderType
     *
     * @return PhoneCallReminderType
     */
    public function getReminderType() {
        return $this->reminderType;
    }


    /**
     * Set reminderMinutes
     *
     * @param PhoneCallReminderMinutes $reminderMinutes
     * @return PhoneCall
     */
    public function setReminderMinutes(PhoneCallReminderMinutes $reminderMinutes) {
        $this->reminderMinutes = $reminderMinutes;
        return $this;
    }

    /**
     * Get reminderMinutes
     *
     * @return PhoneCallReminderMinutes
     */
    public function getReminderMinutes() {
        return $this->reminderMinutes;
    }


    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return PhoneCall
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
     * @return PhoneCall
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
     * @param PhoneCallContactList $contactList
     * @return PhoneCall
     */
    public function setContactList(PhoneCallContactList $contactList) {
        $this->contactList = $contactList;
        return $this;
    }

    /**
     * Get contactList
     *
     * @return PhoneCallContactList
     */
    public function getContactList() {
        return $this->contactList;
    }


    /**
     * Set timeItemList
     *
     * @param PhoneCallTimeItemList $timeItemList
     * @return PhoneCall
     */
    public function setTimeItemList(PhoneCallTimeItemList $timeItemList) {
        $this->timeItemList = $timeItemList;
        return $this;
    }

    /**
     * Get timeItemList
     *
     * @return PhoneCallTimeItemList
     */
    public function getTimeItemList() {
        return $this->timeItemList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return PhoneCall
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
     * @return PhoneCall
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
     * @return PhoneCall
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