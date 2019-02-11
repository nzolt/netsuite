<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ExpenseReportExpense
 */
class ExpenseReportExpense {

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var dateTime
     */
    protected $expenseDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $category;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var float
     */
    protected $rate;

    /**
     * @access public
     * @var float
     */
    protected $foreignAmount;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

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
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var float
     */
    protected $taxRate1;

    /**
     * @access public
     * @var float
     */
    protected $tax1Amt;

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
     * @var float
     */
    protected $taxRate2;

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
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var boolean
     */
    protected $isBillable;

    /**
     * @access public
     * @var RecordRef
     */
    public $expMediaItem;

    /**
     * @access public
     * @var boolean
     */
    protected $isNonReimbursable;

    /**
     * @access public
     * @var boolean
     */
    protected $receipt;

    /**
     * @access public
     * @var integer
     */
    protected $refNumber;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"line" => "integer",
    	"expenseDate" => "dateTime",
    	"category" => "RecordRef",
    	"quantity" => "float",
    	"rate" => "float",
    	"foreignAmount" => "float",
    	"currency" => "RecordRef",
    	"exchangeRate" => "float",
    	"amount" => "float",
    	"taxCode" => "RecordRef",
    	"memo" => "string",
    	"taxRate1" => "float",
    	"tax1Amt" => "float",
    	"department" => "RecordRef",
    	"grossAmt" => "float",
    	"taxRate2" => "float",
    	"class" => "RecordRef",
    	"customer" => "RecordRef",
    	"location" => "RecordRef",
    	"isBillable" => "boolean",
    	"expMediaItem" => "RecordRef",
    	"isNonReimbursable" => "boolean",
    	"receipt" => "boolean",
    	"refNumber" => "integer",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set line
     *
     * @param integer $line
     * @return ExpenseReportExpense
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
     * Set expenseDate
     *
     * @param \DateTime $expenseDate
     * @return ExpenseReportExpense
     */
    public function setExpenseDate(\DateTime $expenseDate) {
        $this->expenseDate = $expenseDate->format('c');
        return $this;
    }

    /**
     * Get expenseDate
     *
     * @return \DateTime
     */
    public function getExpenseDate() {
        return new \DateTime($this->expenseDate);
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return ExpenseReportExpense
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
     * Set rate
     *
     * @param float $rate
     * @return ExpenseReportExpense
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return float
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set foreignAmount
     *
     * @param float $foreignAmount
     * @return ExpenseReportExpense
     */
    public function setForeignAmount($foreignAmount) {
        $this->foreignAmount = $foreignAmount;
        return $this;
    }

    /**
     * Get foreignAmount
     *
     * @return float
     */
    public function getForeignAmount() {
        return $this->foreignAmount;
    }


    /**
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return ExpenseReportExpense
     */
    public function setExchangeRate($exchangeRate) {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Get exchangeRate
     *
     * @return float
     */
    public function getExchangeRate() {
        return $this->exchangeRate;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return ExpenseReportExpense
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
     * @return ExpenseReportExpense
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
     * Set taxRate1
     *
     * @param float $taxRate1
     * @return ExpenseReportExpense
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
     * Set tax1Amt
     *
     * @param float $tax1Amt
     * @return ExpenseReportExpense
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
     * @return ExpenseReportExpense
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
     * Set taxRate2
     *
     * @param float $taxRate2
     * @return ExpenseReportExpense
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
     * Set isBillable
     *
     * @param boolean $isBillable
     * @return ExpenseReportExpense
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
     * Set isNonReimbursable
     *
     * @param boolean $isNonReimbursable
     * @return ExpenseReportExpense
     */
    public function setIsNonReimbursable($isNonReimbursable) {
        $this->isNonReimbursable = $isNonReimbursable;
        return $this;
    }

    /**
     * Get isNonReimbursable
     *
     * @return boolean
     */
    public function getIsNonReimbursable() {
        return $this->isNonReimbursable;
    }


    /**
     * Set receipt
     *
     * @param boolean $receipt
     * @return ExpenseReportExpense
     */
    public function setReceipt($receipt) {
        $this->receipt = $receipt;
        return $this;
    }

    /**
     * Get receipt
     *
     * @return boolean
     */
    public function getReceipt() {
        return $this->receipt;
    }


    /**
     * Set refNumber
     *
     * @param integer $refNumber
     * @return ExpenseReportExpense
     */
    public function setRefNumber($refNumber) {
        $this->refNumber = $refNumber;
        return $this;
    }

    /**
     * Get refNumber
     *
     * @return integer
     */
    public function getRefNumber() {
        return $this->refNumber;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ExpenseReportExpense
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