<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * ExpenseCategoryRates
 */
class ExpenseCategoryRates {

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $defaultRate;

    static $paramtypesmap = array(
    	"subsidiary" => "RecordRef",
    	"currency" => "RecordRef",
    	"defaultRate" => "float",
    );

    /**
     * Set defaultRate
     *
     * @param float $defaultRate
     * @return ExpenseCategoryRates
     */
    public function setDefaultRate($defaultRate) {
        $this->defaultRate = $defaultRate;
        return $this;
    }

    /**
     * Get defaultRate
     *
     * @return float
     */
    public function getDefaultRate() {
        return $this->defaultRate;
    }

}