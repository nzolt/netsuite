<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;

/**
 * BinWorksheetItem
 */
class BinWorksheetItem {

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

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
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var string
     */
    protected $itemOnHand;

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
    protected $itemBins;

    /**
     * @access public
     * @var string
     */
    protected $itemBinNumbers;

    /**
     * @access public
     * @var string
     */
    protected $itemBinList;

    /**
     * @access public
     * @var string
     */
    protected $itemPreferBin;

    /**
     * @access public
     * @var string
     */
    protected $itemBlank;

    static $paramtypesmap = array(
    	"item" => "RecordRef",
    	"itemName" => "string",
    	"description" => "string",
    	"quantity" => "float",
    	"itemOnHand" => "string",
    	"itemUnitsLabel" => "string",
    	"inventoryDetail" => "InventoryDetail",
    	"itemBins" => "string",
    	"itemBinNumbers" => "string",
    	"itemBinList" => "string",
    	"itemPreferBin" => "string",
    	"itemBlank" => "string",
    );

    /**
     * Set itemName
     *
     * @param string $itemName
     * @return BinWorksheetItem
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
     * @return BinWorksheetItem
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
     * Set quantity
     *
     * @param float $quantity
     * @return BinWorksheetItem
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
     * Set itemOnHand
     *
     * @param string $itemOnHand
     * @return BinWorksheetItem
     */
    public function setItemOnHand($itemOnHand) {
        $this->itemOnHand = $itemOnHand;
        return $this;
    }

    /**
     * Get itemOnHand
     *
     * @return string
     */
    public function getItemOnHand() {
        return $this->itemOnHand;
    }


    /**
     * Set itemUnitsLabel
     *
     * @param string $itemUnitsLabel
     * @return BinWorksheetItem
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
     * @return BinWorksheetItem
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
     * Set itemBins
     *
     * @param string $itemBins
     * @return BinWorksheetItem
     */
    public function setItemBins($itemBins) {
        $this->itemBins = $itemBins;
        return $this;
    }

    /**
     * Get itemBins
     *
     * @return string
     */
    public function getItemBins() {
        return $this->itemBins;
    }


    /**
     * Set itemBinNumbers
     *
     * @param string $itemBinNumbers
     * @return BinWorksheetItem
     */
    public function setItemBinNumbers($itemBinNumbers) {
        $this->itemBinNumbers = $itemBinNumbers;
        return $this;
    }

    /**
     * Get itemBinNumbers
     *
     * @return string
     */
    public function getItemBinNumbers() {
        return $this->itemBinNumbers;
    }


    /**
     * Set itemBinList
     *
     * @param string $itemBinList
     * @return BinWorksheetItem
     */
    public function setItemBinList($itemBinList) {
        $this->itemBinList = $itemBinList;
        return $this;
    }

    /**
     * Get itemBinList
     *
     * @return string
     */
    public function getItemBinList() {
        return $this->itemBinList;
    }


    /**
     * Set itemPreferBin
     *
     * @param string $itemPreferBin
     * @return BinWorksheetItem
     */
    public function setItemPreferBin($itemPreferBin) {
        $this->itemPreferBin = $itemPreferBin;
        return $this;
    }

    /**
     * Get itemPreferBin
     *
     * @return string
     */
    public function getItemPreferBin() {
        return $this->itemPreferBin;
    }


    /**
     * Set itemBlank
     *
     * @param string $itemBlank
     * @return BinWorksheetItem
     */
    public function setItemBlank($itemBlank) {
        $this->itemBlank = $itemBlank;
        return $this;
    }

    /**
     * Get itemBlank
     *
     * @return string
     */
    public function getItemBlank() {
        return $this->itemBlank;
    }

}