<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;
use Nzolt\NetSuite\WebServices\Transactions\Purchases\Types\TransactionBillVarianceStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Platform\Common\LandedCost;

/**
 * VendorBillItem
 */
class VendorBillItem {

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
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var integer
     */
    protected $orderDoc;

    /**
     * @access public
     * @var integer
     */
    protected $orderLine;

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
     * @var string
     */
    protected $serialNumbers;

    /**
     * @access public
     * @var string
     */
    protected $binNumbers;

    /**
     * @access public
     * @var dateTime
     */
    protected $expirationDate;

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
     * @var float
     */
    protected $tax1Amt;

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
    public $customer;

    /**
     * @access public
     * @var RecordRef
     */
    public $landedCostCategory;

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
     * @var RecordRefList
     */
    protected $billreceiptsList;

    /**
     * @access public
     * @var RecordRef
     */
    public $amortizationSched;

    /**
     * @access public
     * @var dateTime
     */
    protected $amortizStartDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $amortizationEndDate;

    /**
     * @access public
     * @var string
     */
    protected $amortizationResidual;

    /**
     * @access public
     * @var LandedCost
     */
    protected $landedCost;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"item" => "RecordRef",
    	"vendorName" => "string",
    	"line" => "integer",
    	"orderDoc" => "integer",
    	"orderLine" => "integer",
    	"quantity" => "float",
    	"units" => "RecordRef",
    	"inventoryDetail" => "InventoryDetail",
    	"description" => "string",
    	"serialNumbers" => "string",
    	"binNumbers" => "string",
    	"expirationDate" => "dateTime",
    	"taxCode" => "RecordRef",
    	"taxRate1" => "float",
    	"taxRate2" => "float",
    	"grossAmt" => "float",
    	"tax1Amt" => "float",
    	"rate" => "string",
    	"amount" => "float",
    	"options" => "CustomFieldList",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"customer" => "RecordRef",
    	"landedCostCategory" => "RecordRef",
    	"isBillable" => "boolean",
    	"billVarianceStatus" => "TransactionBillVarianceStatus",
    	"billreceiptsList" => "RecordRefList",
    	"amortizationSched" => "RecordRef",
    	"amortizStartDate" => "dateTime",
    	"amortizationEndDate" => "dateTime",
    	"amortizationResidual" => "string",
    	"landedCost" => "LandedCost",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set vendorName
     *
     * @param string $vendorName
     * @return VendorBillItem
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
     * Set line
     *
     * @param integer $line
     * @return VendorBillItem
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
     * Set orderDoc
     *
     * @param integer $orderDoc
     * @return VendorBillItem
     */
    public function setOrderDoc($orderDoc) {
        $this->orderDoc = $orderDoc;
        return $this;
    }

    /**
     * Get orderDoc
     *
     * @return integer
     */
    public function getOrderDoc() {
        return $this->orderDoc;
    }


    /**
     * Set orderLine
     *
     * @param integer $orderLine
     * @return VendorBillItem
     */
    public function setOrderLine($orderLine) {
        $this->orderLine = $orderLine;
        return $this;
    }

    /**
     * Get orderLine
     *
     * @return integer
     */
    public function getOrderLine() {
        return $this->orderLine;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return VendorBillItem
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
     * Set inventoryDetail
     *
     * @param InventoryDetail $inventoryDetail
     * @return VendorBillItem
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
     * @return VendorBillItem
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
     * Set serialNumbers
     *
     * @param string $serialNumbers
     * @return VendorBillItem
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
     * Set binNumbers
     *
     * @param string $binNumbers
     * @return VendorBillItem
     */
    public function setBinNumbers($binNumbers) {
        $this->binNumbers = $binNumbers;
        return $this;
    }

    /**
     * Get binNumbers
     *
     * @return string
     */
    public function getBinNumbers() {
        return $this->binNumbers;
    }


    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     * @return VendorBillItem
     */
    public function setExpirationDate(\DateTime $expirationDate) {
        $this->expirationDate = $expirationDate->format('c');
        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate() {
        return new \DateTime($this->expirationDate);
    }


    /**
     * Set taxRate1
     *
     * @param float $taxRate1
     * @return VendorBillItem
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
     * @return VendorBillItem
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
     * @return VendorBillItem
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
     * Set tax1Amt
     *
     * @param float $tax1Amt
     * @return VendorBillItem
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
     * Set rate
     *
     * @param string $rate
     * @return VendorBillItem
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
     * @return VendorBillItem
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
     * @return VendorBillItem
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
     * @return VendorBillItem
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
     * @return VendorBillItem
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
     * Set billreceiptsList
     *
     * @param RecordRefList $billreceiptsList
     * @return VendorBillItem
     */
    public function setBillreceiptsList(RecordRefList $billreceiptsList) {
        $this->billreceiptsList = $billreceiptsList;
        return $this;
    }

    /**
     * Get billreceiptsList
     *
     * @return RecordRefList
     */
    public function getBillreceiptsList() {
        return $this->billreceiptsList;
    }


    /**
     * Set amortizStartDate
     *
     * @param \DateTime $amortizStartDate
     * @return VendorBillItem
     */
    public function setAmortizStartDate(\DateTime $amortizStartDate) {
        $this->amortizStartDate = $amortizStartDate->format('c');
        return $this;
    }

    /**
     * Get amortizStartDate
     *
     * @return \DateTime
     */
    public function getAmortizStartDate() {
        return new \DateTime($this->amortizStartDate);
    }


    /**
     * Set amortizationEndDate
     *
     * @param \DateTime $amortizationEndDate
     * @return VendorBillItem
     */
    public function setAmortizationEndDate(\DateTime $amortizationEndDate) {
        $this->amortizationEndDate = $amortizationEndDate->format('c');
        return $this;
    }

    /**
     * Get amortizationEndDate
     *
     * @return \DateTime
     */
    public function getAmortizationEndDate() {
        return new \DateTime($this->amortizationEndDate);
    }


    /**
     * Set amortizationResidual
     *
     * @param string $amortizationResidual
     * @return VendorBillItem
     */
    public function setAmortizationResidual($amortizationResidual) {
        $this->amortizationResidual = $amortizationResidual;
        return $this;
    }

    /**
     * Get amortizationResidual
     *
     * @return string
     */
    public function getAmortizationResidual() {
        return $this->amortizationResidual;
    }


    /**
     * Set landedCost
     *
     * @param LandedCost $landedCost
     * @return VendorBillItem
     */
    public function setLandedCost(LandedCost $landedCost) {
        $this->landedCost = $landedCost;
        return $this;
    }

    /**
     * Get landedCost
     *
     * @return LandedCost
     */
    public function getLandedCost() {
        return $this->landedCost;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return VendorBillItem
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