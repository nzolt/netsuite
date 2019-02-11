<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemInvtClassification;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\PeriodicLotSizeType;

/**
 * InventoryItemLocations
 */
class InventoryItemLocations {

    /**
     * @access public
     * @var string
     */
    protected $location;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnHand;

    /**
     * @access public
     * @var float
     */
    protected $onHandValueMli;

    /**
     * @access public
     * @var float
     */
    protected $averageCostMli;

    /**
     * @access public
     * @var float
     */
    protected $lastPurchasePriceMli;

    /**
     * @access public
     * @var float
     */
    protected $reorderPoint;

    /**
     * @access public
     * @var float
     */
    protected $preferredStockLevel;

    /**
     * @access public
     * @var integer
     */
    protected $leadTime;

    /**
     * @access public
     * @var float
     */
    protected $defaultReturnCost;

    /**
     * @access public
     * @var float
     */
    protected $safetyStockLevel;

    /**
     * @access public
     * @var float
     */
    protected $cost;

    /**
     * @access public
     * @var RecordRef
     */
    public $inventoryCostTemplate;

    /**
     * @access public
     * @var float
     */
    protected $buildTime;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastInvtCountDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $nextInvtCountDate;

    /**
     * @access public
     * @var boolean
     */
    protected $isWip;

    /**
     * @access public
     * @var integer
     */
    protected $invtCountInterval;

    /**
     * @access public
     * @var ItemInvtClassification
     */
    protected $invtClassification;

    /**
     * @access public
     * @var float
     */
    protected $costingLotSize;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnOrder;

    /**
     * @access public
     * @var float
     */
    protected $quantityCommitted;

    /**
     * @access public
     * @var float
     */
    protected $quantityAvailable;

    /**
     * @access public
     * @var float
     */
    protected $quantityBackOrdered;

    /**
     * @access public
     * @var RecordRef
     */
    public $locationId;

    /**
     * @access public
     * @var RecordRef
     */
    public $supplyReplenishmentMethod;

    /**
     * @access public
     * @var RecordRef
     */
    public $alternateDemandSourceItem;

    /**
     * @access public
     * @var float
     */
    protected $fixedLotSize;

    /**
     * @access public
     * @var PeriodicLotSizeType
     */
    protected $periodicLotSizeType;

    /**
     * @access public
     * @var integer
     */
    protected $periodicLotSizeDays;

    /**
     * @access public
     * @var RecordRef
     */
    public $supplyType;

    /**
     * @access public
     * @var RecordRef
     */
    public $supplyLotSizingMethod;

    /**
     * @access public
     * @var RecordRef
     */
    public $demandSource;

    /**
     * @access public
     * @var integer
     */
    protected $backwardConsumptionDays;

    /**
     * @access public
     * @var integer
     */
    protected $forwardConsumptionDays;

    /**
     * @access public
     * @var integer
     */
    protected $demandTimeFence;

    /**
     * @access public
     * @var integer
     */
    protected $supplyTimeFence;

    /**
     * @access public
     * @var integer
     */
    protected $rescheduleInDays;

    /**
     * @access public
     * @var integer
     */
    protected $rescheduleOutDays;

    static $paramtypesmap = array(
    	"location" => "string",
    	"quantityOnHand" => "float",
    	"onHandValueMli" => "float",
    	"averageCostMli" => "float",
    	"lastPurchasePriceMli" => "float",
    	"reorderPoint" => "float",
    	"preferredStockLevel" => "float",
    	"leadTime" => "integer",
    	"defaultReturnCost" => "float",
    	"safetyStockLevel" => "float",
    	"cost" => "float",
    	"inventoryCostTemplate" => "RecordRef",
    	"buildTime" => "float",
    	"lastInvtCountDate" => "dateTime",
    	"nextInvtCountDate" => "dateTime",
    	"isWip" => "boolean",
    	"invtCountInterval" => "integer",
    	"invtClassification" => "ItemInvtClassification",
    	"costingLotSize" => "float",
    	"quantityOnOrder" => "float",
    	"quantityCommitted" => "float",
    	"quantityAvailable" => "float",
    	"quantityBackOrdered" => "float",
    	"locationId" => "RecordRef",
    	"supplyReplenishmentMethod" => "RecordRef",
    	"alternateDemandSourceItem" => "RecordRef",
    	"fixedLotSize" => "float",
    	"periodicLotSizeType" => "PeriodicLotSizeType",
    	"periodicLotSizeDays" => "integer",
    	"supplyType" => "RecordRef",
    	"supplyLotSizingMethod" => "RecordRef",
    	"demandSource" => "RecordRef",
    	"backwardConsumptionDays" => "integer",
    	"forwardConsumptionDays" => "integer",
    	"demandTimeFence" => "integer",
    	"supplyTimeFence" => "integer",
    	"rescheduleInDays" => "integer",
    	"rescheduleOutDays" => "integer",
    );

