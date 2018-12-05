<?php

namespace Nzolt\NetSuite;

class InventoryAdjustmentInventory
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
     * @var InventoryDetail $inventoryDetail
     */
    protected $inventoryDetail = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $units
     */
    protected $units = null;

    /**
     * @var float $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var float $currentValue
     */
    protected $currentValue = null;

    /**
     * @var float $adjustQtyBy
     */
    protected $adjustQtyBy = null;

    /**
     * @var string $binNumbers
     */
    protected $binNumbers = null;

    /**
     * @var string $serialNumbers
     */
    protected $serialNumbers = null;

    /**
     * @var float $newQuantity
     */
    protected $newQuantity = null;

    /**
     * @var float $unitCost
     */
    protected $unitCost = null;

    /**
     * @var float $foreignCurrencyUnitCost
     */
    protected $foreignCurrencyUnitCost = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var \DateTime $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    
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
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
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
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setLine($line)
    {
      $this->line = $line;
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
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setInventoryDetail($inventoryDetail)
    {
      $this->inventoryDetail = $inventoryDetail;
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
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
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
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRef $location
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
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
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

    /**
     * @return float
     */
    public function getCurrentValue()
    {
      return $this->currentValue;
    }

    /**
     * @param float $currentValue
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setCurrentValue($currentValue)
    {
      $this->currentValue = $currentValue;
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
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setAdjustQtyBy($adjustQtyBy)
    {
      $this->adjustQtyBy = $adjustQtyBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getBinNumbers()
    {
      return $this->binNumbers;
    }

    /**
     * @param string $binNumbers
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setBinNumbers($binNumbers)
    {
      $this->binNumbers = $binNumbers;
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
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setSerialNumbers($serialNumbers)
    {
      $this->serialNumbers = $serialNumbers;
      return $this;
    }

    /**
     * @return float
     */
    public function getNewQuantity()
    {
      return $this->newQuantity;
    }

    /**
     * @param float $newQuantity
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setNewQuantity($newQuantity)
    {
      $this->newQuantity = $newQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitCost()
    {
      return $this->unitCost;
    }

    /**
     * @param float $unitCost
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setUnitCost($unitCost)
    {
      $this->unitCost = $unitCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getForeignCurrencyUnitCost()
    {
      return $this->foreignCurrencyUnitCost;
    }

    /**
     * @param float $foreignCurrencyUnitCost
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setForeignCurrencyUnitCost($foreignCurrencyUnitCost)
    {
      $this->foreignCurrencyUnitCost = $foreignCurrencyUnitCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->expirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expirationDate
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setExpirationDate(\DateTime $expirationDate = null)
    {
      if ($expirationDate == null) {
       $this->expirationDate = null;
      } else {
        $this->expirationDate = $expirationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param float $exchangeRate
     * @return \Nzolt\NetSuite\InventoryAdjustmentInventory
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

}
