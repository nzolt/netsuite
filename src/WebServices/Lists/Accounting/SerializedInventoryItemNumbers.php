<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * SerializedInventoryItemNumbers
 */
class SerializedInventoryItemNumbers {

    /**
     * @access public
     * @var RecordRef
     */
    public $serialNumber;

    static $paramtypesmap = array(
    	"serialNumber" => "RecordRef",
    );
}