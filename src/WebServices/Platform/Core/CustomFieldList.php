<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * CustomFieldList
 */
class CustomFieldList {

    /**
     * @access public
     * @var CustomFieldRef[]
     */
    public $customField;

    static $paramtypesmap = array(
    	"customField" => "CustomFieldRef[]",
    );
}