<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * CustomerGroupPricing
 */
class CustomerGroupPricing {

    /**
     * @access public
     * @var RecordRef
     */
    public $group;

    /**
     * @access public
     * @var RecordRef
     */
    public $level;

    static $paramtypesmap = array(
    	"group" => "RecordRef",
    	"level" => "RecordRef",
    );
}