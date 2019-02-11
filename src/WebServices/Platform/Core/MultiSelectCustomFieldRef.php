<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * MultiSelectCustomFieldRef
 */
class MultiSelectCustomFieldRef extends CustomFieldRef {

    /**
     * @access public
     * @var ListOrRecordRef[]
     */
    public $value;

    static $paramtypesmap = array(
    	"value" => "ListOrRecordRef[]",
    );
}