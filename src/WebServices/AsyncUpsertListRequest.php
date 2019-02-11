<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * AsyncUpsertListRequest
 */
class AsyncUpsertListRequest {

    /**
     * @access public
     * @var Record[]
     */
    public $record;

    static $paramtypesmap = array(
    	"record" => "Record[]",
    );
}