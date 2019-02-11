<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * InventoryAdjustment
 */
class InventoryAdjustment extends Record {

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
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var string
     */
    protected $tranId;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var float
     */
    protected $estimatedTotalValue;

    /**
     * @access public
     * @var RecordRef
     */
    public $customer;

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
    public $adjLocation;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var InventoryAdjustmentInventoryList
     */
    protected $inventoryList;

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
    	"postingPeriod" => "RecordRef",
    	"tranDate" => "dateTime",
    	"createdDate" => "dateTime",
    	"tranId" => "string",
    	"lastModifiedDate" => "dateTime",
    	"subsidiary" => "RecordRef",
    	"account" => "RecordRef",
    	"customForm" => "RecordRef",
    	"estimatedTotalValue" => "float",
    	"customer" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"adjLocation" => "RecordRef",
    	"location" => "RecordRef",
    	"memo" => "string",
    	"inventoryList" => "InventoryAdjustmentInventoryList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return InventoryAdjustment
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
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return InventoryAdjustment
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
     * Set tranId
     *
     * @param string $tranId
     * @return InventoryAdjustment
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
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return InventoryAdjustment
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
     * Set estimatedTotalValue
     *
     * @param float $estimatedTotalValue
     * @return InventoryAdjustment
     */
    public function setEstimatedTotalValue($estimatedTotalValue) {
        $this->estimatedTotalValue = $estimatedTotalValue;
        return $this;
    }

    /**
     * Get estimatedTotalValue
     *
     * @return float
     */
    public function getEstimatedTotalValue() {
        return $this->estimatedTotalValue;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return InventoryAdjustment
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
     * Set inventoryList
     *
     * @param InventoryAdjustmentInventoryList $inventoryList
     * @return InventoryAdjustment
     */
    public function setInventoryList(InventoryAdjustmentInventoryList $inventoryList) {
        $this->inventoryList = $inventoryList;
        return $this;
    }

    /**
     * Get inventoryList
     *
     * @return InventoryAdjustmentInventoryList
     */
    public function getInventoryList() {
        return $this->inventoryList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return InventoryAdjustment
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
     * @return InventoryAdjustment
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
     * @return InventoryAdjustment
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