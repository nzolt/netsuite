<?php

namespace Nzolt\NetSuite;

class CalendarEventAttendee
{

    /**
     * @var boolean $sendEmail
     */
    protected $sendEmail = null;

    /**
     * @var RecordRef $attendee
     */
    protected $attendee = null;

    /**
     * @var CalendarEventAttendeeResponse $response
     */
    protected $response = null;

    /**
     * @var CalendarEventAttendeeAttendance $attendance
     */
    protected $attendance = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\CalendarEventAttendee
     */
    public function setSendEmail($sendEmail)
    {
      $this->sendEmail = $sendEmail;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAttendee()
    {
      return $this->attendee;
    }

    /**
     * @param RecordRef $attendee
     * @return \Nzolt\NetSuite\CalendarEventAttendee
     */
    public function setAttendee($attendee)
    {
      $this->attendee = $attendee;
      return $this;
    }

    /**
     * @return CalendarEventAttendeeResponse
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param CalendarEventAttendeeResponse $response
     * @return \Nzolt\NetSuite\CalendarEventAttendee
     */
    public function setResponse($response)
    {
      $this->response = $response;
      return $this;
    }

    /**
     * @return CalendarEventAttendeeAttendance
     */
    public function getAttendance()
    {
      return $this->attendance;
    }

    /**
     * @param CalendarEventAttendeeAttendance $attendance
     * @return \Nzolt\NetSuite\CalendarEventAttendee
     */
    public function setAttendance($attendance)
    {
      $this->attendance = $attendance;
      return $this;
    }

}
