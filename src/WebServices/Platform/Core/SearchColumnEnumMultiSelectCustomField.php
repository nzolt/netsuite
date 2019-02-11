<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnEnumMultiSelectCustomField
 */
class SearchColumnEnumMultiSelectCustomField extends SearchColumnCustomField {

    /**
     * @access public
     * @var string[]
     */
    public $searchValue;

    static $paramtypesmap = array(
    	"searchValue" => "string[]",
    );
}