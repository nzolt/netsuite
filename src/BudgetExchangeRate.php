<?php

namespace Nzolt\NetSuite;

class BudgetExchangeRate
{

    /**
     * @var RecordRef $period
     */
    protected $period = null;

    /**
     * @var RecordRef $fromSubsidiary
     */
    protected $fromSubsidiary = null;

    /**
     * @var RecordRef $toSubsidiary
     */
    protected $toSubsidiary = null;

    /**
     * @var float $currentRate
     */
    protected $currentRate = null;

    /**
     * @var float $averageRate
     */
    protected $averageRate = null;

    /**
     * @var float $historicalRate
     */
    protected $historicalRate = null;

    /**
     * @param RecordRef $period
     * @param RecordRef $fromSubsidiary
     * @param RecordRef $toSubsidiary
     */
    public function __construct($period, $fromSubsidiary, $toSubsidiary)
    {
      $this->period = $period;
      $this->fromSubsidiary = $fromSubsidiary;
      $this->toSubsidiary = $toSubsidiary;
    }

    /**
     * @return RecordRef
     */
    public function getPeriod()
    {
      return $this->period;
    }

    /**
     * @param RecordRef $period
     * @return \Nzolt\NetSuite\BudgetExchangeRate
     */
    public function setPeriod($period)
    {
      $this->period = $period;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFromSubsidiary()
    {
      return $this->fromSubsidiary;
    }

    /**
     * @param RecordRef $fromSubsidiary
     * @return \Nzolt\NetSuite\BudgetExchangeRate
     */
    public function setFromSubsidiary($fromSubsidiary)
    {
      $this->fromSubsidiary = $fromSubsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getToSubsidiary()
    {
      return $this->toSubsidiary;
    }

    /**
     * @param RecordRef $toSubsidiary
     * @return \Nzolt\NetSuite\BudgetExchangeRate
     */
    public function setToSubsidiary($toSubsidiary)
    {
      $this->toSubsidiary = $toSubsidiary;
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
     * @return \Nzolt\NetSuite\BudgetExchangeRate
     */
    public function setCurrentRate($currentRate)
    {
      $this->currentRate = $currentRate;
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
     * @return \Nzolt\NetSuite\BudgetExchangeRate
     */
    public function setAverageRate($averageRate)
    {
      $this->averageRate = $averageRate;
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
     * @return \Nzolt\NetSuite\BudgetExchangeRate
     */
    public function setHistoricalRate($historicalRate)
    {
      $this->historicalRate = $historicalRate;
      return $this;
    }

}
