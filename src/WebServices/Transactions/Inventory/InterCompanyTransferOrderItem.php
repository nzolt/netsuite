<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;
use Nzolt\NetSuite\WebServices\Transactions\Inventory\Types\TransferOrderItemCommitInventory;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * InterCompanyTransferOrderItem
 */
class InterCompanyTransferOrderItem {

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var float
     */
    protected $quantityAvailable;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnHand;

    /**
     * @access public
     * @var float
     */
    protected $quantityBackOrdered;

    /**
     * @access public
     * @var float
     */
    protected $quantityCommitted;

    /**
     * @access public
     * @var float
     */
    protected $quantityFulfilled;

    /**
     * @access public
     * @var float
     */
    protected $quantityReceived;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var float
     */
    protected $rate;

    /**
     * @access public
     * @var RecordRef
     */
    public $units;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var InventoryDetail
     */
    protected $inventoryDetail;

    /**
     * @access public
     * @var TransferOrderItemCommitInventory
     */
    protected $commitInventory;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $options;

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
     * @var float
     */
    protected $lastPurchasePrice;

    /**
     * @access public
     * @var float
     */
    protected $averageCost;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"item" => "RecordRef",
    	"line" => "integer",
    	"quantityAvailable" => "float",
    	"quantityOnHand" => "float",
    	"quantityBackOrdered" => "float",
    	"quantityCommitted" => "float",
    	"quantityFulfilled" => "float",
    	"quantityReceived" => "float",
    	"quantity" => "float",
    	"rate" => "float",
    	"units" => "RecordRef",
    	"amount" => "float",
    	"description" => "string",
    	"inventoryDetail" => "InventoryDetail",
    	"commitInventory" => "TransferOrderItemCommitInventory",
    	"options" => "CustomFieldList",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"lastPurchasePrice" => "float",
    	"averageCost" => "float",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set line
     *
     * @param integer $line
     * @return InterCompanyTransferOrderItem
     */
    public function setLine($line) {
        $this->line = $line;
        return $this;
    }

    /**
     * Get line
     *
     * @return integer
     */
    public function getLine() {
        return $this->line;
    }


    /**
     * Set quantityAvailable
     *
     * @param float $quantityAvailable
     * @return InterCompanyTransferOrderItem
     */
    public function setQuantityAvailable($quantityAvailable) {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * Get quantityAvailable
     *
     * @return float
     */
    public function getQuantityAvailable() {
        return $this->quantityAvailable;
    }


    /**
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return InterCompanyTransferOrderItem
     */
    public function setQuantityOnHand($quantityOnHand) {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * Get quantityOnHand
     *
     * @return float
     */
    public function getQuantityOnHand() {
        return $this->quantityOnHand;
    }


    /**
     * Set quantityBackOrdered
     *
     * @param float $quantityBackOrdered
     * @return InterCompanyTransferOrderItem
     */
    public function setQuantityBackOrdered($quantityBackOrdered) {
        $this->quantityBackOrdered = $quantityBackOrdered;
        return $this;
    }

    /**
     * Get quantityBackOrdered
     *
     * @return float
     */
    public function getQuantityBackOrdered() {
        return $this->quantityBackOrdered;
    }


    /**
     * Set quantityCommitted
     *
     * @param float $quantityCommitted
     * @return InterCompanyTransferOrderItem
     */
    public function setQuantityCommitted($quantityCommitted) {
        $this->quantityCommitted = $quantityCommitted;
        return $this;
    }

    /**
     * Get quantityCommitted
     *
     * @return float
     */
    public function getQuantityCommitted() {
        return $this->quantityCommitted;
    }


    /**
     * Set quantityFulfilled
     *
     * @param float $quantityFulfilled
     * @return InterCompanyTransferOrderItem
     */
    public function setQuantityFulfilled($quantityFulfilled) {
        $this->quantityFulfilled = $quantityFulfilled;
        return $this;
    }

    /**
     * Get quantityFulfilled
     *
     * @return float
     */
    public function getQuantityFulfilled() {
        return $this->quantityFulfilled;
    }


    /**
     * Set quantityReceived
     *
     * @param float $quantityReceived
     * @return InterCompanyTransferOrderItem
     */
    public function setQuantityReceived($quantityReceived) {
        $this->quantityReceived = $quantityReceived;
        return $this;
    }

    /**
     * Get quantityReceived
     *
     * @return float
     */
    public function getQuantityReceived() {
        return $this->quantityReceived;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return InterCompanyTransferOrderItem
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
     * Set rate
     *
     * @param float $rate
     * @return InterCompanyTransferOrderItem
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return float
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return InterCompanyTransferOrderItem
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount() {
        return $this->amount;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return InterCompanyTransferOrderItem
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
     * Set inventoryDetail
     *
     * @param InventoryDetail $inventoryDetail
     * @return InterCompanyTransferOrderItem
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
     * Set commitInventory
     *
     * @param TransferOrderItemCommitInventory $commitInventory
     * @return InterCompanyTransferOrderItem
     */
    public function setCommitInventory(TransferOrderItemCommitInventory $commitInventory) {
        $this->commitInventory = $commitInventory;
        return $this;
    }

    /**
     * Get commitInventory
     *
     * @return TransferOrderItemCommitInventory
     */
    public function getCommitInventory() {
        return $this->commitInventory;
    }


    /**
     * Set options
     *
     * @param CustomFieldList $options
     * @return InterCompanyTransferOrderItem
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
     * Set lastPurchasePrice
     *
     * @param float $lastPurchasePrice
     * @return InterCompanyTransferOrderItem
     */
    public function setLastPurchasePrice($lastPurchasePrice) {
        $this->lastPurchasePrice = $lastPurchasePrice;
        return $this;
    }

    /**
     * Get lastPurchasePrice
     *
     * @return float
     */
    public function getLastPurchasePrice() {
        return $this->lastPurchasePrice;
    }


    /**
     * Set averageCost
     *
     * @param float $averageCost
     * @return InterCompanyTransferOrderItem
     */
    public function setAverageCost($averageCost) {
        $this->averageCost = $averageCost;
        return $this;
    }

    /**
     * Get averageCost
     *
     * @return float
     */
    public function getAverageCost() {
        return $this->averageCost;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return InterCompanyTransferOrderItem
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