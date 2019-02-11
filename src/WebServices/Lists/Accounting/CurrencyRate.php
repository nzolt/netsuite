<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * CurrencyRate
 */
class CurrencyRate extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $baseCurrency;

    /**
     * @access public
     * @var RecordRef
     */
    public $transactionCurrency;

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

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    static $paramtypesmap = array(
    	"baseCurrency" => "RecordRef",
    	"transactionCurrency" => "RecordRef",
    	"exchangeRate" => "float",
    	"effectiveDate" => "dateTime",
    	"internalId" => "string",
    );

    /**
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return CurrencyRate
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
     * @return CurrencyRate
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


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return CurrencyRate
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }

}