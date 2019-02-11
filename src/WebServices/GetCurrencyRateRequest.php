<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\CurrencyRateFilter;

/**
 * GetCurrencyRateRequest
 */
class GetCurrencyRateRequest {

    /**
     * @access public
     * @var CurrencyRateFilter
     */
    protected $currencyRateFilter;

    static $paramtypesmap = array(
    	"currencyRateFilter" => "CurrencyRateFilter",
    );

    /**
     * Set currencyRateFilter
     *
     * @param CurrencyRateFilter $currencyRateFilter
     * @return GetCurrencyRateRequest
     */
    public function setCurrencyRateFilter(CurrencyRateFilter $currencyRateFilter) {
        $this->currencyRateFilter = $currencyRateFilter;
        return $this;
    }

    /**
     * Get currencyRateFilter
     *
     * @return CurrencyRateFilter
     */
    public function getCurrencyRateFilter() {
        return $this->currencyRateFilter;
    }

}