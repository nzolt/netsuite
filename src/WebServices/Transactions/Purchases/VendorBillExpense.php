<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * VendorBillExpense
 */
class VendorBillExpense {

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
    public $account;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var float
     */
    protected $tax1Amt;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var float
     */
    protected $grossAmt;

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
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"orderDoc" => "integer",
    	"orderLine" => "integer",
    	"line" => "integer",
    	"category" => "RecordRef",
    	"account" => "RecordRef",
    	"amount" => "float",
    	"tax1Amt" => "float",
    	"memo" => "string",
    	"grossAmt" => "float",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"customer" => "RecordRef",
    	"isBillable" => "boolean",
    	"taxCode" => "RecordRef",
    	"taxRate1" => "float",
    	"taxRate2" => "float",
    	"amortizationSched" => "RecordRef",
    	"amortizStartDate" => "dateTime",
    	"amortizationEndDate" => "dateTime",
    	"amortizationResidual" => "string",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set orderDoc
     *
     * @param integer $orderDoc
     * @return VendorBillExpense
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
     * @return VendorBillExpense
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
     * Set line
     *
     * @param integer $line
     * @return VendorBillExpense
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
     * Set amount
     *
     * @param float $amount
     * @return VendorBillExpense
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
     * Set tax1Amt
     *
     * @param float $tax1Amt
     * @return VendorBillExpense
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
     * Set memo
     *
     * @param string $memo
     * @return VendorBillExpense
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
     * Set grossAmt
     *
     * @param float $grossAmt
     * @return VendorBillExpense
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
     * Set isBillable
     *
     * @param boolean $isBillable
     * @return VendorBillExpense
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
     * Set taxRate1
     *
     * @param float $taxRate1
     * @return VendorBillExpense
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
     * @return VendorBillExpense
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
     * Set amortizStartDate
     *
     * @param \DateTime $amortizStartDate
     * @return VendorBillExpense
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
     * @return VendorBillExpense
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
     * @return VendorBillExpense
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
     * @return VendorBillExpense
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