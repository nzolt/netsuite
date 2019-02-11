<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

/**
 * TaskContact
 */
class TaskContact {

    /**
     * @access public
     * @var RecordRef
     */
    public $company;

    /**
     * @access public
     * @var RecordRef
     */
    public $contact;

    static $paramtypesmap = array(
    	"company" => "RecordRef",
    	"contact" => "RecordRef",
    );
}