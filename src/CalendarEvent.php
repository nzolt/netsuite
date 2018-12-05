<?php

namespace Nzolt\NetSuite;

class CalendarEvent extends Record
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
     * @var int $period
     */
    protected $period = null;

    /**
     * @var RecurrenceFrequency $frequency
     */
    protected $frequency = null;

    /**
     * @var RecurrenceDowMaskList $recurrenceDowMaskList
     */
    protected $recurrenceDowMaskList = null;

    /**
     * @var RecurrenceDow $recurrenceDow
     */
    protected $recurrenceDow = null;

    /**
     * @var RecurrenceDowim $recurrenceDowim
     */
    protected $recurrenceDowim = null;

    /**
     * @var \DateTime $seriesStartDate
     */
    protected $seriesStartDate = null;

    /**
     * @var \DateTime $endByDate
     */
    protected $endByDate = null;

    /**
     * @var boolean $noEndDate
     */
    protected $noEndDate = null;

    /**
     * @var boolean $sendEmail
     */
    protected $sendEmail = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $recurrence
     */
    protected $recurrence = null;

    /**
     * @var string $location
     */
    protected $location = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var boolean $allDayEvent
     */
    protected $allDayEvent = null;

    /**
     * @var boolean $timedEvent
     */
    protected $timedEvent = null;

    /**
     * @var CalendarEventReminderType $reminderType
     */
    protected $reminderType = null;

    /**
     * @var CalendarEventReminderMinutes $reminderMinutes
     */
    protected $reminderMinutes = null;

    /**
     * @var CalendarEventStatus $status
     */
    protected $status = null;

    /**
     * @var CalendarEventAccessLevel $accessLevel
     */
    protected $accessLevel = null;

    /**
     * @var RecordRef $organizer
     */
    protected $organizer = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var ExclusionDateList $exclusionDateList
     */
    protected $exclusionDateList = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var RecordRef $owner
     */
    protected $owner = null;

    /**
     * @var CalendarEventAttendeeList $attendeeList
     */
    protected $attendeeList = null;

    /**
     * @var CalendarEventResourceList $resourceList
     */
    protected $resourceList = null;

    /**
     * @var CalendarEventTimeItemList $timeItemList
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
     * @return \Nzolt\NetSuite\CalendarEvent
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
     * @return \Nzolt\NetSuite\CalendarEvent
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
     * @return \Nzolt\NetSuite\CalendarEvent
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
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setTransaction($transaction)
    {
      $this->transaction = $transaction;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
      return $this->period;
    }

    /**
     * @param int $period
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setPeriod($period)
    {
      $this->period = $period;
      return $this;
    }

    /**
     * @return RecurrenceFrequency
     */
    public function getFrequency()
    {
      return $this->frequency;
    }

    /**
     * @param RecurrenceFrequency $frequency
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setFrequency($frequency)
    {
      $this->frequency = $frequency;
      return $this;
    }

    /**
     * @return RecurrenceDowMaskList
     */
    public function getRecurrenceDowMaskList()
    {
      return $this->recurrenceDowMaskList;
    }

    /**
     * @param RecurrenceDowMaskList $recurrenceDowMaskList
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setRecurrenceDowMaskList($recurrenceDowMaskList)
    {
      $this->recurrenceDowMaskList = $recurrenceDowMaskList;
      return $this;
    }

    /**
     * @return RecurrenceDow
     */
    public function getRecurrenceDow()
    {
      return $this->recurrenceDow;
    }

    /**
     * @param RecurrenceDow $recurrenceDow
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setRecurrenceDow($recurrenceDow)
    {
      $this->recurrenceDow = $recurrenceDow;
      return $this;
    }

    /**
     * @return RecurrenceDowim
     */
    public function getRecurrenceDowim()
    {
      return $this->recurrenceDowim;
    }

    /**
     * @param RecurrenceDowim $recurrenceDowim
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setRecurrenceDowim($recurrenceDowim)
    {
      $this->recurrenceDowim = $recurrenceDowim;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSeriesStartDate()
    {
      if ($this->seriesStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->seriesStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $seriesStartDate
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setSeriesStartDate(\DateTime $seriesStartDate = null)
    {
      if ($seriesStartDate == null) {
       $this->seriesStartDate = null;
      } else {
        $this->seriesStartDate = $seriesStartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndByDate()
    {
      if ($this->endByDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endByDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endByDate
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setEndByDate(\DateTime $endByDate = null)
    {
      if ($endByDate == null) {
       $this->endByDate = null;
      } else {
        $this->endByDate = $endByDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNoEndDate()
    {
      return $this->noEndDate;
    }

    /**
     * @param boolean $noEndDate
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setNoEndDate($noEndDate)
    {
      $this->noEndDate = $noEndDate;
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
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setSendEmail($sendEmail)
    {
      $this->sendEmail = $sendEmail;
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
     * @return \Nzolt\NetSuite\CalendarEvent
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
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecurrence()
    {
      return $this->recurrence;
    }

    /**
     * @param string $recurrence
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setRecurrence($recurrence)
    {
      $this->recurrence = $recurrence;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param string $location
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\CalendarEvent
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
     * @return boolean
     */
    public function getAllDayEvent()
    {
      return $this->allDayEvent;
    }

    /**
     * @param boolean $allDayEvent
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setAllDayEvent($allDayEvent)
    {
      $this->allDayEvent = $allDayEvent;
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
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setTimedEvent($timedEvent)
    {
      $this->timedEvent = $timedEvent;
      return $this;
    }

    /**
     * @return CalendarEventReminderType
     */
    public function getReminderType()
    {
      return $this->reminderType;
    }

    /**
     * @param CalendarEventReminderType $reminderType
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setReminderType($reminderType)
    {
      $this->reminderType = $reminderType;
      return $this;
    }

    /**
     * @return CalendarEventReminderMinutes
     */
    public function getReminderMinutes()
    {
      return $this->reminderMinutes;
    }

    /**
     * @param CalendarEventReminderMinutes $reminderMinutes
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setReminderMinutes($reminderMinutes)
    {
      $this->reminderMinutes = $reminderMinutes;
      return $this;
    }

    /**
     * @return CalendarEventStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param CalendarEventStatus $status
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return CalendarEventAccessLevel
     */
    public function getAccessLevel()
    {
      return $this->accessLevel;
    }

    /**
     * @param CalendarEventAccessLevel $accessLevel
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setAccessLevel($accessLevel)
    {
      $this->accessLevel = $accessLevel;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOrganizer()
    {
      return $this->organizer;
    }

    /**
     * @param RecordRef $organizer
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setOrganizer($organizer)
    {
      $this->organizer = $organizer;
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
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setMessage($message)
    {
      $this->message = $message;
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
     * @return \Nzolt\NetSuite\CalendarEvent
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
     * @return \Nzolt\NetSuite\CalendarEvent
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
     * @return ExclusionDateList
     */
    public function getExclusionDateList()
    {
      return $this->exclusionDateList;
    }

    /**
     * @param ExclusionDateList $exclusionDateList
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setExclusionDateList($exclusionDateList)
    {
      $this->exclusionDateList = $exclusionDateList;
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
     * @return \Nzolt\NetSuite\CalendarEvent
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
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return CalendarEventAttendeeList
     */
    public function getAttendeeList()
    {
      return $this->attendeeList;
    }

    /**
     * @param CalendarEventAttendeeList $attendeeList
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setAttendeeList($attendeeList)
    {
      $this->attendeeList = $attendeeList;
      return $this;
    }

    /**
     * @return CalendarEventResourceList
     */
    public function getResourceList()
    {
      return $this->resourceList;
    }

    /**
     * @param CalendarEventResourceList $resourceList
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setResourceList($resourceList)
    {
      $this->resourceList = $resourceList;
      return $this;
    }

    /**
     * @return CalendarEventTimeItemList
     */
    public function getTimeItemList()
    {
      return $this->timeItemList;
    }

    /**
     * @param CalendarEventTimeItemList $timeItemList
     * @return \Nzolt\NetSuite\CalendarEvent
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
     * @return \Nzolt\NetSuite\CalendarEvent
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
     * @return \Nzolt\NetSuite\CalendarEvent
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
     * @return \Nzolt\NetSuite\CalendarEvent
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
