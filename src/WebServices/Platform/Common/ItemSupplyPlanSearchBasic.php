<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * ItemSupplyPlanSearchBasic
 */
class ItemSupplyPlanSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $item;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $location;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $memo;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $orderCreated;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $orderDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $orderType;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantity;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $receiptDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $units;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"item" => "SearchMultiSelectField",
    	"lastModifiedDate" => "SearchDateField",
    	"location" => "SearchMultiSelectField",
    	"memo" => "SearchStringField",
    	"orderCreated" => "SearchBooleanField",
    	"orderDate" => "SearchDateField",
    	"orderType" => "SearchMultiSelectField",
    	"quantity" => "SearchDoubleField",
    	"receiptDate" => "SearchDateField",
    	"subsidiary" => "SearchMultiSelectField",
    	"units" => "SearchMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return ItemSupplyPlanSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return ItemSupplyPlanSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return ItemSupplyPlanSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return ItemSupplyPlanSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return ItemSupplyPlanSearchBasic
     */
    public function setItem(SearchMultiSelectField $item) {
        $this->item = $item;
        return $this;
    }

    /**
     * Get item
     *
     * @return SearchMultiSelectField
     */
    public function getItem() {
        return $this->item;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return ItemSupplyPlanSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return SearchDateField
     */
    public function getLastModifiedDate() {
        return $this->lastModifiedDate;
    }


    /**
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return ItemSupplyPlanSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return SearchMultiSelectField
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set memo
     *
     * @param SearchStringField $memo
     * @return ItemSupplyPlanSearchBasic
     */
    public function setMemo(SearchStringField $memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return SearchStringField
     */
    public function getMemo() {
        return $this->memo;
    }


    /**
     * Set orderCreated
     *
     * @param SearchBooleanField $orderCreated
     * @return ItemSupplyPlanSearchBasic
     */
    public function setOrderCreated(SearchBooleanField $orderCreated) {
        $this->orderCreated = $orderCreated;
        return $this;
    }

    /**
     * Get orderCreated
     *
     * @return SearchBooleanField
     */
    public function getOrderCreated() {
        return $this->orderCreated;
    }


    /**
     * Set orderDate
     *
     * @param SearchDateField $orderDate
     * @return ItemSupplyPlanSearchBasic
     */
    public function setOrderDate(SearchDateField $orderDate) {
        $this->orderDate = $orderDate;
        return $this;
    }

    /**
     * Get orderDate
     *
     * @return SearchDateField
     */
    public function getOrderDate() {
        return $this->orderDate;
    }


    /**
     * Set orderType
     *
     * @param SearchMultiSelectField $orderType
     * @return ItemSupplyPlanSearchBasic
     */
    public function setOrderType(SearchMultiSelectField $orderType) {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * Get orderType
     *
     * @return SearchMultiSelectField
     */
    public function getOrderType() {
        return $this->orderType;
    }


    /**
     * Set quantity
     *
     * @param SearchDoubleField $quantity
     * @return ItemSupplyPlanSearchBasic
     */
    public function setQuantity(SearchDoubleField $quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return SearchDoubleField
     */
    public function getQuantity() {
        return $this->quantity;
    }


    /**
     * Set receiptDate
     *
     * @param SearchDateField $receiptDate
     * @return ItemSupplyPlanSearchBasic
     */
    public function setReceiptDate(SearchDateField $receiptDate) {
        $this->receiptDate = $receiptDate;
        return $this;
    }

    /**
     * Get receiptDate
     *
     * @return SearchDateField
     */
    public function getReceiptDate() {
        return $this->receiptDate;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return ItemSupplyPlanSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary) {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return SearchMultiSelectField
     */
    public function getSubsidiary() {
        return $this->subsidiary;
    }


    /**
     * Set units
     *
     * @param SearchMultiSelectField $units
     * @return ItemSupplyPlanSearchBasic
     */
    public function setUnits(SearchMultiSelectField $units) {
        $this->units = $units;
        return $this;
    }

    /**
     * Get units
     *
     * @return SearchMultiSelectField
     */
    public function getUnits() {
        return $this->units;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return ItemSupplyPlanSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}