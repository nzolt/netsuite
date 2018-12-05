<?php

namespace Nzolt\NetSuite;

class Price
{

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Nzolt\NetSuite\Price
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return \Nzolt\NetSuite\Price
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

}
