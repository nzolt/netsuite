<?php

namespace Nzolt\NetSuite;

class CalendarEventSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchEnumMultiSelectField $accessLevel
     */
    protected $accessLevel = null;

    /**
     * @var SearchMultiSelectField $attendee
     */
    protected $attendee = null;

    /**
     * @var SearchMultiSelectField $calendar
     */
    protected $calendar = null;

    /**
     * @var SearchDateField $completedDate
     */
    protected $completedDate = null;

    /**
     * @var SearchDateField $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchDateField $instanceStart
     */
    protected $instanceStart = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isUpcomingEvent
     */
    protected $isUpcomingEvent = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchStringField $location
     */
    protected $location = null;

    /**
     * @var SearchStringField $message
     */
    protected $message = null;

    /**
     * @var SearchMultiSelectField $organizer
     */
    protected $organizer = null;

    /**
     * @var SearchMultiSelectField $owner
     */
    protected $owner = null;

    /**
     * @var SearchMultiSelectField $resource
     */
    protected $resource = null;

    /**
     * @var SearchEnumMultiSelectField $response
     */
    protected $response = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchEnumMultiSelectField $status
     */
    protected $status = null;

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
     * @return SearchEnumMultiSelectField
     */
    public function getAccessLevel()
    {
      return $this->accessLevel;
    }

    /**
     * @param SearchEnumMultiSelectField $accessLevel
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setAccessLevel($accessLevel)
    {
      $this->accessLevel = $accessLevel;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAttendee()
    {
      return $this->attendee;
    }

    /**
     * @param SearchMultiSelectField $attendee
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setAttendee($attendee)
    {
      $this->attendee = $attendee;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCalendar()
    {
      return $this->calendar;
    }

    /**
     * @param SearchMultiSelectField $calendar
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setCalendar($calendar)
    {
      $this->calendar = $calendar;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setCompletedDate($completedDate)
    {
      $this->completedDate = $completedDate;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setCreatedDate($createdDate)
    {
      $this->createdDate = $createdDate;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
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
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getInstanceStart()
    {
      return $this->instanceStart;
    }

    /**
     * @param SearchDateField $instanceStart
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setInstanceStart($instanceStart)
    {
      $this->instanceStart = $instanceStart;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
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
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsUpcomingEvent()
    {
      return $this->isUpcomingEvent;
    }

    /**
     * @param SearchBooleanField $isUpcomingEvent
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setIsUpcomingEvent($isUpcomingEvent)
    {
      $this->isUpcomingEvent = $isUpcomingEvent;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchStringField $location
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param SearchStringField $message
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOrganizer()
    {
      return $this->organizer;
    }

    /**
     * @param SearchMultiSelectField $organizer
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setOrganizer($organizer)
    {
      $this->organizer = $organizer;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getResource()
    {
      return $this->resource;
    }

    /**
     * @param SearchMultiSelectField $resource
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setResource($resource)
    {
      $this->resource = $resource;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param SearchEnumMultiSelectField $response
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setResponse($response)
    {
      $this->response = $response;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
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
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
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
     * @return \Nzolt\NetSuite\CalendarEventSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
