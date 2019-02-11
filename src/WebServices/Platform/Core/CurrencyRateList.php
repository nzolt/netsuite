<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * CurrencyRateList
 */
class CurrencyRateList {

    /**
     * @access public
     * @var CurrencyRate[]
     */
    public $currencyRate;

    static $paramtypesmap = array(
    	"currencyRate" => "CurrencyRate[]",
    );
}