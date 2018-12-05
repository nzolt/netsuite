<?php

namespace Nzolt\NetSuite;

class SalesOrderItem
{

    /**
     * @var RecordRef $job
     */
    protected $job = null;

    /**
     * @var RecordRef $subscription
     */
    protected $subscription = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var float $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var boolean $expandItemGroup
     */
    protected $expandItemGroup = null;

    /**
     * @var int $lineUniqueKey
     */
    protected $lineUniqueKey = null;

    /**
     * @var float $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var RecordRef $units
     */
    protected $units = null;

    /**
     * @var InventoryDetail $inventoryDetail
     */
    protected $inventoryDetail = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var RecordRef $price
     */
    protected $price = null;

    /**
     * @var string $rate
     */
    protected $rate = null;

    /**
     * @var string $serialNumbers
     */
    protected $serialNumbers = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var boolean $isTaxable
     */
    protected $isTaxable = null;

    /**
     * @var SalesOrderItemCommitInventory $commitInventory
     */
    protected $commitInventory = null;

    /**
     * @var float $orderPriority
     */
    protected $orderPriority = null;

    /**
     * @var string $licenseCode
     */
    protected $licenseCode = null;

    /**
     * @var CustomFieldList $options
     */
    protected $options = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var SalesOrderItemCreatePo $createPo
     */
    protected $createPo = null;

    /**
     * @var RecordRef $createdPo
     */
    protected $createdPo = null;

    /**
     * @var float $altSalesAmt
     */
    protected $altSalesAmt = null;

    /**
     * @var boolean $createWo
     */
    protected $createWo = null;

    /**
     * @var RecordRef $poVendor
     */
    protected $poVendor = null;

    /**
     * @var string $poCurrency
     */
    protected $poCurrency = null;

    /**
     * @var float $poRate
     */
    protected $poRate = null;

    /**
     * @var RecordRef $revRecSchedule
     */
    protected $revRecSchedule = null;

    /**
     * @var \DateTime $revRecStartDate
     */
    protected $revRecStartDate = null;

    /**
     * @var int $revRecTermInMonths
     */
    protected $revRecTermInMonths = null;

    /**
     * @var \DateTime $revRecEndDate
     */
    protected $revRecEndDate = null;

    /**
     * @var boolean $deferRevRec
     */
    protected $deferRevRec = null;

    /**
     * @var boolean $isClosed
     */
    protected $isClosed = null;

    /**
     * @var SalesOrderItemFulfillmentChoice $itemFulfillmentChoice
     */
    protected $itemFulfillmentChoice = null;

    /**
     * @var RecordRef $catchUpPeriod
     */
    protected $catchUpPeriod = null;

    /**
     * @var RecordRef $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var boolean $fromJob
     */
    protected $fromJob = null;

    /**
     * @var float $grossAmt
     */
    protected $grossAmt = null;

    /**
     * @var float $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var boolean $excludeFromRateRequest
     */
    protected $excludeFromRateRequest = null;

    /**
     * @var boolean $isEstimate
     */
    protected $isEstimate = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var float $percentComplete
     */
    protected $percentComplete = null;

    /**
     * @var ItemCostEstimateType $costEstimateType
     */
    protected $costEstimateType = null;

    /**
     * @var float $costEstimate
     */
    protected $costEstimate = null;

    /**
     * @var float $quantityBackOrdered
     */
    protected $quantityBackOrdered = null;

    /**
     * @var float $quantityBilled
     */
    protected $quantityBilled = null;

    /**
     * @var float $quantityCommitted
     */
    protected $quantityCommitted = null;

    /**
     * @var float $quantityFulfilled
     */
    protected $quantityFulfilled = null;

    /**
     * @var float $quantityPacked
     */
    protected $quantityPacked = null;

    /**
     * @var float $quantityPicked
     */
    protected $quantityPicked = null;

    /**
     * @var float $tax1Amt
     */
    protected $tax1Amt = null;

    /**
     * @var RecordRef $taxCode
     */
    protected $taxCode = null;

    /**
     * @var float $taxRate1
     */
    protected $taxRate1 = null;

    /**
     * @var float $taxRate2
     */
    protected $taxRate2 = null;

    /**
     * @var string $giftCertFrom
     */
    protected $giftCertFrom = null;

    /**
     * @var string $giftCertRecipientName
     */
    protected $giftCertRecipientName = null;

    /**
     * @var string $giftCertRecipientEmail
     */
    protected $giftCertRecipientEmail = null;

