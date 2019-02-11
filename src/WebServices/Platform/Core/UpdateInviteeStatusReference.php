<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\CalendarEventAttendeeResponse;

/**
 * UpdateInviteeStatusReference
 */
class UpdateInviteeStatusReference {

    /**
     * @access public
     * @var RecordRef
     */
    public $eventId;

    /**
     * @access public
     * @var CalendarEventAttendeeResponse
     */
    protected $responseCode;

    static $paramtypesmap = array(
    	"eventId" => "RecordRef",
    	"responseCode" => "CalendarEventAttendeeResponse",
    );

    /**
     * Set responseCode
     *
     * @param CalendarEventAttendeeResponse $responseCode
     * @return UpdateInviteeStatusReference
     */
    public function setResponseCode(CalendarEventAttendeeResponse $responseCode) {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * Get responseCode
     *
     * @return CalendarEventAttendeeResponse
     */
    public function getResponseCode() {
        return $this->responseCode;
    }

}