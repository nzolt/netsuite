<?php

namespace Nzolt\NetSuite;

class BinTransferInventoryList
{

    /**
     * @var BinTransferInventory[] $inventory
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
     * @return BinTransferInventory[]
     */
    public function getInventory()
    {
      return $this->inventory;
    }

    /**
     * @param BinTransferInventory[] $inventory
     * @return \Nzolt\NetSuite\BinTransferInventoryList
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
     * @return \Nzolt\NetSuite\BinTransferInventoryList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
