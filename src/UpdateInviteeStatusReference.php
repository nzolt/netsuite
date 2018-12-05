<?php

namespace Nzolt\NetSuite;

class UpdateInviteeStatusReference
{

    /**
     * @var RecordRef $eventId
     */
    protected $eventId = null;

    /**
     * @var CalendarEventAttendeeResponse $responseCode
     */
    protected $responseCode = null;

    /**
     * @param RecordRef $eventId
     * @param CalendarEventAttendeeResponse $responseCode
     */
    public function __construct($eventId, $responseCode)
    {
      $this->eventId = $eventId;
      $this->responseCode = $responseCode;
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
     * @return \Nzolt\NetSuite\UpdateInviteeStatusReference
     */
    public function setEventId($eventId)
    {
      $this->eventId = $eventId;
      return $this;
    }

    /**
     * @return CalendarEventAttendeeResponse
     */
    public function getResponseCode()
    {
      return $this->responseCode;
    }

    /**
     * @param CalendarEventAttendeeResponse $responseCode
     * @return \Nzolt\NetSuite\UpdateInviteeStatusReference
     */
    public function setResponseCode($responseCode)
    {
      $this->responseCode = $responseCode;
      return $this;
    }

}
