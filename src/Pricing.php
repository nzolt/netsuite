<?php

namespace Nzolt\NetSuite;

class Pricing
{

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var RecordRef $priceLevel
     */
    protected $priceLevel = null;

    /**
     * @var float $discount
     */
    protected $discount = null;

    /**
     * @var PriceList $priceList
     */
    protected $priceList = null;

    
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
     * @return \Nzolt\NetSuite\Pricing
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPriceLevel()
    {
      return $this->priceLevel;
    }

    /**
     * @param RecordRef $priceLevel
     * @return \Nzolt\NetSuite\Pricing
     */
    public function setPriceLevel($priceLevel)
    {
      $this->priceLevel = $priceLevel;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
      return $this->discount;
    }

    /**
     * @param float $discount
     * @return \Nzolt\NetSuite\Pricing
     */
    public function setDiscount($discount)
    {
      $this->discount = $discount;
      return $this;
    }

    /**
     * @return PriceList
     */
    public function getPriceList()
    {
      return $this->priceList;
    }

    /**
     * @param PriceList $priceList
     * @return \Nzolt\NetSuite\Pricing
     */
    public function setPriceList($priceList)
    {
      $this->priceList = $priceList;
      return $this;
    }

}
