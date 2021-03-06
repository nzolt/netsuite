<?php

namespace Nzolt\NetSuite;

class WorkOrderCompletionComponent
{

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var int $operationSequenceNumber
     */
    protected $operationSequenceNumber = null;

    /**
     * @var float $quantityPer
     */
    protected $quantityPer = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var InventoryDetail $componentInventoryDetail
     */
    protected $componentInventoryDetail = null;

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
     * @return \Nzolt\NetSuite\WorkOrderCompletionComponent
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
     * @return \Nzolt\NetSuite\WorkOrderCompletionComponent
     */
    public function setOperationSequenceNumber($operationSequenceNumber)
    {
      $this->operationSequenceNumber = $operationSequenceNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityPer()
    {
      return $this->quantityPer;
    }

    /**
     * @param float $quantityPer
     * @return \Nzolt\NetSuite\WorkOrderCompletionComponent
     */
    public function setQuantityPer($quantityPer)
    {
      $this->quantityPer = $quantityPer;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletionComponent
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletionComponent
     */
    public function setComponentInventoryDetail($componentInventoryDetail)
    {
      $this->componentInventoryDetail = $componentInventoryDetail;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletionComponent
     */
    public function setLineNumber($lineNumber)
    {
      $this->lineNumber = $lineNumber;
      return $this;
    }

}
