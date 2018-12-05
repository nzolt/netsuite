<?php

namespace Nzolt\NetSuite;

class BinTransferInventory
{

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $preferredBin
     */
    protected $preferredBin = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var string $itemUnitsLabel
     */
    protected $itemUnitsLabel = null;

    /**
     * @var InventoryDetail $inventoryDetail
     */
    protected $inventoryDetail = null;

    /**
     * @var string $fromBins
     */
    protected $fromBins = null;

    /**
     * @var string $toBins
     */
    protected $toBins = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getLine()
    {
      return $this->line;
    }

    /**
     * @param int $line
     * @return \Nzolt\NetSuite\BinTransferInventory
     */
    public function setLine($line)
    {
      $this->line = $line;
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
     * @return \Nzolt\NetSuite\BinTransferInventory
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\BinTransferInventory
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredBin()
    {
      return $this->preferredBin;
    }

    /**
     * @param string $preferredBin
     * @return \Nzolt\NetSuite\BinTransferInventory
     */
    public function setPreferredBin($preferredBin)
    {
      $this->preferredBin = $preferredBin;
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
     * @return \Nzolt\NetSuite\BinTransferInventory
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemUnitsLabel()
    {
      return $this->itemUnitsLabel;
    }

    /**
     * @param string $itemUnitsLabel
     * @return \Nzolt\NetSuite\BinTransferInventory
     */
    public function setItemUnitsLabel($itemUnitsLabel)
    {
      $this->itemUnitsLabel = $itemUnitsLabel;
      return $this;
    }

    /**
     * @return InventoryDetail
     */
    public function getInventoryDetail()
    {
      return $this->inventoryDetail;
    }

    /**
     * @param InventoryDetail $inventoryDetail
     * @return \Nzolt\NetSuite\BinTransferInventory
     */
    public function setInventoryDetail($inventoryDetail)
    {
      $this->inventoryDetail = $inventoryDetail;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromBins()
    {
      return $this->fromBins;
    }

    /**
     * @param string $fromBins
     * @return \Nzolt\NetSuite\BinTransferInventory
     */
    public function setFromBins($fromBins)
    {
      $this->fromBins = $fromBins;
      return $this;
    }

    /**
     * @return string
     */
    public function getToBins()
    {
      return $this->toBins;
    }

    /**
     * @param string $toBins
     * @return \Nzolt\NetSuite\BinTransferInventory
     */
    public function setToBins($toBins)
    {
      $this->toBins = $toBins;
      return $this;
    }

}
