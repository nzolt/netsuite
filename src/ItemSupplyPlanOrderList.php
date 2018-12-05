<?php

namespace Nzolt\NetSuite;

class ItemSupplyPlanOrderList
{

    /**
     * @var ItemSupplyPlanOrder[] $itemSupplyPlanOrder
     */
    protected $itemSupplyPlanOrder = null;

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
     * @return ItemSupplyPlanOrder[]
     */
    public function getItemSupplyPlanOrder()
    {
      return $this->itemSupplyPlanOrder;
    }

    /**
     * @param ItemSupplyPlanOrder[] $itemSupplyPlanOrder
     * @return \Nzolt\NetSuite\ItemSupplyPlanOrderList
     */
    public function setItemSupplyPlanOrder(array $itemSupplyPlanOrder = null)
    {
      $this->itemSupplyPlanOrder = $itemSupplyPlanOrder;
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanOrderList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
