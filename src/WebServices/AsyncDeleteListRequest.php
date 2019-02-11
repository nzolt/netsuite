<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * AsyncDeleteListRequest
 */
class AsyncDeleteListRequest {

    /**
     * @access public
     * @var BaseRef[]
     */
    public $baseRef;

    static $paramtypesmap = array(
    	"baseRef" => "BaseRef[]",
    );
}