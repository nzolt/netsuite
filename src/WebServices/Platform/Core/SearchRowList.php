<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchRowList
 */
class SearchRowList {

    /**
     * @access public
     * @var SearchRow[]
     */
    public $searchRow;

    static $paramtypesmap = array(
    	"searchRow" => "SearchRow[]",
    );
}