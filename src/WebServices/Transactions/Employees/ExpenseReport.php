<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ExpenseReport
 */
class ExpenseReport extends Record {

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var string
     */
    protected $tranId;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $dueDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $approvalStatus;

    /**
     * @access public
     * @var float
     */
    protected $total;

    /**
     * @access public
     * @var RecordRef
     */
    public $nextApprover;

    /**
     * @access public
     * @var float
     */
    protected $advance;

    /**
     * @access public
     * @var float
     */
    protected $tax1Amt;

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
     * @var boolean
     */
    protected $complete;

    /**
     * @access public
     * @var boolean
     */
    protected $supervisorApproval;

    /**
     * @access public
     * @var boolean
     */
    protected $accountingApproval;

    /**
     * @access public
     * @var boolean
     */
    protected $useMultiCurrency;

    /**
     * @access public
     * @var float
     */
    protected $tax2Amt;

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
     * @var ExpenseReportExpenseList
     */
    protected $expenseList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"status" => "string",
    	"customForm" => "RecordRef",
    	"account" => "RecordRef",
    	"entity" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"tranId" => "string",
    	"postingPeriod" => "RecordRef",
    	"tranDate" => "dateTime",
    	"dueDate" => "dateTime",
    	"approvalStatus" => "RecordRef",
    	"total" => "float",
    	"nextApprover" => "RecordRef",
    	"advance" => "float",
    	"tax1Amt" => "float",
    	"amount" => "float",
    	"memo" => "string",
    	"complete" => "boolean",
    	"supervisorApproval" => "boolean",
    	"accountingApproval" => "boolean",
    	"useMultiCurrency" => "boolean",
    	"tax2Amt" => "float",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"expenseList" => "ExpenseReportExpenseList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return ExpenseReport
     */
    public function setCreatedDate(\DateTime $createdDate) {
        $this->createdDate = $createdDate->format('c');
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return new \DateTime($this->createdDate);
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return ExpenseReport
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate->format('c');
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate() {
        return new \DateTime($this->lastModifiedDate);
    }


    /**
     * Set status
     *
     * @param string $status
     * @return ExpenseReport
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set tranId
     *
     * @param string $tranId
     * @return ExpenseReport
     */
    public function setTranId($tranId) {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * Get tranId
     *
     * @return string
     */
    public function getTranId() {
        return $this->tranId;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return ExpenseReport
     */
    public function setTranDate(\DateTime $tranDate) {
        $this->tranDate = $tranDate->format('c');
        return $this;
    }

    /**
     * Get tranDate
     *
     * @return \DateTime
     */
    public function getTranDate() {
        return new \DateTime($this->tranDate);
    }


    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return ExpenseReport
     */
    public function setDueDate(\DateTime $dueDate) {
        $this->dueDate = $dueDate->format('c');
        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate() {
        return new \DateTime($this->dueDate);
    }


    /**
     * Set total
     *
     * @param float $total
     * @return ExpenseReport
     */
    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal() {
        return $this->total;
    }


    /**
     * Set advance
     *
     * @param float $advance
     * @return ExpenseReport
     */
    public function setAdvance($advance) {
        $this->advance = $advance;
        return $this;
    }

    /**
     * Get advance
     *
     * @return float
     */
    public function getAdvance() {
        return $this->advance;
    }


    /**
     * Set tax1Amt
     *
     * @param float $tax1Amt
     * @return ExpenseReport
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
     * Set amount
     *
     * @param float $amount
     * @return ExpenseReport
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
     * @return ExpenseReport
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
     * Set complete
     *
     * @param boolean $complete
     * @return ExpenseReport
     */
    public function setComplete($complete) {
        $this->complete = $complete;
        return $this;
    }

    /**
     * Get complete
     *
     * @return boolean
     */
    public function getComplete() {
        return $this->complete;
    }


    /**
     * Set supervisorApproval
     *
     * @param boolean $supervisorApproval
     * @return ExpenseReport
     */
    public function setSupervisorApproval($supervisorApproval) {
        $this->supervisorApproval = $supervisorApproval;
        return $this;
    }

    /**
     * Get supervisorApproval
     *
     * @return boolean
     */
    public function getSupervisorApproval() {
        return $this->supervisorApproval;
    }


    /**
     * Set accountingApproval
     *
     * @param boolean $accountingApproval
     * @return ExpenseReport
     */
    public function setAccountingApproval($accountingApproval) {
        $this->accountingApproval = $accountingApproval;
        return $this;
    }

    /**
     * Get accountingApproval
     *
     * @return boolean
     */
    public function getAccountingApproval() {
        return $this->accountingApproval;
    }


    /**
     * Set useMultiCurrency
     *
     * @param boolean $useMultiCurrency
     * @return ExpenseReport
     */
    public function setUseMultiCurrency($useMultiCurrency) {
        $this->useMultiCurrency = $useMultiCurrency;
        return $this;
    }

    /**
     * Get useMultiCurrency
     *
     * @return boolean
     */
    public function getUseMultiCurrency() {
        return $this->useMultiCurrency;
    }


    /**
     * Set tax2Amt
     *
     * @param float $tax2Amt
     * @return ExpenseReport
     */
    public function setTax2Amt($tax2Amt) {
        $this->tax2Amt = $tax2Amt;
        return $this;
    }

    /**
     * Get tax2Amt
     *
     * @return float
     */
    public function getTax2Amt() {
        return $this->tax2Amt;
    }


    /**
     * Set expenseList
     *
     * @param ExpenseReportExpenseList $expenseList
     * @return ExpenseReport
     */
    public function setExpenseList(ExpenseReportExpenseList $expenseList) {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * Get expenseList
     *
     * @return ExpenseReportExpenseList
     */
    public function getExpenseList() {
        return $this->expenseList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ExpenseReport
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


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return ExpenseReport
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return ExpenseReport
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}