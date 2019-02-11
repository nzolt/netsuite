<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * ItemAvailabilityList
 */
class ItemAvailabilityList {

    /**
     * @access public
     * @var ItemAvailability[]
     */
    public $itemAvailability;

    static $paramtypesmap = array(
    	"itemAvailability" => "ItemAvailability[]",
    );
}