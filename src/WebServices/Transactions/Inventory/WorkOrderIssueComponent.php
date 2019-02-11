<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;

/**
 * WorkOrderIssueComponent
 */
class WorkOrderIssueComponent {

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var integer
     */
    protected $operationSequenceNumber;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var InventoryDetail
     */
    protected $componentInventoryDetail;

    /**
     * @access public
     * @var integer
     */
    protected $lineNumber;

    static $paramtypesmap = array(
    	"item" => "RecordRef",
    	"operationSequenceNumber" => "integer",
    	"quantity" => "float",
    	"componentInventoryDetail" => "InventoryDetail",
    	"lineNumber" => "integer",
    );

    /**
     * Set operationSequenceNumber
     *
     * @param integer $operationSequenceNumber
     * @return WorkOrderIssueComponent
     */
    public function setOperationSequenceNumber($operationSequenceNumber) {
        $this->operationSequenceNumber = $operationSequenceNumber;
        return $this;
    }

    /**
     * Get operationSequenceNumber
     *
     * @return integer
     */
    public function getOperationSequenceNumber() {
        return $this->operationSequenceNumber;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return WorkOrderIssueComponent
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
     * Set componentInventoryDetail
     *
     * @param InventoryDetail $componentInventoryDetail
     * @return WorkOrderIssueComponent
     */
    public function setComponentInventoryDetail(InventoryDetail $componentInventoryDetail) {
        $this->componentInventoryDetail = $componentInventoryDetail;
        return $this;
    }

    /**
     * Get componentInventoryDetail
     *
     * @return InventoryDetail
     */
    public function getComponentInventoryDetail() {
        return $this->componentInventoryDetail;
    }


    /**
     * Set lineNumber
     *
     * @param integer $lineNumber
     * @return WorkOrderIssueComponent
     */
    public function setLineNumber($lineNumber) {
        $this->lineNumber = $lineNumber;
        return $this;
    }

    /**
     * Get lineNumber
     *
     * @return integer
     */
    public function getLineNumber() {
        return $this->lineNumber;
    }

}