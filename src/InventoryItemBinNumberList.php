<?php

namespace Nzolt\NetSuite;

class InventoryItemBinNumberList
{

    /**
     * @var InventoryItemBinNumber[] $binNumber
     */
    protected $binNumber = null;

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
     * @return InventoryItemBinNumber[]
     */
    public function getBinNumber()
    {
      return $this->binNumber;
    }

    /**
     * @param InventoryItemBinNumber[] $binNumber
     * @return \Nzolt\NetSuite\InventoryItemBinNumberList
     */
    public function setBinNumber(array $binNumber = null)
    {
      $this->binNumber = $binNumber;
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
     * @return \Nzolt\NetSuite\InventoryItemBinNumberList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
