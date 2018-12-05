<?php

namespace Nzolt\NetSuite;

class PromotionCodeCurrencyList
{

    /**
     * @var PromotionCodeCurrency[] $currency
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
     * @return PromotionCodeCurrency[]
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param PromotionCodeCurrency[] $currency
     * @return \Nzolt\NetSuite\PromotionCodeCurrencyList
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
     * @return \Nzolt\NetSuite\PromotionCodeCurrencyList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
