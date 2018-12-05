<?php

namespace Nzolt\NetSuite;

class CustomerItemPricing
{

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var RecordRef $level
     */
    protected $level = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var float $price
     */
    protected $price = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RecordRef $item
     * @return \Nzolt\NetSuite\CustomerItemPricing
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param RecordRef $level
     * @return \Nzolt\NetSuite\CustomerItemPricing
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
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
     * @return \Nzolt\NetSuite\CustomerItemPricing
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return \Nzolt\NetSuite\CustomerItemPricing
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

}
