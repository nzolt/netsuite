<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * NullField
 */
class NullField {

    /**
     * @access public
     * @var string[]
     */
    public $name;

    static $paramtypesmap = array(
    	"name" => "string[]",
    );
}