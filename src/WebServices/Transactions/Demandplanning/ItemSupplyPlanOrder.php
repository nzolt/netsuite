<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Demandplanning;

use Nzolt\NetSuite\WebServices\Transactions\Demandplanning\Types\ItemSupplyPlanOrderType;

/**
 * ItemSupplyPlanOrder
 */
class ItemSupplyPlanOrder {

    /**
     * @access public
     * @var integer
     */
    protected $orderLineId;

    /**
     * @access public
     * @var dateTime
     */
    protected $orderDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $receiptDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $sourceLocation;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var boolean
     */
    protected $orderCreated;

    /**
     * @access public
     * @var ItemSupplyPlanOrderType
     */
    protected $orderType;

    static $paramtypesmap = array(
    	"orderLineId" => "integer",
    	"orderDate" => "dateTime",
    	"receiptDate" => "dateTime",
    	"sourceLocation" => "RecordRef",
    	"quantity" => "float",
    	"orderCreated" => "boolean",
    	"orderType" => "ItemSupplyPlanOrderType",
    );

    /**
     * Set orderLineId
     *
     * @param integer $orderLineId
     * @return ItemSupplyPlanOrder
     */
    public function setOrderLineId($orderLineId) {
        $this->orderLineId = $orderLineId;
        return $this;
    }

    /**
     * Get orderLineId
     *
     * @return integer
     */
    public function getOrderLineId() {
        return $this->orderLineId;
    }


    /**
     * Set orderDate
     *
     * @param \DateTime $orderDate
     * @return ItemSupplyPlanOrder
     */
    public function setOrderDate(\DateTime $orderDate) {
        $this->orderDate = $orderDate->format('c');
        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate() {
        return new \DateTime($this->orderDate);
    }


    /**
     * Set receiptDate
     *
     * @param \DateTime $receiptDate
     * @return ItemSupplyPlanOrder
     */
    public function setReceiptDate(\DateTime $receiptDate) {
        $this->receiptDate = $receiptDate->format('c');
        return $this;
    }

    /**
     * Get receiptDate
     *
     * @return \DateTime
     */
    public function getReceiptDate() {
        return new \DateTime($this->receiptDate);
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return ItemSupplyPlanOrder
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity() {
        return $this->quantity;
    }


    /**
     * Set orderCreated
     *
     * @param boolean $orderCreated
     * @return ItemSupplyPlanOrder
     */
    public function setOrderCreated($orderCreated) {
        $this->orderCreated = $orderCreated;
        return $this;
    }

    /**
     * Get orderCreated
     *
     * @return boolean
     */
    public function getOrderCreated() {
        return $this->orderCreated;
    }


    /**
     * Set orderType
     *
     * @param ItemSupplyPlanOrderType $orderType
     * @return ItemSupplyPlanOrder
     */
    public function setOrderType(ItemSupplyPlanOrderType $orderType) {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * Get orderType
     *
     * @return ItemSupplyPlanOrderType
     */
    public function getOrderType() {
        return $this->orderType;
    }

}