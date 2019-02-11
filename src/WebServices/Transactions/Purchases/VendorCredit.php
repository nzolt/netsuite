<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * VendorCredit
 */
class VendorCredit extends Record {

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
     * @var float
     */
    protected $unApplied;

    /**
     * @access public
     * @var boolean
     */
    protected $autoApply;

    /**
     * @access public
     * @var float
     */
    protected $applied;

    /**
     * @access public
     * @var string
     */
    protected $transactionNumber;

    /**
     * @access public
     * @var string
     */
    protected $tranId;

    /**
     * @access public
     * @var RecordRef
     */
    public $createdFrom;

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var float
     */
    protected $total;

    /**
     * @access public
     * @var float
     */
    protected $userTotal;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var string
     */
    protected $currencyName;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

    /**
     * @access public
     * @var string
     */
    protected $memo;

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
    public $subsidiary;

    /**
     * @access public
     * @var VendorCreditExpenseList
     */
    protected $expenseList;

    /**
     * @access public
     * @var VendorCreditItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var VendorCreditApplyList
     */
    protected $applyList;

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
    	"customForm" => "RecordRef",
    	"account" => "RecordRef",
    	"unApplied" => "float",
    	"autoApply" => "boolean",
    	"applied" => "float",
    	"transactionNumber" => "string",
    	"tranId" => "string",
    	"createdFrom" => "RecordRef",
    	"entity" => "RecordRef",
    	"total" => "float",
    	"userTotal" => "float",
    	"currency" => "RecordRef",
    	"currencyName" => "string",
    	"tranDate" => "dateTime",
    	"exchangeRate" => "float",
    	"postingPeriod" => "RecordRef",
    	"memo" => "string",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"expenseList" => "VendorCreditExpenseList",
    	"itemList" => "VendorCreditItemList",
    	"applyList" => "VendorCreditApplyList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return VendorCredit
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
     * @return VendorCredit
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
     * Set unApplied
     *
     * @param float $unApplied
     * @return VendorCredit
     */
    public function setUnApplied($unApplied) {
        $this->unApplied = $unApplied;
        return $this;
    }

    /**
     * Get unApplied
     *
     * @return float
     */
    public function getUnApplied() {
        return $this->unApplied;
    }


    /**
     * Set autoApply
     *
     * @param boolean $autoApply
     * @return VendorCredit
     */
    public function setAutoApply($autoApply) {
        $this->autoApply = $autoApply;
        return $this;
    }

    /**
     * Get autoApply
     *
     * @return boolean
     */
    public function getAutoApply() {
        return $this->autoApply;
    }


    /**
     * Set applied
     *
     * @param float $applied
     * @return VendorCredit
     */
    public function setApplied($applied) {
        $this->applied = $applied;
        return $this;
    }

    /**
     * Get applied
     *
     * @return float
     */
    public function getApplied() {
        return $this->applied;
    }


    /**
     * Set transactionNumber
     *
     * @param string $transactionNumber
     * @return VendorCredit
     */
    public function setTransactionNumber($transactionNumber) {
        $this->transactionNumber = $transactionNumber;
        return $this;
    }

    /**
     * Get transactionNumber
     *
     * @return string
     */
    public function getTransactionNumber() {
        return $this->transactionNumber;
    }


    /**
     * Set tranId
     *
     * @param string $tranId
     * @return VendorCredit
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
     * Set total
     *
     * @param float $total
     * @return VendorCredit
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
     * Set userTotal
     *
     * @param float $userTotal
     * @return VendorCredit
     */
    public function setUserTotal($userTotal) {
        $this->userTotal = $userTotal;
        return $this;
    }

    /**
     * Get userTotal
     *
     * @return float
     */
    public function getUserTotal() {
        return $this->userTotal;
    }


    /**
     * Set currencyName
     *
     * @param string $currencyName
     * @return VendorCredit
     */
    public function setCurrencyName($currencyName) {
        $this->currencyName = $currencyName;
        return $this;
    }

    /**
     * Get currencyName
     *
     * @return string
     */
    public function getCurrencyName() {
        return $this->currencyName;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return VendorCredit
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
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return VendorCredit
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
     * Set memo
     *
     * @param string $memo
     * @return VendorCredit
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
     * Set expenseList
     *
     * @param VendorCreditExpenseList $expenseList
     * @return VendorCredit
     */
    public function setExpenseList(VendorCreditExpenseList $expenseList) {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * Get expenseList
     *
     * @return VendorCreditExpenseList
     */
    public function getExpenseList() {
        return $this->expenseList;
    }


    /**
     * Set itemList
     *
     * @param VendorCreditItemList $itemList
     * @return VendorCredit
     */
    public function setItemList(VendorCreditItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return VendorCreditItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set applyList
     *
     * @param VendorCreditApplyList $applyList
     * @return VendorCredit
     */
    public function setApplyList(VendorCreditApplyList $applyList) {
        $this->applyList = $applyList;
        return $this;
    }

    /**
     * Get applyList
     *
     * @return VendorCreditApplyList
     */
    public function getApplyList() {
        return $this->applyList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return VendorCredit
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
     * @return VendorCredit
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
     * @return VendorCredit
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