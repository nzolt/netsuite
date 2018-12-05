<?php

namespace Nzolt\NetSuite;

class PriceList
{

    /**
     * @var Price[] $price
     */
    protected $price = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Price[]
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param Price[] $price
     * @return \Nzolt\NetSuite\PriceList
     */
    public function setPrice(array $price = null)
    {
      $this->price = $price;
      return $this;
    }

}
