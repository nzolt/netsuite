<?php

namespace Nzolt\NetSuite;

class GetCurrencyRateResult
{

    /**
     * @var Status $status
     */
    protected $status = null;

    /**
     * @var CurrencyRateList $currencyRateList
     */
    protected $currencyRateList = null;

    /**
     * @param Status $status
     */
    public function __construct($status)
    {
      $this->status = $status;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param Status $status
     * @return \Nzolt\NetSuite\GetCurrencyRateResult
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return CurrencyRateList
     */
    public function getCurrencyRateList()
    {
      return $this->currencyRateList;
    }

    /**
     * @param CurrencyRateList $currencyRateList
     * @return \Nzolt\NetSuite\GetCurrencyRateResult
     */
    public function setCurrencyRateList($currencyRateList)
    {
      $this->currencyRateList = $currencyRateList;
      return $this;
    }

}