    /**
     * @var string $giftCertMessage
     */
    protected $giftCertMessage = null;

    /**
     * @var string $giftCertNumber
     */
    protected $giftCertNumber = null;

    /**
     * @var int $shipGroup
     */
    protected $shipGroup = null;

    /**
     * @var boolean $itemIsFulfilled
     */
    protected $itemIsFulfilled = null;

    /**
     * @var RecordRef $shipAddress
     */
    protected $shipAddress = null;

    /**
     * @var RecordRef $shipMethod
     */
    protected $shipMethod = null;

    /**
     * @var VsoeSopGroup $vsoeSopGroup
     */
    protected $vsoeSopGroup = null;

    /**
     * @var boolean $vsoeIsEstimate
     */
    protected $vsoeIsEstimate = null;

    /**
     * @var float $vsoePrice
     */
    protected $vsoePrice = null;

    /**
     * @var float $vsoeAmount
     */
    protected $vsoeAmount = null;

    /**
     * @var float $vsoeAllocation
     */
    protected $vsoeAllocation = null;

    /**
     * @var VsoeDeferral $vsoeDeferral
     */
    protected $vsoeDeferral = null;

    /**
     * @var VsoePermitDiscount $vsoePermitDiscount
     */
    protected $vsoePermitDiscount = null;

    /**
     * @var boolean $vsoeDelivered
     */
    protected $vsoeDelivered = null;

    /**
     * @var \DateTime $expectedShipDate
     */
    protected $expectedShipDate = null;

    /**
     * @var boolean $noAutoAssignLocation
     */
    protected $noAutoAssignLocation = null;

    /**
     * @var boolean $locationAutoAssigned
     */
    protected $locationAutoAssigned = null;

    /**
     * @var string $taxDetailsReference
     */
    protected $taxDetailsReference = null;

    /**
     * @var RecordRef $chargeType
     */
    protected $chargeType = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getJob()
    {
      return $this->job;
    }

    /**
     * @param RecordRef $job
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setJob($job)
    {
      $this->job = $job;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubscription()
    {
      return $this->subscription;
    }

    /**
     * @param RecordRef $subscription
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setSubscription($subscription)
    {
      $this->subscription = $subscription;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setItem($item)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setQuantityAvailable($quantityAvailable)
    {
      $this->quantityAvailable = $quantityAvailable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpandItemGroup()
    {
      return $this->expandItemGroup;
    }

    /**
     * @param boolean $expandItemGroup
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setExpandItemGroup($expandItemGroup)
    {
      $this->expandItemGroup = $expandItemGroup;
      return $this;
    }

    /**
     * @return int
     */
    public function getLineUniqueKey()
    {
      return $this->lineUniqueKey;
    }

    /**
     * @param int $lineUniqueKey
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setLineUniqueKey($lineUniqueKey)
    {
      $this->lineUniqueKey = $lineUniqueKey;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param RecordRef $units
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setUnits($units)
    {
      $this->units = $units;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setInventoryDetail($inventoryDetail)
    {
      $this->inventoryDetail = $inventoryDetail;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param RecordRef $price
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setPrice($price)
    {
      $this->price = $price;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setSerialNumbers($serialNumbers)
    {
      $this->serialNumbers = $serialNumbers;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxable()
    {
      return $this->isTaxable;
    }

    /**
     * @param boolean $isTaxable
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setIsTaxable($isTaxable)
    {
      $this->isTaxable = $isTaxable;
      return $this;
    }

    /**
     * @return SalesOrderItemCommitInventory
     */
    public function getCommitInventory()
    {
      return $this->commitInventory;
    }

    /**
     * @param SalesOrderItemCommitInventory $commitInventory
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setCommitInventory($commitInventory)
    {
      $this->commitInventory = $commitInventory;
      return $this;
    }

    /**
     * @return float
     */
    public function getOrderPriority()
    {
      return $this->orderPriority;
    }

    /**
     * @param float $orderPriority
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setOrderPriority($orderPriority)
    {
      $this->orderPriority = $orderPriority;
      return $this;
    }

    /**
     * @return string
     */
    public function getLicenseCode()
    {
      return $this->licenseCode;
    }

    /**
     * @param string $licenseCode
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setLicenseCode($licenseCode)
    {
      $this->licenseCode = $licenseCode;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param RecordRef $department
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param RecordRef $class
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setClass($class)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SalesOrderItemCreatePo
     */
    public function getCreatePo()
    {
      return $this->createPo;
    }

