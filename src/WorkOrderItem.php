<?php

namespace Nzolt\NetSuite;

class WorkOrderItem
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
     * @var int $operationSequenceNumber
     */
    protected $operationSequenceNumber = null;

    /**
     * @var float $componentYield
     */
    protected $componentYield = null;

    /**
     * @var float $bomQuantity
     */
    protected $bomQuantity = null;

    /**
     * @var float $quantityCommitted
     */
    protected $quantityCommitted = null;

    /**
     * @var float $quantityBackOrdered
     */
    protected $quantityBackOrdered = null;

    /**
     * @var float $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var float $averageCost
     */
    protected $averageCost = null;

    /**
     * @var float $lastPurchasePrice
     */
    protected $lastPurchasePrice = null;

    /**
     * @var float $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var RecordRef $units
     */
    protected $units = null;

    /**
     * @var InventoryDetail $inventoryDetail
     */
    protected $inventoryDetail = null;

    /**
     * @var string $serialNumbers
     */
    protected $serialNumbers = null;

    /**
     * @var float $orderPriority
     */
    protected $orderPriority = null;

    /**
     * @var CustomFieldList $options
     */
    protected $options = null;

    /**
     * @var ItemSource $itemSource
     */
    protected $itemSource = null;

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
     * @var RecordRef $poVendor
     */
    protected $poVendor = null;

    /**
     * @var float $poRate
     */
    protected $poRate = null;

    /**
     * @var float $percentComplete
     */
    protected $percentComplete = null;

    /**
     * @var float $contribution
     */
    protected $contribution = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var WorkOrderItemItemCommitInventory $commitInventory
     */
    protected $commitInventory = null;

    /**
     * @var \DateTime $plannedIssueDate
     */
    protected $plannedIssueDate = null;

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
     * @return \Nzolt\NetSuite\WorkOrderItem
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return int
     */
    public function getOperationSequenceNumber()
    {
      return $this->operationSequenceNumber;
    }

    /**
     * @param int $operationSequenceNumber
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setOperationSequenceNumber($operationSequenceNumber)
    {
      $this->operationSequenceNumber = $operationSequenceNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getComponentYield()
    {
      return $this->componentYield;
    }

    /**
     * @param float $componentYield
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setComponentYield($componentYield)
    {
      $this->componentYield = $componentYield;
      return $this;
    }

    /**
     * @return float
     */
    public function getBomQuantity()
    {
      return $this->bomQuantity;
    }

    /**
     * @param float $bomQuantity
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setBomQuantity($bomQuantity)
    {
      $this->bomQuantity = $bomQuantity;
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setQuantityCommitted($quantityCommitted)
    {
      $this->quantityCommitted = $quantityCommitted;
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setQuantityBackOrdered($quantityBackOrdered)
    {
      $this->quantityBackOrdered = $quantityBackOrdered;
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setQuantityAvailable($quantityAvailable)
    {
      $this->quantityAvailable = $quantityAvailable;
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setAverageCost($averageCost)
    {
      $this->averageCost = $averageCost;
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setLastPurchasePrice($lastPurchasePrice)
    {
      $this->lastPurchasePrice = $lastPurchasePrice;
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setUnits($units)
    {
      $this->units = $units;
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
     * @return \Nzolt\NetSuite\WorkOrderItem
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setSerialNumbers($serialNumbers)
    {
      $this->serialNumbers = $serialNumbers;
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
     * @return \Nzolt\NetSuite\WorkOrderItem
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return ItemSource
     */
    public function getItemSource()
    {
      return $this->itemSource;
    }

    /**
     * @param ItemSource $itemSource
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setItemSource($itemSource)
    {
      $this->itemSource = $itemSource;
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
     * @return \Nzolt\NetSuite\WorkOrderItem
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
     * @return \Nzolt\NetSuite\WorkOrderItem
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPoVendor()
    {
      return $this->poVendor;
    }

    /**
     * @param RecordRef $poVendor
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setPoVendor($poVendor)
    {
      $this->poVendor = $poVendor;
      return $this;
    }

    /**
     * @return float
     */
    public function getPoRate()
    {
      return $this->poRate;
    }

    /**
     * @param float $poRate
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setPoRate($poRate)
    {
      $this->poRate = $poRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentComplete()
    {
      return $this->percentComplete;
    }

    /**
     * @param float $percentComplete
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setPercentComplete($percentComplete)
    {
      $this->percentComplete = $percentComplete;
      return $this;
    }

    /**
     * @return float
     */
    public function getContribution()
    {
      return $this->contribution;
    }

    /**
     * @param float $contribution
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setContribution($contribution)
    {
      $this->contribution = $contribution;
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return WorkOrderItemItemCommitInventory
     */
    public function getCommitInventory()
    {
      return $this->commitInventory;
    }

    /**
     * @param WorkOrderItemItemCommitInventory $commitInventory
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setCommitInventory($commitInventory)
    {
      $this->commitInventory = $commitInventory;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPlannedIssueDate()
    {
      if ($this->plannedIssueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->plannedIssueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $plannedIssueDate
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setPlannedIssueDate(\DateTime $plannedIssueDate = null)
    {
      if ($plannedIssueDate == null) {
       $this->plannedIssueDate = null;
      } else {
        $this->plannedIssueDate = $plannedIssueDate->format(\DateTime::ATOM);
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
     * @return \Nzolt\NetSuite\WorkOrderItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
