<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Customers;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * DepositApplication
 */
class DepositApplication extends Record {

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
    protected $arAcct;

    /**
     * @access public
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var RecordRef
     */
    public $customer;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

    /**
     * @access public
     * @var RecordRef
     */
    public $deposit;

    /**
     * @access public
     * @var dateTime
     */
    protected $depDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

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
     * @var float
     */
    protected $total;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var float
     */
    protected $applied;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var float
     */
    protected $unapplied;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var string
     */
    protected $tranId;

    /**
     * @access public
     * @var DepositApplicationApplyList
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
    	"arAcct" => "string",
    	"status" => "string",
    	"customer" => "RecordRef",
    	"tranDate" => "dateTime",
    	"postingPeriod" => "RecordRef",
    	"deposit" => "RecordRef",
    	"depDate" => "dateTime",
    	"currency" => "RecordRef",
    	"exchangeRate" => "float",
    	"memo" => "string",
    	"subsidiary" => "RecordRef",
    	"total" => "float",
    	"department" => "RecordRef",
    	"applied" => "float",
    	"class" => "RecordRef",
    	"unapplied" => "float",
    	"location" => "RecordRef",
    	"tranId" => "string",
    	"applyList" => "DepositApplicationApplyList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return DepositApplication
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
     * @return DepositApplication
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
     * Set arAcct
     *
     * @param string $arAcct
     * @return DepositApplication
     */
    public function setArAcct($arAcct) {
        $this->arAcct = $arAcct;
        return $this;
    }

    /**
     * Get arAcct
     *
     * @return string
     */
    public function getArAcct() {
        return $this->arAcct;
    }


    /**
     * Set status
     *
     * @param string $status
     * @return DepositApplication
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
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return DepositApplication
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
     * Set depDate
     *
     * @param \DateTime $depDate
     * @return DepositApplication
     */
    public function setDepDate(\DateTime $depDate) {
        $this->depDate = $depDate->format('c');
        return $this;
    }

    /**
     * Get depDate
     *
     * @return \DateTime
     */
    public function getDepDate() {
        return new \DateTime($this->depDate);
    }


    /**
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return DepositApplication
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
     * @return DepositApplication
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
     * Set total
     *
     * @param float $total
     * @return DepositApplication
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
     * Set applied
     *
     * @param float $applied
     * @return DepositApplication
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
     * Set unapplied
     *
     * @param float $unapplied
     * @return DepositApplication
     */
    public function setUnapplied($unapplied) {
        $this->unapplied = $unapplied;
        return $this;
    }

    /**
     * Get unapplied
     *
     * @return float
     */
    public function getUnapplied() {
        return $this->unapplied;
    }


    /**
     * Set tranId
     *
     * @param string $tranId
     * @return DepositApplication
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
     * Set applyList
     *
     * @param DepositApplicationApplyList $applyList
     * @return DepositApplication
     */
    public function setApplyList(DepositApplicationApplyList $applyList) {
        $this->applyList = $applyList;
        return $this;
    }

    /**
     * Get applyList
     *
     * @return DepositApplicationApplyList
     */
    public function getApplyList() {
        return $this->applyList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return DepositApplication
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
     * @return DepositApplication
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
     * @return DepositApplication
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