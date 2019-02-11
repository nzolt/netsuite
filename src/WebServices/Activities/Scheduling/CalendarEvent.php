<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\RecurrenceFrequency;
use Nzolt\NetSuite\WebServices\Platform\Common\RecurrenceDowMaskList;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\RecurrenceDow;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\RecurrenceDowim;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\CalendarEventReminderType;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\CalendarEventReminderMinutes;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\CalendarEventStatus;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\CalendarEventAccessLevel;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * CalendarEvent
 */
class CalendarEvent extends Record {

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
     * @var integer
     */
    protected $period;

    /**
     * @access public
     * @var RecurrenceFrequency
     */
    protected $frequency;

    /**
     * @access public
     * @var RecurrenceDowMaskList
     */
    protected $recurrenceDowMaskList;

    /**
     * @access public
     * @var RecurrenceDow
     */
    protected $recurrenceDow;

    /**
     * @access public
     * @var RecurrenceDowim
     */
    protected $recurrenceDowim;

    /**
     * @access public
     * @var dateTime
     */
    protected $seriesStartDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endByDate;

    /**
     * @access public
     * @var boolean
     */
    protected $noEndDate;

    /**
     * @access public
     * @var boolean
     */
    protected $sendEmail;

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
     * @var string
     */
    protected $recurrence;

    /**
     * @access public
     * @var string
     */
    protected $location;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

    /**
     * @access public
     * @var boolean
     */
    protected $allDayEvent;

    /**
     * @access public
     * @var boolean
     */
    protected $timedEvent;

    /**
     * @access public
     * @var CalendarEventReminderType
     */
    protected $reminderType;

    /**
     * @access public
     * @var CalendarEventReminderMinutes
     */
    protected $reminderMinutes;

    /**
     * @access public
     * @var CalendarEventStatus
     */
    protected $status;

    /**
     * @access public
     * @var CalendarEventAccessLevel
     */
    protected $accessLevel;

    /**
     * @access public
     * @var RecordRef
     */
    public $organizer;

    /**
     * @access public
     * @var string
     */
    protected $message;

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    /**
     * @access public
     * @var ExclusionDateList
     */
    protected $exclusionDateList;

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
     * @var CalendarEventAttendeeList
     */
    protected $attendeeList;

    /**
     * @access public
     * @var CalendarEventResourceList
     */
    protected $resourceList;

    /**
     * @access public
     * @var CalendarEventTimeItemList
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
    	"period" => "integer",
    	"frequency" => "RecurrenceFrequency",
    	"recurrenceDowMaskList" => "RecurrenceDowMaskList",
    	"recurrenceDow" => "RecurrenceDow",
    	"recurrenceDowim" => "RecurrenceDowim",
    	"seriesStartDate" => "dateTime",
    	"endByDate" => "dateTime",
    	"noEndDate" => "boolean",
    	"sendEmail" => "boolean",
    	"customForm" => "RecordRef",
    	"title" => "string",
    	"recurrence" => "string",
    	"location" => "string",
    	"startDate" => "dateTime",
    	"allDayEvent" => "boolean",
    	"timedEvent" => "boolean",
    	"reminderType" => "CalendarEventReminderType",
    	"reminderMinutes" => "CalendarEventReminderMinutes",
    	"status" => "CalendarEventStatus",
    	"accessLevel" => "CalendarEventAccessLevel",
    	"organizer" => "RecordRef",
    	"message" => "string",
    	"createdDate" => "dateTime",
    	"endDate" => "dateTime",
    	"exclusionDateList" => "ExclusionDateList",
    	"lastModifiedDate" => "dateTime",
    	"owner" => "RecordRef",
    	"attendeeList" => "CalendarEventAttendeeList",
    	"resourceList" => "CalendarEventResourceList",
    	"timeItemList" => "CalendarEventTimeItemList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set period
     *
     * @param integer $period
     * @return CalendarEvent
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * Get period
     *
     * @return integer
     */
    public function getPeriod() {
        return $this->period;
    }


