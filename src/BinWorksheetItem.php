<?php

namespace Nzolt\NetSuite;

class BinWorksheetItem
{

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var string $itemName
     */
    protected $itemName = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var string $itemOnHand
     */
    protected $itemOnHand = null;

    /**
     * @var string $itemUnitsLabel
     */
    protected $itemUnitsLabel = null;

    /**
     * @var InventoryDetail $inventoryDetail
     */
    protected $inventoryDetail = null;

    /**
     * @var string $itemBins
     */
    protected $itemBins = null;

    /**
     * @var string $itemBinNumbers
     */
    protected $itemBinNumbers = null;

    /**
     * @var string $itemBinList
     */
    protected $itemBinList = null;

    /**
     * @var string $itemPreferBin
     */
    protected $itemPreferBin = null;

    /**
     * @var string $itemBlank
     */
    protected $itemBlank = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\BinWorksheetItem
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemName()
    {
      return $this->itemName;
    }

    /**
     * @param string $itemName
     * @return \Nzolt\NetSuite\BinWorksheetItem
     */
    public function setItemName($itemName)
    {
      $this->itemName = $itemName;
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
     * @return \Nzolt\NetSuite\BinWorksheetItem
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\BinWorksheetItem
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemOnHand()
    {
      return $this->itemOnHand;
    }

    /**
     * @param string $itemOnHand
     * @return \Nzolt\NetSuite\BinWorksheetItem
     */
    public function setItemOnHand($itemOnHand)
    {
      $this->itemOnHand = $itemOnHand;
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
     * @return \Nzolt\NetSuite\BinWorksheetItem
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
     * @return \Nzolt\NetSuite\BinWorksheetItem
     */
    public function setInventoryDetail($inventoryDetail)
    {
      $this->inventoryDetail = $inventoryDetail;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemBins()
    {
      return $this->itemBins;
    }

    /**
     * @param string $itemBins
     * @return \Nzolt\NetSuite\BinWorksheetItem
     */
    public function setItemBins($itemBins)
    {
      $this->itemBins = $itemBins;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemBinNumbers()
    {
      return $this->itemBinNumbers;
    }

    /**
     * @param string $itemBinNumbers
     * @return \Nzolt\NetSuite\BinWorksheetItem
     */
    public function setItemBinNumbers($itemBinNumbers)
    {
      $this->itemBinNumbers = $itemBinNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemBinList()
    {
      return $this->itemBinList;
    }

    /**
     * @param string $itemBinList
     * @return \Nzolt\NetSuite\BinWorksheetItem
     */
    public function setItemBinList($itemBinList)
    {
      $this->itemBinList = $itemBinList;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemPreferBin()
    {
      return $this->itemPreferBin;
    }

    /**
     * @param string $itemPreferBin
     * @return \Nzolt\NetSuite\BinWorksheetItem
     */
    public function setItemPreferBin($itemPreferBin)
    {
      $this->itemPreferBin = $itemPreferBin;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemBlank()
    {
      return $this->itemBlank;
    }

    /**
     * @param string $itemBlank
     * @return \Nzolt\NetSuite\BinWorksheetItem
     */
    public function setItemBlank($itemBlank)
    {
      $this->itemBlank = $itemBlank;
      return $this;
    }

}
