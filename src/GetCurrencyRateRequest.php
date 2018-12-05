<?php

namespace Nzolt\NetSuite;

class GetCurrencyRateRequest
{

    /**
     * @var CurrencyRateFilter $currencyRateFilter
     */
    protected $currencyRateFilter = null;

    /**
     * @param CurrencyRateFilter $currencyRateFilter
     */
    public function __construct($currencyRateFilter)
    {
      $this->currencyRateFilter = $currencyRateFilter;
    }

    /**
     * @return CurrencyRateFilter
     */
    public function getCurrencyRateFilter()
    {
      return $this->currencyRateFilter;
    }

    /**
     * @param CurrencyRateFilter $currencyRateFilter
     * @return \Nzolt\NetSuite\GetCurrencyRateRequest
     */
    public function setCurrencyRateFilter($currencyRateFilter)
    {
      $this->currencyRateFilter = $currencyRateFilter;
      return $this;
    }

}
