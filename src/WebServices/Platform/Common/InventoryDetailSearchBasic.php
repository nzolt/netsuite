<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;

/**
 * InventoryDetailSearchBasic
 */
class InventoryDetailSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $binNumber;

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
    protected $inventoryNumber;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantity;

    static $paramtypesmap = array(
    	"binNumber" => "SearchMultiSelectField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"inventoryNumber" => "SearchMultiSelectField",
    	"quantity" => "SearchDoubleField",
    );

    /**
     * Set binNumber
     *
     * @param SearchMultiSelectField $binNumber
     * @return InventoryDetailSearchBasic
     */
    public function setBinNumber(SearchMultiSelectField $binNumber) {
        $this->binNumber = $binNumber;
        return $this;
    }

    /**
     * Get binNumber
     *
     * @return SearchMultiSelectField
     */
    public function getBinNumber() {
        return $this->binNumber;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return InventoryDetailSearchBasic
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
     * @return InventoryDetailSearchBasic
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
     * @return InventoryDetailSearchBasic
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
     * @return InventoryDetailSearchBasic
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
     * @param SearchMultiSelectField $inventoryNumber
     * @return InventoryDetailSearchBasic
     */
    public function setInventoryNumber(SearchMultiSelectField $inventoryNumber) {
        $this->inventoryNumber = $inventoryNumber;
        return $this;
    }

    /**
     * Get inventoryNumber
     *
     * @return SearchMultiSelectField
     */
    public function getInventoryNumber() {
        return $this->inventoryNumber;
    }


    /**
     * Set quantity
     *
     * @param SearchDoubleField $quantity
     * @return InventoryDetailSearchBasic
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

}