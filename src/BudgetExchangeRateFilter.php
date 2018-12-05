<?php

namespace Nzolt\NetSuite;

class BudgetExchangeRateFilter
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
     * @param RecordRef $period
     */
    public function __construct($period)
    {
      $this->period = $period;
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
     * @return \Nzolt\NetSuite\BudgetExchangeRateFilter
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
     * @return \Nzolt\NetSuite\BudgetExchangeRateFilter
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
     * @return \Nzolt\NetSuite\BudgetExchangeRateFilter
     */
    public function setToSubsidiary($toSubsidiary)
    {
      $this->toSubsidiary = $toSubsidiary;
      return $this;
    }

}
