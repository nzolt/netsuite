<?php

namespace Nzolt\NetSuite;

class InventoryTransferInventory
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
     * @var RecordRef $units
     */
    protected $units = null;

    /**
     * @var float $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var float $adjustQtyBy
     */
    protected $adjustQtyBy = null;

    /**
     * @var string $serialNumbers
     */
    protected $serialNumbers = null;

    /**
     * @var string $fromBinNumbers
     */
    protected $fromBinNumbers = null;

    /**
     * @var string $toBinNumbers
     */
    protected $toBinNumbers = null;

    /**
     * @var InventoryDetail $inventoryDetail
     */
    protected $inventoryDetail = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
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
     * @return \Nzolt\NetSuite\InventoryTransferInventory
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
     * @return \Nzolt\NetSuite\InventoryTransferInventory
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
     * @return \Nzolt\NetSuite\InventoryTransferInventory
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\InventoryTransferInventory
     */
    public function setUnits($units)
    {
      $this->units = $units;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnHand()
    {
      return $this->quantityOnHand;
    }

    /**
     * @param float $quantityOnHand
     * @return \Nzolt\NetSuite\InventoryTransferInventory
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

    /**
     * @return float
     */
    public function getAdjustQtyBy()
    {
      return $this->adjustQtyBy;
    }

    /**
     * @param float $adjustQtyBy
     * @return \Nzolt\NetSuite\InventoryTransferInventory
     */
    public function setAdjustQtyBy($adjustQtyBy)
    {
      $this->adjustQtyBy = $adjustQtyBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumbers()
    {
      return $this->serialNumbers;
    }

    /**
     * @param string $serialNumbers
     * @return \Nzolt\NetSuite\InventoryTransferInventory
     */
    public function setSerialNumbers($serialNumbers)
    {
      $this->serialNumbers = $serialNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromBinNumbers()
    {
      return $this->fromBinNumbers;
    }

    /**
     * @param string $fromBinNumbers
     * @return \Nzolt\NetSuite\InventoryTransferInventory
     */
    public function setFromBinNumbers($fromBinNumbers)
    {
      $this->fromBinNumbers = $fromBinNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getToBinNumbers()
    {
      return $this->toBinNumbers;
    }

    /**
     * @param string $toBinNumbers
     * @return \Nzolt\NetSuite\InventoryTransferInventory
     */
    public function setToBinNumbers($toBinNumbers)
    {
      $this->toBinNumbers = $toBinNumbers;
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
     * @return \Nzolt\NetSuite\InventoryTransferInventory
     */
    public function setInventoryDetail($inventoryDetail)
    {
      $this->inventoryDetail = $inventoryDetail;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\InventoryTransferInventory
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
