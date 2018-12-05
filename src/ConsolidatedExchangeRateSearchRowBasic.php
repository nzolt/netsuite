<?php

namespace Nzolt\NetSuite;

class ConsolidatedExchangeRateSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var SearchColumnStringField[] $averageRate
     */
    protected $averageRate = null;

    /**
     * @var SearchColumnBooleanField[] $closed
     */
    protected $closed = null;

    /**
     * @var SearchColumnStringField[] $currentRate
     */
    protected $currentRate = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnStringField[] $fromCurrency
     */
    protected $fromCurrency = null;

    /**
     * @var SearchColumnStringField[] $fromSubsidiary
     */
    protected $fromSubsidiary = null;

    /**
     * @var SearchColumnStringField[] $historicalRate
     */
    protected $historicalRate = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnDateField[] $periodEndDate
     */
    protected $periodEndDate = null;

    /**
     * @var SearchColumnStringField[] $periodName
     */
    protected $periodName = null;

    /**
     * @var SearchColumnDateField[] $periodStartDate
     */
    protected $periodStartDate = null;

    /**
     * @var SearchColumnStringField[] $toCurrency
     */
    protected $toCurrency = null;

    /**
     * @var SearchColumnStringField[] $toSubsidiary
     */
    protected $toSubsidiary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccountingBook()
    {
      return $this->accountingBook;
    }

    /**
     * @param SearchColumnStringField[] $accountingBook
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setAccountingBook(array $accountingBook = null)
    {
      $this->accountingBook = $accountingBook;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAverageRate()
    {
      return $this->averageRate;
    }

    /**
     * @param SearchColumnStringField[] $averageRate
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setAverageRate(array $averageRate = null)
    {
      $this->averageRate = $averageRate;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getClosed()
    {
      return $this->closed;
    }

    /**
     * @param SearchColumnBooleanField[] $closed
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setClosed(array $closed = null)
    {
      $this->closed = $closed;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCurrentRate()
    {
      return $this->currentRate;
    }

    /**
     * @param SearchColumnStringField[] $currentRate
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setCurrentRate(array $currentRate = null)
    {
      $this->currentRate = $currentRate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFromCurrency()
    {
      return $this->fromCurrency;
    }

    /**
     * @param SearchColumnStringField[] $fromCurrency
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setFromCurrency(array $fromCurrency = null)
    {
      $this->fromCurrency = $fromCurrency;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFromSubsidiary()
    {
      return $this->fromSubsidiary;
    }

    /**
     * @param SearchColumnStringField[] $fromSubsidiary
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setFromSubsidiary(array $fromSubsidiary = null)
    {
      $this->fromSubsidiary = $fromSubsidiary;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getHistoricalRate()
    {
      return $this->historicalRate;
    }

    /**
     * @param SearchColumnStringField[] $historicalRate
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setHistoricalRate(array $historicalRate = null)
    {
      $this->historicalRate = $historicalRate;
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
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getPeriodEndDate()
    {
      return $this->periodEndDate;
    }

    /**
     * @param SearchColumnDateField[] $periodEndDate
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setPeriodEndDate(array $periodEndDate = null)
    {
      $this->periodEndDate = $periodEndDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPeriodName()
    {
      return $this->periodName;
    }

    /**
     * @param SearchColumnStringField[] $periodName
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setPeriodName(array $periodName = null)
    {
      $this->periodName = $periodName;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getPeriodStartDate()
    {
      return $this->periodStartDate;
    }

    /**
     * @param SearchColumnDateField[] $periodStartDate
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setPeriodStartDate(array $periodStartDate = null)
    {
      $this->periodStartDate = $periodStartDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getToCurrency()
    {
      return $this->toCurrency;
    }

    /**
     * @param SearchColumnStringField[] $toCurrency
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setToCurrency(array $toCurrency = null)
    {
      $this->toCurrency = $toCurrency;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getToSubsidiary()
    {
      return $this->toSubsidiary;
    }

    /**
     * @param SearchColumnStringField[] $toSubsidiary
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRowBasic
     */
    public function setToSubsidiary(array $toSubsidiary = null)
    {
      $this->toSubsidiary = $toSubsidiary;
      return $this;
    }

}