    /**
     * Set location
     *
     * @param string $location
     * @return InventoryItemLocations
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return InventoryItemLocations
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
     * Set onHandValueMli
     *
     * @param float $onHandValueMli
     * @return InventoryItemLocations
     */
    public function setOnHandValueMli($onHandValueMli) {
        $this->onHandValueMli = $onHandValueMli;
        return $this;
    }

    /**
     * Get onHandValueMli
     *
     * @return float
     */
    public function getOnHandValueMli() {
        return $this->onHandValueMli;
    }


    /**
     * Set averageCostMli
     *
     * @param float $averageCostMli
     * @return InventoryItemLocations
     */
    public function setAverageCostMli($averageCostMli) {
        $this->averageCostMli = $averageCostMli;
        return $this;
    }

    /**
     * Get averageCostMli
     *
     * @return float
     */
    public function getAverageCostMli() {
        return $this->averageCostMli;
    }


    /**
     * Set lastPurchasePriceMli
     *
     * @param float $lastPurchasePriceMli
     * @return InventoryItemLocations
     */
    public function setLastPurchasePriceMli($lastPurchasePriceMli) {
        $this->lastPurchasePriceMli = $lastPurchasePriceMli;
        return $this;
    }

    /**
     * Get lastPurchasePriceMli
     *
     * @return float
     */
    public function getLastPurchasePriceMli() {
        return $this->lastPurchasePriceMli;
    }


    /**
     * Set reorderPoint
     *
     * @param float $reorderPoint
     * @return InventoryItemLocations
     */
    public function setReorderPoint($reorderPoint) {
        $this->reorderPoint = $reorderPoint;
        return $this;
    }

    /**
     * Get reorderPoint
     *
     * @return float
     */
    public function getReorderPoint() {
        return $this->reorderPoint;
    }


    /**
     * Set preferredStockLevel
     *
     * @param float $preferredStockLevel
     * @return InventoryItemLocations
     */
    public function setPreferredStockLevel($preferredStockLevel) {
        $this->preferredStockLevel = $preferredStockLevel;
        return $this;
    }

    /**
     * Get preferredStockLevel
     *
     * @return float
     */
    public function getPreferredStockLevel() {
        return $this->preferredStockLevel;
    }


    /**
     * Set leadTime
     *
     * @param integer $leadTime
     * @return InventoryItemLocations
     */
    public function setLeadTime($leadTime) {
        $this->leadTime = $leadTime;
        return $this;
    }

    /**
     * Get leadTime
     *
     * @return integer
     */
    public function getLeadTime() {
        return $this->leadTime;
    }


    /**
     * Set defaultReturnCost
     *
     * @param float $defaultReturnCost
     * @return InventoryItemLocations
     */
    public function setDefaultReturnCost($defaultReturnCost) {
        $this->defaultReturnCost = $defaultReturnCost;
        return $this;
    }

    /**
     * Get defaultReturnCost
     *
     * @return float
     */
    public function getDefaultReturnCost() {
        return $this->defaultReturnCost;
    }


    /**
     * Set safetyStockLevel
     *
     * @param float $safetyStockLevel
     * @return InventoryItemLocations
     */
    public function setSafetyStockLevel($safetyStockLevel) {
        $this->safetyStockLevel = $safetyStockLevel;
        return $this;
    }

