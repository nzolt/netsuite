<?php

namespace Nzolt\NetSuite;

class PromotionCodeCurrency
{

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var float $minimumOrderAmount
     */
    protected $minimumOrderAmount = null;

    
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
     * @return \Nzolt\NetSuite\PromotionCodeCurrency
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinimumOrderAmount()
    {
      return $this->minimumOrderAmount;
    }

    /**
     * @param float $minimumOrderAmount
     * @return \Nzolt\NetSuite\PromotionCodeCurrency
     */
    public function setMinimumOrderAmount($minimumOrderAmount)
    {
      $this->minimumOrderAmount = $minimumOrderAmount;
      return $this;
    }

}
