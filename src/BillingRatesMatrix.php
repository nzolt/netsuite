<?php

namespace Nzolt\NetSuite;

class BillingRatesMatrix
{

    /**
     * @var BillingRates[] $billingRates
     */
    protected $billingRates = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return BillingRates[]
     */
    public function getBillingRates()
    {
      return $this->billingRates;
    }

    /**
     * @param BillingRates[] $billingRates
     * @return \Nzolt\NetSuite\BillingRatesMatrix
     */
    public function setBillingRates(array $billingRates = null)
    {
      $this->billingRates = $billingRates;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\BillingRatesMatrix
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
