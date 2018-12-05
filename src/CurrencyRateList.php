<?php

namespace Nzolt\NetSuite;

class CurrencyRateList
{

    /**
     * @var CurrencyRate[] $currencyRate
     */
    protected $currencyRate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrencyRate[]
     */
    public function getCurrencyRate()
    {
      return $this->currencyRate;
    }

    /**
     * @param CurrencyRate[] $currencyRate
     * @return \Nzolt\NetSuite\CurrencyRateList
     */
    public function setCurrencyRate(array $currencyRate = null)
    {
      $this->currencyRate = $currencyRate;
      return $this;
    }

}
