<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;
use Nzolt\NetSuite\WebServices\Transactions\Purchases\Types\TransactionBillVarianceStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;

/**
 * PurchaseOrderItem
 */
class PurchaseOrderItem {

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var string
     */
    protected $vendorName;

    /**
     * @access public
     * @var float
     */
    protected $quantityReceived;

    /**
     * @access public
     * @var float
     */
    protected $quantityBilled;

    /**
     * @access public
     * @var float
     */
    protected $quantityAvailable;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnHand;

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
    protected $quantity;

    /**
     * @access public
     * @var float
     */
    protected $tax1Amt;

    /**
     * @access public
     * @var float
     */
    protected $grossAmt;

    /**
     * @access public
     * @var RecordRef
     */
    public $units;

    /**
     * @access public
     * @var InventoryDetail
     */
    protected $inventoryDetail;

    /**
     * @access public
     * @var string
     */
    protected $serialNumbers;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchaseContract;

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
    public $location;

    /**
     * @access public
     * @var RecordRef
     */
    public $landedCostCategory;

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
     * @var TransactionBillVarianceStatus
     */
    protected $billVarianceStatus;

    /**
     * @access public
     * @var boolean
     */
    protected $matchBillToReceipt;

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
     * @var RecordRef
     */
    public $createdFrom;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $linkedOrderList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"item" => "RecordRef",
    	"line" => "integer",
    	"vendorName" => "string",
    	"quantityReceived" => "float",
    	"quantityBilled" => "float",
    	"quantityAvailable" => "float",
    	"quantityOnHand" => "float",
    	"taxCode" => "RecordRef",
    	"taxRate1" => "float",
    	"taxRate2" => "float",
    	"quantity" => "float",
    	"tax1Amt" => "float",
    	"grossAmt" => "float",
    	"units" => "RecordRef",
    	"inventoryDetail" => "InventoryDetail",
    	"serialNumbers" => "string",
    	"description" => "string",
    	"purchaseContract" => "RecordRef",
    	"rate" => "string",
    	"amount" => "float",
    	"options" => "CustomFieldList",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"landedCostCategory" => "RecordRef",
    	"customer" => "RecordRef",
    	"isBillable" => "boolean",
    	"billVarianceStatus" => "TransactionBillVarianceStatus",
    	"matchBillToReceipt" => "boolean",
    	"expectedReceiptDate" => "dateTime",
    	"isClosed" => "boolean",
    	"createdFrom" => "RecordRef",
    	"linkedOrderList" => "RecordRefList",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set line
     *
     * @param integer $line
     * @return PurchaseOrderItem
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
     * @return PurchaseOrderItem
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
     * Set quantityReceived
     *
     * @param float $quantityReceived
     * @return PurchaseOrderItem
     */
    public function setQuantityReceived($quantityReceived) {
        $this->quantityReceived = $quantityReceived;
        return $this;
    }

    /**
     * Get quantityReceived
     *
     * @return float
     */
    public function getQuantityReceived() {
        return $this->quantityReceived;
    }


    /**
     * Set quantityBilled
     *
     * @param float $quantityBilled
     * @return PurchaseOrderItem
     */
    public function setQuantityBilled($quantityBilled) {
        $this->quantityBilled = $quantityBilled;
        return $this;
    }

    /**
     * Get quantityBilled
     *
     * @return float
     */
    public function getQuantityBilled() {
        return $this->quantityBilled;
    }


    /**
     * Set quantityAvailable
     *
     * @param float $quantityAvailable
     * @return PurchaseOrderItem
     */
    public function setQuantityAvailable($quantityAvailable) {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * Get quantityAvailable
     *
     * @return float
     */
    public function getQuantityAvailable() {
        return $this->quantityAvailable;
    }


    /**
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return PurchaseOrderItem
     */
    public function setQuantityOnHand($quantityOnHand) {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * Get quantityOnHand
     *
     * @return float
     */
    public function getQuantityOnHand() {
        return $this->quantityOnHand;
    }


    /**
     * Set taxRate1
     *
     * @param float $taxRate1
     * @return PurchaseOrderItem
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
     * @return PurchaseOrderItem
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
     * Set quantity
     *
     * @param float $quantity
     * @return PurchaseOrderItem
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
     * Set tax1Amt
     *
     * @param float $tax1Amt
     * @return PurchaseOrderItem
     */
    public function setTax1Amt($tax1Amt) {
        $this->tax1Amt = $tax1Amt;
        return $this;
    }

    /**
     * Get tax1Amt
     *
     * @return float
     */
    public function getTax1Amt() {
        return $this->tax1Amt;
    }


    /**
     * Set grossAmt
     *
     * @param float $grossAmt
     * @return PurchaseOrderItem
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
     * Set inventoryDetail
     *
     * @param InventoryDetail $inventoryDetail
     * @return PurchaseOrderItem
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
     * Set serialNumbers
     *
     * @param string $serialNumbers
     * @return PurchaseOrderItem
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
     * Set description
     *
     * @param string $description
     * @return PurchaseOrderItem
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
     * Set rate
     *
     * @param string $rate
     * @return PurchaseOrderItem
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
     * @return PurchaseOrderItem
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
     * Set options
     *
     * @param CustomFieldList $options
     * @return PurchaseOrderItem
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
     * @return PurchaseOrderItem
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
     * Set billVarianceStatus
     *
     * @param TransactionBillVarianceStatus $billVarianceStatus
     * @return PurchaseOrderItem
     */
    public function setBillVarianceStatus(TransactionBillVarianceStatus $billVarianceStatus) {
        $this->billVarianceStatus = $billVarianceStatus;
        return $this;
    }

    /**
     * Get billVarianceStatus
     *
     * @return TransactionBillVarianceStatus
     */
    public function getBillVarianceStatus() {
        return $this->billVarianceStatus;
    }


    /**
     * Set matchBillToReceipt
     *
     * @param boolean $matchBillToReceipt
     * @return PurchaseOrderItem
     */
    public function setMatchBillToReceipt($matchBillToReceipt) {
        $this->matchBillToReceipt = $matchBillToReceipt;
        return $this;
    }

    /**
     * Get matchBillToReceipt
     *
     * @return boolean
     */
    public function getMatchBillToReceipt() {
        return $this->matchBillToReceipt;
    }


    /**
     * Set expectedReceiptDate
     *
     * @param \DateTime $expectedReceiptDate
     * @return PurchaseOrderItem
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
     * @return PurchaseOrderItem
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
     * Set linkedOrderList
     *
     * @param RecordRefList $linkedOrderList
     * @return PurchaseOrderItem
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
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return PurchaseOrderItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}