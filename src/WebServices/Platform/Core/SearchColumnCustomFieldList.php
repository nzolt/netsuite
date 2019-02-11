<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnCustomFieldList
 */
class SearchColumnCustomFieldList {

    /**
     * @access public
     * @var SearchColumnCustomField[]
     */
    public $customField;

    static $paramtypesmap = array(
    	"customField" => "SearchColumnCustomField[]",
    );
}