    /**
     * @param SalesOrderItemCreatePo $createPo
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setCreatePo($createPo)
    {
      $this->createPo = $createPo;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedPo()
    {
      return $this->createdPo;
    }

    /**
     * @param RecordRef $createdPo
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setCreatedPo($createdPo)
    {
      $this->createdPo = $createdPo;
      return $this;
    }

    /**
     * @return float
     */
    public function getAltSalesAmt()
    {
      return $this->altSalesAmt;
    }

    /**
     * @param float $altSalesAmt
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setAltSalesAmt($altSalesAmt)
    {
      $this->altSalesAmt = $altSalesAmt;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCreateWo()
    {
      return $this->createWo;
    }

    /**
     * @param boolean $createWo
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setCreateWo($createWo)
    {
      $this->createWo = $createWo;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPoVendor()
    {
      return $this->poVendor;
    }

    /**
     * @param RecordRef $poVendor
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setPoVendor($poVendor)
    {
      $this->poVendor = $poVendor;
      return $this;
    }

    /**
     * @return string
     */
    public function getPoCurrency()
    {
      return $this->poCurrency;
    }

    /**
     * @param string $poCurrency
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setPoCurrency($poCurrency)
    {
      $this->poCurrency = $poCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getPoRate()
    {
      return $this->poRate;
    }

    /**
     * @param float $poRate
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setPoRate($poRate)
    {
      $this->poRate = $poRate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecSchedule()
    {
      return $this->revRecSchedule;
    }

    /**
     * @param RecordRef $revRecSchedule
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setRevRecSchedule($revRecSchedule)
    {
      $this->revRecSchedule = $revRecSchedule;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRevRecStartDate()
    {
      if ($this->revRecStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->revRecStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $revRecStartDate
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setRevRecStartDate(\DateTime $revRecStartDate = null)
    {
      if ($revRecStartDate == null) {
       $this->revRecStartDate = null;
      } else {
        $this->revRecStartDate = $revRecStartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getRevRecTermInMonths()
    {
      return $this->revRecTermInMonths;
    }

    /**
     * @param int $revRecTermInMonths
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setRevRecTermInMonths($revRecTermInMonths)
    {
      $this->revRecTermInMonths = $revRecTermInMonths;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRevRecEndDate()
    {
      if ($this->revRecEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->revRecEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $revRecEndDate
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setRevRecEndDate(\DateTime $revRecEndDate = null)
    {
      if ($revRecEndDate == null) {
       $this->revRecEndDate = null;
      } else {
        $this->revRecEndDate = $revRecEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeferRevRec()
    {
      return $this->deferRevRec;
    }

    /**
     * @param boolean $deferRevRec
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setDeferRevRec($deferRevRec)
    {
      $this->deferRevRec = $deferRevRec;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsClosed()
    {
      return $this->isClosed;
    }

    /**
     * @param boolean $isClosed
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setIsClosed($isClosed)
    {
      $this->isClosed = $isClosed;
      return $this;
    }

    /**
     * @return SalesOrderItemFulfillmentChoice
     */
    public function getItemFulfillmentChoice()
    {
      return $this->itemFulfillmentChoice;
    }

    /**
     * @param SalesOrderItemFulfillmentChoice $itemFulfillmentChoice
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setItemFulfillmentChoice($itemFulfillmentChoice)
    {
      $this->itemFulfillmentChoice = $itemFulfillmentChoice;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCatchUpPeriod()
    {
      return $this->catchUpPeriod;
    }

    /**
     * @param RecordRef $catchUpPeriod
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setCatchUpPeriod($catchUpPeriod)
    {
      $this->catchUpPeriod = $catchUpPeriod;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param RecordRef $billingSchedule
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFromJob()
    {
      return $this->fromJob;
    }

    /**
     * @param boolean $fromJob
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setFromJob($fromJob)
    {
      $this->fromJob = $fromJob;
      return $this;
    }

    /**
     * @return float
     */
    public function getGrossAmt()
    {
      return $this->grossAmt;
    }

