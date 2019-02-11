<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\CalendarEventAttendeeResponse;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\CalendarEventAttendeeAttendance;

/**
 * CalendarEventAttendee
 */
class CalendarEventAttendee {

    /**
     * @access public
     * @var boolean
     */
    protected $sendEmail;

    /**
     * @access public
     * @var RecordRef
     */
    public $attendee;

    /**
     * @access public
     * @var CalendarEventAttendeeResponse
     */
    protected $response;

    /**
     * @access public
     * @var CalendarEventAttendeeAttendance
     */
    protected $attendance;

    static $paramtypesmap = array(
    	"sendEmail" => "boolean",
    	"attendee" => "RecordRef",
    	"response" => "CalendarEventAttendeeResponse",
    	"attendance" => "CalendarEventAttendeeAttendance",
    );

    /**
     * Set sendEmail
     *
     * @param boolean $sendEmail
     * @return CalendarEventAttendee
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
     * Set response
     *
     * @param CalendarEventAttendeeResponse $response
     * @return CalendarEventAttendee
     */
    public function setResponse(CalendarEventAttendeeResponse $response) {
        $this->response = $response;
        return $this;
    }

    /**
     * Get response
     *
     * @return CalendarEventAttendeeResponse
     */
    public function getResponse() {
        return $this->response;
    }


    /**
     * Set attendance
     *
     * @param CalendarEventAttendeeAttendance $attendance
     * @return CalendarEventAttendee
     */
    public function setAttendance(CalendarEventAttendeeAttendance $attendance) {
        $this->attendance = $attendance;
        return $this;
    }

    /**
     * Get attendance
     *
     * @return CalendarEventAttendeeAttendance
     */
    public function getAttendance() {
        return $this->attendance;
    }

}