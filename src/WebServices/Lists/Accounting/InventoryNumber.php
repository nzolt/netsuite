<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * InventoryNumber
 */
class InventoryNumber extends Record {

    /**
     * @access public
     * @var string
     */
    protected $inventoryNumber;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var string
     */
    protected $units;

    /**
     * @access public
     * @var dateTime
     */
    protected $expirationDate;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var InventoryNumberLocationsList
     */
    protected $locationsList;

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
    	"inventoryNumber" => "string",
    	"item" => "RecordRef",
    	"status" => "string",
    	"units" => "string",
    	"expirationDate" => "dateTime",
    	"memo" => "string",
    	"locationsList" => "InventoryNumberLocationsList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set inventoryNumber
     *
     * @param string $inventoryNumber
     * @return InventoryNumber
     */
    public function setInventoryNumber($inventoryNumber) {
        $this->inventoryNumber = $inventoryNumber;
        return $this;
    }

    /**
     * Get inventoryNumber
     *
     * @return string
     */
    public function getInventoryNumber() {
        return $this->inventoryNumber;
    }


    /**
     * Set status
     *
     * @param string $status
     * @return InventoryNumber
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
     * Set units
     *
     * @param string $units
     * @return InventoryNumber
     */
    public function setUnits($units) {
        $this->units = $units;
        return $this;
    }

    /**
     * Get units
     *
     * @return string
     */
    public function getUnits() {
        return $this->units;
    }


    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     * @return InventoryNumber
     */
    public function setExpirationDate(\DateTime $expirationDate) {
        $this->expirationDate = $expirationDate->format('c');
        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate() {
        return new \DateTime($this->expirationDate);
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return InventoryNumber
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
     * Set locationsList
     *
     * @param InventoryNumberLocationsList $locationsList
     * @return InventoryNumber
     */
    public function setLocationsList(InventoryNumberLocationsList $locationsList) {
        $this->locationsList = $locationsList;
        return $this;
    }

    /**
     * Get locationsList
     *
     * @return InventoryNumberLocationsList
     */
    public function getLocationsList() {
        return $this->locationsList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return InventoryNumber
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
     * @return InventoryNumber
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
     * @return InventoryNumber
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