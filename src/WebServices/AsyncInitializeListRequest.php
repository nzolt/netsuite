<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * AsyncInitializeListRequest
 */
class AsyncInitializeListRequest {

    /**
     * @access public
     * @var InitializeRecord[]
     */
    public $initializeRecord;

    static $paramtypesmap = array(
    	"initializeRecord" => "InitializeRecord[]",
    );
}