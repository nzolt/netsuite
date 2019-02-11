<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * BaseRefList
 */
class BaseRefList {

    /**
     * @access public
     * @var BaseRef[]
     */
    public $baseRef;

    static $paramtypesmap = array(
    	"baseRef" => "BaseRef[]",
    );
}