<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Bank;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;
use Nzolt\NetSuite\WebServices\Platform\Common\LandedCost;

/**
 * CheckItem
 */
class CheckItem {

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
    protected $binNumbers;

    /**
     * @access public
     * @var string
     */
    protected $serialNumbers;

    /**
     * @access public
     * @var dateTime
     */
    protected $expirationDate;

    /**
     * @access public
     * @var string
     */
    protected $rate;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxCode;

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
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var float
     */
    protected $grossAmt;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var float
     */
    protected $tax1Amt;

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
    	"quantity" => "float",
    	"units" => "RecordRef",
    	"inventoryDetail" => "InventoryDetail",
    	"description" => "string",
    	"binNumbers" => "string",
    	"serialNumbers" => "string",
    	"expirationDate" => "dateTime",
    	"rate" => "string",
    	"taxCode" => "RecordRef",
    	"amount" => "float",
    	"options" => "CustomFieldList",
    	"taxRate1" => "float",
    	"taxRate2" => "float",
    	"department" => "RecordRef",
    	"grossAmt" => "float",
    	"class" => "RecordRef",
    	"tax1Amt" => "float",
    	"location" => "RecordRef",
    	"customer" => "RecordRef",
    	"isBillable" => "boolean",
    	"landedCost" => "LandedCost",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set vendorName
     *
     * @param string $vendorName
     * @return CheckItem
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
     * @return CheckItem
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
     * Set quantity
     *
     * @param float $quantity
     * @return CheckItem
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
     * @return CheckItem
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
     * @return CheckItem
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
     * @return CheckItem
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
     * Set serialNumbers
     *
     * @param string $serialNumbers
     * @return CheckItem
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
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     * @return CheckItem
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
     * Set rate
     *
     * @param string $rate
     * @return CheckItem
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
     * @return CheckItem
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
     * @return CheckItem
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
     * Set taxRate1
     *
     * @param float $taxRate1
     * @return CheckItem
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
     * @return CheckItem
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
     * @return CheckItem
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
     * @return CheckItem
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
     * Set isBillable
     *
     * @param boolean $isBillable
     * @return CheckItem
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
     * Set landedCost
     *
     * @param LandedCost $landedCost
     * @return CheckItem
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
     * @return CheckItem
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