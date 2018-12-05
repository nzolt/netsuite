<?php

namespace Nzolt\NetSuite;

class BillingRates
{

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var RecordRef $billingClass
     */
    protected $billingClass = null;

    /**
     * @var RateList $rateList
     */
    protected $rateList = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\BillingRates
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingClass()
    {
      return $this->billingClass;
    }

    /**
     * @param RecordRef $billingClass
     * @return \Nzolt\NetSuite\BillingRates
     */
    public function setBillingClass($billingClass)
    {
      $this->billingClass = $billingClass;
      return $this;
    }

    /**
     * @return RateList
     */
    public function getRateList()
    {
      return $this->rateList;
    }

    /**
     * @param RateList $rateList
     * @return \Nzolt\NetSuite\BillingRates
     */
    public function setRateList($rateList)
    {
      $this->rateList = $rateList;
      return $this;
    }

}
