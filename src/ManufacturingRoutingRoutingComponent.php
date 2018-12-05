<?php

namespace Nzolt\NetSuite;

class ManufacturingRoutingRoutingComponent
{

    /**
     * @var string $itemName
     */
    protected $itemName = null;

    /**
     * @var string $revision
     */
    protected $revision = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var float $yield
     */
    protected $yield = null;

    /**
     * @var float $bomQuantity
     */
    protected $bomQuantity = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var string $units
     */
    protected $units = null;

    /**
     * @var RecordRef $operationDisplayText
     */
    protected $operationDisplayText = null;

    /**
     * @var int $operationSequenceNumber
     */
    protected $operationSequenceNumber = null;

    /**
     * @var string $component
     */
    protected $component = null;

    /**
     * @var string $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingComponent
     */
    public function setItemName($itemName)
    {
      $this->itemName = $itemName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRevision()
    {
      return $this->revision;
    }

    /**
     * @param string $revision
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingComponent
     */
    public function setRevision($revision)
    {
      $this->revision = $revision;
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingComponent
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return float
     */
    public function getYield()
    {
      return $this->yield;
    }

    /**
     * @param float $yield
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingComponent
     */
    public function setYield($yield)
    {
      $this->yield = $yield;
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingComponent
     */
    public function setBomQuantity($bomQuantity)
    {
      $this->bomQuantity = $bomQuantity;
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingComponent
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param string $units
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingComponent
     */
    public function setUnits($units)
    {
      $this->units = $units;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOperationDisplayText()
    {
      return $this->operationDisplayText;
    }

    /**
     * @param RecordRef $operationDisplayText
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingComponent
     */
    public function setOperationDisplayText($operationDisplayText)
    {
      $this->operationDisplayText = $operationDisplayText;
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingComponent
     */
    public function setOperationSequenceNumber($operationSequenceNumber)
    {
      $this->operationSequenceNumber = $operationSequenceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getComponent()
    {
      return $this->component;
    }

    /**
     * @param string $component
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingComponent
     */
    public function setComponent($component)
    {
      $this->component = $component;
      return $this;
    }

    /**
     * @return string
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param string $item
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingComponent
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

}
