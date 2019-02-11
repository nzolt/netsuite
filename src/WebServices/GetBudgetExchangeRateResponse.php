<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetBudgetExchangeRateResult;

/**
 * GetBudgetExchangeRateResponse
 */
class GetBudgetExchangeRateResponse {

    /**
     * @access public
     * @var GetBudgetExchangeRateResult
     */
    protected $getBudgetExchangeRateResult;

    static $paramtypesmap = array(
    	"getBudgetExchangeRateResult" => "GetBudgetExchangeRateResult",
    );

    /**
     * Set getBudgetExchangeRateResult
     *
     * @param GetBudgetExchangeRateResult $getBudgetExchangeRateResult
     * @return GetBudgetExchangeRateResponse
     */
    public function setGetBudgetExchangeRateResult(GetBudgetExchangeRateResult $getBudgetExchangeRateResult) {
        $this->getBudgetExchangeRateResult = $getBudgetExchangeRateResult;
        return $this;
    }

    /**
     * Get getBudgetExchangeRateResult
     *
     * @return GetBudgetExchangeRateResult
     */
    public function getGetBudgetExchangeRateResult() {
        return $this->getBudgetExchangeRateResult;
    }

}