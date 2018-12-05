<?php

namespace Nzolt\NetSuite;

class ItemReceiptItem
{

    /**
     * @var boolean $itemReceive
     */
    protected $itemReceive = null;

    /**
     * @var string $jobName
     */
    protected $jobName = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var int $orderLine
     */
    protected $orderLine = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var string $itemName
     */
    protected $itemName = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var float $onHand
     */
    protected $onHand = null;

    /**
     * @var float $quantityRemaining
     */
    protected $quantityRemaining = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var string $unitsDisplay
     */
    protected $unitsDisplay = null;

    /**
     * @var float $unitCostOverride
     */
    protected $unitCostOverride = null;

    /**
     * @var InventoryDetail $inventoryDetail
     */
    protected $inventoryDetail = null;

    /**
     * @var string $serialNumbers
     */
    protected $serialNumbers = null;

    /**
     * @var string $binNumbers
     */
    protected $binNumbers = null;

    /**
     * @var \DateTime $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @var string $rate
     */
    protected $rate = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var boolean $restock
     */
    protected $restock = null;

    /**
     * @var TransactionBillVarianceStatus $billVarianceStatus
     */
    protected $billVarianceStatus = null;

    /**
     * @var boolean $isDropShipment
     */
    protected $isDropShipment = null;

    /**
     * @var CustomFieldList $options
     */
    protected $options = null;

    /**
     * @var LandedCost $landedCost
     */
    protected $landedCost = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getItemReceive()
    {
      return $this->itemReceive;
    }

    /**
     * @param boolean $itemReceive
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setItemReceive($itemReceive)
    {
      $this->itemReceive = $itemReceive;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobName()
    {
      return $this->jobName;
    }

    /**
     * @param string $jobName
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setJobName($jobName)
    {
      $this->jobName = $jobName;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RecordRef $item
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderLine()
    {
      return $this->orderLine;
    }

    /**
     * @param int $orderLine
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setOrderLine($orderLine)
    {
      $this->orderLine = $orderLine;
      return $this;
    }

    /**
     * @return int
     */
    public function getLine()
    {
      return $this->line;
    }

    /**
     * @param int $line
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemName()
    {
      return $this->itemName;
    }

    /**
     * @param string $itemName
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setItemName($itemName)
    {
      $this->itemName = $itemName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRef $location
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return float
     */
    public function getOnHand()
    {
      return $this->onHand;
    }

    /**
     * @param float $onHand
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setOnHand($onHand)
    {
      $this->onHand = $onHand;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityRemaining()
    {
      return $this->quantityRemaining;
    }

    /**
     * @param float $quantityRemaining
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setQuantityRemaining($quantityRemaining)
    {
      $this->quantityRemaining = $quantityRemaining;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitsDisplay()
    {
      return $this->unitsDisplay;
    }

    /**
     * @param string $unitsDisplay
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setUnitsDisplay($unitsDisplay)
    {
      $this->unitsDisplay = $unitsDisplay;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitCostOverride()
    {
      return $this->unitCostOverride;
    }

    /**
     * @param float $unitCostOverride
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setUnitCostOverride($unitCostOverride)
    {
      $this->unitCostOverride = $unitCostOverride;
      return $this;
    }

    /**
     * @return InventoryDetail
     */
    public function getInventoryDetail()
    {
      return $this->inventoryDetail;
    }

    /**
     * @param InventoryDetail $inventoryDetail
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setInventoryDetail($inventoryDetail)
    {
      $this->inventoryDetail = $inventoryDetail;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumbers()
    {
      return $this->serialNumbers;
    }

    /**
     * @param string $serialNumbers
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setSerialNumbers($serialNumbers)
    {
      $this->serialNumbers = $serialNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getBinNumbers()
    {
      return $this->binNumbers;
    }

    /**
     * @param string $binNumbers
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setBinNumbers($binNumbers)
    {
      $this->binNumbers = $binNumbers;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->expirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expirationDate
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setExpirationDate(\DateTime $expirationDate = null)
    {
      if ($expirationDate == null) {
       $this->expirationDate = null;
      } else {
        $this->expirationDate = $expirationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param string $rate
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestock()
    {
      return $this->restock;
    }

    /**
     * @param boolean $restock
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setRestock($restock)
    {
      $this->restock = $restock;
      return $this;
    }

    /**
     * @return TransactionBillVarianceStatus
     */
    public function getBillVarianceStatus()
    {
      return $this->billVarianceStatus;
    }

    /**
     * @param TransactionBillVarianceStatus $billVarianceStatus
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setBillVarianceStatus($billVarianceStatus)
    {
      $this->billVarianceStatus = $billVarianceStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDropShipment()
    {
      return $this->isDropShipment;
    }

    /**
     * @param boolean $isDropShipment
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setIsDropShipment($isDropShipment)
    {
      $this->isDropShipment = $isDropShipment;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param CustomFieldList $options
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return LandedCost
     */
    public function getLandedCost()
    {
      return $this->landedCost;
    }

    /**
     * @param LandedCost $landedCost
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setLandedCost($landedCost)
    {
      $this->landedCost = $landedCost;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\ItemReceiptItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
