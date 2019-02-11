<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Transactions\Purchases\Types\VendorReturnAuthorizationOrderStatus;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\IntercoStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * VendorReturnAuthorization
 */
class VendorReturnAuthorization extends Record {

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
     * @var VendorReturnAuthorizationOrderStatus
     */
    protected $orderStatus;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

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
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

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
     * @var RecordRef
     */
    public $intercoTransaction;

    /**
     * @access public
     * @var IntercoStatus
     */
    protected $intercoStatus;

    /**
     * @access public
     * @var VendorReturnAuthorizationExpenseList
     */
    protected $expenseList;

    /**
     * @access public
     * @var VendorReturnAuthorizationItemList
     */
    protected $itemList;

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
    	"tranId" => "string",
    	"createdFrom" => "RecordRef",
    	"entity" => "RecordRef",
    	"orderStatus" => "VendorReturnAuthorizationOrderStatus",
    	"tranDate" => "dateTime",
    	"userTotal" => "float",
    	"currency" => "RecordRef",
    	"currencyName" => "string",
    	"memo" => "string",
    	"exchangeRate" => "float",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"intercoTransaction" => "RecordRef",
    	"intercoStatus" => "IntercoStatus",
    	"expenseList" => "VendorReturnAuthorizationExpenseList",
    	"itemList" => "VendorReturnAuthorizationItemList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
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
     * Set tranId
     *
     * @param string $tranId
     * @return VendorReturnAuthorization
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
     * Set orderStatus
     *
     * @param VendorReturnAuthorizationOrderStatus $orderStatus
     * @return VendorReturnAuthorization
     */
    public function setOrderStatus(VendorReturnAuthorizationOrderStatus $orderStatus) {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return VendorReturnAuthorizationOrderStatus
     */
    public function getOrderStatus() {
        return $this->orderStatus;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return VendorReturnAuthorization
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
     * Set userTotal
     *
     * @param float $userTotal
     * @return VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
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
     * Set memo
     *
     * @param string $memo
     * @return VendorReturnAuthorization
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
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return VendorReturnAuthorization
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
     * Set intercoStatus
     *
     * @param IntercoStatus $intercoStatus
     * @return VendorReturnAuthorization
     */
    public function setIntercoStatus(IntercoStatus $intercoStatus) {
        $this->intercoStatus = $intercoStatus;
        return $this;
    }

    /**
     * Get intercoStatus
     *
     * @return IntercoStatus
     */
    public function getIntercoStatus() {
        return $this->intercoStatus;
    }


    /**
     * Set expenseList
     *
     * @param VendorReturnAuthorizationExpenseList $expenseList
     * @return VendorReturnAuthorization
     */
    public function setExpenseList(VendorReturnAuthorizationExpenseList $expenseList) {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * Get expenseList
     *
     * @return VendorReturnAuthorizationExpenseList
     */
    public function getExpenseList() {
        return $this->expenseList;
    }


    /**
     * Set itemList
     *
     * @param VendorReturnAuthorizationItemList $itemList
     * @return VendorReturnAuthorization
     */
    public function setItemList(VendorReturnAuthorizationItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return VendorReturnAuthorizationItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
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