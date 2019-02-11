<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\General;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * InterCompanyJournalEntryLine
 */
class InterCompanyJournalEntryLine {

    /**
     * @access public
     * @var RecordRef
     */
    public $lineSubsidiary;

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
    public $schedule;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

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
     * @var string
     */
    protected $residual;

    /**
     * @access public
     * @var RecordRef
     */
    public $amortizationSched;

    /**
     * @access public
     * @var RecordRef
     */
    public $scheduleNum;

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
    	"lineSubsidiary" => "RecordRef",
    	"account" => "RecordRef",
    	"debit" => "float",
    	"credit" => "float",
    	"taxCode" => "RecordRef",
    	"memo" => "string",
    	"taxRate1" => "float",
    	"entity" => "RecordRef",
    	"grossAmt" => "float",
    	"schedule" => "RecordRef",
    	"department" => "RecordRef",
    	"startDate" => "dateTime",
    	"class" => "RecordRef",
    	"endDate" => "dateTime",
    	"location" => "RecordRef",
    	"eliminate" => "boolean",
    	"residual" => "string",
    	"amortizationSched" => "RecordRef",
    	"scheduleNum" => "RecordRef",
    	"amortizStartDate" => "dateTime",
    	"amortizationEndDate" => "dateTime",
    	"amortizationResidual" => "string",
    	"tax1Amt" => "float",
    	"tax1Acct" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set debit
     *
     * @param float $debit
     * @return InterCompanyJournalEntryLine
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
     * @return InterCompanyJournalEntryLine
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
     * @return InterCompanyJournalEntryLine
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
     * @return InterCompanyJournalEntryLine
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
     * @return InterCompanyJournalEntryLine
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return InterCompanyJournalEntryLine
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
     * @return InterCompanyJournalEntryLine
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
     * Set eliminate
     *
     * @param boolean $eliminate
     * @return InterCompanyJournalEntryLine
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
     * Set residual
     *
     * @param string $residual
     * @return InterCompanyJournalEntryLine
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
     * Set amortizStartDate
     *
     * @param \DateTime $amortizStartDate
     * @return InterCompanyJournalEntryLine
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
     * @return InterCompanyJournalEntryLine
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
     * @return InterCompanyJournalEntryLine
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
     * Set tax1Amt
     *
     * @param float $tax1Amt
     * @return InterCompanyJournalEntryLine
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
     * @return InterCompanyJournalEntryLine
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