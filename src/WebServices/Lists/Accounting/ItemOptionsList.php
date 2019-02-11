<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * ItemOptionsList
 */
class ItemOptionsList {

    /**
     * @access public
     * @var RecordRef[]
     */
    public $itemOptions;

    static $paramtypesmap = array(
    	"itemOptions" => "RecordRef[]",
    );
}