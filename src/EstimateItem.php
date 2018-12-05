<?php

namespace Nzolt\NetSuite;

class EstimateItem
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
     * @var boolean $expandItemGroup
     */
    protected $expandItemGroup = null;

    /**
     * @var float $quantityAvailable
     */
    protected $quantityAvailable = null;

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
     * @var boolean $isTaxable
     */
    protected $isTaxable = null;

    /**
     * @var float $altSalesAmt
     */
    protected $altSalesAmt = null;

    /**
     * @var float $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var boolean $fromJob
     */
    protected $fromJob = null;

    /**
     * @var float $grossAmt
     */
    protected $grossAmt = null;

    /**
     * @var boolean $isEstimate
     */
    protected $isEstimate = null;

    /**
     * @var RecordRef $subscription
     */
    protected $subscription = null;

    /**
     * @var float $tax1Amt
     */
    protected $tax1Amt = null;

    /**
     * @var RecordRef $taxCode
     */
    protected $taxCode = null;

    /**
     * @var ItemCostEstimateType $costEstimateType
     */
    protected $costEstimateType = null;

    /**
     * @var float $costEstimate
     */
    protected $costEstimate = null;

    /**
     * @var boolean $excludeFromRateRequest
     */
    protected $excludeFromRateRequest = null;

    /**
     * @var string $taxDetailsReference
     */
    protected $taxDetailsReference = null;

    /**
     * @var float $taxRate1
     */
    protected $taxRate1 = null;

    /**
     * @var float $taxRate2
     */
    protected $taxRate2 = null;

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
     * @var \DateTime $expectedShipDate
     */
    protected $expectedShipDate = null;

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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setLine($line)
    {
      $this->line = $line;
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setExpandItemGroup($expandItemGroup)
    {
      $this->expandItemGroup = $expandItemGroup;
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setUnits($units)
    {
      $this->units = $units;
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setRevRecTermInMonths($revRecTermInMonths)
    {
      $this->revRecTermInMonths = $revRecTermInMonths;
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setIsTaxable($isTaxable)
    {
      $this->isTaxable = $isTaxable;
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setGrossAmt($grossAmt)
    {
      $this->grossAmt = $grossAmt;
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setIsEstimate($isEstimate)
    {
      $this->isEstimate = $isEstimate;
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setSubscription($subscription)
    {
      $this->subscription = $subscription;
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setTaxCode($taxCode)
    {
      $this->taxCode = $taxCode;
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setCostEstimate($costEstimate)
    {
      $this->costEstimate = $costEstimate;
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setExcludeFromRateRequest($excludeFromRateRequest)
    {
      $this->excludeFromRateRequest = $excludeFromRateRequest;
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setTaxDetailsReference($taxDetailsReference)
    {
      $this->taxDetailsReference = $taxDetailsReference;
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setTaxRate2($taxRate2)
    {
      $this->taxRate2 = $taxRate2;
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setShipMethod($shipMethod)
    {
      $this->shipMethod = $shipMethod;
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
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return RecordRef
     */
    public function getChargeType()
    {
      return $this->chargeType;
    }

    /**
     * @param RecordRef $chargeType
     * @return \Nzolt\NetSuite\EstimateItem
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
     * @return \Nzolt\NetSuite\EstimateItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
