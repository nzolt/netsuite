<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

/**
 * CustomTransactionAccountingBookDetail
 */
class CustomTransactionAccountingBookDetail {

    /**
     * @access public
     * @var RecordRef
     */
    public $accountingBook;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

    static $paramtypesmap = array(
    	"accountingBook" => "RecordRef",
    	"currency" => "RecordRef",
    	"exchangeRate" => "float",
    );

    /**
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return CustomTransactionAccountingBookDetail
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

}