<?php

namespace Nzolt\NetSuite;

class ExpenseCategoryRates
{

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var float $defaultRate
     */
    protected $defaultRate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param RecordRef $subsidiary
     * @return \Nzolt\NetSuite\ExpenseCategoryRates
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param RecordRef $currency
     * @return \Nzolt\NetSuite\ExpenseCategoryRates
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getDefaultRate()
    {
      return $this->defaultRate;
    }

    /**
     * @param float $defaultRate
     * @return \Nzolt\NetSuite\ExpenseCategoryRates
     */
    public function setDefaultRate($defaultRate)
    {
      $this->defaultRate = $defaultRate;
      return $this;
    }

}
