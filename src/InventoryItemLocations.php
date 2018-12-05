<?php

namespace Nzolt\NetSuite;

class InventoryItemLocations
{

    /**
     * @var string $location
     */
    protected $location = null;

    /**
     * @var float $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var float $onHandValueMli
     */
    protected $onHandValueMli = null;

    /**
     * @var float $averageCostMli
     */
    protected $averageCostMli = null;

    /**
     * @var float $lastPurchasePriceMli
     */
    protected $lastPurchasePriceMli = null;

    /**
     * @var float $reorderPoint
     */
    protected $reorderPoint = null;

    /**
     * @var boolean $locationAllowStorePickup
     */
    protected $locationAllowStorePickup = null;

    /**
     * @var float $locationStorePickupBufferStock
     */
    protected $locationStorePickupBufferStock = null;

    /**
     * @var float $locationQtyAvailForStorePickup
     */
    protected $locationQtyAvailForStorePickup = null;

    /**
     * @var float $preferredStockLevel
     */
    protected $preferredStockLevel = null;

    /**
     * @var int $leadTime
     */
    protected $leadTime = null;

    /**
     * @var float $defaultReturnCost
     */
    protected $defaultReturnCost = null;

    /**
     * @var float $safetyStockLevel
     */
    protected $safetyStockLevel = null;

    /**
     * @var float $cost
     */
    protected $cost = null;

    /**
     * @var RecordRef $inventoryCostTemplate
     */
    protected $inventoryCostTemplate = null;

    /**
     * @var float $buildTime
     */
    protected $buildTime = null;

    /**
     * @var \DateTime $lastInvtCountDate
     */
    protected $lastInvtCountDate = null;

    /**
     * @var \DateTime $nextInvtCountDate
     */
    protected $nextInvtCountDate = null;

    /**
     * @var boolean $isWip
     */
    protected $isWip = null;

    /**
     * @var int $invtCountInterval
     */
    protected $invtCountInterval = null;

    /**
     * @var ItemInvtClassification $invtClassification
     */
    protected $invtClassification = null;

    /**
     * @var float $costingLotSize
     */
    protected $costingLotSize = null;

    /**
     * @var float $quantityOnOrder
     */
    protected $quantityOnOrder = null;

    /**
     * @var float $quantityCommitted
     */
    protected $quantityCommitted = null;

    /**
     * @var float $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var float $quantityBackOrdered
     */
    protected $quantityBackOrdered = null;

    /**
     * @var RecordRef $locationId
     */
    protected $locationId = null;

    /**
     * @var RecordRef $supplyReplenishmentMethod
     */
    protected $supplyReplenishmentMethod = null;

    /**
     * @var RecordRef $alternateDemandSourceItem
     */
    protected $alternateDemandSourceItem = null;

    /**
     * @var float $fixedLotSize
     */
    protected $fixedLotSize = null;

    /**
     * @var PeriodicLotSizeType $periodicLotSizeType
     */
    protected $periodicLotSizeType = null;

    /**
     * @var int $periodicLotSizeDays
     */
    protected $periodicLotSizeDays = null;

    /**
     * @var RecordRef $supplyType
     */
    protected $supplyType = null;

    /**
     * @var RecordRef $supplyLotSizingMethod
     */
    protected $supplyLotSizingMethod = null;

    /**
     * @var RecordRef $demandSource
     */
    protected $demandSource = null;

    /**
     * @var int $backwardConsumptionDays
     */
    protected $backwardConsumptionDays = null;

    /**
     * @var int $forwardConsumptionDays
     */
    protected $forwardConsumptionDays = null;

    /**
     * @var int $demandTimeFence
     */
    protected $demandTimeFence = null;

    /**
     * @var int $supplyTimeFence
     */
    protected $supplyTimeFence = null;

    /**
     * @var int $rescheduleInDays
     */
    protected $rescheduleInDays = null;

    /**
     * @var int $rescheduleOutDays
     */
    protected $rescheduleOutDays = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param string $location
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnHand()
    {
      return $this->quantityOnHand;
    }

    /**
     * @param float $quantityOnHand
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

    /**
     * @return float
     */
    public function getOnHandValueMli()
    {
      return $this->onHandValueMli;
    }

    /**
     * @param float $onHandValueMli
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setOnHandValueMli($onHandValueMli)
    {
      $this->onHandValueMli = $onHandValueMli;
      return $this;
    }

    /**
     * @return float
     */
    public function getAverageCostMli()
    {
      return $this->averageCostMli;
    }

    /**
     * @param float $averageCostMli
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setAverageCostMli($averageCostMli)
    {
      $this->averageCostMli = $averageCostMli;
      return $this;
    }

    /**
     * @return float
     */
    public function getLastPurchasePriceMli()
    {
      return $this->lastPurchasePriceMli;
    }

    /**
     * @param float $lastPurchasePriceMli
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setLastPurchasePriceMli($lastPurchasePriceMli)
    {
      $this->lastPurchasePriceMli = $lastPurchasePriceMli;
      return $this;
    }

    /**
     * @return float
     */
    public function getReorderPoint()
    {
      return $this->reorderPoint;
    }

