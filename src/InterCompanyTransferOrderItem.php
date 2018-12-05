<?php

namespace Nzolt\NetSuite;

class InterCompanyTransferOrderItem
{

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var float $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var float $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var float $quantityBackOrdered
     */
    protected $quantityBackOrdered = null;

    /**
     * @var float $quantityCommitted
     */
    protected $quantityCommitted = null;

    /**
     * @var float $quantityFulfilled
     */
    protected $quantityFulfilled = null;

    /**
     * @var float $quantityReceived
     */
    protected $quantityReceived = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var float $rate
     */
    protected $rate = null;

    /**
     * @var RecordRef $units
     */
    protected $units = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var InventoryDetail $inventoryDetail
     */
    protected $inventoryDetail = null;

    /**
     * @var TransferOrderItemCommitInventory $commitInventory
     */
    protected $commitInventory = null;

    /**
     * @var CustomFieldList $options
     */
    protected $options = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var float $lastPurchasePrice
     */
    protected $lastPurchasePrice = null;

    /**
     * @var float $averageCost
     */
    protected $averageCost = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
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
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
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
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityAvailable()
    {
      return $this->quantityAvailable;
    }

    /**
     * @param float $quantityAvailable
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setQuantityAvailable($quantityAvailable)
    {
      $this->quantityAvailable = $quantityAvailable;
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
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityBackOrdered()
    {
      return $this->quantityBackOrdered;
    }

    /**
     * @param float $quantityBackOrdered
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setQuantityBackOrdered($quantityBackOrdered)
    {
      $this->quantityBackOrdered = $quantityBackOrdered;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityCommitted()
    {
      return $this->quantityCommitted;
    }

    /**
     * @param float $quantityCommitted
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setQuantityCommitted($quantityCommitted)
    {
      $this->quantityCommitted = $quantityCommitted;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityFulfilled()
    {
      return $this->quantityFulfilled;
    }

    /**
     * @param float $quantityFulfilled
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setQuantityFulfilled($quantityFulfilled)
    {
      $this->quantityFulfilled = $quantityFulfilled;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityReceived()
    {
      return $this->quantityReceived;
    }

    /**
     * @param float $quantityReceived
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setQuantityReceived($quantityReceived)
    {
      $this->quantityReceived = $quantityReceived;
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
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param float $rate
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
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
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setUnits($units)
    {
      $this->units = $units;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setInventoryDetail($inventoryDetail)
    {
      $this->inventoryDetail = $inventoryDetail;
      return $this;
    }

    /**
     * @return TransferOrderItemCommitInventory
     */
    public function getCommitInventory()
    {
      return $this->commitInventory;
    }

    /**
     * @param TransferOrderItemCommitInventory $commitInventory
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setCommitInventory($commitInventory)
    {
      $this->commitInventory = $commitInventory;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param CustomFieldList $options
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param RecordRef $department
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param RecordRef $class
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return float
     */
    public function getLastPurchasePrice()
    {
      return $this->lastPurchasePrice;
    }

    /**
     * @param float $lastPurchasePrice
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setLastPurchasePrice($lastPurchasePrice)
    {
      $this->lastPurchasePrice = $lastPurchasePrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getAverageCost()
    {
      return $this->averageCost;
    }

    /**
     * @param float $averageCost
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setAverageCost($averageCost)
    {
      $this->averageCost = $averageCost;
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
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
