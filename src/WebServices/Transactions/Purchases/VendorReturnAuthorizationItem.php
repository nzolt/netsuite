<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * VendorReturnAuthorizationItem
 */
class VendorReturnAuthorizationItem {

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
     * @var RecordRefList
     */
    protected $serialNumbersList;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var string
     */
    protected $binNumbers;

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
     * @var float
     */
    protected $tax1Amt;

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
     * @var boolean
     */
    protected $isBillable;

    /**
     * @access public
     * @var boolean
     */
    protected $isClosed;

    /**
     * @access public
     * @var RecordRef
     */
    public $amortizationSched;

    /**
     * @access public
     * @var boolean
     */
    protected $isDropShipment;

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
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"item" => "RecordRef",
    	"vendorName" => "string",
    	"line" => "integer",
    	"orderLine" => "integer",
    	"quantity" => "float",
    	"units" => "RecordRef",
    	"inventoryDetail" => "InventoryDetail",
    	"serialNumbersList" => "RecordRefList",
    	"description" => "string",
    	"binNumbers" => "string",
    	"rate" => "string",
    	"amount" => "float",
    	"taxCode" => "RecordRef",
    	"taxRate1" => "float",
    	"taxRate2" => "float",
    	"grossAmt" => "float",
    	"tax1Amt" => "float",
    	"options" => "CustomFieldList",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"customer" => "RecordRef",
    	"isBillable" => "boolean",
    	"isClosed" => "boolean",
    	"amortizationSched" => "RecordRef",
    	"isDropShipment" => "boolean",
    	"amortizStartDate" => "dateTime",
    	"amortizationEndDate" => "dateTime",
    	"amortizationResidual" => "string",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set vendorName
     *
     * @param string $vendorName
     * @return VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
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
     * Set orderLine
     *
     * @param integer $orderLine
     * @return VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
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
     * Set serialNumbersList
     *
     * @param RecordRefList $serialNumbersList
     * @return VendorReturnAuthorizationItem
     */
    public function setSerialNumbersList(RecordRefList $serialNumbersList) {
        $this->serialNumbersList = $serialNumbersList;
        return $this;
    }

    /**
     * Get serialNumbersList
     *
     * @return RecordRefList
     */
    public function getSerialNumbersList() {
        return $this->serialNumbersList;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return VendorReturnAuthorizationItem
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
     * Set binNumbers
     *
     * @param string $binNumbers
     * @return VendorReturnAuthorizationItem
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
     * Set rate
     *
     * @param string $rate
     * @return VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
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
     * Set options
     *
     * @param CustomFieldList $options
     * @return VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
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
     * Set isClosed
     *
     * @param boolean $isClosed
     * @return VendorReturnAuthorizationItem
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
     * Set isDropShipment
     *
     * @param boolean $isDropShipment
     * @return VendorReturnAuthorizationItem
     */
    public function setIsDropShipment($isDropShipment) {
        $this->isDropShipment = $isDropShipment;
        return $this;
    }

    /**
     * Get isDropShipment
     *
     * @return boolean
     */
    public function getIsDropShipment() {
        return $this->isDropShipment;
    }


    /**
     * Set amortizStartDate
     *
     * @param \DateTime $amortizStartDate
     * @return VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
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
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return VendorReturnAuthorizationItem
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