    /**
     * @param float $reorderPoint
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setReorderPoint($reorderPoint)
    {
      $this->reorderPoint = $reorderPoint;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocationAllowStorePickup()
    {
      return $this->locationAllowStorePickup;
    }

    /**
     * @param boolean $locationAllowStorePickup
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setLocationAllowStorePickup($locationAllowStorePickup)
    {
      $this->locationAllowStorePickup = $locationAllowStorePickup;
      return $this;
    }

    /**
     * @return float
     */
    public function getLocationStorePickupBufferStock()
    {
      return $this->locationStorePickupBufferStock;
    }

    /**
     * @param float $locationStorePickupBufferStock
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setLocationStorePickupBufferStock($locationStorePickupBufferStock)
    {
      $this->locationStorePickupBufferStock = $locationStorePickupBufferStock;
      return $this;
    }

    /**
     * @return float
     */
    public function getLocationQtyAvailForStorePickup()
    {
      return $this->locationQtyAvailForStorePickup;
    }

    /**
     * @param float $locationQtyAvailForStorePickup
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setLocationQtyAvailForStorePickup($locationQtyAvailForStorePickup)
    {
      $this->locationQtyAvailForStorePickup = $locationQtyAvailForStorePickup;
      return $this;
    }

    /**
     * @return float
     */
    public function getPreferredStockLevel()
    {
      return $this->preferredStockLevel;
    }

    /**
     * @param float $preferredStockLevel
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setPreferredStockLevel($preferredStockLevel)
    {
      $this->preferredStockLevel = $preferredStockLevel;
      return $this;
    }

    /**
     * @return int
     */
    public function getLeadTime()
    {
      return $this->leadTime;
    }

    /**
     * @param int $leadTime
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setLeadTime($leadTime)
    {
      $this->leadTime = $leadTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getDefaultReturnCost()
    {
      return $this->defaultReturnCost;
    }

    /**
     * @param float $defaultReturnCost
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setDefaultReturnCost($defaultReturnCost)
    {
      $this->defaultReturnCost = $defaultReturnCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getSafetyStockLevel()
    {
      return $this->safetyStockLevel;
    }

    /**
     * @param float $safetyStockLevel
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setSafetyStockLevel($safetyStockLevel)
    {
      $this->safetyStockLevel = $safetyStockLevel;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param float $cost
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInventoryCostTemplate()
    {
      return $this->inventoryCostTemplate;
    }

    /**
     * @param RecordRef $inventoryCostTemplate
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setInventoryCostTemplate($inventoryCostTemplate)
    {
      $this->inventoryCostTemplate = $inventoryCostTemplate;
      return $this;
    }

    /**
     * @return float
     */
    public function getBuildTime()
    {
      return $this->buildTime;
    }

    /**
     * @param float $buildTime
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setBuildTime($buildTime)
    {
      $this->buildTime = $buildTime;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastInvtCountDate()
    {
      if ($this->lastInvtCountDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastInvtCountDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastInvtCountDate
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setLastInvtCountDate(\DateTime $lastInvtCountDate = null)
    {
      if ($lastInvtCountDate == null) {
       $this->lastInvtCountDate = null;
      } else {
        $this->lastInvtCountDate = $lastInvtCountDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextInvtCountDate()
    {
      if ($this->nextInvtCountDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->nextInvtCountDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $nextInvtCountDate
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setNextInvtCountDate(\DateTime $nextInvtCountDate = null)
    {
      if ($nextInvtCountDate == null) {
       $this->nextInvtCountDate = null;
      } else {
        $this->nextInvtCountDate = $nextInvtCountDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWip()
    {
      return $this->isWip;
    }

    /**
     * @param boolean $isWip
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setIsWip($isWip)
    {
      $this->isWip = $isWip;
      return $this;
    }

    /**
     * @return int
     */
    public function getInvtCountInterval()
    {
      return $this->invtCountInterval;
    }

    /**
     * @param int $invtCountInterval
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setInvtCountInterval($invtCountInterval)
    {
      $this->invtCountInterval = $invtCountInterval;
      return $this;
    }

    /**
     * @return ItemInvtClassification
     */
    public function getInvtClassification()
    {
      return $this->invtClassification;
    }

    /**
     * @param ItemInvtClassification $invtClassification
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setInvtClassification($invtClassification)
    {
      $this->invtClassification = $invtClassification;
      return $this;
    }

    /**
     * @return float
     */
    public function getCostingLotSize()
    {
      return $this->costingLotSize;
    }

