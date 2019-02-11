<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ItemFulfillmentItem
 */
class ItemFulfillmentItem {

    /**
     * @access public
     * @var string
     */
    protected $jobName;

    /**
     * @access public
     * @var boolean
     */
    protected $itemReceive;

    /**
     * @access public
     * @var string
     */
    protected $itemName;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var float
     */
    protected $onHand;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var string
     */
    protected $unitsDisplay;

    /**
     * @access public
     * @var string
     */
    protected $createPo;

    /**
     * @access public
     * @var InventoryDetail
     */
    protected $inventoryDetail;

    /**
     * @access public
     * @var string
     */
    protected $binNumbers;

    /**
     * @access public
     * @var string
     */
    protected $serialNumbers;

    /**
     * @access public
     * @var string
     */
    protected $poNum;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var integer
     */
    protected $orderLine;

    /**
     * @access public
     * @var float
     */
    protected $quantityRemaining;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $options;

    /**
     * @access public
     * @var integer
     */
    protected $shipGroup;

    /**
     * @access public
     * @var boolean
     */
    protected $itemIsFulfilled;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipAddress;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipMethod;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"jobName" => "string",
    	"itemReceive" => "boolean",
    	"itemName" => "string",
    	"description" => "string",
    	"location" => "RecordRef",
    	"onHand" => "float",
    	"quantity" => "float",
    	"unitsDisplay" => "string",
    	"createPo" => "string",
    	"inventoryDetail" => "InventoryDetail",
    	"binNumbers" => "string",
    	"serialNumbers" => "string",
    	"poNum" => "string",
    	"item" => "RecordRef",
    	"orderLine" => "integer",
    	"quantityRemaining" => "float",
    	"options" => "CustomFieldList",
    	"shipGroup" => "integer",
    	"itemIsFulfilled" => "boolean",
    	"shipAddress" => "RecordRef",
    	"shipMethod" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set jobName
     *
     * @param string $jobName
     * @return ItemFulfillmentItem
     */
    public function setJobName($jobName) {
        $this->jobName = $jobName;
        return $this;
    }

    /**
     * Get jobName
     *
     * @return string
     */
    public function getJobName() {
        return $this->jobName;
    }


    /**
     * Set itemReceive
     *
     * @param boolean $itemReceive
     * @return ItemFulfillmentItem
     */
    public function setItemReceive($itemReceive) {
        $this->itemReceive = $itemReceive;
        return $this;
    }

    /**
     * Get itemReceive
     *
     * @return boolean
     */
    public function getItemReceive() {
        return $this->itemReceive;
    }


    /**
     * Set itemName
     *
     * @param string $itemName
     * @return ItemFulfillmentItem
     */
    public function setItemName($itemName) {
        $this->itemName = $itemName;
        return $this;
    }

    /**
     * Get itemName
     *
     * @return string
     */
    public function getItemName() {
        return $this->itemName;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return ItemFulfillmentItem
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set onHand
     *
     * @param float $onHand
     * @return ItemFulfillmentItem
     */
    public function setOnHand($onHand) {
        $this->onHand = $onHand;
        return $this;
    }

    /**
     * Get onHand
     *
     * @return float
     */
    public function getOnHand() {
        return $this->onHand;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return ItemFulfillmentItem
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity() {
        return $this->quantity;
    }


    /**
     * Set unitsDisplay
     *
     * @param string $unitsDisplay
     * @return ItemFulfillmentItem
     */
    public function setUnitsDisplay($unitsDisplay) {
        $this->unitsDisplay = $unitsDisplay;
        return $this;
    }

    /**
     * Get unitsDisplay
     *
     * @return string
     */
    public function getUnitsDisplay() {
        return $this->unitsDisplay;
    }


    /**
     * Set createPo
     *
     * @param string $createPo
     * @return ItemFulfillmentItem
     */
    public function setCreatePo($createPo) {
        $this->createPo = $createPo;
        return $this;
    }

    /**
     * Get createPo
     *
     * @return string
     */
    public function getCreatePo() {
        return $this->createPo;
    }


    /**
     * Set inventoryDetail
     *
     * @param InventoryDetail $inventoryDetail
     * @return ItemFulfillmentItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail) {
        $this->inventoryDetail = $inventoryDetail;
        return $this;
    }

    /**
     * Get inventoryDetail
     *
     * @return InventoryDetail
     */
    public function getInventoryDetail() {
        return $this->inventoryDetail;
    }


    /**
     * Set binNumbers
     *
     * @param string $binNumbers
     * @return ItemFulfillmentItem
     */
    public function setBinNumbers($binNumbers) {
        $this->binNumbers = $binNumbers;
        return $this;
    }

    /**
     * Get binNumbers
     *
     * @return string
     */
    public function getBinNumbers() {
        return $this->binNumbers;
    }


    /**
     * Set serialNumbers
     *
     * @param string $serialNumbers
     * @return ItemFulfillmentItem
     */
    public function setSerialNumbers($serialNumbers) {
        $this->serialNumbers = $serialNumbers;
        return $this;
    }

    /**
     * Get serialNumbers
     *
     * @return string
     */
    public function getSerialNumbers() {
        return $this->serialNumbers;
    }


    /**
     * Set poNum
     *
     * @param string $poNum
     * @return ItemFulfillmentItem
     */
    public function setPoNum($poNum) {
        $this->poNum = $poNum;
        return $this;
    }

    /**
     * Get poNum
     *
     * @return string
     */
    public function getPoNum() {
        return $this->poNum;
    }


    /**
     * Set orderLine
     *
     * @param integer $orderLine
     * @return ItemFulfillmentItem
     */
    public function setOrderLine($orderLine) {
        $this->orderLine = $orderLine;
        return $this;
    }

    /**
     * Get orderLine
     *
     * @return integer
     */
    public function getOrderLine() {
        return $this->orderLine;
    }


    /**
     * Set quantityRemaining
     *
     * @param float $quantityRemaining
     * @return ItemFulfillmentItem
     */
    public function setQuantityRemaining($quantityRemaining) {
        $this->quantityRemaining = $quantityRemaining;
        return $this;
    }

    /**
     * Get quantityRemaining
     *
     * @return float
     */
    public function getQuantityRemaining() {
        return $this->quantityRemaining;
    }


    /**
     * Set options
     *
     * @param CustomFieldList $options
     * @return ItemFulfillmentItem
     */
    public function setOptions(CustomFieldList $options) {
        $this->options = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return CustomFieldList
     */
    public function getOptions() {
        return $this->options;
    }


    /**
     * Set shipGroup
     *
     * @param integer $shipGroup
     * @return ItemFulfillmentItem
     */
    public function setShipGroup($shipGroup) {
        $this->shipGroup = $shipGroup;
        return $this;
    }

    /**
     * Get shipGroup
     *
     * @return integer
     */
    public function getShipGroup() {
        return $this->shipGroup;
    }


    /**
     * Set itemIsFulfilled
     *
     * @param boolean $itemIsFulfilled
     * @return ItemFulfillmentItem
     */
    public function setItemIsFulfilled($itemIsFulfilled) {
        $this->itemIsFulfilled = $itemIsFulfilled;
        return $this;
    }

    /**
     * Get itemIsFulfilled
     *
     * @return boolean
     */
    public function getItemIsFulfilled() {
        return $this->itemIsFulfilled;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ItemFulfillmentItem
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

}