    /**
     * Set frequency
     *
     * @param RecurrenceFrequency $frequency
     * @return CalendarEvent
     */
    public function setFrequency(RecurrenceFrequency $frequency) {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Get frequency
     *
     * @return RecurrenceFrequency
     */
    public function getFrequency() {
        return $this->frequency;
    }


    /**
     * Set recurrenceDowMaskList
     *
     * @param RecurrenceDowMaskList $recurrenceDowMaskList
     * @return CalendarEvent
     */
    public function setRecurrenceDowMaskList(RecurrenceDowMaskList $recurrenceDowMaskList) {
        $this->recurrenceDowMaskList = $recurrenceDowMaskList;
        return $this;
    }

    /**
     * Get recurrenceDowMaskList
     *
     * @return RecurrenceDowMaskList
     */
    public function getRecurrenceDowMaskList() {
        return $this->recurrenceDowMaskList;
    }


    /**
     * Set recurrenceDow
     *
     * @param RecurrenceDow $recurrenceDow
     * @return CalendarEvent
     */
    public function setRecurrenceDow(RecurrenceDow $recurrenceDow) {
        $this->recurrenceDow = $recurrenceDow;
        return $this;
    }

    /**
     * Get recurrenceDow
     *
     * @return RecurrenceDow
     */
    public function getRecurrenceDow() {
        return $this->recurrenceDow;
    }


    /**
     * Set recurrenceDowim
     *
     * @param RecurrenceDowim $recurrenceDowim
     * @return CalendarEvent
     */
    public function setRecurrenceDowim(RecurrenceDowim $recurrenceDowim) {
        $this->recurrenceDowim = $recurrenceDowim;
        return $this;
    }

    /**
     * Get recurrenceDowim
     *
     * @return RecurrenceDowim
     */
    public function getRecurrenceDowim() {
        return $this->recurrenceDowim;
    }


    /**
     * Set seriesStartDate
     *
     * @param \DateTime $seriesStartDate
     * @return CalendarEvent
     */
    public function setSeriesStartDate(\DateTime $seriesStartDate) {
        $this->seriesStartDate = $seriesStartDate->format('c');
        return $this;
    }

    /**
     * Get seriesStartDate
     *
     * @return \DateTime
     */
    public function getSeriesStartDate() {
        return new \DateTime($this->seriesStartDate);
    }


    /**
     * Set endByDate
     *
     * @param \DateTime $endByDate
     * @return CalendarEvent
     */
    public function setEndByDate(\DateTime $endByDate) {
        $this->endByDate = $endByDate->format('c');
        return $this;
    }

    /**
     * Get endByDate
     *
     * @return \DateTime
     */
    public function getEndByDate() {
        return new \DateTime($this->endByDate);
    }


    /**
     * Set noEndDate
     *
     * @param boolean $noEndDate
     * @return CalendarEvent
     */
    public function setNoEndDate($noEndDate) {
        $this->noEndDate = $noEndDate;
        return $this;
    }

    /**
     * Get noEndDate
     *
     * @return boolean
     */
    public function getNoEndDate() {
        return $this->noEndDate;
    }


    /**
     * Set sendEmail
     *
     * @param boolean $sendEmail
     * @return CalendarEvent
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
     * Set title
     *
     * @param string $title
     * @return CalendarEvent
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
     * Set recurrence
     *
     * @param string $recurrence
     * @return CalendarEvent
     */
    public function setRecurrence($recurrence) {
        $this->recurrence = $recurrence;
        return $this;
    }

    /**
     * Get recurrence
     *
     * @return string
     */
    public function getRecurrence() {
        return $this->recurrence;
    }


    /**
     * Set location
     *
     * @param string $location
     * @return CalendarEvent
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return CalendarEvent
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
     * Set allDayEvent
     *
     * @param boolean $allDayEvent
     * @return CalendarEvent
     */
    public function setAllDayEvent($allDayEvent) {
        $this->allDayEvent = $allDayEvent;
        return $this;
    }

    /**
     * Get allDayEvent
     *
     * @return boolean
     */
    public function getAllDayEvent() {
        return $this->allDayEvent;
    }


    /**
     * Set timedEvent
     *
     * @param boolean $timedEvent
     * @return CalendarEvent
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
     * Set reminderType
     *
     * @param CalendarEventReminderType $reminderType
     * @return CalendarEvent
     */
    public function setReminderType(CalendarEventReminderType $reminderType) {
        $this->reminderType = $reminderType;
        return $this;
    }

    /**
     * Get reminderType
     *
     * @return CalendarEventReminderType
     */
    public function getReminderType() {
        return $this->reminderType;
    }


    /**
     * Set reminderMinutes
     *
     * @param CalendarEventReminderMinutes $reminderMinutes
     * @return CalendarEvent
     */
    public function setReminderMinutes(CalendarEventReminderMinutes $reminderMinutes) {
        $this->reminderMinutes = $reminderMinutes;
        return $this;
    }

    /**
     * Get reminderMinutes
     *
     * @return CalendarEventReminderMinutes
     */
    public function getReminderMinutes() {
        return $this->reminderMinutes;
    }


    /**
     * Set status
     *
     * @param CalendarEventStatus $status
     * @return CalendarEvent
     */
    public function setStatus(CalendarEventStatus $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return CalendarEventStatus
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set accessLevel
     *
     * @param CalendarEventAccessLevel $accessLevel
     * @return CalendarEvent
     */
    public function setAccessLevel(CalendarEventAccessLevel $accessLevel) {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * Get accessLevel
     *
     * @return CalendarEventAccessLevel
     */
    public function getAccessLevel() {
        return $this->accessLevel;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return CalendarEvent
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
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return CalendarEvent
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
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return CalendarEvent
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
     * Set exclusionDateList
     *
     * @param ExclusionDateList $exclusionDateList
     * @return CalendarEvent
     */
    public function setExclusionDateList(ExclusionDateList $exclusionDateList) {
        $this->exclusionDateList = $exclusionDateList;
        return $this;
    }

    /**
     * Get exclusionDateList
     *
     * @return ExclusionDateList
     */
    public function getExclusionDateList() {
        return $this->exclusionDateList;
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return CalendarEvent
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
     * Set attendeeList
     *
     * @param CalendarEventAttendeeList $attendeeList
     * @return CalendarEvent
     */
    public function setAttendeeList(CalendarEventAttendeeList $attendeeList) {
        $this->attendeeList = $attendeeList;
        return $this;
    }

    /**
     * Get attendeeList
     *
     * @return CalendarEventAttendeeList
     */
    public function getAttendeeList() {
        return $this->attendeeList;
    }


    /**
     * Set resourceList
     *
     * @param CalendarEventResourceList $resourceList
     * @return CalendarEvent
     */
    public function setResourceList(CalendarEventResourceList $resourceList) {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Get resourceList
     *
     * @return CalendarEventResourceList
     */
    public function getResourceList() {
        return $this->resourceList;
    }


    /**
     * Set timeItemList
     *
     * @param CalendarEventTimeItemList $timeItemList
     * @return CalendarEvent
     */
    public function setTimeItemList(CalendarEventTimeItemList $timeItemList) {
        $this->timeItemList = $timeItemList;
        return $this;
    }

    /**
     * Get timeItemList
     *
     * @return CalendarEventTimeItemList
     */
    public function getTimeItemList() {
        return $this->timeItemList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return CalendarEvent
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
     * @return CalendarEvent
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
     * @return CalendarEvent
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