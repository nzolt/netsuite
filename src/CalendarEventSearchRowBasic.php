<?php

namespace Nzolt\NetSuite;

class CalendarEventSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnEnumSelectField[] $accessLevel
     */
    protected $accessLevel = null;

    /**
     * @var SearchColumnSelectField[] $attendee
     */
    protected $attendee = null;

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
     * @var SearchColumnStringField[] $endTime
     */
    protected $endTime = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnDateField[] $instanceEnd
     */
    protected $instanceEnd = null;

    /**
     * @var SearchColumnDateField[] $instanceStart
     */
    protected $instanceStart = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnStringField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnStringField[] $markdone
     */
    protected $markdone = null;

    /**
     * @var SearchColumnStringField[] $message
     */
    protected $message = null;

    /**
     * @var SearchColumnSelectField[] $organizer
     */
    protected $organizer = null;

    /**
     * @var SearchColumnSelectField[] $owner
     */
    protected $owner = null;

    /**
     * @var SearchColumnStringField[] $recurrence
     */
    protected $recurrence = null;

    /**
     * @var SearchColumnSelectField[] $resource
     */
    protected $resource = null;

    /**
     * @var SearchColumnEnumSelectField[] $response
     */
    protected $response = null;

    /**
     * @var SearchColumnStringField[] $startDate
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
     * @return SearchColumnEnumSelectField[]
     */
    public function getAccessLevel()
    {
      return $this->accessLevel;
    }

    /**
     * @param SearchColumnEnumSelectField[] $accessLevel
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setAccessLevel(array $accessLevel = null)
    {
      $this->accessLevel = $accessLevel;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAttendee()
    {
      return $this->attendee;
    }

    /**
     * @param SearchColumnSelectField[] $attendee
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setAttendee(array $attendee = null)
    {
      $this->attendee = $attendee;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setCreatedDate(array $createdDate = null)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEndTime()
    {
      return $this->endTime;
    }

    /**
     * @param SearchColumnStringField[] $endTime
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setEndTime(array $endTime = null)
    {
      $this->endTime = $endTime;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getInstanceEnd()
    {
      return $this->instanceEnd;
    }

    /**
     * @param SearchColumnDateField[] $instanceEnd
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setInstanceEnd(array $instanceEnd = null)
    {
      $this->instanceEnd = $instanceEnd;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getInstanceStart()
    {
      return $this->instanceStart;
    }

    /**
     * @param SearchColumnDateField[] $instanceStart
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setInstanceStart(array $instanceStart = null)
    {
      $this->instanceStart = $instanceStart;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnStringField[] $location
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setMessage(array $message = null)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOrganizer()
    {
      return $this->organizer;
    }

    /**
     * @param SearchColumnSelectField[] $organizer
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setOrganizer(array $organizer = null)
    {
      $this->organizer = $organizer;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setOwner(array $owner = null)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRecurrence()
    {
      return $this->recurrence;
    }

    /**
     * @param SearchColumnStringField[] $recurrence
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setRecurrence(array $recurrence = null)
    {
      $this->recurrence = $recurrence;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getResource()
    {
      return $this->resource;
    }

    /**
     * @param SearchColumnSelectField[] $resource
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setResource(array $resource = null)
    {
      $this->resource = $resource;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param SearchColumnEnumSelectField[] $response
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setResponse(array $response = null)
    {
      $this->response = $response;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchColumnStringField[] $startDate
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setStatus(array $status = null)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
