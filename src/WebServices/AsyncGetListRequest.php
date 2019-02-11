<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * AsyncGetListRequest
 */
class AsyncGetListRequest {

    /**
     * @access public
     * @var BaseRef[]
     */
    public $baseRef;

    static $paramtypesmap = array(
    	"baseRef" => "BaseRef[]",
    );
}