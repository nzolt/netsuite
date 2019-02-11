<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

/**
 * InvoiceExpCost
 */
class InvoiceExpCost {

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
    protected $jobDisp;

    /**
     * @access public
     * @var string
     */
    protected $employeeDisp;

    /**
     * @access public
     * @var string
     */
    protected $categoryDisp;

    /**
     * @access public
     * @var string
     */
    protected $memo;

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
     * @var float
     */
    protected $originalAmount;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var string
     */
    protected $taxableDisp;

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
    	"jobDisp" => "string",
    	"employeeDisp" => "string",
    	"categoryDisp" => "string",
    	"memo" => "string",
    	"department" => "string",
    	"class" => "string",
    	"location" => "string",
    	"originalAmount" => "float",
    	"amount" => "float",
    	"taxableDisp" => "string",
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
     * @return InvoiceExpCost
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
     * @return InvoiceExpCost
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
     * @return InvoiceExpCost
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
     * @return InvoiceExpCost
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
     * Set jobDisp
     *
     * @param string $jobDisp
     * @return InvoiceExpCost
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
     * Set employeeDisp
     *
     * @param string $employeeDisp
     * @return InvoiceExpCost
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
     * Set categoryDisp
     *
     * @param string $categoryDisp
     * @return InvoiceExpCost
     */
    public function setCategoryDisp($categoryDisp) {
        $this->categoryDisp = $categoryDisp;
        return $this;
    }

    /**
     * Get categoryDisp
     *
     * @return string
     */
    public function getCategoryDisp() {
        return $this->categoryDisp;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return InvoiceExpCost
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
     * Set department
     *
     * @param string $department
     * @return InvoiceExpCost
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
     * @return InvoiceExpCost
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
     * @return InvoiceExpCost
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
     * Set originalAmount
     *
     * @param float $originalAmount
     * @return InvoiceExpCost
     */
    public function setOriginalAmount($originalAmount) {
        $this->originalAmount = $originalAmount;
        return $this;
    }

    /**
     * Get originalAmount
     *
     * @return float
     */
    public function getOriginalAmount() {
        return $this->originalAmount;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return InvoiceExpCost
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
     * Set taxableDisp
     *
     * @param string $taxableDisp
     * @return InvoiceExpCost
     */
    public function setTaxableDisp($taxableDisp) {
        $this->taxableDisp = $taxableDisp;
        return $this;
    }

    /**
     * Get taxableDisp
     *
     * @return string
     */
    public function getTaxableDisp() {
        return $this->taxableDisp;
    }


    /**
     * Set revRecStartDate
     *
     * @param \DateTime $revRecStartDate
     * @return InvoiceExpCost
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
     * @return InvoiceExpCost
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
     * @return InvoiceExpCost
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
     * @return InvoiceExpCost
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
     * @return InvoiceExpCost
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
     * @return InvoiceExpCost
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