    /**
     * @param float $grossAmt
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setGrossAmt($grossAmt)
    {
      $this->grossAmt = $grossAmt;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount()
    {
      return $this->taxAmount;
    }

    /**
     * @param float $taxAmount
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeFromRateRequest()
    {
      return $this->excludeFromRateRequest;
    }

    /**
     * @param boolean $excludeFromRateRequest
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setExcludeFromRateRequest($excludeFromRateRequest)
    {
      $this->excludeFromRateRequest = $excludeFromRateRequest;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEstimate()
    {
      return $this->isEstimate;
    }

    /**
     * @param boolean $isEstimate
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setIsEstimate($isEstimate)
    {
      $this->isEstimate = $isEstimate;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentComplete()
    {
      return $this->percentComplete;
    }

    /**
     * @param float $percentComplete
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setPercentComplete($percentComplete)
    {
      $this->percentComplete = $percentComplete;
      return $this;
    }

    /**
     * @return ItemCostEstimateType
     */
    public function getCostEstimateType()
    {
      return $this->costEstimateType;
    }

    /**
     * @param ItemCostEstimateType $costEstimateType
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setCostEstimateType($costEstimateType)
    {
      $this->costEstimateType = $costEstimateType;
      return $this;
    }

    /**
     * @return float
     */
    public function getCostEstimate()
    {
      return $this->costEstimate;
    }

    /**
     * @param float $costEstimate
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setCostEstimate($costEstimate)
    {
      $this->costEstimate = $costEstimate;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setQuantityBackOrdered($quantityBackOrdered)
    {
      $this->quantityBackOrdered = $quantityBackOrdered;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityBilled()
    {
      return $this->quantityBilled;
    }

    /**
     * @param float $quantityBilled
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setQuantityBilled($quantityBilled)
    {
      $this->quantityBilled = $quantityBilled;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setQuantityCommitted($quantityCommitted)
    {
      $this->quantityCommitted = $quantityCommitted;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityFulfilled()
    {
      return $this->quantityFulfilled;
    }

    /**
     * @param float $quantityFulfilled
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setQuantityFulfilled($quantityFulfilled)
    {
      $this->quantityFulfilled = $quantityFulfilled;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityPacked()
    {
      return $this->quantityPacked;
    }

    /**
     * @param float $quantityPacked
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setQuantityPacked($quantityPacked)
    {
      $this->quantityPacked = $quantityPacked;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityPicked()
    {
      return $this->quantityPicked;
    }

    /**
     * @param float $quantityPicked
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setQuantityPicked($quantityPicked)
    {
      $this->quantityPicked = $quantityPicked;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax1Amt()
    {
      return $this->tax1Amt;
    }

    /**
     * @param float $tax1Amt
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setTax1Amt($tax1Amt)
    {
      $this->tax1Amt = $tax1Amt;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxCode()
    {
      return $this->taxCode;
    }

    /**
     * @param RecordRef $taxCode
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setTaxCode($taxCode)
    {
      $this->taxCode = $taxCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate1()
    {
      return $this->taxRate1;
    }

    /**
     * @param float $taxRate1
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setTaxRate1($taxRate1)
    {
      $this->taxRate1 = $taxRate1;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate2()
    {
      return $this->taxRate2;
    }

    /**
     * @param float $taxRate2
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setTaxRate2($taxRate2)
    {
      $this->taxRate2 = $taxRate2;
      return $this;
    }

    /**
     * @return string
     */
    public function getGiftCertFrom()
    {
      return $this->giftCertFrom;
    }

    /**
     * @param string $giftCertFrom
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setGiftCertFrom($giftCertFrom)
    {
      $this->giftCertFrom = $giftCertFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getGiftCertRecipientName()
    {
      return $this->giftCertRecipientName;
    }

    /**
     * @param string $giftCertRecipientName
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setGiftCertRecipientName($giftCertRecipientName)
    {
      $this->giftCertRecipientName = $giftCertRecipientName;
      return $this;
    }

    /**
     * @return string
     */
    public function getGiftCertRecipientEmail()
    {
      return $this->giftCertRecipientEmail;
    }

