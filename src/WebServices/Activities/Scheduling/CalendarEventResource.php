<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

/**
 * CalendarEventResource
 */
class CalendarEventResource {

    /**
     * @access public
     * @var RecordRef
     */
    public $resource;

    /**
     * @access public
     * @var string
     */
    protected $location;

    static $paramtypesmap = array(
    	"resource" => "RecordRef",
    	"location" => "string",
    );

    /**
     * Set location
     *
     * @param string $location
     * @return CalendarEventResource
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

}