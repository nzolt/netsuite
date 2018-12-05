<?php

namespace Nzolt\NetSuite;

class TransferOrderItem
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
     * @var float $quantityPacked
     */
    protected $quantityPacked = null;

    /**
     * @var float $quantityPicked
     */
    protected $quantityPicked = null;

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
     * @var string $serialNumbers
     */
    protected $serialNumbers = null;

    /**
     * @var TransferOrderItemCommitInventory $commitInventory
     */
    protected $commitInventory = null;

    /**
     * @var float $orderPriority
     */
    protected $orderPriority = null;

    /**
     * @var CustomFieldList $options
     */
    protected $options = null;

    /**
     * @var boolean $isClosed
     */
    protected $isClosed = null;

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
     * @var \DateTime $expectedShipDate
     */
    protected $expectedShipDate = null;

    /**
     * @var \DateTime $expectedReceiptDate
     */
    protected $expectedReceiptDate = null;

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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
     */
    public function setQuantityFulfilled($quantityFulfilled)
    {
      $this->quantityFulfilled = $quantityFulfilled;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityPacked()
    {
      return $this->quantityPacked;
    }

    /**
     * @param float $quantityPacked
     * @return \Nzolt\NetSuite\TransferOrderItem
     */
    public function setQuantityPacked($quantityPacked)
    {
      $this->quantityPacked = $quantityPacked;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityPicked()
    {
      return $this->quantityPicked;
    }

    /**
     * @param float $quantityPicked
     * @return \Nzolt\NetSuite\TransferOrderItem
     */
    public function setQuantityPicked($quantityPicked)
    {
      $this->quantityPicked = $quantityPicked;
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
     */
    public function setInventoryDetail($inventoryDetail)
    {
      $this->inventoryDetail = $inventoryDetail;
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
     * @return \Nzolt\NetSuite\TransferOrderItem
     */
    public function setSerialNumbers($serialNumbers)
    {
      $this->serialNumbers = $serialNumbers;
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
     * @return \Nzolt\NetSuite\TransferOrderItem
     */
    public function setCommitInventory($commitInventory)
    {
      $this->commitInventory = $commitInventory;
      return $this;
    }

    /**
     * @return float
     */
    public function getOrderPriority()
    {
      return $this->orderPriority;
    }

    /**
     * @param float $orderPriority
     * @return \Nzolt\NetSuite\TransferOrderItem
     */
    public function setOrderPriority($orderPriority)
    {
      $this->orderPriority = $orderPriority;
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
     * @return \Nzolt\NetSuite\TransferOrderItem
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsClosed()
    {
      return $this->isClosed;
    }

    /**
     * @param boolean $isClosed
     * @return \Nzolt\NetSuite\TransferOrderItem
     */
    public function setIsClosed($isClosed)
    {
      $this->isClosed = $isClosed;
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
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
     * @return \Nzolt\NetSuite\TransferOrderItem
     */
    public function setAverageCost($averageCost)
    {
      $this->averageCost = $averageCost;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedShipDate()
    {
      if ($this->expectedShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expectedShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expectedShipDate
     * @return \Nzolt\NetSuite\TransferOrderItem
     */
    public function setExpectedShipDate(\DateTime $expectedShipDate = null)
    {
      if ($expectedShipDate == null) {
       $this->expectedShipDate = null;
      } else {
        $this->expectedShipDate = $expectedShipDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedReceiptDate()
    {
      if ($this->expectedReceiptDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expectedReceiptDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expectedReceiptDate
     * @return \Nzolt\NetSuite\TransferOrderItem
     */
    public function setExpectedReceiptDate(\DateTime $expectedReceiptDate = null)
    {
      if ($expectedReceiptDate == null) {
       $this->expectedReceiptDate = null;
      } else {
        $this->expectedReceiptDate = $expectedReceiptDate->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\TransferOrderItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
