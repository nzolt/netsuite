<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * InventoryNumberSearchBasic
 */
class InventoryNumberSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchDateField
     */
    protected $expirationDate;

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
     * @var SearchStringField
     */
    protected $inventoryNumber;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isOnHand;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $item;

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
     * @var SearchDoubleField
     */
    protected $quantityAvailable;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityInTransit;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityOnHand;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityOnOrder;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"expirationDate" => "SearchDateField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"inventoryNumber" => "SearchStringField",
    	"isOnHand" => "SearchBooleanField",
    	"item" => "SearchMultiSelectField",
    	"location" => "SearchMultiSelectField",
    	"memo" => "SearchStringField",
    	"quantityAvailable" => "SearchDoubleField",
    	"quantityInTransit" => "SearchDoubleField",
    	"quantityOnHand" => "SearchDoubleField",
    	"quantityOnOrder" => "SearchDoubleField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set expirationDate
     *
     * @param SearchDateField $expirationDate
     * @return InventoryNumberSearchBasic
     */
    public function setExpirationDate(SearchDateField $expirationDate) {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return SearchDateField
     */
    public function getExpirationDate() {
        return $this->expirationDate;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return InventoryNumberSearchBasic
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
     * @return InventoryNumberSearchBasic
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
     * @return InventoryNumberSearchBasic
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
     * @return InventoryNumberSearchBasic
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
     * Set inventoryNumber
     *
     * @param SearchStringField $inventoryNumber
     * @return InventoryNumberSearchBasic
     */
    public function setInventoryNumber(SearchStringField $inventoryNumber) {
        $this->inventoryNumber = $inventoryNumber;
        return $this;
    }

    /**
     * Get inventoryNumber
     *
     * @return SearchStringField
     */
    public function getInventoryNumber() {
        return $this->inventoryNumber;
    }


    /**
     * Set isOnHand
     *
     * @param SearchBooleanField $isOnHand
     * @return InventoryNumberSearchBasic
     */
    public function setIsOnHand(SearchBooleanField $isOnHand) {
        $this->isOnHand = $isOnHand;
        return $this;
    }

    /**
     * Get isOnHand
     *
     * @return SearchBooleanField
     */
    public function getIsOnHand() {
        return $this->isOnHand;
    }


    /**
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return InventoryNumberSearchBasic
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
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return InventoryNumberSearchBasic
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
     * @return InventoryNumberSearchBasic
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
     * Set quantityAvailable
     *
     * @param SearchDoubleField $quantityAvailable
     * @return InventoryNumberSearchBasic
     */
    public function setQuantityAvailable(SearchDoubleField $quantityAvailable) {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * Get quantityAvailable
     *
     * @return SearchDoubleField
     */
    public function getQuantityAvailable() {
        return $this->quantityAvailable;
    }


    /**
     * Set quantityInTransit
     *
     * @param SearchDoubleField $quantityInTransit
     * @return InventoryNumberSearchBasic
     */
    public function setQuantityInTransit(SearchDoubleField $quantityInTransit) {
        $this->quantityInTransit = $quantityInTransit;
        return $this;
    }

    /**
     * Get quantityInTransit
     *
     * @return SearchDoubleField
     */
    public function getQuantityInTransit() {
        return $this->quantityInTransit;
    }


    /**
     * Set quantityOnHand
     *
     * @param SearchDoubleField $quantityOnHand
     * @return InventoryNumberSearchBasic
     */
    public function setQuantityOnHand(SearchDoubleField $quantityOnHand) {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * Get quantityOnHand
     *
     * @return SearchDoubleField
     */
    public function getQuantityOnHand() {
        return $this->quantityOnHand;
    }


    /**
     * Set quantityOnOrder
     *
     * @param SearchDoubleField $quantityOnOrder
     * @return InventoryNumberSearchBasic
     */
    public function setQuantityOnOrder(SearchDoubleField $quantityOnOrder) {
        $this->quantityOnOrder = $quantityOnOrder;
        return $this;
    }

    /**
     * Get quantityOnOrder
     *
     * @return SearchDoubleField
     */
    public function getQuantityOnOrder() {
        return $this->quantityOnOrder;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return InventoryNumberSearchBasic
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