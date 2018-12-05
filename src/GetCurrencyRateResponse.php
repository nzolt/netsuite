<?php

namespace Nzolt\NetSuite;

class GetCurrencyRateResponse
{

    /**
     * @var GetCurrencyRateResult $getCurrencyRateResult
     */
    protected $getCurrencyRateResult = null;

    /**
     * @param GetCurrencyRateResult $getCurrencyRateResult
     */
    public function __construct($getCurrencyRateResult)
    {
      $this->getCurrencyRateResult = $getCurrencyRateResult;
    }

    /**
     * @return GetCurrencyRateResult
     */
    public function getGetCurrencyRateResult()
    {
      return $this->getCurrencyRateResult;
    }

    /**
     * @param GetCurrencyRateResult $getCurrencyRateResult
     * @return \Nzolt\NetSuite\GetCurrencyRateResponse
     */
    public function setGetCurrencyRateResult($getCurrencyRateResult)
    {
      $this->getCurrencyRateResult = $getCurrencyRateResult;
      return $this;
    }

}
