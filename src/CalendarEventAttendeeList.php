<?php

namespace Nzolt\NetSuite;

class CalendarEventAttendeeList
{

    /**
     * @var CalendarEventAttendee[] $attendee
     */
    protected $attendee = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return CalendarEventAttendee[]
     */
    public function getAttendee()
    {
      return $this->attendee;
    }

    /**
     * @param CalendarEventAttendee[] $attendee
     * @return \Nzolt\NetSuite\CalendarEventAttendeeList
     */
    public function setAttendee(array $attendee = null)
    {
      $this->attendee = $attendee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\CalendarEventAttendeeList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
