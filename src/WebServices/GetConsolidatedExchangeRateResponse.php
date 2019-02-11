<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetConsolidatedExchangeRateResult;

/**
 * GetConsolidatedExchangeRateResponse
 */
class GetConsolidatedExchangeRateResponse {

    /**
     * @access public
     * @var GetConsolidatedExchangeRateResult
     */
    protected $getConsolidatedExchangeRateResult;

    static $paramtypesmap = array(
    	"getConsolidatedExchangeRateResult" => "GetConsolidatedExchangeRateResult",
    );

    /**
     * Set getConsolidatedExchangeRateResult
     *
     * @param GetConsolidatedExchangeRateResult $getConsolidatedExchangeRateResult
     * @return GetConsolidatedExchangeRateResponse
     */
    public function setGetConsolidatedExchangeRateResult(GetConsolidatedExchangeRateResult $getConsolidatedExchangeRateResult) {
        $this->getConsolidatedExchangeRateResult = $getConsolidatedExchangeRateResult;
        return $this;
    }

    /**
     * Get getConsolidatedExchangeRateResult
     *
     * @return GetConsolidatedExchangeRateResult
     */
    public function getGetConsolidatedExchangeRateResult() {
        return $this->getConsolidatedExchangeRateResult;
    }

}