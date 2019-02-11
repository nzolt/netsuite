<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * VendorPayment
 */
class VendorPayment extends Record {

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
    protected $balance;

    /**
     * @access public
     * @var RecordRef
     */
    public $apAcct;

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
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $voidJournal;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

    /**
     * @access public
     * @var string
     */
    protected $currencyName;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var boolean
     */
    protected $toAch;

    /**
     * @access public
     * @var boolean
     */
    protected $toBePrinted;

    /**
     * @access public
     * @var boolean
     */
    protected $printVoucher;

    /**
     * @access public
     * @var string
     */
    protected $tranId;

    /**
     * @access public
     * @var float
     */
    protected $total;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

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
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var string
     */
    protected $transactionNumber;

    /**
     * @access public
     * @var VendorPaymentApplyList
     */
    protected $applyList;

    /**
     * @access public
     * @var VendorPaymentCreditList
     */
    protected $creditList;

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
    	"customForm" => "RecordRef",
    	"account" => "RecordRef",
    	"balance" => "float",
    	"apAcct" => "RecordRef",
    	"entity" => "RecordRef",
    	"address" => "string",
    	"tranDate" => "dateTime",
    	"voidJournal" => "RecordRef",
    	"postingPeriod" => "RecordRef",
    	"currencyName" => "string",
    	"exchangeRate" => "float",
    	"toAch" => "boolean",
    	"toBePrinted" => "boolean",
    	"printVoucher" => "boolean",
    	"tranId" => "string",
    	"total" => "float",
    	"currency" => "RecordRef",
    	"department" => "RecordRef",
    	"memo" => "string",
    	"subsidiary" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"status" => "string",
    	"transactionNumber" => "string",
    	"applyList" => "VendorPaymentApplyList",
    	"creditList" => "VendorPaymentCreditList",
    	"billPay" => "boolean",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return VendorPayment
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
     * @return VendorPayment
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
     * Set balance
     *
     * @param float $balance
     * @return VendorPayment
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
     * @return VendorPayment
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
     * @return VendorPayment
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
     * Set currencyName
     *
     * @param string $currencyName
     * @return VendorPayment
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
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return VendorPayment
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
     * Set toAch
     *
     * @param boolean $toAch
     * @return VendorPayment
     */
    public function setToAch($toAch) {
        $this->toAch = $toAch;
        return $this;
    }

    /**
     * Get toAch
     *
     * @return boolean
     */
    public function getToAch() {
        return $this->toAch;
    }


    /**
     * Set toBePrinted
     *
     * @param boolean $toBePrinted
     * @return VendorPayment
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
     * Set printVoucher
     *
     * @param boolean $printVoucher
     * @return VendorPayment
     */
    public function setPrintVoucher($printVoucher) {
        $this->printVoucher = $printVoucher;
        return $this;
    }

    /**
     * Get printVoucher
     *
     * @return boolean
     */
    public function getPrintVoucher() {
        return $this->printVoucher;
    }


    /**
     * Set tranId
     *
     * @param string $tranId
     * @return VendorPayment
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
     * @return VendorPayment
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
     * Set memo
     *
     * @param string $memo
     * @return VendorPayment
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
     * Set status
     *
     * @param string $status
     * @return VendorPayment
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
     * Set transactionNumber
     *
     * @param string $transactionNumber
     * @return VendorPayment
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
     * Set applyList
     *
     * @param VendorPaymentApplyList $applyList
     * @return VendorPayment
     */
    public function setApplyList(VendorPaymentApplyList $applyList) {
        $this->applyList = $applyList;
        return $this;
    }

    /**
     * Get applyList
     *
     * @return VendorPaymentApplyList
     */
    public function getApplyList() {
        return $this->applyList;
    }


    /**
     * Set creditList
     *
     * @param VendorPaymentCreditList $creditList
     * @return VendorPayment
     */
    public function setCreditList(VendorPaymentCreditList $creditList) {
        $this->creditList = $creditList;
        return $this;
    }

    /**
     * Get creditList
     *
     * @return VendorPaymentCreditList
     */
    public function getCreditList() {
        return $this->creditList;
    }


    /**
     * Set billPay
     *
     * @param boolean $billPay
     * @return VendorPayment
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
     * @return VendorPayment
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
     * @return VendorPayment
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
     * @return VendorPayment
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