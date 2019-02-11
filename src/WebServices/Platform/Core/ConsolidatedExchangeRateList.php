<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * ConsolidatedExchangeRateList
 */
class ConsolidatedExchangeRateList {

    /**
     * @access public
     * @var ConsolidatedExchangeRate[]
     */
    public $consolidatedExchangeRate;

    static $paramtypesmap = array(
    	"consolidatedExchangeRate" => "ConsolidatedExchangeRate[]",
    );
}