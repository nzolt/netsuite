<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * DeleteListRequest
 */
class DeleteListRequest {

    /**
     * @access public
     * @var BaseRef[]
     */
    public $baseRef;

    static $paramtypesmap = array(
    	"baseRef" => "BaseRef[]",
    );
}