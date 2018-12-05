<?php

namespace Nzolt\NetSuite;

class PurchaseRequisitionItem
{

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var string $vendorName
     */
    protected $vendorName = null;

    /**
     * @var RecordRef $poVendor
     */
    protected $poVendor = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var RecordRef $units
     */
    protected $units = null;

    /**
     * @var string $serialNumbers
     */
    protected $serialNumbers = null;

    /**
     * @var InventoryDetail $inventoryDetail
     */
    protected $inventoryDetail = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var float $estimatedRate
     */
    protected $estimatedRate = null;

    /**
     * @var float $estimatedAmount
     */
    protected $estimatedAmount = null;

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
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var boolean $isBillable
     */
    protected $isBillable = null;

    /**
     * @var RecordRefList $linkedOrderList
     */
    protected $linkedOrderList = null;

    /**
     * @var string $linkedOrderStatus
     */
    protected $linkedOrderStatus = null;

    /**
     * @var \DateTime $expectedReceiptDate
     */
    protected $expectedReceiptDate = null;

    /**
     * @var boolean $isClosed
     */
    protected $isClosed = null;

    /**
     * @var boolean $expandItemGroup
     */
    protected $expandItemGroup = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setLine($line)
    {
      $this->line = $line;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setVendorName($vendorName)
    {
      $this->vendorName = $vendorName;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setPoVendor($poVendor)
    {
      $this->poVendor = $poVendor;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setUnits($units)
    {
      $this->units = $units;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setSerialNumbers($serialNumbers)
    {
      $this->serialNumbers = $serialNumbers;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedRate()
    {
      return $this->estimatedRate;
    }

    /**
     * @param float $estimatedRate
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setEstimatedRate($estimatedRate)
    {
      $this->estimatedRate = $estimatedRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedAmount()
    {
      return $this->estimatedAmount;
    }

    /**
     * @param float $estimatedAmount
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setEstimatedAmount($estimatedAmount)
    {
      $this->estimatedAmount = $estimatedAmount;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setGrossAmt($grossAmt)
    {
      $this->grossAmt = $grossAmt;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setClass($class)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setIsBillable($isBillable)
    {
      $this->isBillable = $isBillable;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getLinkedOrderList()
    {
      return $this->linkedOrderList;
    }

    /**
     * @param RecordRefList $linkedOrderList
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setLinkedOrderList($linkedOrderList)
    {
      $this->linkedOrderList = $linkedOrderList;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkedOrderStatus()
    {
      return $this->linkedOrderStatus;
    }

    /**
     * @param string $linkedOrderStatus
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setLinkedOrderStatus($linkedOrderStatus)
    {
      $this->linkedOrderStatus = $linkedOrderStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedReceiptDate()
    {
      if ($this->expectedReceiptDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expectedReceiptDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expectedReceiptDate
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setExpectedReceiptDate(\DateTime $expectedReceiptDate = null)
    {
      if ($expectedReceiptDate == null) {
       $this->expectedReceiptDate = null;
      } else {
        $this->expectedReceiptDate = $expectedReceiptDate->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setIsClosed($isClosed)
    {
      $this->isClosed = $isClosed;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionItem
     */
    public function setExpandItemGroup($expandItemGroup)
    {
      $this->expandItemGroup = $expandItemGroup;
      return $this;
    }

}
