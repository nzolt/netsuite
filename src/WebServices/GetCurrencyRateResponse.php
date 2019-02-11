<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetCurrencyRateResult;

/**
 * GetCurrencyRateResponse
 */
class GetCurrencyRateResponse {

    /**
     * @access public
     * @var GetCurrencyRateResult
     */
    protected $getCurrencyRateResult;

    static $paramtypesmap = array(
    	"getCurrencyRateResult" => "GetCurrencyRateResult",
    );

    /**
     * Set getCurrencyRateResult
     *
     * @param GetCurrencyRateResult $getCurrencyRateResult
     * @return GetCurrencyRateResponse
     */
    public function setGetCurrencyRateResult(GetCurrencyRateResult $getCurrencyRateResult) {
        $this->getCurrencyRateResult = $getCurrencyRateResult;
        return $this;
    }

    /**
     * Get getCurrencyRateResult
     *
     * @return GetCurrencyRateResult
     */
    public function getGetCurrencyRateResult() {
        return $this->getCurrencyRateResult;
    }

}