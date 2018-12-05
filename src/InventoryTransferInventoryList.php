<?php

namespace Nzolt\NetSuite;

class InventoryTransferInventoryList
{

    /**
     * @var InventoryTransferInventory[] $inventory
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
     * @return InventoryTransferInventory[]
     */
    public function getInventory()
    {
      return $this->inventory;
    }

    /**
     * @param InventoryTransferInventory[] $inventory
     * @return \Nzolt\NetSuite\InventoryTransferInventoryList
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
     * @return \Nzolt\NetSuite\InventoryTransferInventoryList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
