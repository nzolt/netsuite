<?php

namespace Nzolt\NetSuite;

class ManufacturingCostDetail
{

    /**
     * @var RecordRef $costCategory
     */
    protected $costCategory = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var float $fixedRate
     */
    protected $fixedRate = null;

    /**
     * @var float $runRate
     */
    protected $runRate = null;

    
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
     * @return \Nzolt\NetSuite\ManufacturingCostDetail
     */
    public function setCostCategory($costCategory)
    {
      $this->costCategory = $costCategory;
      return $this;
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
     * @return \Nzolt\NetSuite\ManufacturingCostDetail
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return float
     */
    public function getFixedRate()
    {
      return $this->fixedRate;
    }

    /**
     * @param float $fixedRate
     * @return \Nzolt\NetSuite\ManufacturingCostDetail
     */
    public function setFixedRate($fixedRate)
    {
      $this->fixedRate = $fixedRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getRunRate()
    {
      return $this->runRate;
    }

    /**
     * @param float $runRate
     * @return \Nzolt\NetSuite\ManufacturingCostDetail
     */
    public function setRunRate($runRate)
    {
      $this->runRate = $runRate;
      return $this;
    }

}