    /**
     * @param string $giftCertRecipientEmail
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setGiftCertRecipientEmail($giftCertRecipientEmail)
    {
      $this->giftCertRecipientEmail = $giftCertRecipientEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getGiftCertMessage()
    {
      return $this->giftCertMessage;
    }

    /**
     * @param string $giftCertMessage
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setGiftCertMessage($giftCertMessage)
    {
      $this->giftCertMessage = $giftCertMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getGiftCertNumber()
    {
      return $this->giftCertNumber;
    }

    /**
     * @param string $giftCertNumber
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setGiftCertNumber($giftCertNumber)
    {
      $this->giftCertNumber = $giftCertNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipGroup()
    {
      return $this->shipGroup;
    }

    /**
     * @param int $shipGroup
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setShipGroup($shipGroup)
    {
      $this->shipGroup = $shipGroup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getItemIsFulfilled()
    {
      return $this->itemIsFulfilled;
    }

    /**
     * @param boolean $itemIsFulfilled
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setItemIsFulfilled($itemIsFulfilled)
    {
      $this->itemIsFulfilled = $itemIsFulfilled;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipAddress()
    {
      return $this->shipAddress;
    }

    /**
     * @param RecordRef $shipAddress
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setShipAddress($shipAddress)
    {
      $this->shipAddress = $shipAddress;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipMethod()
    {
      return $this->shipMethod;
    }

    /**
     * @param RecordRef $shipMethod
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setShipMethod($shipMethod)
    {
      $this->shipMethod = $shipMethod;
      return $this;
    }

    /**
     * @return VsoeSopGroup
     */
    public function getVsoeSopGroup()
    {
      return $this->vsoeSopGroup;
    }

    /**
     * @param VsoeSopGroup $vsoeSopGroup
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setVsoeSopGroup($vsoeSopGroup)
    {
      $this->vsoeSopGroup = $vsoeSopGroup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVsoeIsEstimate()
    {
      return $this->vsoeIsEstimate;
    }

    /**
     * @param boolean $vsoeIsEstimate
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setVsoeIsEstimate($vsoeIsEstimate)
    {
      $this->vsoeIsEstimate = $vsoeIsEstimate;
      return $this;
    }

    /**
     * @return float
     */
    public function getVsoePrice()
    {
      return $this->vsoePrice;
    }

    /**
     * @param float $vsoePrice
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setVsoePrice($vsoePrice)
    {
      $this->vsoePrice = $vsoePrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getVsoeAmount()
    {
      return $this->vsoeAmount;
    }

    /**
     * @param float $vsoeAmount
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setVsoeAmount($vsoeAmount)
    {
      $this->vsoeAmount = $vsoeAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getVsoeAllocation()
    {
      return $this->vsoeAllocation;
    }

    /**
     * @param float $vsoeAllocation
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setVsoeAllocation($vsoeAllocation)
    {
      $this->vsoeAllocation = $vsoeAllocation;
      return $this;
    }

    /**
     * @return VsoeDeferral
     */
    public function getVsoeDeferral()
    {
      return $this->vsoeDeferral;
    }

    /**
     * @param VsoeDeferral $vsoeDeferral
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setVsoeDeferral($vsoeDeferral)
    {
      $this->vsoeDeferral = $vsoeDeferral;
      return $this;
    }

    /**
     * @return VsoePermitDiscount
     */
    public function getVsoePermitDiscount()
    {
      return $this->vsoePermitDiscount;
    }

    /**
     * @param VsoePermitDiscount $vsoePermitDiscount
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setVsoePermitDiscount($vsoePermitDiscount)
    {
      $this->vsoePermitDiscount = $vsoePermitDiscount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVsoeDelivered()
    {
      return $this->vsoeDelivered;
    }

    /**
     * @param boolean $vsoeDelivered
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setVsoeDelivered($vsoeDelivered)
    {
      $this->vsoeDelivered = $vsoeDelivered;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedShipDate()
    {
      if ($this->expectedShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expectedShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expectedShipDate
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setExpectedShipDate(\DateTime $expectedShipDate = null)
    {
      if ($expectedShipDate == null) {
       $this->expectedShipDate = null;
      } else {
        $this->expectedShipDate = $expectedShipDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNoAutoAssignLocation()
    {
      return $this->noAutoAssignLocation;
    }

    /**
     * @param boolean $noAutoAssignLocation
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setNoAutoAssignLocation($noAutoAssignLocation)
    {
      $this->noAutoAssignLocation = $noAutoAssignLocation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocationAutoAssigned()
    {
      return $this->locationAutoAssigned;
    }

    /**
     * @param boolean $locationAutoAssigned
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setLocationAutoAssigned($locationAutoAssigned)
    {
      $this->locationAutoAssigned = $locationAutoAssigned;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxDetailsReference()
    {
      return $this->taxDetailsReference;
    }

    /**
     * @param string $taxDetailsReference
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setTaxDetailsReference($taxDetailsReference)
    {
      $this->taxDetailsReference = $taxDetailsReference;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getChargeType()
    {
      return $this->chargeType;
    }

    /**
     * @param RecordRef $chargeType
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setChargeType($chargeType)
    {
      $this->chargeType = $chargeType;
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
     * @return \Nzolt\NetSuite\SalesOrderItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
