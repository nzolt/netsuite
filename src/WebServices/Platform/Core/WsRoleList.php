<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * WsRoleList
 */
class WsRoleList {

    /**
     * @access public
     * @var WsRole[]
     */
    public $wsRole;

    static $paramtypesmap = array(
    	"wsRole" => "WsRole[]",
    );
}