    /**
     * Get safetyStockLevel
     *
     * @return float
     */
    public function getSafetyStockLevel() {
        return $this->safetyStockLevel;
    }


    /**
     * Set cost
     *
     * @param float $cost
     * @return InventoryItemLocations
     */
    public function setCost($cost) {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Get cost
     *
     * @return float
     */
    public function getCost() {
        return $this->cost;
    }


    /**
     * Set buildTime
     *
     * @param float $buildTime
     * @return InventoryItemLocations
     */
    public function setBuildTime($buildTime) {
        $this->buildTime = $buildTime;
        return $this;
    }

    /**
     * Get buildTime
     *
     * @return float
     */
    public function getBuildTime() {
        return $this->buildTime;
    }


    /**
     * Set lastInvtCountDate
     *
     * @param \DateTime $lastInvtCountDate
     * @return InventoryItemLocations
     */
    public function setLastInvtCountDate(\DateTime $lastInvtCountDate) {
        $this->lastInvtCountDate = $lastInvtCountDate->format('c');
        return $this;
    }

    /**
     * Get lastInvtCountDate
     *
     * @return \DateTime
     */
    public function getLastInvtCountDate() {
        return new \DateTime($this->lastInvtCountDate);
    }


    /**
     * Set nextInvtCountDate
     *
     * @param \DateTime $nextInvtCountDate
     * @return InventoryItemLocations
     */
    public function setNextInvtCountDate(\DateTime $nextInvtCountDate) {
        $this->nextInvtCountDate = $nextInvtCountDate->format('c');
        return $this;
    }

    /**
     * Get nextInvtCountDate
     *
     * @return \DateTime
     */
    public function getNextInvtCountDate() {
        return new \DateTime($this->nextInvtCountDate);
    }


    /**
     * Set isWip
     *
     * @param boolean $isWip
     * @return InventoryItemLocations
     */
    public function setIsWip($isWip) {
        $this->isWip = $isWip;
        return $this;
    }

    /**
     * Get isWip
     *
     * @return boolean
     */
    public function getIsWip() {
        return $this->isWip;
    }


    /**
     * Set invtCountInterval
     *
     * @param integer $invtCountInterval
     * @return InventoryItemLocations
     */
    public function setInvtCountInterval($invtCountInterval) {
        $this->invtCountInterval = $invtCountInterval;
        return $this;
    }

    /**
     * Get invtCountInterval
     *
     * @return integer
     */
    public function getInvtCountInterval() {
        return $this->invtCountInterval;
    }


    /**
     * Set invtClassification
     *
     * @param ItemInvtClassification $invtClassification
     * @return InventoryItemLocations
     */
    public function setInvtClassification(ItemInvtClassification $invtClassification) {
        $this->invtClassification = $invtClassification;
        return $this;
    }

    /**
     * Get invtClassification
     *
     * @return ItemInvtClassification
     */
    public function getInvtClassification() {
        return $this->invtClassification;
    }


    /**
     * Set costingLotSize
     *
     * @param float $costingLotSize
     * @return InventoryItemLocations
     */
    public function setCostingLotSize($costingLotSize) {
        $this->costingLotSize = $costingLotSize;
        return $this;
    }

    /**
     * Get costingLotSize
     *
     * @return float
     */
    public function getCostingLotSize() {
        return $this->costingLotSize;
    }


    /**
     * Set quantityOnOrder
     *
     * @param float $quantityOnOrder
     * @return InventoryItemLocations
     */
    public function setQuantityOnOrder($quantityOnOrder) {
        $this->quantityOnOrder = $quantityOnOrder;
        return $this;
    }

    /**
     * Get quantityOnOrder
     *
     * @return float
     */
    public function getQuantityOnOrder() {
        return $this->quantityOnOrder;
    }


    /**
     * Set quantityCommitted
     *
     * @param float $quantityCommitted
     * @return InventoryItemLocations
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
     * Set quantityAvailable
     *
     * @param float $quantityAvailable
     * @return InventoryItemLocations
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
     * Set quantityBackOrdered
     *
     * @param float $quantityBackOrdered
     * @return InventoryItemLocations
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
     * Set fixedLotSize
     *
     * @param float $fixedLotSize
     * @return InventoryItemLocations
     */
    public function setFixedLotSize($fixedLotSize) {
        $this->fixedLotSize = $fixedLotSize;
        return $this;
    }

    /**
     * Get fixedLotSize
     *
     * @return float
     */
    public function getFixedLotSize() {
        return $this->fixedLotSize;
    }


    /**
     * Set periodicLotSizeType
     *
     * @param PeriodicLotSizeType $periodicLotSizeType
     * @return InventoryItemLocations
     */
    public function setPeriodicLotSizeType(PeriodicLotSizeType $periodicLotSizeType) {
        $this->periodicLotSizeType = $periodicLotSizeType;
        return $this;
    }

    /**
     * Get periodicLotSizeType
     *
     * @return PeriodicLotSizeType
     */
    public function getPeriodicLotSizeType() {
        return $this->periodicLotSizeType;
    }


    /**
     * Set periodicLotSizeDays
     *
     * @param integer $periodicLotSizeDays
     * @return InventoryItemLocations
     */
    public function setPeriodicLotSizeDays($periodicLotSizeDays) {
        $this->periodicLotSizeDays = $periodicLotSizeDays;
        return $this;
    }

    /**
     * Get periodicLotSizeDays
     *
     * @return integer
     */
    public function getPeriodicLotSizeDays() {
        return $this->periodicLotSizeDays;
    }


    /**
     * Set backwardConsumptionDays
     *
     * @param integer $backwardConsumptionDays
     * @return InventoryItemLocations
     */
    public function setBackwardConsumptionDays($backwardConsumptionDays) {
        $this->backwardConsumptionDays = $backwardConsumptionDays;
        return $this;
    }

    /**
     * Get backwardConsumptionDays
     *
     * @return integer
     */
    public function getBackwardConsumptionDays() {
        return $this->backwardConsumptionDays;
    }


    /**
     * Set forwardConsumptionDays
     *
     * @param integer $forwardConsumptionDays
     * @return InventoryItemLocations
     */
    public function setForwardConsumptionDays($forwardConsumptionDays) {
        $this->forwardConsumptionDays = $forwardConsumptionDays;
        return $this;
    }

    /**
     * Get forwardConsumptionDays
     *
     * @return integer
     */
    public function getForwardConsumptionDays() {
        return $this->forwardConsumptionDays;
    }


    /**
     * Set demandTimeFence
     *
     * @param integer $demandTimeFence
     * @return InventoryItemLocations
     */
    public function setDemandTimeFence($demandTimeFence) {
        $this->demandTimeFence = $demandTimeFence;
        return $this;
    }

    /**
     * Get demandTimeFence
     *
     * @return integer
     */
    public function getDemandTimeFence() {
        return $this->demandTimeFence;
    }


    /**
     * Set supplyTimeFence
     *
     * @param integer $supplyTimeFence
     * @return InventoryItemLocations
     */
    public function setSupplyTimeFence($supplyTimeFence) {
        $this->supplyTimeFence = $supplyTimeFence;
        return $this;
    }

    /**
     * Get supplyTimeFence
     *
     * @return integer
     */
    public function getSupplyTimeFence() {
        return $this->supplyTimeFence;
    }


    /**
     * Set rescheduleInDays
     *
     * @param integer $rescheduleInDays
     * @return InventoryItemLocations
     */
    public function setRescheduleInDays($rescheduleInDays) {
        $this->rescheduleInDays = $rescheduleInDays;
        return $this;
    }

    /**
     * Get rescheduleInDays
     *
     * @return integer
     */
    public function getRescheduleInDays() {
        return $this->rescheduleInDays;
    }


    /**
     * Set rescheduleOutDays
     *
     * @param integer $rescheduleOutDays
     * @return InventoryItemLocations
     */
    public function setRescheduleOutDays($rescheduleOutDays) {
        $this->rescheduleOutDays = $rescheduleOutDays;
        return $this;
    }

    /**
     * Get rescheduleOutDays
     *
     * @return integer
     */
    public function getRescheduleOutDays() {
        return $this->rescheduleOutDays;
    }

}