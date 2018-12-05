<?php

namespace Nzolt\NetSuite;

class InventoryAdjustmentInventoryList
{

    /**
     * @var InventoryAdjustmentInventory[] $inventory
     */
    protected $inventory = null;

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
     * @return InventoryAdjustmentInventory[]
     */
    public function getInventory()
    {
      return $this->inventory;
    }

    /**
     * @param InventoryAdjustmentInventory[] $inventory
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventoryList
     */
    public function setInventory(array $inventory = null)
    {
      $this->inventory = $inventory;
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
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventoryList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