    /**
     * @param float $costingLotSize
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setCostingLotSize($costingLotSize)
    {
      $this->costingLotSize = $costingLotSize;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnOrder()
    {
      return $this->quantityOnOrder;
    }

    /**
     * @param float $quantityOnOrder
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setQuantityOnOrder($quantityOnOrder)
    {
      $this->quantityOnOrder = $quantityOnOrder;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityCommitted()
    {
      return $this->quantityCommitted;
    }

    /**
     * @param float $quantityCommitted
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setQuantityCommitted($quantityCommitted)
    {
      $this->quantityCommitted = $quantityCommitted;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityAvailable()
    {
      return $this->quantityAvailable;
    }

    /**
     * @param float $quantityAvailable
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setQuantityAvailable($quantityAvailable)
    {
      $this->quantityAvailable = $quantityAvailable;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityBackOrdered()
    {
      return $this->quantityBackOrdered;
    }

    /**
     * @param float $quantityBackOrdered
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setQuantityBackOrdered($quantityBackOrdered)
    {
      $this->quantityBackOrdered = $quantityBackOrdered;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocationId()
    {
      return $this->locationId;
    }

    /**
     * @param RecordRef $locationId
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setLocationId($locationId)
    {
      $this->locationId = $locationId;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupplyReplenishmentMethod()
    {
      return $this->supplyReplenishmentMethod;
    }

    /**
     * @param RecordRef $supplyReplenishmentMethod
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setSupplyReplenishmentMethod($supplyReplenishmentMethod)
    {
      $this->supplyReplenishmentMethod = $supplyReplenishmentMethod;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAlternateDemandSourceItem()
    {
      return $this->alternateDemandSourceItem;
    }

    /**
     * @param RecordRef $alternateDemandSourceItem
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setAlternateDemandSourceItem($alternateDemandSourceItem)
    {
      $this->alternateDemandSourceItem = $alternateDemandSourceItem;
      return $this;
    }

    /**
     * @return float
     */
    public function getFixedLotSize()
    {
      return $this->fixedLotSize;
    }

    /**
     * @param float $fixedLotSize
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setFixedLotSize($fixedLotSize)
    {
      $this->fixedLotSize = $fixedLotSize;
      return $this;
    }

    /**
     * @return PeriodicLotSizeType
     */
    public function getPeriodicLotSizeType()
    {
      return $this->periodicLotSizeType;
    }

    /**
     * @param PeriodicLotSizeType $periodicLotSizeType
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setPeriodicLotSizeType($periodicLotSizeType)
    {
      $this->periodicLotSizeType = $periodicLotSizeType;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriodicLotSizeDays()
    {
      return $this->periodicLotSizeDays;
    }

    /**
     * @param int $periodicLotSizeDays
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setPeriodicLotSizeDays($periodicLotSizeDays)
    {
      $this->periodicLotSizeDays = $periodicLotSizeDays;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupplyType()
    {
      return $this->supplyType;
    }

    /**
     * @param RecordRef $supplyType
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setSupplyType($supplyType)
    {
      $this->supplyType = $supplyType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupplyLotSizingMethod()
    {
      return $this->supplyLotSizingMethod;
    }

    /**
     * @param RecordRef $supplyLotSizingMethod
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setSupplyLotSizingMethod($supplyLotSizingMethod)
    {
      $this->supplyLotSizingMethod = $supplyLotSizingMethod;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDemandSource()
    {
      return $this->demandSource;
    }

    /**
     * @param RecordRef $demandSource
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setDemandSource($demandSource)
    {
      $this->demandSource = $demandSource;
      return $this;
    }

    /**
     * @return int
     */
    public function getBackwardConsumptionDays()
    {
      return $this->backwardConsumptionDays;
    }

    /**
     * @param int $backwardConsumptionDays
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setBackwardConsumptionDays($backwardConsumptionDays)
    {
      $this->backwardConsumptionDays = $backwardConsumptionDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getForwardConsumptionDays()
    {
      return $this->forwardConsumptionDays;
    }

    /**
     * @param int $forwardConsumptionDays
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setForwardConsumptionDays($forwardConsumptionDays)
    {
      $this->forwardConsumptionDays = $forwardConsumptionDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getDemandTimeFence()
    {
      return $this->demandTimeFence;
    }

    /**
     * @param int $demandTimeFence
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setDemandTimeFence($demandTimeFence)
    {
      $this->demandTimeFence = $demandTimeFence;
      return $this;
    }

    /**
     * @return int
     */
    public function getSupplyTimeFence()
    {
      return $this->supplyTimeFence;
    }

    /**
     * @param int $supplyTimeFence
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setSupplyTimeFence($supplyTimeFence)
    {
      $this->supplyTimeFence = $supplyTimeFence;
      return $this;
    }

    /**
     * @return int
     */
    public function getRescheduleInDays()
    {
      return $this->rescheduleInDays;
    }

    /**
     * @param int $rescheduleInDays
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setRescheduleInDays($rescheduleInDays)
    {
      $this->rescheduleInDays = $rescheduleInDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getRescheduleOutDays()
    {
      return $this->rescheduleOutDays;
    }

    /**
     * @param int $rescheduleOutDays
     * @return \Nzolt\NetSuite\InventoryItemLocations
     */
    public function setRescheduleOutDays($rescheduleOutDays)
    {
      $this->rescheduleOutDays = $rescheduleOutDays;
      return $this;
    }

}
