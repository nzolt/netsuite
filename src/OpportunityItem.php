<?php

namespace Nzolt\NetSuite;

class OpportunityItem
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
     * @var float $altSalesAmt
     */
    protected $altSalesAmt = null;

    /**
     * @var int $revRecTermInMonths
     */
    protected $revRecTermInMonths = null;

    /**
     * @var CustomFieldList $options
     */
    protected $options = null;

    /**
     * @var boolean $fromJob
     */
    protected $fromJob = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var boolean $isEstimate
     */
    protected $isEstimate = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var ItemCostEstimateType $costEstimateType
     */
    protected $costEstimateType = null;

    /**
     * @var float $costEstimate
     */
    protected $costEstimate = null;

    /**
     * @var float $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var string $taxDetailsReference
     */
    protected $taxDetailsReference = null;

    /**
     * @var float $grossAmt
     */
    protected $grossAmt = null;

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
     * @var \DateTime $expectedShipDate
     */
    protected $expectedShipDate = null;

    /**
     * @var RecordRef $subscription
     */
    protected $subscription = null;

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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setAltSalesAmt($altSalesAmt)
    {
      $this->altSalesAmt = $altSalesAmt;
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setRevRecTermInMonths($revRecTermInMonths)
    {
      $this->revRecTermInMonths = $revRecTermInMonths;
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setOptions($options)
    {
      $this->options = $options;
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setFromJob($fromJob)
    {
      $this->fromJob = $fromJob;
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setIsEstimate($isEstimate)
    {
      $this->isEstimate = $isEstimate;
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setClass($class)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setCostEstimate($costEstimate)
    {
      $this->costEstimate = $costEstimate;
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setTaxDetailsReference($taxDetailsReference)
    {
      $this->taxDetailsReference = $taxDetailsReference;
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setGrossAmt($grossAmt)
    {
      $this->grossAmt = $grossAmt;
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setTaxRate2($taxRate2)
    {
      $this->taxRate2 = $taxRate2;
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
     * @return \Nzolt\NetSuite\OpportunityItem
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
    public function getSubscription()
    {
      return $this->subscription;
    }

    /**
     * @param RecordRef $subscription
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setSubscription($subscription)
    {
      $this->subscription = $subscription;
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
     * @return \Nzolt\NetSuite\OpportunityItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
