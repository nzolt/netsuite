<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\LandedCostMethod;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ItemReceipt
 */
class ItemReceipt extends Record {

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
     * @var float
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var string
     */
    protected $currencyName;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $createdFrom;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $partner;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

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
    public $currency;

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
     * @var ItemReceiptItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var ItemReceiptExpenseList
     */
    protected $expenseList;

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
    	"exchangeRate" => "float",
    	"entity" => "RecordRef",
    	"currencyName" => "string",
    	"subsidiary" => "RecordRef",
    	"createdFrom" => "RecordRef",
    	"tranDate" => "dateTime",
    	"partner" => "RecordRef",
    	"postingPeriod" => "RecordRef",
    	"tranId" => "string",
    	"memo" => "string",
    	"currency" => "RecordRef",
    	"landedCostMethod" => "LandedCostMethod",
    	"landedCostPerLine" => "boolean",
    	"itemList" => "ItemReceiptItemList",
    	"expenseList" => "ItemReceiptExpenseList",
    	"landedCostsList" => "PurchLandedCostList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return ItemReceipt
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
     * @return ItemReceipt
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
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return ItemReceipt
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
     * Set currencyName
     *
     * @param string $currencyName
     * @return ItemReceipt
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
     * @return ItemReceipt
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
     * @return ItemReceipt
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
     * @return ItemReceipt
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
     * Set landedCostMethod
     *
     * @param LandedCostMethod $landedCostMethod
     * @return ItemReceipt
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
     * @return ItemReceipt
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
     * Set itemList
     *
     * @param ItemReceiptItemList $itemList
     * @return ItemReceipt
     */
    public function setItemList(ItemReceiptItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return ItemReceiptItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set expenseList
     *
     * @param ItemReceiptExpenseList $expenseList
     * @return ItemReceipt
     */
    public function setExpenseList(ItemReceiptExpenseList $expenseList) {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * Get expenseList
     *
     * @return ItemReceiptExpenseList
     */
    public function getExpenseList() {
        return $this->expenseList;
    }


    /**
     * Set landedCostsList
     *
     * @param PurchLandedCostList $landedCostsList
     * @return ItemReceipt
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
     * @return ItemReceipt
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
     * @return ItemReceipt
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
     * @return ItemReceipt
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