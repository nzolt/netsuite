<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * CurrencyRate_core
 */
class CurrencyRate_core {

    /**
     * @access public
     * @var RecordRef
     */
    public $baseCurrency;

    /**
     * @access public
     * @var RecordRef
     */
    public $fromCurrency;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var dateTime
     */
    protected $effectiveDate;

    static $paramtypesmap = array(
    	"baseCurrency" => "RecordRef",
    	"fromCurrency" => "RecordRef",
    	"exchangeRate" => "float",
    	"effectiveDate" => "dateTime",
    );

    /**
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return CurrencyRate_core
     */
    public function setExchangeRate($exchangeRate) {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Get exchangeRate
     *
     * @return float
     */
    public function getExchangeRate() {
        return $this->exchangeRate;
    }


    /**
     * Set effectiveDate
     *
     * @param \DateTime $effectiveDate
     * @return CurrencyRate_core
     */
    public function setEffectiveDate(\DateTime $effectiveDate) {
        $this->effectiveDate = $effectiveDate->format('c');
        return $this;
    }

    /**
     * Get effectiveDate
     *
     * @return \DateTime
     */
    public function getEffectiveDate() {
        return new \DateTime($this->effectiveDate);
    }

}