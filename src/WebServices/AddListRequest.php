<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * AddListRequest
 */
class AddListRequest {

    /**
     * @access public
     * @var Record[]
     */
    public $record;

    static $paramtypesmap = array(
    	"record" => "Record[]",
    );
}