<?php

namespace Nzolt\NetSuite;

class AssemblyComponent
{

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var float $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var InventoryDetail $componentInventoryDetail
     */
    protected $componentInventoryDetail = null;

    /**
     * @var string $componentNumbers
     */
    protected $componentNumbers = null;

    /**
     * @var string $binNumbers
     */
    protected $binNumbers = null;

    /**
     * @var int $lineNumber
     */
    protected $lineNumber = null;

    
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
     * @return \Nzolt\NetSuite\AssemblyComponent
     */
    public function setItem($item)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\AssemblyComponent
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
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
     * @return \Nzolt\NetSuite\AssemblyComponent
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

    /**
     * @return InventoryDetail
     */
    public function getComponentInventoryDetail()
    {
      return $this->componentInventoryDetail;
    }

    /**
     * @param InventoryDetail $componentInventoryDetail
     * @return \Nzolt\NetSuite\AssemblyComponent
     */
    public function setComponentInventoryDetail($componentInventoryDetail)
    {
      $this->componentInventoryDetail = $componentInventoryDetail;
      return $this;
    }

    /**
     * @return string
     */
    public function getComponentNumbers()
    {
      return $this->componentNumbers;
    }

    /**
     * @param string $componentNumbers
     * @return \Nzolt\NetSuite\AssemblyComponent
     */
    public function setComponentNumbers($componentNumbers)
    {
      $this->componentNumbers = $componentNumbers;
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
     * @return \Nzolt\NetSuite\AssemblyComponent
     */
    public function setBinNumbers($binNumbers)
    {
      $this->binNumbers = $binNumbers;
      return $this;
    }

    /**
     * @return int
     */
    public function getLineNumber()
    {
      return $this->lineNumber;
    }

    /**
     * @param int $lineNumber
     * @return \Nzolt\NetSuite\AssemblyComponent
     */
    public function setLineNumber($lineNumber)
    {
      $this->lineNumber = $lineNumber;
      return $this;
    }

}
