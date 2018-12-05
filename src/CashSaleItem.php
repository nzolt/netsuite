<?php

namespace Nzolt\NetSuite;

class CashSaleItem
{

    /**
     * @var RecordRef $job
     */
    protected $job = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var float $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var float $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var float $quantityFulfilled
     */
    protected $quantityFulfilled = null;

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
     * @var string $serialNumbers
     */
    protected $serialNumbers = null;

    /**
     * @var string $binNumbers
     */
    protected $binNumbers = null;

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
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var int $orderLine
     */
    protected $orderLine = null;

    /**
     * @var string $licenseCode
     */
    protected $licenseCode = null;

    /**
     * @var boolean $isTaxable
     */
    protected $isTaxable = null;

    /**
     * @var CustomFieldList $options
     */
    protected $options = null;

    /**
     * @var boolean $deferRevRec
     */
    protected $deferRevRec = null;

    /**
     * @var float $currentPercent
     */
    protected $currentPercent = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var float $percentComplete
     */
    protected $percentComplete = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $revRecSchedule
     */
    protected $revRecSchedule = null;

    /**
     * @var \DateTime $revRecStartDate
     */
    protected $revRecStartDate = null;

    /**
     * @var \DateTime $revRecEndDate
     */
    protected $revRecEndDate = null;

    /**
     * @var RecordRef $subscriptionLine
     */
    protected $subscriptionLine = null;

    /**
     * @var float $grossAmt
     */
    protected $grossAmt = null;

    /**
     * @var ItemCostEstimateType $costEstimateType
     */
    protected $costEstimateType = null;

    /**
     * @var boolean $excludeFromRateRequest
     */
    protected $excludeFromRateRequest = null;

    /**
     * @var RecordRef $catchUpPeriod
     */
    protected $catchUpPeriod = null;

    /**
     * @var float $costEstimate
     */
    protected $costEstimate = null;

    /**
     * @var string $taxDetailsReference
     */
    protected $taxDetailsReference = null;

    /**
     * @var float $amountOrdered
     */
    protected $amountOrdered = null;

    /**
     * @var float $tax1Amt
     */
    protected $tax1Amt = null;

    /**
     * @var float $quantityOrdered
     */
    protected $quantityOrdered = null;

    /**
     * @var float $quantityRemaining
     */
    protected $quantityRemaining = null;

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
     * @var float $taxAmount
     */
    protected $taxAmount = null;

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
     * @var RecordRef $chargeType
     */
    protected $chargeType = null;

    /**
     * @var RecordRefList $chargesList
     */
    protected $chargesList = null;

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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setJob($job)
    {
      $this->job = $job;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setItem($item)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setLine($line)
    {
      $this->line = $line;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setQuantityAvailable($quantityAvailable)
    {
      $this->quantityAvailable = $quantityAvailable;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setQuantityFulfilled($quantityFulfilled)
    {
      $this->quantityFulfilled = $quantityFulfilled;
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setBinNumbers($binNumbers)
    {
      $this->binNumbers = $binNumbers;
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setOrderLine($orderLine)
    {
      $this->orderLine = $orderLine;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setLicenseCode($licenseCode)
    {
      $this->licenseCode = $licenseCode;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setIsTaxable($isTaxable)
    {
      $this->isTaxable = $isTaxable;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setOptions($options)
    {
      $this->options = $options;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setDeferRevRec($deferRevRec)
    {
      $this->deferRevRec = $deferRevRec;
      return $this;
    }

    /**
     * @return float
     */
    public function getCurrentPercent()
    {
      return $this->currentPercent;
    }

    /**
     * @param float $currentPercent
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setCurrentPercent($currentPercent)
    {
      $this->currentPercent = $currentPercent;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setPercentComplete($percentComplete)
    {
      $this->percentComplete = $percentComplete;
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return RecordRef
     */
    public function getSubscriptionLine()
    {
      return $this->subscriptionLine;
    }

    /**
     * @param RecordRef $subscriptionLine
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setSubscriptionLine($subscriptionLine)
    {
      $this->subscriptionLine = $subscriptionLine;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setGrossAmt($grossAmt)
    {
      $this->grossAmt = $grossAmt;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setCostEstimateType($costEstimateType)
    {
      $this->costEstimateType = $costEstimateType;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setExcludeFromRateRequest($excludeFromRateRequest)
    {
      $this->excludeFromRateRequest = $excludeFromRateRequest;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setCatchUpPeriod($catchUpPeriod)
    {
      $this->catchUpPeriod = $catchUpPeriod;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setCostEstimate($costEstimate)
    {
      $this->costEstimate = $costEstimate;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setTaxDetailsReference($taxDetailsReference)
    {
      $this->taxDetailsReference = $taxDetailsReference;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountOrdered()
    {
      return $this->amountOrdered;
    }

    /**
     * @param float $amountOrdered
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setAmountOrdered($amountOrdered)
    {
      $this->amountOrdered = $amountOrdered;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setTax1Amt($tax1Amt)
    {
      $this->tax1Amt = $tax1Amt;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOrdered()
    {
      return $this->quantityOrdered;
    }

    /**
     * @param float $quantityOrdered
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setQuantityOrdered($quantityOrdered)
    {
      $this->quantityOrdered = $quantityOrdered;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setQuantityRemaining($quantityRemaining)
    {
      $this->quantityRemaining = $quantityRemaining;
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setGiftCertMessage($giftCertMessage)
    {
      $this->giftCertMessage = $giftCertMessage;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setVsoeDelivered($vsoeDelivered)
    {
      $this->vsoeDelivered = $vsoeDelivered;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setChargeType($chargeType)
    {
      $this->chargeType = $chargeType;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getChargesList()
    {
      return $this->chargesList;
    }

    /**
     * @param RecordRefList $chargesList
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setChargesList($chargesList)
    {
      $this->chargesList = $chargesList;
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
     * @return \Nzolt\NetSuite\CashSaleItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
