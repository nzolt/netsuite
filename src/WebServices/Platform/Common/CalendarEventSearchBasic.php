<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * CalendarEventSearchBasic
 */
class CalendarEventSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $attendee;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $calendar;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $completedDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $createdDate;

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
    protected $instanceStart;

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
    protected $isUpcomingEvent;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $location;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $message;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $organizer;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $owner;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $resource;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $response;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $status;

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
    	"attendee" => "SearchMultiSelectField",
    	"calendar" => "SearchMultiSelectField",
    	"completedDate" => "SearchDateField",
    	"createdDate" => "SearchDateField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"instanceStart" => "SearchDateField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isUpcomingEvent" => "SearchBooleanField",
    	"lastModifiedDate" => "SearchDateField",
    	"location" => "SearchStringField",
    	"message" => "SearchStringField",
    	"organizer" => "SearchMultiSelectField",
    	"owner" => "SearchMultiSelectField",
    	"resource" => "SearchMultiSelectField",
    	"response" => "SearchEnumMultiSelectField",
    	"startDate" => "SearchDateField",
    	"status" => "SearchEnumMultiSelectField",
    	"title" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set attendee
     *
     * @param SearchMultiSelectField $attendee
     * @return CalendarEventSearchBasic
     */
    public function setAttendee(SearchMultiSelectField $attendee) {
        $this->attendee = $attendee;
        return $this;
    }

    /**
     * Get attendee
     *
     * @return SearchMultiSelectField
     */
    public function getAttendee() {
        return $this->attendee;
    }


    /**
     * Set calendar
     *
     * @param SearchMultiSelectField $calendar
     * @return CalendarEventSearchBasic
     */
    public function setCalendar(SearchMultiSelectField $calendar) {
        $this->calendar = $calendar;
        return $this;
    }

    /**
     * Get calendar
     *
     * @return SearchMultiSelectField
     */
    public function getCalendar() {
        return $this->calendar;
    }


    /**
     * Set completedDate
     *
     * @param SearchDateField $completedDate
     * @return CalendarEventSearchBasic
     */
    public function setCompletedDate(SearchDateField $completedDate) {
        $this->completedDate = $completedDate;
        return $this;
    }

    /**
     * Get completedDate
     *
     * @return SearchDateField
     */
    public function getCompletedDate() {
        return $this->completedDate;
    }


    /**
     * Set createdDate
     *
     * @param SearchDateField $createdDate
     * @return CalendarEventSearchBasic
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
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return CalendarEventSearchBasic
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
     * @return CalendarEventSearchBasic
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
     * Set instanceStart
     *
     * @param SearchDateField $instanceStart
     * @return CalendarEventSearchBasic
     */
    public function setInstanceStart(SearchDateField $instanceStart) {
        $this->instanceStart = $instanceStart;
        return $this;
    }

    /**
     * Get instanceStart
     *
     * @return SearchDateField
     */
    public function getInstanceStart() {
        return $this->instanceStart;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return CalendarEventSearchBasic
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
     * @return CalendarEventSearchBasic
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
     * Set isUpcomingEvent
     *
     * @param SearchBooleanField $isUpcomingEvent
     * @return CalendarEventSearchBasic
     */
    public function setIsUpcomingEvent(SearchBooleanField $isUpcomingEvent) {
        $this->isUpcomingEvent = $isUpcomingEvent;
        return $this;
    }

    /**
     * Get isUpcomingEvent
     *
     * @return SearchBooleanField
     */
    public function getIsUpcomingEvent() {
        return $this->isUpcomingEvent;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return CalendarEventSearchBasic
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
     * Set location
     *
     * @param SearchStringField $location
     * @return CalendarEventSearchBasic
     */
    public function setLocation(SearchStringField $location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return SearchStringField
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set message
     *
     * @param SearchStringField $message
     * @return CalendarEventSearchBasic
     */
    public function setMessage(SearchStringField $message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return SearchStringField
     */
    public function getMessage() {
        return $this->message;
    }


    /**
     * Set organizer
     *
     * @param SearchMultiSelectField $organizer
     * @return CalendarEventSearchBasic
     */
    public function setOrganizer(SearchMultiSelectField $organizer) {
        $this->organizer = $organizer;
        return $this;
    }

    /**
     * Get organizer
     *
     * @return SearchMultiSelectField
     */
    public function getOrganizer() {
        return $this->organizer;
    }


    /**
     * Set owner
     *
     * @param SearchMultiSelectField $owner
     * @return CalendarEventSearchBasic
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
     * Set resource
     *
     * @param SearchMultiSelectField $resource
     * @return CalendarEventSearchBasic
     */
    public function setResource(SearchMultiSelectField $resource) {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Get resource
     *
     * @return SearchMultiSelectField
     */
    public function getResource() {
        return $this->resource;
    }


    /**
     * Set response
     *
     * @param SearchEnumMultiSelectField $response
     * @return CalendarEventSearchBasic
     */
    public function setResponse(SearchEnumMultiSelectField $response) {
        $this->response = $response;
        return $this;
    }

    /**
     * Get response
     *
     * @return SearchEnumMultiSelectField
     */
    public function getResponse() {
        return $this->response;
    }


    /**
     * Set startDate
     *
     * @param SearchDateField $startDate
     * @return CalendarEventSearchBasic
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
     * Set status
     *
     * @param SearchEnumMultiSelectField $status
     * @return CalendarEventSearchBasic
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
     * Set title
     *
     * @param SearchStringField $title
     * @return CalendarEventSearchBasic
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
     * @return CalendarEventSearchBasic
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