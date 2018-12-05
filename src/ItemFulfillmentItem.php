<?php

namespace Nzolt\NetSuite;

class ItemFulfillmentItem
{

    /**
     * @var string $jobName
     */
    protected $jobName = null;

    /**
     * @var boolean $itemReceive
     */
    protected $itemReceive = null;

    /**
     * @var string $itemName
     */
    protected $itemName = null;

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
     * @var float $onHand
     */
    protected $onHand = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var string $unitsDisplay
     */
    protected $unitsDisplay = null;

    /**
     * @var string $createPo
     */
    protected $createPo = null;

    /**
     * @var InventoryDetail $inventoryDetail
     */
    protected $inventoryDetail = null;

    /**
     * @var string $binNumbers
     */
    protected $binNumbers = null;

    /**
     * @var string $serialNumbers
     */
    protected $serialNumbers = null;

    /**
     * @var string $poNum
     */
    protected $poNum = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var int $orderLine
     */
    protected $orderLine = null;

    /**
     * @var float $quantityRemaining
     */
    protected $quantityRemaining = null;

    /**
     * @var CustomFieldList $options
     */
    protected $options = null;

    /**
     * @var int $shipGroup
     */
    protected $shipGroup = null;

    /**
     * @var boolean $itemIsFulfilled
     */
    protected $itemIsFulfilled = null;

    /**
     * @var RecordRef $shipAddress
     */
    protected $shipAddress = null;

    /**
     * @var RecordRef $shipMethod
     */
    protected $shipMethod = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getJobName()
    {
      return $this->jobName;
    }

    /**
     * @param string $jobName
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setJobName($jobName)
    {
      $this->jobName = $jobName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getItemReceive()
    {
      return $this->itemReceive;
    }

    /**
     * @param boolean $itemReceive
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setItemReceive($itemReceive)
    {
      $this->itemReceive = $itemReceive;
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
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
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
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
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
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
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
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
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
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return float
     */
    public function getOnHand()
    {
      return $this->onHand;
    }

    /**
     * @param float $onHand
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setOnHand($onHand)
    {
      $this->onHand = $onHand;
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
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitsDisplay()
    {
      return $this->unitsDisplay;
    }

    /**
     * @param string $unitsDisplay
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setUnitsDisplay($unitsDisplay)
    {
      $this->unitsDisplay = $unitsDisplay;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatePo()
    {
      return $this->createPo;
    }

    /**
     * @param string $createPo
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setCreatePo($createPo)
    {
      $this->createPo = $createPo;
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
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setInventoryDetail($inventoryDetail)
    {
      $this->inventoryDetail = $inventoryDetail;
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
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
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
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setSerialNumbers($serialNumbers)
    {
      $this->serialNumbers = $serialNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getPoNum()
    {
      return $this->poNum;
    }

    /**
     * @param string $poNum
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setPoNum($poNum)
    {
      $this->poNum = $poNum;
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
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderLine()
    {
      return $this->orderLine;
    }

    /**
     * @param int $orderLine
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setOrderLine($orderLine)
    {
      $this->orderLine = $orderLine;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityRemaining()
    {
      return $this->quantityRemaining;
    }

    /**
     * @param float $quantityRemaining
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setQuantityRemaining($quantityRemaining)
    {
      $this->quantityRemaining = $quantityRemaining;
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
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipGroup()
    {
      return $this->shipGroup;
    }

    /**
     * @param int $shipGroup
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setShipGroup($shipGroup)
    {
      $this->shipGroup = $shipGroup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getItemIsFulfilled()
    {
      return $this->itemIsFulfilled;
    }

    /**
     * @param boolean $itemIsFulfilled
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setItemIsFulfilled($itemIsFulfilled)
    {
      $this->itemIsFulfilled = $itemIsFulfilled;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipAddress()
    {
      return $this->shipAddress;
    }

    /**
     * @param RecordRef $shipAddress
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setShipAddress($shipAddress)
    {
      $this->shipAddress = $shipAddress;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipMethod()
    {
      return $this->shipMethod;
    }

    /**
     * @param RecordRef $shipMethod
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setShipMethod($shipMethod)
    {
      $this->shipMethod = $shipMethod;
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
     * @return \Nzolt\NetSuite\ItemFulfillmentItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
