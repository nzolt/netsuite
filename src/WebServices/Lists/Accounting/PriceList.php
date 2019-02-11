<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * PriceList
 */
class PriceList {

    /**
     * @access public
     * @var Price[]
     */
    public $price;

    static $paramtypesmap = array(
    	"price" => "Price[]",
    );
}