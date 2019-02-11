<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

/**
 * ItemsList
 */
class ItemsList {

    /**
     * @access public
     * @var RecordRef[]
     */
    public $items;

    static $paramtypesmap = array(
    	"items" => "RecordRef[]",
    );
}