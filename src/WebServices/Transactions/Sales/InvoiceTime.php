<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

/**
 * InvoiceTime
 */
class InvoiceTime {

    /**
     * @access public
     * @var boolean
     */
    protected $apply;

    /**
     * @access public
     * @var integer
     */
    protected $doc;

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var dateTime
     */
    protected $billedDate;

    /**
     * @access public
     * @var string
     */
    protected $employeeDisp;

    /**
     * @access public
     * @var string
     */
    protected $itemDisp;

    /**
     * @access public
     * @var string
     */
    protected $jobDisp;

    /**
     * @access public
     * @var string
     */
    protected $department;

    /**
     * @access public
     * @var string
     */
    protected $class;

    /**
     * @access public
     * @var string
     */
    protected $location;

    /**
     * @access public
     * @var string
     */
    protected $quantity;

    /**
     * @access public
     * @var float
     */
    protected $rate;

    /**
     * @access public
     * @var string
     */
    protected $unitDisp;

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
    public $revRecSchedule;

    /**
     * @access public
     * @var dateTime
     */
    protected $revRecStartDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $revRecEndDate;

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

    static $paramtypesmap = array(
    	"apply" => "boolean",
    	"doc" => "integer",
    	"line" => "integer",
    	"billedDate" => "dateTime",
    	"employeeDisp" => "string",
    	"itemDisp" => "string",
    	"jobDisp" => "string",
    	"department" => "string",
    	"class" => "string",
    	"location" => "string",
    	"quantity" => "string",
    	"rate" => "float",
    	"unitDisp" => "string",
    	"amount" => "float",
    	"memo" => "string",
    	"revRecSchedule" => "RecordRef",
    	"revRecStartDate" => "dateTime",
    	"revRecEndDate" => "dateTime",
    	"grossAmt" => "float",
    	"tax1Amt" => "float",
    	"taxCode" => "RecordRef",
    	"taxRate1" => "float",
    	"taxRate2" => "float",
    );

    /**
     * Set apply
     *
     * @param boolean $apply
     * @return InvoiceTime
     */
    public function setApply($apply) {
        $this->apply = $apply;
        return $this;
    }

    /**
     * Get apply
     *
     * @return boolean
     */
    public function getApply() {
        return $this->apply;
    }


    /**
     * Set doc
     *
     * @param integer $doc
     * @return InvoiceTime
     */
    public function setDoc($doc) {
        $this->doc = $doc;
        return $this;
    }

    /**
     * Get doc
     *
     * @return integer
     */
    public function getDoc() {
        return $this->doc;
    }


    /**
     * Set line
     *
     * @param integer $line
     * @return InvoiceTime
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
     * Set billedDate
     *
     * @param \DateTime $billedDate
     * @return InvoiceTime
     */
    public function setBilledDate(\DateTime $billedDate) {
        $this->billedDate = $billedDate->format('c');
        return $this;
    }

    /**
     * Get billedDate
     *
     * @return \DateTime
     */
    public function getBilledDate() {
        return new \DateTime($this->billedDate);
    }


    /**
     * Set employeeDisp
     *
     * @param string $employeeDisp
     * @return InvoiceTime
     */
    public function setEmployeeDisp($employeeDisp) {
        $this->employeeDisp = $employeeDisp;
        return $this;
    }

    /**
     * Get employeeDisp
     *
     * @return string
     */
    public function getEmployeeDisp() {
        return $this->employeeDisp;
    }


    /**
     * Set itemDisp
     *
     * @param string $itemDisp
     * @return InvoiceTime
     */
    public function setItemDisp($itemDisp) {
        $this->itemDisp = $itemDisp;
        return $this;
    }

    /**
     * Get itemDisp
     *
     * @return string
     */
    public function getItemDisp() {
        return $this->itemDisp;
    }


    /**
     * Set jobDisp
     *
     * @param string $jobDisp
     * @return InvoiceTime
     */
    public function setJobDisp($jobDisp) {
        $this->jobDisp = $jobDisp;
        return $this;
    }

    /**
     * Get jobDisp
     *
     * @return string
     */
    public function getJobDisp() {
        return $this->jobDisp;
    }


    /**
     * Set department
     *
     * @param string $department
     * @return InvoiceTime
     */
    public function setDepartment($department) {
        $this->department = $department;
        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment() {
        return $this->department;
    }


    /**
     * Set class
     *
     * @param string $class
     * @return InvoiceTime
     */
    public function setClass($class) {
        $this->class = $class;
        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass() {
        return $this->class;
    }


    /**
     * Set location
     *
     * @param string $location
     * @return InvoiceTime
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set quantity
     *
     * @param string $quantity
     * @return InvoiceTime
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity() {
        return $this->quantity;
    }


    /**
     * Set rate
     *
     * @param float $rate
     * @return InvoiceTime
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
     * Set unitDisp
     *
     * @param string $unitDisp
     * @return InvoiceTime
     */
    public function setUnitDisp($unitDisp) {
        $this->unitDisp = $unitDisp;
        return $this;
    }

    /**
     * Get unitDisp
     *
     * @return string
     */
    public function getUnitDisp() {
        return $this->unitDisp;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return InvoiceTime
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
     * @return InvoiceTime
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
     * Set revRecStartDate
     *
     * @param \DateTime $revRecStartDate
     * @return InvoiceTime
     */
    public function setRevRecStartDate(\DateTime $revRecStartDate) {
        $this->revRecStartDate = $revRecStartDate->format('c');
        return $this;
    }

    /**
     * Get revRecStartDate
     *
     * @return \DateTime
     */
    public function getRevRecStartDate() {
        return new \DateTime($this->revRecStartDate);
    }


    /**
     * Set revRecEndDate
     *
     * @param \DateTime $revRecEndDate
     * @return InvoiceTime
     */
    public function setRevRecEndDate(\DateTime $revRecEndDate) {
        $this->revRecEndDate = $revRecEndDate->format('c');
        return $this;
    }

    /**
     * Get revRecEndDate
     *
     * @return \DateTime
     */
    public function getRevRecEndDate() {
        return new \DateTime($this->revRecEndDate);
    }


    /**
     * Set grossAmt
     *
     * @param float $grossAmt
     * @return InvoiceTime
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
     * @return InvoiceTime
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
     * Set taxRate1
     *
     * @param float $taxRate1
     * @return InvoiceTime
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
     * @return InvoiceTime
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

}