<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * BudgetExchangeRateList
 */
class BudgetExchangeRateList {

    /**
     * @access public
     * @var BudgetExchangeRate[]
     */
    public $budgetExchangeRate;

    static $paramtypesmap = array(
    	"budgetExchangeRate" => "BudgetExchangeRate[]",
    );
}