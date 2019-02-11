<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchCustomFieldList
 */
class SearchCustomFieldList {

    /**
     * @access public
     * @var SearchCustomField[]
     */
    public $customField;

    static $paramtypesmap = array(
    	"customField" => "SearchCustomField[]",
    );
}