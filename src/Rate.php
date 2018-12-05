<?php

namespace Nzolt\NetSuite;

class Rate
{

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @var RecordRef $priceLevel
     */
    protected $priceLevel = null;

    
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
     * @return \Nzolt\NetSuite\Rate
     */
    public function setValue($value)
    {
      $this->value = $value;
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
     * @return \Nzolt\NetSuite\Rate
     */
    public function setPriceLevel($priceLevel)
    {
      $this->priceLevel = $priceLevel;
      return $this;
    }

}
