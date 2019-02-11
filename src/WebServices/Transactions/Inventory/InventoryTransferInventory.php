<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;

/**
 * InventoryTransferInventory
 */
class InventoryTransferInventory {

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var string
     */
    protected $description;

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
    protected $adjustQtyBy;

    /**
     * @access public
     * @var string
     */
    protected $serialNumbers;

    /**
     * @access public
     * @var string
     */
    protected $fromBinNumbers;

    /**
     * @access public
     * @var string
     */
    protected $toBinNumbers;

    /**
     * @access public
     * @var InventoryDetail
     */
    protected $inventoryDetail;

    static $paramtypesmap = array(
    	"line" => "integer",
    	"item" => "RecordRef",
    	"description" => "string",
    	"units" => "RecordRef",
    	"quantityOnHand" => "float",
    	"adjustQtyBy" => "float",
    	"serialNumbers" => "string",
    	"fromBinNumbers" => "string",
    	"toBinNumbers" => "string",
    	"inventoryDetail" => "InventoryDetail",
    );

    /**
     * Set line
     *
     * @param integer $line
     * @return InventoryTransferInventory
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
     * Set description
     *
     * @param string $description
     * @return InventoryTransferInventory
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
     * @return InventoryTransferInventory
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
     * Set adjustQtyBy
     *
     * @param float $adjustQtyBy
     * @return InventoryTransferInventory
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
     * Set serialNumbers
     *
     * @param string $serialNumbers
     * @return InventoryTransferInventory
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
     * Set fromBinNumbers
     *
     * @param string $fromBinNumbers
     * @return InventoryTransferInventory
     */
    public function setFromBinNumbers($fromBinNumbers) {
        $this->fromBinNumbers = $fromBinNumbers;
        return $this;
    }

    /**
     * Get fromBinNumbers
     *
     * @return string
     */
    public function getFromBinNumbers() {
        return $this->fromBinNumbers;
    }


    /**
     * Set toBinNumbers
     *
     * @param string $toBinNumbers
     * @return InventoryTransferInventory
     */
    public function setToBinNumbers($toBinNumbers) {
        $this->toBinNumbers = $toBinNumbers;
        return $this;
    }

    /**
     * Get toBinNumbers
     *
     * @return string
     */
    public function getToBinNumbers() {
        return $this->toBinNumbers;
    }


    /**
     * Set inventoryDetail
     *
     * @param InventoryDetail $inventoryDetail
     * @return InventoryTransferInventory
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

}