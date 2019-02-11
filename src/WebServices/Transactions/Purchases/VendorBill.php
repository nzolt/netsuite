<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\LandedCostMethod;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;

/**
 * VendorBill
 */
class VendorBill extends Record {

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
     * @var RecordRef
     */
    public $approvalStatus;

    /**
     * @access public
     * @var RecordRef
     */
    public $nextApprover;

    /**
     * @access public
     * @var string
     */
    protected $vatRegNum;

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
     * @var RecordRef
     */
    public $terms;

    /**
     * @access public
     * @var dateTime
     */
    protected $dueDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $discountDate;

    /**
     * @access public
     * @var string
     */
    protected $tranId;

    /**
     * @access public
     * @var float
     */
    protected $userTotal;

    /**
     * @access public
     * @var float
     */
    protected $discountAmount;

    /**
     * @access public
     * @var float
     */
    protected $taxTotal;

    /**
     * @access public
     * @var boolean
     */
    protected $paymentHold;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var float
     */
    protected $tax2Total;

    /**
     * @access public
     * @var float
     */
    protected $creditLimit;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

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
     * @var VendorBillExpenseList
     */
    protected $expenseList;

    /**
     * @access public
     * @var VendorBillItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var PurchLandedCostList
     */
    protected $landedCostsList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $purchaseOrderList;

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
    	"entity" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"approvalStatus" => "RecordRef",
    	"nextApprover" => "RecordRef",
    	"vatRegNum" => "string",
    	"postingPeriod" => "RecordRef",
    	"tranDate" => "dateTime",
    	"currencyName" => "string",
    	"exchangeRate" => "float",
    	"terms" => "RecordRef",
    	"dueDate" => "dateTime",
    	"discountDate" => "dateTime",
    	"tranId" => "string",
    	"userTotal" => "float",
    	"discountAmount" => "float",
    	"taxTotal" => "float",
    	"paymentHold" => "boolean",
    	"memo" => "string",
    	"tax2Total" => "float",
    	"creditLimit" => "float",
    	"currency" => "RecordRef",
    	"class" => "RecordRef",
    	"department" => "RecordRef",
    	"location" => "RecordRef",
    	"status" => "string",
    	"landedCostMethod" => "LandedCostMethod",
    	"landedCostPerLine" => "boolean",
    	"transactionNumber" => "string",
    	"expenseList" => "VendorBillExpenseList",
    	"itemList" => "VendorBillItemList",
    	"landedCostsList" => "PurchLandedCostList",
    	"customFieldList" => "CustomFieldList",
    	"purchaseOrderList" => "RecordRefList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return VendorBill
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
     * @return VendorBill
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
     * Set vatRegNum
     *
     * @param string $vatRegNum
     * @return VendorBill
     */
    public function setVatRegNum($vatRegNum) {
        $this->vatRegNum = $vatRegNum;
        return $this;
    }

    /**
     * Get vatRegNum
     *
     * @return string
     */
    public function getVatRegNum() {
        return $this->vatRegNum;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return VendorBill
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
     * @return VendorBill
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
     * @return VendorBill
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
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return VendorBill
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
     * Set discountDate
     *
     * @param \DateTime $discountDate
     * @return VendorBill
     */
    public function setDiscountDate(\DateTime $discountDate) {
        $this->discountDate = $discountDate->format('c');
        return $this;
    }

    /**
     * Get discountDate
     *
     * @return \DateTime
     */
    public function getDiscountDate() {
        return new \DateTime($this->discountDate);
    }


    /**
     * Set tranId
     *
     * @param string $tranId
     * @return VendorBill
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
     * Set userTotal
     *
     * @param float $userTotal
     * @return VendorBill
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
     * Set discountAmount
     *
     * @param float $discountAmount
     * @return VendorBill
     */
    public function setDiscountAmount($discountAmount) {
        $this->discountAmount = $discountAmount;
        return $this;
    }

    /**
     * Get discountAmount
     *
     * @return float
     */
    public function getDiscountAmount() {
        return $this->discountAmount;
    }


    /**
     * Set taxTotal
     *
     * @param float $taxTotal
     * @return VendorBill
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
     * Set paymentHold
     *
     * @param boolean $paymentHold
     * @return VendorBill
     */
    public function setPaymentHold($paymentHold) {
        $this->paymentHold = $paymentHold;
        return $this;
    }

    /**
     * Get paymentHold
     *
     * @return boolean
     */
    public function getPaymentHold() {
        return $this->paymentHold;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return VendorBill
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
     * Set tax2Total
     *
     * @param float $tax2Total
     * @return VendorBill
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
     * Set creditLimit
     *
     * @param float $creditLimit
     * @return VendorBill
     */
    public function setCreditLimit($creditLimit) {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    /**
     * Get creditLimit
     *
     * @return float
     */
    public function getCreditLimit() {
        return $this->creditLimit;
    }


    /**
     * Set status
     *
     * @param string $status
     * @return VendorBill
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
     * Set landedCostMethod
     *
     * @param LandedCostMethod $landedCostMethod
     * @return VendorBill
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
     * @return VendorBill
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
     * @return VendorBill
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
     * @param VendorBillExpenseList $expenseList
     * @return VendorBill
     */
    public function setExpenseList(VendorBillExpenseList $expenseList) {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * Get expenseList
     *
     * @return VendorBillExpenseList
     */
    public function getExpenseList() {
        return $this->expenseList;
    }


    /**
     * Set itemList
     *
     * @param VendorBillItemList $itemList
     * @return VendorBill
     */
    public function setItemList(VendorBillItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return VendorBillItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set landedCostsList
     *
     * @param PurchLandedCostList $landedCostsList
     * @return VendorBill
     */
    public function setLandedCostsList(PurchLandedCostList $landedCostsList) {
        $this->landedCostsList = $landedCostsList;
        return $this;
    }

    /**
     * Get landedCostsList
     *
     * @return PurchLandedCostList
     */
    public function getLandedCostsList() {
        return $this->landedCostsList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return VendorBill
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
     * Set purchaseOrderList
     *
     * @param RecordRefList $purchaseOrderList
     * @return VendorBill
     */
    public function setPurchaseOrderList(RecordRefList $purchaseOrderList) {
        $this->purchaseOrderList = $purchaseOrderList;
        return $this;
    }

    /**
     * Get purchaseOrderList
     *
     * @return RecordRefList
     */
    public function getPurchaseOrderList() {
        return $this->purchaseOrderList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return VendorBill
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
     * @return VendorBill
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