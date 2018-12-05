<?php

namespace Nzolt\NetSuite;

class CashSaleItemCostList
{

    /**
     * @var CashSaleItemCost[] $itemCost
     */
    protected $itemCost = null;

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
     * @return CashSaleItemCost[]
     */
    public function getItemCost()
    {
      return $this->itemCost;
    }

    /**
     * @param CashSaleItemCost[] $itemCost
     * @return \Nzolt\NetSuite\CashSaleItemCostList
     */
    public function setItemCost(array $itemCost = null)
    {
      $this->itemCost = $itemCost;
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
     * @return \Nzolt\NetSuite\CashSaleItemCostList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
