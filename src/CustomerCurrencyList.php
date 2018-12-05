<?php

namespace Nzolt\NetSuite;

class CustomerCurrencyList
{

    /**
     * @var CustomerCurrency[] $currency
     */
    protected $currency = null;

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
     * @return CustomerCurrency[]
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param CustomerCurrency[] $currency
     * @return \Nzolt\NetSuite\CustomerCurrencyList
     */
    public function setCurrency(array $currency = null)
    {
      $this->currency = $currency;
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
     * @return \Nzolt\NetSuite\CustomerCurrencyList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
