<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\General;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * JournalEntryLine
 */
class JournalEntryLine {

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var float
     */
    protected $debit;

    /**
     * @access public
     * @var float
     */
    protected $credit;

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
     * @var RecordRef
     */
    public $entity;

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
     * @var boolean
     */
    protected $eliminate;

    /**
     * @access public
     * @var RecordRef
     */
    public $schedule;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    /**
     * @access public
     * @var string
     */
    protected $residual;

    /**
     * @access public
     * @var RecordRef
     */
    public $scheduleNum;

    /**
     * @access public
     * @var float
     */
    protected $tax1Amt;

    /**
     * @access public
     * @var RecordRef
     */
    public $tax1Acct;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"account" => "RecordRef",
    	"debit" => "float",
    	"credit" => "float",
    	"taxCode" => "RecordRef",
    	"memo" => "string",
    	"taxRate1" => "float",
    	"entity" => "RecordRef",
    	"grossAmt" => "float",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"eliminate" => "boolean",
    	"schedule" => "RecordRef",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"residual" => "string",
    	"scheduleNum" => "RecordRef",
    	"tax1Amt" => "float",
    	"tax1Acct" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set debit
     *
     * @param float $debit
     * @return JournalEntryLine
     */
    public function setDebit($debit) {
        $this->debit = $debit;
        return $this;
    }

    /**
     * Get debit
     *
     * @return float
     */
    public function getDebit() {
        return $this->debit;
    }


    /**
     * Set credit
     *
     * @param float $credit
     * @return JournalEntryLine
     */
    public function setCredit($credit) {
        $this->credit = $credit;
        return $this;
    }

    /**
     * Get credit
     *
     * @return float
     */
    public function getCredit() {
        return $this->credit;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return JournalEntryLine
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
     * @return JournalEntryLine
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
     * Set grossAmt
     *
     * @param float $grossAmt
     * @return JournalEntryLine
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
     * Set eliminate
     *
     * @param boolean $eliminate
     * @return JournalEntryLine
     */
    public function setEliminate($eliminate) {
        $this->eliminate = $eliminate;
        return $this;
    }

    /**
     * Get eliminate
     *
     * @return boolean
     */
    public function getEliminate() {
        return $this->eliminate;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return JournalEntryLine
     */
    public function setStartDate(\DateTime $startDate) {
        $this->startDate = $startDate->format('c');
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate() {
        return new \DateTime($this->startDate);
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return JournalEntryLine
     */
    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate->format('c');
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return new \DateTime($this->endDate);
    }


    /**
     * Set residual
     *
     * @param string $residual
     * @return JournalEntryLine
     */
    public function setResidual($residual) {
        $this->residual = $residual;
        return $this;
    }

    /**
     * Get residual
     *
     * @return string
     */
    public function getResidual() {
        return $this->residual;
    }


    /**
     * Set tax1Amt
     *
     * @param float $tax1Amt
     * @return JournalEntryLine
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
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return JournalEntryLine
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