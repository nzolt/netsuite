<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * PurchaseRequisition
 */
class PurchaseRequisition extends Record {

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
     * @var string
     */
    protected $source;

    /**
     * @access public
     * @var float
     */
    protected $subTotal;

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
     * @var string
     */
    protected $vatRegNum;

    /**
     * @access public
     * @var RecordRef
     */
    public $nexus;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxRegNum;

    /**
     * @access public
     * @var boolean
     */
    protected $taxRegOverride;

    /**
     * @access public
     * @var float
     */
    protected $estimatedTotal;

    /**
     * @access public
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var dateTime
     */
    protected $dueDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

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
    public $approvalStatus;

    /**
     * @access public
     * @var RecordRef
     */
    public $nextApprover;

    /**
     * @access public
     * @var float
     */
    protected $taxTotal;

    /**
     * @access public
     * @var float
     */
    protected $tax2Total;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

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
     * @var float
     */
    protected $total;

    /**
     * @access public
     * @var PurchaseRequisitionItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var PurchaseRequisitionExpenseList
     */
    protected $expenseList;

    /**
     * @access public
     * @var PurchaseRequisitionAccountingBookDetailList
     */
    protected $accountingBookDetailList;

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
    	"source" => "string",
    	"subTotal" => "float",
    	"currencyName" => "string",
    	"exchangeRate" => "float",
    	"vatRegNum" => "string",
    	"nexus" => "RecordRef",
    	"taxRegNum" => "RecordRef",
    	"taxRegOverride" => "boolean",
    	"estimatedTotal" => "float",
    	"status" => "string",
    	"currency" => "RecordRef",
    	"entity" => "RecordRef",
    	"dueDate" => "dateTime",
    	"tranDate" => "dateTime",
    	"tranId" => "string",
    	"memo" => "string",
    	"approvalStatus" => "RecordRef",
    	"nextApprover" => "RecordRef",
    	"taxTotal" => "float",
    	"tax2Total" => "float",
    	"subsidiary" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"total" => "float",
    	"itemList" => "PurchaseRequisitionItemList",
    	"expenseList" => "PurchaseRequisitionExpenseList",
    	"accountingBookDetailList" => "PurchaseRequisitionAccountingBookDetailList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return PurchaseRequisition
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
     * @return PurchaseRequisition
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
     * Set source
     *
     * @param string $source
     * @return PurchaseRequisition
     */
    public function setSource($source) {
        $this->source = $source;
        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource() {
        return $this->source;
    }


    /**
     * Set subTotal
     *
     * @param float $subTotal
     * @return PurchaseRequisition
     */
    public function setSubTotal($subTotal) {
        $this->subTotal = $subTotal;
        return $this;
    }

    /**
     * Get subTotal
     *
     * @return float
     */
    public function getSubTotal() {
        return $this->subTotal;
    }


    /**
     * Set currencyName
     *
     * @param string $currencyName
     * @return PurchaseRequisition
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
     * @return PurchaseRequisition
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
     * Set vatRegNum
     *
     * @param string $vatRegNum
     * @return PurchaseRequisition
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
     * Set taxRegOverride
     *
     * @param boolean $taxRegOverride
     * @return PurchaseRequisition
     */
    public function setTaxRegOverride($taxRegOverride) {
        $this->taxRegOverride = $taxRegOverride;
        return $this;
    }

    /**
     * Get taxRegOverride
     *
     * @return boolean
     */
    public function getTaxRegOverride() {
        return $this->taxRegOverride;
    }


    /**
     * Set estimatedTotal
     *
     * @param float $estimatedTotal
     * @return PurchaseRequisition
     */
    public function setEstimatedTotal($estimatedTotal) {
        $this->estimatedTotal = $estimatedTotal;
        return $this;
    }

    /**
     * Get estimatedTotal
     *
     * @return float
     */
    public function getEstimatedTotal() {
        return $this->estimatedTotal;
    }


    /**
     * Set status
     *
     * @param string $status
     * @return PurchaseRequisition
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
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return PurchaseRequisition
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
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return PurchaseRequisition
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
     * Set tranId
     *
     * @param string $tranId
     * @return PurchaseRequisition
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
     * @return PurchaseRequisition
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
     * @return PurchaseRequisition
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
     * @return PurchaseRequisition
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
     * Set total
     *
     * @param float $total
     * @return PurchaseRequisition
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
     * Set itemList
     *
     * @param PurchaseRequisitionItemList $itemList
     * @return PurchaseRequisition
     */
    public function setItemList(PurchaseRequisitionItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return PurchaseRequisitionItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set expenseList
     *
     * @param PurchaseRequisitionExpenseList $expenseList
     * @return PurchaseRequisition
     */
    public function setExpenseList(PurchaseRequisitionExpenseList $expenseList) {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * Get expenseList
     *
     * @return PurchaseRequisitionExpenseList
     */
    public function getExpenseList() {
        return $this->expenseList;
    }


    /**
     * Set accountingBookDetailList
     *
     * @param PurchaseRequisitionAccountingBookDetailList $accountingBookDetailList
     * @return PurchaseRequisition
     */
    public function setAccountingBookDetailList(PurchaseRequisitionAccountingBookDetailList $accountingBookDetailList) {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * Get accountingBookDetailList
     *
     * @return PurchaseRequisitionAccountingBookDetailList
     */
    public function getAccountingBookDetailList() {
        return $this->accountingBookDetailList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return PurchaseRequisition
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
     * @return PurchaseRequisition
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
     * @return PurchaseRequisition
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