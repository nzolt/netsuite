<?php

namespace Nzolt\NetSuite;

class InventoryCostRevaluationCostComponent
{

    /**
     * @var float $cost
     */
    protected $cost = null;

    /**
     * @var RecordRef $componentItem
     */
    protected $componentItem = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var RecordRef $units
     */
    protected $units = null;

    /**
     * @var RecordRef $costCategory
     */
    protected $costCategory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param float $cost
     * @return \Nzolt\NetSuite\InventoryCostRevaluationCostComponent
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getComponentItem()
    {
      return $this->componentItem;
    }

    /**
     * @param RecordRef $componentItem
     * @return \Nzolt\NetSuite\InventoryCostRevaluationCostComponent
     */
    public function setComponentItem($componentItem)
    {
      $this->componentItem = $componentItem;
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
     * @return \Nzolt\NetSuite\InventoryCostRevaluationCostComponent
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param RecordRef $units
     * @return \Nzolt\NetSuite\InventoryCostRevaluationCostComponent
     */
    public function setUnits($units)
    {
      $this->units = $units;
      return $this;
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
     * @return \Nzolt\NetSuite\InventoryCostRevaluationCostComponent
     */
    public function setCostCategory($costCategory)
    {
      $this->costCategory = $costCategory;
      return $this;
    }

}
