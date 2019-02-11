<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * AsyncAddListRequest
 */
class AsyncAddListRequest {

    /**
     * @access public
     * @var Record[]
     */
    public $record;

    static $paramtypesmap = array(
    	"record" => "Record[]",
    );
}