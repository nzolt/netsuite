<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * RateList
 */
class RateList {

    /**
     * @access public
     * @var Rate[]
     */
    public $rate;

    static $paramtypesmap = array(
    	"rate" => "Rate[]",
    );
}