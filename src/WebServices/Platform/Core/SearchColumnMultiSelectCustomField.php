<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnMultiSelectCustomField
 */
class SearchColumnMultiSelectCustomField extends SearchColumnCustomField {

    /**
     * @access public
     * @var ListOrRecordRef[]
     */
    public $searchValue;

    static $paramtypesmap = array(
    	"searchValue" => "ListOrRecordRef[]",
    );
}