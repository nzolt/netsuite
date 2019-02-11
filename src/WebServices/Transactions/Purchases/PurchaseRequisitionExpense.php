<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;

/**
 * PurchaseRequisitionExpense
 */
class PurchaseRequisitionExpense {

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var RecordRef
     */
    public $category;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var boolean
     */
    protected $isClosed;

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var RecordRef
     */
    public $poVendor;

    /**
     * @access public
     * @var float
     */
    protected $estimatedAmount;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $customer;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $linkedOrderList;

    /**
     * @access public
     * @var string
     */
    protected $linkedOrderStatus;

    /**
     * @access public
     * @var boolean
     */
    protected $isBillable;

    static $paramtypesmap = array(
    	"line" => "integer",
    	"category" => "RecordRef",
    	"location" => "RecordRef",
    	"isClosed" => "boolean",
    	"account" => "RecordRef",
    	"poVendor" => "RecordRef",
    	"estimatedAmount" => "float",
    	"amount" => "float",
    	"memo" => "string",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"customer" => "RecordRef",
    	"linkedOrderList" => "RecordRefList",
    	"linkedOrderStatus" => "string",
    	"isBillable" => "boolean",
    );

    /**
     * Set line
     *
     * @param integer $line
     * @return PurchaseRequisitionExpense
     */
    public function setLine($line) {
        $this->line = $line;
        return $this;
    }

    /**
     * Get line
     *
     * @return integer
     */
    public function getLine() {
        return $this->line;
    }


    /**
     * Set isClosed
     *
     * @param boolean $isClosed
     * @return PurchaseRequisitionExpense
     */
    public function setIsClosed($isClosed) {
        $this->isClosed = $isClosed;
        return $this;
    }

    /**
     * Get isClosed
     *
     * @return boolean
     */
    public function getIsClosed() {
        return $this->isClosed;
    }


    /**
     * Set estimatedAmount
     *
     * @param float $estimatedAmount
     * @return PurchaseRequisitionExpense
     */
    public function setEstimatedAmount($estimatedAmount) {
        $this->estimatedAmount = $estimatedAmount;
        return $this;
    }

    /**
     * Get estimatedAmount
     *
     * @return float
     */
    public function getEstimatedAmount() {
        return $this->estimatedAmount;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return PurchaseRequisitionExpense
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount() {
        return $this->amount;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return PurchaseRequisitionExpense
     */
    public function setMemo($memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo() {
        return $this->memo;
    }


    /**
     * Set linkedOrderList
     *
     * @param RecordRefList $linkedOrderList
     * @return PurchaseRequisitionExpense
     */
    public function setLinkedOrderList(RecordRefList $linkedOrderList) {
        $this->linkedOrderList = $linkedOrderList;
        return $this;
    }

    /**
     * Get linkedOrderList
     *
     * @return RecordRefList
     */
    public function getLinkedOrderList() {
        return $this->linkedOrderList;
    }


    /**
     * Set linkedOrderStatus
     *
     * @param string $linkedOrderStatus
     * @return PurchaseRequisitionExpense
     */
    public function setLinkedOrderStatus($linkedOrderStatus) {
        $this->linkedOrderStatus = $linkedOrderStatus;
        return $this;
    }

    /**
     * Get linkedOrderStatus
     *
     * @return string
     */
    public function getLinkedOrderStatus() {
        return $this->linkedOrderStatus;
    }


    /**
     * Set isBillable
     *
     * @param boolean $isBillable
     * @return PurchaseRequisitionExpense
     */
    public function setIsBillable($isBillable) {
        $this->isBillable = $isBillable;
        return $this;
    }

    /**
     * Get isBillable
     *
     * @return boolean
     */
    public function getIsBillable() {
        return $this->isBillable;
    }

}