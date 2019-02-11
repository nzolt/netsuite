<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

/**
 * ExclusionDateList
 */
class ExclusionDateList {

    /**
     * @access public
     * @var dateTime[]
     */
    public $exclusionDate;

    static $paramtypesmap = array(
    	"exclusionDate" => "dateTime[]",
    );
}