<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;

/**
 * BinTransferInventory
 */
class BinTransferInventory {

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
     * @var string
     */
    protected $preferredBin;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var string
     */
    protected $itemUnitsLabel;

    /**
     * @access public
     * @var InventoryDetail
     */
    protected $inventoryDetail;

    /**
     * @access public
     * @var string
     */
    protected $fromBins;

    /**
     * @access public
     * @var string
     */
    protected $toBins;

    static $paramtypesmap = array(
    	"line" => "integer",
    	"item" => "RecordRef",
    	"description" => "string",
    	"preferredBin" => "string",
    	"quantity" => "float",
    	"itemUnitsLabel" => "string",
    	"inventoryDetail" => "InventoryDetail",
    	"fromBins" => "string",
    	"toBins" => "string",
    );

    /**
     * Set line
     *
     * @param integer $line
     * @return BinTransferInventory
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
     * @return BinTransferInventory
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
     * Set preferredBin
     *
     * @param string $preferredBin
     * @return BinTransferInventory
     */
    public function setPreferredBin($preferredBin) {
        $this->preferredBin = $preferredBin;
        return $this;
    }

    /**
     * Get preferredBin
     *
     * @return string
     */
    public function getPreferredBin() {
        return $this->preferredBin;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return BinTransferInventory
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
     * Set itemUnitsLabel
     *
     * @param string $itemUnitsLabel
     * @return BinTransferInventory
     */
    public function setItemUnitsLabel($itemUnitsLabel) {
        $this->itemUnitsLabel = $itemUnitsLabel;
        return $this;
    }

    /**
     * Get itemUnitsLabel
     *
     * @return string
     */
    public function getItemUnitsLabel() {
        return $this->itemUnitsLabel;
    }


    /**
     * Set inventoryDetail
     *
     * @param InventoryDetail $inventoryDetail
     * @return BinTransferInventory
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
     * Set fromBins
     *
     * @param string $fromBins
     * @return BinTransferInventory
     */
    public function setFromBins($fromBins) {
        $this->fromBins = $fromBins;
        return $this;
    }

    /**
     * Get fromBins
     *
     * @return string
     */
    public function getFromBins() {
        return $this->fromBins;
    }


    /**
     * Set toBins
     *
     * @param string $toBins
     * @return BinTransferInventory
     */
    public function setToBins($toBins) {
        $this->toBins = $toBins;
        return $this;
    }

    /**
     * Get toBins
     *
     * @return string
     */
    public function getToBins() {
        return $this->toBins;
    }

}