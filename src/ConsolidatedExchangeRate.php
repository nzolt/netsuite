<?php

namespace Nzolt\NetSuite;

class ConsolidatedExchangeRate extends Record
{

    /**
     * @var string $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var string $fromSubsidiary
     */
    protected $fromSubsidiary = null;

    /**
     * @var string $fromCurrency
     */
    protected $fromCurrency = null;

    /**
     * @var string $toSubsidiary
     */
    protected $toSubsidiary = null;

    /**
     * @var string $toCurrency
     */
    protected $toCurrency = null;

    /**
     * @var float $averageRate
     */
    protected $averageRate = null;

    /**
     * @var float $currentRate
     */
    protected $currentRate = null;

    /**
     * @var float $historicalRate
     */
    protected $historicalRate = null;

    /**
     * @var string $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var boolean $isPeriodClosed
     */
    protected $isPeriodClosed = null;

    /**
     * @var boolean $isDerived
     */
    protected $isDerived = null;

    /**
     * @var boolean $isEliminationSubsidiary
     */
    protected $isEliminationSubsidiary = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return string
     */
    public function getPostingPeriod()
    {
      return $this->postingPeriod;
    }

    /**
     * @param string $postingPeriod
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromSubsidiary()
    {
      return $this->fromSubsidiary;
    }

    /**
     * @param string $fromSubsidiary
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setFromSubsidiary($fromSubsidiary)
    {
      $this->fromSubsidiary = $fromSubsidiary;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromCurrency()
    {
      return $this->fromCurrency;
    }

    /**
     * @param string $fromCurrency
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setFromCurrency($fromCurrency)
    {
      $this->fromCurrency = $fromCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getToSubsidiary()
    {
      return $this->toSubsidiary;
    }

    /**
     * @param string $toSubsidiary
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setToSubsidiary($toSubsidiary)
    {
      $this->toSubsidiary = $toSubsidiary;
      return $this;
    }

    /**
     * @return string
     */
    public function getToCurrency()
    {
      return $this->toCurrency;
    }

    /**
     * @param string $toCurrency
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setToCurrency($toCurrency)
    {
      $this->toCurrency = $toCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getAverageRate()
    {
      return $this->averageRate;
    }

    /**
     * @param float $averageRate
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setAverageRate($averageRate)
    {
      $this->averageRate = $averageRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getCurrentRate()
    {
      return $this->currentRate;
    }

    /**
     * @param float $currentRate
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setCurrentRate($currentRate)
    {
      $this->currentRate = $currentRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getHistoricalRate()
    {
      return $this->historicalRate;
    }

    /**
     * @param float $historicalRate
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setHistoricalRate($historicalRate)
    {
      $this->historicalRate = $historicalRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountingBook()
    {
      return $this->accountingBook;
    }

    /**
     * @param string $accountingBook
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setAccountingBook($accountingBook)
    {
      $this->accountingBook = $accountingBook;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPeriodClosed()
    {
      return $this->isPeriodClosed;
    }

    /**
     * @param boolean $isPeriodClosed
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setIsPeriodClosed($isPeriodClosed)
    {
      $this->isPeriodClosed = $isPeriodClosed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDerived()
    {
      return $this->isDerived;
    }

    /**
     * @param boolean $isDerived
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setIsDerived($isDerived)
    {
      $this->isDerived = $isDerived;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEliminationSubsidiary()
    {
      return $this->isEliminationSubsidiary;
    }

    /**
     * @param boolean $isEliminationSubsidiary
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setIsEliminationSubsidiary($isEliminationSubsidiary)
    {
      $this->isEliminationSubsidiary = $isEliminationSubsidiary;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRate
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
