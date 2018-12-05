<?php

namespace Nzolt\NetSuite;

class CurrencyRateSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $baseCurrency
     */
    protected $baseCurrency = null;

    /**
     * @var SearchColumnDateField[] $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @var SearchColumnDoubleField[] $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnSelectField[] $transactionCurrency
     */
    protected $transactionCurrency = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBaseCurrency()
    {
      return $this->baseCurrency;
    }

    /**
     * @param SearchColumnSelectField[] $baseCurrency
     * @return \Nzolt\NetSuite\CurrencyRateSearchRowBasic
     */
    public function setBaseCurrency(array $baseCurrency = null)
    {
      $this->baseCurrency = $baseCurrency;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEffectiveDate()
    {
      return $this->effectiveDate;
    }

    /**
     * @param SearchColumnDateField[] $effectiveDate
     * @return \Nzolt\NetSuite\CurrencyRateSearchRowBasic
     */
    public function setEffectiveDate(array $effectiveDate = null)
    {
      $this->effectiveDate = $effectiveDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param SearchColumnDoubleField[] $exchangeRate
     * @return \Nzolt\NetSuite\CurrencyRateSearchRowBasic
     */
    public function setExchangeRate(array $exchangeRate = null)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\CurrencyRateSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTransactionCurrency()
    {
      return $this->transactionCurrency;
    }

    /**
     * @param SearchColumnSelectField[] $transactionCurrency
     * @return \Nzolt\NetSuite\CurrencyRateSearchRowBasic
     */
    public function setTransactionCurrency(array $transactionCurrency = null)
    {
      $this->transactionCurrency = $transactionCurrency;
      return $this;
    }

}
