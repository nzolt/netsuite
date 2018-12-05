<?php

namespace Nzolt\NetSuite;

class VendorReturnAuthorizationItem
{

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var string $vendorName
     */
    protected $vendorName = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var int $orderLine
     */
    protected $orderLine = null;

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
     * @var RecordRefList $serialNumbersList
     */
    protected $serialNumbersList = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $binNumbers
     */
    protected $binNumbers = null;

    /**
     * @var string $rate
     */
    protected $rate = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

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
     * @var float $grossAmt
     */
    protected $grossAmt = null;

    /**
     * @var float $tax1Amt
     */
    protected $tax1Amt = null;

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
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var boolean $isBillable
     */
    protected $isBillable = null;

    /**
     * @var boolean $isClosed
     */
    protected $isClosed = null;

    /**
     * @var RecordRef $amortizationSched
     */
    protected $amortizationSched = null;

    /**
     * @var boolean $isDropShipment
     */
    protected $isDropShipment = null;

    /**
     * @var float $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var string $taxDetailsReference
     */
    protected $taxDetailsReference = null;

    /**
     * @var \DateTime $amortizStartDate
     */
    protected $amortizStartDate = null;

    /**
     * @var \DateTime $amortizationEndDate
     */
    protected $amortizationEndDate = null;

    /**
     * @var string $amortizationResidual
     */
    protected $amortizationResidual = null;

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
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RecordRef $item
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorName()
    {
      return $this->vendorName;
    }

    /**
     * @param string $vendorName
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setVendorName($vendorName)
    {
      $this->vendorName = $vendorName;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setLine($line)
    {
      $this->line = $line;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setOrderLine($orderLine)
    {
      $this->orderLine = $orderLine;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setInventoryDetail($inventoryDetail)
    {
      $this->inventoryDetail = $inventoryDetail;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSerialNumbersList()
    {
      return $this->serialNumbersList;
    }

    /**
     * @param RecordRefList $serialNumbersList
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setSerialNumbersList($serialNumbersList)
    {
      $this->serialNumbersList = $serialNumbersList;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setBinNumbers($binNumbers)
    {
      $this->binNumbers = $binNumbers;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setTaxRate2($taxRate2)
    {
      $this->taxRate2 = $taxRate2;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setTax1Amt($tax1Amt)
    {
      $this->tax1Amt = $tax1Amt;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param RecordRef $customer
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBillable()
    {
      return $this->isBillable;
    }

    /**
     * @param boolean $isBillable
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setIsBillable($isBillable)
    {
      $this->isBillable = $isBillable;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setIsClosed($isClosed)
    {
      $this->isClosed = $isClosed;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAmortizationSched()
    {
      return $this->amortizationSched;
    }

    /**
     * @param RecordRef $amortizationSched
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setAmortizationSched($amortizationSched)
    {
      $this->amortizationSched = $amortizationSched;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setIsDropShipment($isDropShipment)
    {
      $this->isDropShipment = $isDropShipment;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setTaxDetailsReference($taxDetailsReference)
    {
      $this->taxDetailsReference = $taxDetailsReference;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAmortizStartDate()
    {
      if ($this->amortizStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->amortizStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $amortizStartDate
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setAmortizStartDate(\DateTime $amortizStartDate = null)
    {
      if ($amortizStartDate == null) {
       $this->amortizStartDate = null;
      } else {
        $this->amortizStartDate = $amortizStartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAmortizationEndDate()
    {
      if ($this->amortizationEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->amortizationEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $amortizationEndDate
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setAmortizationEndDate(\DateTime $amortizationEndDate = null)
    {
      if ($amortizationEndDate == null) {
       $this->amortizationEndDate = null;
      } else {
        $this->amortizationEndDate = $amortizationEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getAmortizationResidual()
    {
      return $this->amortizationResidual;
    }

    /**
     * @param string $amortizationResidual
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setAmortizationResidual($amortizationResidual)
    {
      $this->amortizationResidual = $amortizationResidual;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
