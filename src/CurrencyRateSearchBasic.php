<?php

namespace Nzolt\NetSuite;

class CurrencyRateSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $baseCurrency
     */
    protected $baseCurrency = null;

    /**
     * @var SearchDateField $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @var SearchDoubleField $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchMultiSelectField $transactionCurrency
     */
    protected $transactionCurrency = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBaseCurrency()
    {
      return $this->baseCurrency;
    }

    /**
     * @param SearchMultiSelectField $baseCurrency
     * @return \Nzolt\NetSuite\CurrencyRateSearchBasic
     */
    public function setBaseCurrency($baseCurrency)
    {
      $this->baseCurrency = $baseCurrency;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEffectiveDate()
    {
      return $this->effectiveDate;
    }

    /**
     * @param SearchDateField $effectiveDate
     * @return \Nzolt\NetSuite\CurrencyRateSearchBasic
     */
    public function setEffectiveDate($effectiveDate)
    {
      $this->effectiveDate = $effectiveDate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param SearchDoubleField $exchangeRate
     * @return \Nzolt\NetSuite\CurrencyRateSearchBasic
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\CurrencyRateSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\CurrencyRateSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTransactionCurrency()
    {
      return $this->transactionCurrency;
    }

    /**
     * @param SearchMultiSelectField $transactionCurrency
     * @return \Nzolt\NetSuite\CurrencyRateSearchBasic
     */
    public function setTransactionCurrency($transactionCurrency)
    {
      $this->transactionCurrency = $transactionCurrency;
      return $this;
    }

}
