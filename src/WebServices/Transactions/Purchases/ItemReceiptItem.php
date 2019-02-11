<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;
use Nzolt\NetSuite\WebServices\Transactions\Purchases\Types\TransactionBillVarianceStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;
use Nzolt\NetSuite\WebServices\Platform\Common\LandedCost;

/**
 * ItemReceiptItem
 */
class ItemReceiptItem {

    /**
     * @access public
     * @var boolean
     */
    protected $itemReceive;

    /**
     * @access public
     * @var string
     */
    protected $jobName;

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
     * @var integer
     */
    protected $line;

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
    protected $quantityRemaining;

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
     * @var float
     */
    protected $unitCostOverride;

    /**
     * @access public
     * @var InventoryDetail
     */
    protected $inventoryDetail;

    /**
     * @access public
     * @var string
     */
    protected $serialNumbers;

    /**
     * @access public
     * @var string
     */
    protected $binNumbers;

    /**
     * @access public
     * @var dateTime
     */
    protected $expirationDate;

    /**
     * @access public
     * @var string
     */
    protected $rate;

    /**
     * @access public
     * @var string
     */
    protected $currency;

    /**
     * @access public
     * @var boolean
     */
    protected $restock;

    /**
     * @access public
     * @var TransactionBillVarianceStatus
     */
    protected $billVarianceStatus;

    /**
     * @access public
     * @var boolean
     */
    protected $isDropShipment;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $options;

    /**
     * @access public
     * @var LandedCost
     */
    protected $landedCost;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"itemReceive" => "boolean",
    	"jobName" => "string",
    	"item" => "RecordRef",
    	"orderLine" => "integer",
    	"line" => "integer",
    	"itemName" => "string",
    	"description" => "string",
    	"location" => "RecordRef",
    	"onHand" => "float",
    	"quantityRemaining" => "float",
    	"quantity" => "float",
    	"unitsDisplay" => "string",
    	"unitCostOverride" => "float",
    	"inventoryDetail" => "InventoryDetail",
    	"serialNumbers" => "string",
    	"binNumbers" => "string",
    	"expirationDate" => "dateTime",
    	"rate" => "string",
    	"currency" => "string",
    	"restock" => "boolean",
    	"billVarianceStatus" => "TransactionBillVarianceStatus",
    	"isDropShipment" => "boolean",
    	"options" => "CustomFieldList",
    	"landedCost" => "LandedCost",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set itemReceive
     *
     * @param boolean $itemReceive
     * @return ItemReceiptItem
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
     * Set jobName
     *
     * @param string $jobName
     * @return ItemReceiptItem
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
     * Set orderLine
     *
     * @param integer $orderLine
     * @return ItemReceiptItem
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
     * Set line
     *
     * @param integer $line
     * @return ItemReceiptItem
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
     * Set itemName
     *
     * @param string $itemName
     * @return ItemReceiptItem
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
     * @return ItemReceiptItem
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
     * @return ItemReceiptItem
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
     * Set quantityRemaining
     *
     * @param float $quantityRemaining
     * @return ItemReceiptItem
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
     * Set quantity
     *
     * @param float $quantity
     * @return ItemReceiptItem
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
     * @return ItemReceiptItem
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
     * Set unitCostOverride
     *
     * @param float $unitCostOverride
     * @return ItemReceiptItem
     */
    public function setUnitCostOverride($unitCostOverride) {
        $this->unitCostOverride = $unitCostOverride;
        return $this;
    }

    /**
     * Get unitCostOverride
     *
     * @return float
     */
    public function getUnitCostOverride() {
        return $this->unitCostOverride;
    }


    /**
     * Set inventoryDetail
     *
     * @param InventoryDetail $inventoryDetail
     * @return ItemReceiptItem
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
     * Set serialNumbers
     *
     * @param string $serialNumbers
     * @return ItemReceiptItem
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
     * Set binNumbers
     *
     * @param string $binNumbers
     * @return ItemReceiptItem
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
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     * @return ItemReceiptItem
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
     * Set rate
     *
     * @param string $rate
     * @return ItemReceiptItem
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set currency
     *
     * @param string $currency
     * @return ItemReceiptItem
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
     * Set restock
     *
     * @param boolean $restock
     * @return ItemReceiptItem
     */
    public function setRestock($restock) {
        $this->restock = $restock;
        return $this;
    }

    /**
     * Get restock
     *
     * @return boolean
     */
    public function getRestock() {
        return $this->restock;
    }


    /**
     * Set billVarianceStatus
     *
     * @param TransactionBillVarianceStatus $billVarianceStatus
     * @return ItemReceiptItem
     */
    public function setBillVarianceStatus(TransactionBillVarianceStatus $billVarianceStatus) {
        $this->billVarianceStatus = $billVarianceStatus;
        return $this;
    }

    /**
     * Get billVarianceStatus
     *
     * @return TransactionBillVarianceStatus
     */
    public function getBillVarianceStatus() {
        return $this->billVarianceStatus;
    }


    /**
     * Set isDropShipment
     *
     * @param boolean $isDropShipment
     * @return ItemReceiptItem
     */
    public function setIsDropShipment($isDropShipment) {
        $this->isDropShipment = $isDropShipment;
        return $this;
    }

    /**
     * Get isDropShipment
     *
     * @return boolean
     */
    public function getIsDropShipment() {
        return $this->isDropShipment;
    }


    /**
     * Set options
     *
     * @param CustomFieldList $options
     * @return ItemReceiptItem
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
     * Set landedCost
     *
     * @param LandedCost $landedCost
     * @return ItemReceiptItem
     */
    public function setLandedCost(LandedCost $landedCost) {
        $this->landedCost = $landedCost;
        return $this;
    }

    /**
     * Get landedCost
     *
     * @return LandedCost
     */
    public function getLandedCost() {
        return $this->landedCost;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ItemReceiptItem
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