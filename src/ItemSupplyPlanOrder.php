<?php

namespace Nzolt\NetSuite;

class ItemSupplyPlanOrder
{

    /**
     * @var int $orderLineId
     */
    protected $orderLineId = null;

    /**
     * @var \DateTime $orderDate
     */
    protected $orderDate = null;

    /**
     * @var \DateTime $receiptDate
     */
    protected $receiptDate = null;

    /**
     * @var RecordRef $sourceLocation
     */
    protected $sourceLocation = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var boolean $orderCreated
     */
    protected $orderCreated = null;

    /**
     * @var ItemSupplyPlanOrderType $orderType
     */
    protected $orderType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getOrderLineId()
    {
      return $this->orderLineId;
    }

    /**
     * @param int $orderLineId
     * @return \Nzolt\NetSuite\ItemSupplyPlanOrder
     */
    public function setOrderLineId($orderLineId)
    {
      $this->orderLineId = $orderLineId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOrderDate()
    {
      if ($this->orderDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->orderDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $orderDate
     * @return \Nzolt\NetSuite\ItemSupplyPlanOrder
     */
    public function setOrderDate(\DateTime $orderDate = null)
    {
      if ($orderDate == null) {
       $this->orderDate = null;
      } else {
        $this->orderDate = $orderDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReceiptDate()
    {
      if ($this->receiptDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->receiptDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $receiptDate
     * @return \Nzolt\NetSuite\ItemSupplyPlanOrder
     */
    public function setReceiptDate(\DateTime $receiptDate = null)
    {
      if ($receiptDate == null) {
       $this->receiptDate = null;
      } else {
        $this->receiptDate = $receiptDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceLocation()
    {
      return $this->sourceLocation;
    }

    /**
     * @param RecordRef $sourceLocation
     * @return \Nzolt\NetSuite\ItemSupplyPlanOrder
     */
    public function setSourceLocation($sourceLocation)
    {
      $this->sourceLocation = $sourceLocation;
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanOrder
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOrderCreated()
    {
      return $this->orderCreated;
    }

    /**
     * @param boolean $orderCreated
     * @return \Nzolt\NetSuite\ItemSupplyPlanOrder
     */
    public function setOrderCreated($orderCreated)
    {
      $this->orderCreated = $orderCreated;
      return $this;
    }

    /**
     * @return ItemSupplyPlanOrderType
     */
    public function getOrderType()
    {
      return $this->orderType;
    }

    /**
     * @param ItemSupplyPlanOrderType $orderType
     * @return \Nzolt\NetSuite\ItemSupplyPlanOrder
     */
    public function setOrderType($orderType)
    {
      $this->orderType = $orderType;
      return $this;
    }

}
