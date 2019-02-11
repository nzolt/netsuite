<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;

/**
 * PurchaseRequisitionItem
 */
class PurchaseRequisitionItem {

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var string
     */
    protected $vendorName;

    /**
     * @access public
     * @var RecordRef
     */
    public $poVendor;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var RecordRef
     */
    public $units;

    /**
     * @access public
     * @var string
     */
    protected $serialNumbers;

    /**
     * @access public
     * @var InventoryDetail
     */
    protected $inventoryDetail;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var float
     */
    protected $estimatedRate;

    /**
     * @access public
     * @var float
     */
    protected $estimatedAmount;

    /**
     * @access public
     * @var string
     */
    protected $rate;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxCode;

    /**
     * @access public
     * @var float
     */
    protected $taxRate1;

    /**
     * @access public
     * @var float
     */
    protected $taxRate2;

    /**
     * @access public
     * @var float
     */
    protected $grossAmt;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $options;

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
     * @var boolean
     */
    protected $isBillable;

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
     * @var dateTime
     */
    protected $expectedReceiptDate;

    /**
     * @access public
     * @var boolean
     */
    protected $isClosed;

    /**
     * @access public
     * @var boolean
     */
    protected $expandItemGroup;

    static $paramtypesmap = array(
    	"line" => "integer",
    	"item" => "RecordRef",
    	"vendorName" => "string",
    	"poVendor" => "RecordRef",
    	"quantity" => "float",
    	"units" => "RecordRef",
    	"serialNumbers" => "string",
    	"inventoryDetail" => "InventoryDetail",
    	"description" => "string",
    	"estimatedRate" => "float",
    	"estimatedAmount" => "float",
    	"rate" => "string",
    	"amount" => "float",
    	"taxCode" => "RecordRef",
    	"taxRate1" => "float",
    	"taxRate2" => "float",
    	"grossAmt" => "float",
    	"options" => "CustomFieldList",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"customer" => "RecordRef",
    	"isBillable" => "boolean",
    	"linkedOrderList" => "RecordRefList",
    	"linkedOrderStatus" => "string",
    	"expectedReceiptDate" => "dateTime",
    	"isClosed" => "boolean",
    	"expandItemGroup" => "boolean",
    );

    /**
     * Set line
     *
     * @param integer $line
     * @return PurchaseRequisitionItem
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
     * Set vendorName
     *
     * @param string $vendorName
     * @return PurchaseRequisitionItem
     */
    public function setVendorName($vendorName) {
        $this->vendorName = $vendorName;
        return $this;
    }

    /**
     * Get vendorName
     *
     * @return string
     */
    public function getVendorName() {
        return $this->vendorName;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return PurchaseRequisitionItem
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
     * Set serialNumbers
     *
     * @param string $serialNumbers
     * @return PurchaseRequisitionItem
     */
    public function setSerialNumbers($serialNumbers) {
        $this->serialNumbers = $serialNumbers;
        return $this;
    }

    /**
     * Get serialNumbers
     *
     * @return string
     */
    public function getSerialNumbers() {
        return $this->serialNumbers;
    }


    /**
     * Set inventoryDetail
     *
     * @param InventoryDetail $inventoryDetail
     * @return PurchaseRequisitionItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail) {
        $this->inventoryDetail = $inventoryDetail;
        return $this;
    }

    /**
     * Get inventoryDetail
     *
     * @return InventoryDetail
     */
    public function getInventoryDetail() {
        return $this->inventoryDetail;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return PurchaseRequisitionItem
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set estimatedRate
     *
     * @param float $estimatedRate
     * @return PurchaseRequisitionItem
     */
    public function setEstimatedRate($estimatedRate) {
        $this->estimatedRate = $estimatedRate;
        return $this;
    }

    /**
     * Get estimatedRate
     *
     * @return float
     */
    public function getEstimatedRate() {
        return $this->estimatedRate;
    }


    /**
     * Set estimatedAmount
     *
     * @param float $estimatedAmount
     * @return PurchaseRequisitionItem
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
     * Set rate
     *
     * @param string $rate
     * @return PurchaseRequisitionItem
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return PurchaseRequisitionItem
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
     * Set taxRate1
     *
     * @param float $taxRate1
     * @return PurchaseRequisitionItem
     */
    public function setTaxRate1($taxRate1) {
        $this->taxRate1 = $taxRate1;
        return $this;
    }

    /**
     * Get taxRate1
     *
     * @return float
     */
    public function getTaxRate1() {
        return $this->taxRate1;
    }


    /**
     * Set taxRate2
     *
     * @param float $taxRate2
     * @return PurchaseRequisitionItem
     */
    public function setTaxRate2($taxRate2) {
        $this->taxRate2 = $taxRate2;
        return $this;
    }

    /**
     * Get taxRate2
     *
     * @return float
     */
    public function getTaxRate2() {
        return $this->taxRate2;
    }


    /**
     * Set grossAmt
     *
     * @param float $grossAmt
     * @return PurchaseRequisitionItem
     */
    public function setGrossAmt($grossAmt) {
        $this->grossAmt = $grossAmt;
        return $this;
    }

    /**
     * Get grossAmt
     *
     * @return float
     */
    public function getGrossAmt() {
        return $this->grossAmt;
    }


    /**
     * Set options
     *
     * @param CustomFieldList $options
     * @return PurchaseRequisitionItem
     */
    public function setOptions(CustomFieldList $options) {
        $this->options = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return CustomFieldList
     */
    public function getOptions() {
        return $this->options;
    }


    /**
     * Set isBillable
     *
     * @param boolean $isBillable
     * @return PurchaseRequisitionItem
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


    /**
     * Set linkedOrderList
     *
     * @param RecordRefList $linkedOrderList
     * @return PurchaseRequisitionItem
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
     * @return PurchaseRequisitionItem
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
     * Set expectedReceiptDate
     *
     * @param \DateTime $expectedReceiptDate
     * @return PurchaseRequisitionItem
     */
    public function setExpectedReceiptDate(\DateTime $expectedReceiptDate) {
        $this->expectedReceiptDate = $expectedReceiptDate->format('c');
        return $this;
    }

    /**
     * Get expectedReceiptDate
     *
     * @return \DateTime
     */
    public function getExpectedReceiptDate() {
        return new \DateTime($this->expectedReceiptDate);
    }


    /**
     * Set isClosed
     *
     * @param boolean $isClosed
     * @return PurchaseRequisitionItem
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
     * Set expandItemGroup
     *
     * @param boolean $expandItemGroup
     * @return PurchaseRequisitionItem
     */
    public function setExpandItemGroup($expandItemGroup) {
        $this->expandItemGroup = $expandItemGroup;
        return $this;
    }

    /**
     * Get expandItemGroup
     *
     * @return boolean
     */
    public function getExpandItemGroup() {
        return $this->expandItemGroup;
    }

}