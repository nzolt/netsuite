<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * BillingRates
 */
class BillingRates {

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $billingClass;

    /**
     * @access public
     * @var RateList
     */
    protected $rateList;

    static $paramtypesmap = array(
    	"currency" => "RecordRef",
    	"billingClass" => "RecordRef",
    	"rateList" => "RateList",
    );

    /**
     * Set rateList
     *
     * @param RateList $rateList
     * @return BillingRates
     */
    public function setRateList(RateList $rateList) {
        $this->rateList = $rateList;
        return $this;
    }

    /**
     * Get rateList
     *
     * @return RateList
     */
    public function getRateList() {
        return $this->rateList;
    }

}