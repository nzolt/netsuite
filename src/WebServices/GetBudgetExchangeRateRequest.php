<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\BudgetExchangeRateFilter;

/**
 * GetBudgetExchangeRateRequest
 */
class GetBudgetExchangeRateRequest {

    /**
     * @access public
     * @var BudgetExchangeRateFilter
     */
    protected $budgetExchangeRateFilter;

    static $paramtypesmap = array(
    	"budgetExchangeRateFilter" => "BudgetExchangeRateFilter",
    );

    /**
     * Set budgetExchangeRateFilter
     *
     * @param BudgetExchangeRateFilter $budgetExchangeRateFilter
     * @return GetBudgetExchangeRateRequest
     */
    public function setBudgetExchangeRateFilter(BudgetExchangeRateFilter $budgetExchangeRateFilter) {
        $this->budgetExchangeRateFilter = $budgetExchangeRateFilter;
        return $this;
    }

    /**
     * Get budgetExchangeRateFilter
     *
     * @return BudgetExchangeRateFilter
     */
    public function getBudgetExchangeRateFilter() {
        return $this->budgetExchangeRateFilter;
    }

}