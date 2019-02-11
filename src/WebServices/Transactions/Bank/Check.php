<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Bank;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\LandedCostMethod;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Check
 */
class Check extends Record {

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
     * @var float
     */
    protected $balance;

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var string
     */
    protected $address;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

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
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $voidJournal;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var boolean
     */
    protected $toBePrinted;

    /**
     * @access public
     * @var string
     */
    protected $tranId;

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
     * @var float
     */
    protected $taxTotal;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var float
     */
    protected $tax2Total;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var float
     */
    protected $userTotal;

    /**
     * @access public
     * @var LandedCostMethod
     */
    protected $landedCostMethod;

    /**
     * @access public
     * @var boolean
     */
    protected $landedCostPerLine;

    /**
     * @access public
     * @var string
     */
    protected $transactionNumber;

    /**
     * @access public
     * @var CheckExpenseList
     */
    protected $expenseList;

    /**
     * @access public
     * @var CheckItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var CheckLandedCostList
     */
    protected $landedCostsList;

    /**
     * @access public
     * @var boolean
     */
    protected $billPay;

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
    	"balance" => "float",
    	"entity" => "RecordRef",
    	"address" => "string",
    	"subsidiary" => "RecordRef",
    	"postingPeriod" => "RecordRef",
    	"tranDate" => "dateTime",
    	"currency" => "RecordRef",
    	"voidJournal" => "RecordRef",
    	"exchangeRate" => "float",
    	"toBePrinted" => "boolean",
    	"tranId" => "string",
    	"memo" => "string",
    	"department" => "RecordRef",
    	"taxTotal" => "float",
    	"class" => "RecordRef",
    	"tax2Total" => "float",
    	"location" => "RecordRef",
    	"userTotal" => "float",
    	"landedCostMethod" => "LandedCostMethod",
    	"landedCostPerLine" => "boolean",
    	"transactionNumber" => "string",
    	"expenseList" => "CheckExpenseList",
    	"itemList" => "CheckItemList",
    	"landedCostsList" => "CheckLandedCostList",
    	"billPay" => "boolean",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Check
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
     * @return Check
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
     * @return Check
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
     * Set balance
     *
     * @param float $balance
     * @return Check
     */
    public function setBalance($balance) {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Get balance
     *
     * @return float
     */
    public function getBalance() {
        return $this->balance;
    }


    /**
     * Set address
     *
     * @param string $address
     * @return Check
     */
    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress() {
        return $this->address;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return Check
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
     * @return Check
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
     * Set toBePrinted
     *
     * @param boolean $toBePrinted
     * @return Check
     */
    public function setToBePrinted($toBePrinted) {
        $this->toBePrinted = $toBePrinted;
        return $this;
    }

    /**
     * Get toBePrinted
     *
     * @return boolean
     */
    public function getToBePrinted() {
        return $this->toBePrinted;
    }


    /**
     * Set tranId
     *
     * @param string $tranId
     * @return Check
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
     * Set memo
     *
     * @param string $memo
     * @return Check
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
     * Set taxTotal
     *
     * @param float $taxTotal
     * @return Check
     */
    public function setTaxTotal($taxTotal) {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Get taxTotal
     *
     * @return float
     */
    public function getTaxTotal() {
        return $this->taxTotal;
    }


    /**
     * Set tax2Total
     *
     * @param float $tax2Total
     * @return Check
     */
    public function setTax2Total($tax2Total) {
        $this->tax2Total = $tax2Total;
        return $this;
    }

    /**
     * Get tax2Total
     *
     * @return float
     */
    public function getTax2Total() {
        return $this->tax2Total;
    }


    /**
     * Set userTotal
     *
     * @param float $userTotal
     * @return Check
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
     * Set landedCostMethod
     *
     * @param LandedCostMethod $landedCostMethod
     * @return Check
     */
    public function setLandedCostMethod(LandedCostMethod $landedCostMethod) {
        $this->landedCostMethod = $landedCostMethod;
        return $this;
    }

    /**
     * Get landedCostMethod
     *
     * @return LandedCostMethod
     */
    public function getLandedCostMethod() {
        return $this->landedCostMethod;
    }


    /**
     * Set landedCostPerLine
     *
     * @param boolean $landedCostPerLine
     * @return Check
     */
    public function setLandedCostPerLine($landedCostPerLine) {
        $this->landedCostPerLine = $landedCostPerLine;
        return $this;
    }

    /**
     * Get landedCostPerLine
     *
     * @return boolean
     */
    public function getLandedCostPerLine() {
        return $this->landedCostPerLine;
    }


    /**
     * Set transactionNumber
     *
     * @param string $transactionNumber
     * @return Check
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
     * Set expenseList
     *
     * @param CheckExpenseList $expenseList
     * @return Check
     */
    public function setExpenseList(CheckExpenseList $expenseList) {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * Get expenseList
     *
     * @return CheckExpenseList
     */
    public function getExpenseList() {
        return $this->expenseList;
    }


    /**
     * Set itemList
     *
     * @param CheckItemList $itemList
     * @return Check
     */
    public function setItemList(CheckItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return CheckItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set landedCostsList
     *
     * @param CheckLandedCostList $landedCostsList
     * @return Check
     */
    public function setLandedCostsList(CheckLandedCostList $landedCostsList) {
        $this->landedCostsList = $landedCostsList;
        return $this;
    }

    /**
     * Get landedCostsList
     *
     * @return CheckLandedCostList
     */
    public function getLandedCostsList() {
        return $this->landedCostsList;
    }


    /**
     * Set billPay
     *
     * @param boolean $billPay
     * @return Check
     */
    public function setBillPay($billPay) {
        $this->billPay = $billPay;
        return $this;
    }

    /**
     * Get billPay
     *
     * @return boolean
     */
    public function getBillPay() {
        return $this->billPay;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Check
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
     * @return Check
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
     * @return Check
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