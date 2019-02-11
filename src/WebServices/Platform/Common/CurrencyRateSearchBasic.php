<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;

/**
 * CurrencyRateSearchBasic
 */
class CurrencyRateSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $baseCurrency;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $effectiveDate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $transactionCurrency;

    static $paramtypesmap = array(
    	"baseCurrency" => "SearchMultiSelectField",
    	"effectiveDate" => "SearchDateField",
    	"exchangeRate" => "SearchDoubleField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"transactionCurrency" => "SearchMultiSelectField",
    );

    /**
     * Set baseCurrency
     *
     * @param SearchMultiSelectField $baseCurrency
     * @return CurrencyRateSearchBasic
     */
    public function setBaseCurrency(SearchMultiSelectField $baseCurrency) {
        $this->baseCurrency = $baseCurrency;
        return $this;
    }

    /**
     * Get baseCurrency
     *
     * @return SearchMultiSelectField
     */
    public function getBaseCurrency() {
        return $this->baseCurrency;
    }


    /**
     * Set effectiveDate
     *
     * @param SearchDateField $effectiveDate
     * @return CurrencyRateSearchBasic
     */
    public function setEffectiveDate(SearchDateField $effectiveDate) {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Get effectiveDate
     *
     * @return SearchDateField
     */
    public function getEffectiveDate() {
        return $this->effectiveDate;
    }


    /**
     * Set exchangeRate
     *
     * @param SearchDoubleField $exchangeRate
     * @return CurrencyRateSearchBasic
     */
    public function setExchangeRate(SearchDoubleField $exchangeRate) {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Get exchangeRate
     *
     * @return SearchDoubleField
     */
    public function getExchangeRate() {
        return $this->exchangeRate;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return CurrencyRateSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return CurrencyRateSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set transactionCurrency
     *
     * @param SearchMultiSelectField $transactionCurrency
     * @return CurrencyRateSearchBasic
     */
    public function setTransactionCurrency(SearchMultiSelectField $transactionCurrency) {
        $this->transactionCurrency = $transactionCurrency;
        return $this;
    }

    /**
     * Get transactionCurrency
     *
     * @return SearchMultiSelectField
     */
    public function getTransactionCurrency() {
        return $this->transactionCurrency;
    }

}