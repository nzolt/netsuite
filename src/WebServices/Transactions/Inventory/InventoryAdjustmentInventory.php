<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;

/**
 * InventoryAdjustmentInventory
 */
class InventoryAdjustmentInventory {

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
     * @var InventoryDetail
     */
    protected $inventoryDetail;

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
     * @var RecordRef
     */
    public $units;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnHand;

    /**
     * @access public
     * @var float
     */
    protected $currentValue;

    /**
     * @access public
     * @var float
     */
    protected $adjustQtyBy;

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
     * @var float
     */
    protected $newQuantity;

    /**
     * @access public
     * @var float
     */
    protected $unitCost;

    /**
     * @access public
     * @var float
     */
    protected $foreignCurrencyUnitCost;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var string
     */
    protected $currency;

    /**
     * @access public
     * @var dateTime
     */
    protected $expirationDate;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

    static $paramtypesmap = array(
    	"item" => "RecordRef",
    	"line" => "integer",
    	"inventoryDetail" => "InventoryDetail",
    	"description" => "string",
    	"location" => "RecordRef",
    	"units" => "RecordRef",
    	"quantityOnHand" => "float",
    	"currentValue" => "float",
    	"adjustQtyBy" => "float",
    	"binNumbers" => "string",
    	"serialNumbers" => "string",
    	"newQuantity" => "float",
    	"unitCost" => "float",
    	"foreignCurrencyUnitCost" => "float",
    	"memo" => "string",
    	"currency" => "string",
    	"expirationDate" => "dateTime",
    	"exchangeRate" => "float",
    );

    /**
     * Set line
     *
     * @param integer $line
     * @return InventoryAdjustmentInventory
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
     * Set inventoryDetail
     *
     * @param InventoryDetail $inventoryDetail
     * @return InventoryAdjustmentInventory
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
     * Set description
     *
     * @param string $description
     * @return InventoryAdjustmentInventory
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
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return InventoryAdjustmentInventory
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
     * Set currentValue
     *
     * @param float $currentValue
     * @return InventoryAdjustmentInventory
     */
    public function setCurrentValue($currentValue) {
        $this->currentValue = $currentValue;
        return $this;
    }

    /**
     * Get currentValue
     *
     * @return float
     */
    public function getCurrentValue() {
        return $this->currentValue;
    }


    /**
     * Set adjustQtyBy
     *
     * @param float $adjustQtyBy
     * @return InventoryAdjustmentInventory
     */
    public function setAdjustQtyBy($adjustQtyBy) {
        $this->adjustQtyBy = $adjustQtyBy;
        return $this;
    }

    /**
     * Get adjustQtyBy
     *
     * @return float
     */
    public function getAdjustQtyBy() {
        return $this->adjustQtyBy;
    }


    /**
     * Set binNumbers
     *
     * @param string $binNumbers
     * @return InventoryAdjustmentInventory
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
     * @return InventoryAdjustmentInventory
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
     * Set newQuantity
     *
     * @param float $newQuantity
     * @return InventoryAdjustmentInventory
     */
    public function setNewQuantity($newQuantity) {
        $this->newQuantity = $newQuantity;
        return $this;
    }

    /**
     * Get newQuantity
     *
     * @return float
     */
    public function getNewQuantity() {
        return $this->newQuantity;
    }


    /**
     * Set unitCost
     *
     * @param float $unitCost
     * @return InventoryAdjustmentInventory
     */
    public function setUnitCost($unitCost) {
        $this->unitCost = $unitCost;
        return $this;
    }

    /**
     * Get unitCost
     *
     * @return float
     */
    public function getUnitCost() {
        return $this->unitCost;
    }


    /**
     * Set foreignCurrencyUnitCost
     *
     * @param float $foreignCurrencyUnitCost
     * @return InventoryAdjustmentInventory
     */
    public function setForeignCurrencyUnitCost($foreignCurrencyUnitCost) {
        $this->foreignCurrencyUnitCost = $foreignCurrencyUnitCost;
        return $this;
    }

    /**
     * Get foreignCurrencyUnitCost
     *
     * @return float
     */
    public function getForeignCurrencyUnitCost() {
        return $this->foreignCurrencyUnitCost;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return InventoryAdjustmentInventory
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
     * Set currency
     *
     * @param string $currency
     * @return InventoryAdjustmentInventory
     */
    public function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency() {
        return $this->currency;
    }


    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     * @return InventoryAdjustmentInventory
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
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return InventoryAdjustmentInventory
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

}