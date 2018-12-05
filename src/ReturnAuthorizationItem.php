<?php

namespace Nzolt\NetSuite;

class ReturnAuthorizationItem
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
     * @var int $orderLine
     */
    protected $orderLine = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var float $quantityReceived
     */
    protected $quantityReceived = null;

    /**
     * @var float $quantityBilled
     */
    protected $quantityBilled = null;

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
     * @var string $serialNumbers
     */
    protected $serialNumbers = null;

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
     * @var CustomFieldList $options
     */
    protected $options = null;

    /**
     * @var int $revRecTermInMonths
     */
    protected $revRecTermInMonths = null;

    /**
     * @var boolean $deferRevRec
     */
    protected $deferRevRec = null;

    /**
     * @var boolean $isClosed
     */
    protected $isClosed = null;

    /**
     * @var boolean $isDropShipment
     */
    protected $isDropShipment = null;

    /**
     * @var RecordRef $catchUpPeriod
     */
    protected $catchUpPeriod = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var ItemCostEstimateType $costEstimateType
     */
    protected $costEstimateType = null;

    /**
     * @var float $costEstimate
     */
    protected $costEstimate = null;

    /**
     * @var string $taxDetailsReference
     */
    protected $taxDetailsReference = null;

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
     * @var float $tax1Amt
     */
    protected $tax1Amt = null;

    /**
     * @var float $grossAmt
     */
    protected $grossAmt = null;

    /**
     * @var boolean $isTaxable
     */
    protected $isTaxable = null;

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
     * @var float $altSalesAmt
     */
    protected $altSalesAmt = null;

    /**
     * @var float $taxAmount
     */
    protected $taxAmount = null;

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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setLine($line)
    {
      $this->line = $line;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityReceived()
    {
      return $this->quantityReceived;
    }

    /**
     * @param float $quantityReceived
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setQuantityReceived($quantityReceived)
    {
      $this->quantityReceived = $quantityReceived;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setQuantityBilled($quantityBilled)
    {
      $this->quantityBilled = $quantityBilled;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setSerialNumbers($serialNumbers)
    {
      $this->serialNumbers = $serialNumbers;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setOptions($options)
    {
      $this->options = $options;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setRevRecTermInMonths($revRecTermInMonths)
    {
      $this->revRecTermInMonths = $revRecTermInMonths;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setIsClosed($isClosed)
    {
      $this->isClosed = $isClosed;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setIsDropShipment($isDropShipment)
    {
      $this->isDropShipment = $isDropShipment;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setCatchUpPeriod($catchUpPeriod)
    {
      $this->catchUpPeriod = $catchUpPeriod;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setTaxDetailsReference($taxDetailsReference)
    {
      $this->taxDetailsReference = $taxDetailsReference;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
    public function getTaxCode()
    {
      return $this->taxCode;
    }

    /**
     * @param RecordRef $taxCode
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setTaxRate2($taxRate2)
    {
      $this->taxRate2 = $taxRate2;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setTax1Amt($tax1Amt)
    {
      $this->tax1Amt = $tax1Amt;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setGrossAmt($grossAmt)
    {
      $this->grossAmt = $grossAmt;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setIsTaxable($isTaxable)
    {
      $this->isTaxable = $isTaxable;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setGiftCertNumber($giftCertNumber)
    {
      $this->giftCertNumber = $giftCertNumber;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setVsoeAmount($vsoeAmount)
    {
      $this->vsoeAmount = $vsoeAmount;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setAltSalesAmt($altSalesAmt)
    {
      $this->altSalesAmt = $altSalesAmt;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setVsoeDelivered($vsoeDelivered)
    {
      $this->vsoeDelivered = $vsoeDelivered;
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
