<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetCurrencyRateResult
 */
class GetCurrencyRateResult {

    /**
     * @access public
     * @var Status
     */
    protected $status;

    /**
     * @access public
     * @var CurrencyRateList
     */
    protected $currencyRateList;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"currencyRateList" => "CurrencyRateList",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return GetCurrencyRateResult
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
     * Set currencyRateList
     *
     * @param CurrencyRateList $currencyRateList
     * @return GetCurrencyRateResult
     */
    public function setCurrencyRateList(CurrencyRateList $currencyRateList) {
        $this->currencyRateList = $currencyRateList;
        return $this;
    }

    /**
     * Get currencyRateList
     *
     * @return CurrencyRateList
     */
    public function getCurrencyRateList() {
        return $this->currencyRateList;
    }

}