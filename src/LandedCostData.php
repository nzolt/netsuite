<?php

namespace Nzolt\NetSuite;

class LandedCostData
{

    /**
     * @var RecordRef $costCategory
     */
    protected $costCategory = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getCostCategory()
    {
      return $this->costCategory;
    }

    /**
     * @param RecordRef $costCategory
     * @return \Nzolt\NetSuite\LandedCostData
     */
    public function setCostCategory($costCategory)
    {
      $this->costCategory = $costCategory;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Nzolt\NetSuite\LandedCostData
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
