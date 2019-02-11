<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnSelectField
 */
class SearchColumnSelectField extends SearchColumnField {

    /**
     * @access public
     * @var RecordRef
     */
    public $searchValue;

    static $paramtypesmap = array(
    	"searchValue" => "RecordRef",
    );
}