<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetBudgetExchangeRateResult
 */
class GetBudgetExchangeRateResult {

    /**
     * @access public
     * @var Status
     */
    protected $status;

    /**
     * @access public
     * @var BudgetExchangeRateList
     */
    protected $budgetExchangeRateList;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"budgetExchangeRateList" => "BudgetExchangeRateList",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return GetBudgetExchangeRateResult
     */
    public function setStatus(Status $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return Status
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set budgetExchangeRateList
     *
     * @param BudgetExchangeRateList $budgetExchangeRateList
     * @return GetBudgetExchangeRateResult
     */
    public function setBudgetExchangeRateList(BudgetExchangeRateList $budgetExchangeRateList) {
        $this->budgetExchangeRateList = $budgetExchangeRateList;
        return $this;
    }

    /**
     * Get budgetExchangeRateList
     *
     * @return BudgetExchangeRateList
     */
    public function getBudgetExchangeRateList() {
        return $this->budgetExchangeRateList;
    }

}