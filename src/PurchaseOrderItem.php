<?php

namespace Nzolt\NetSuite;

class PurchaseOrderItem
{

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var float $quantityOnShipments
     */
    protected $quantityOnShipments = null;

    /**
     * @var string $vendorName
     */
    protected $vendorName = null;

    /**
     * @var float $quantityReceived
     */
    protected $quantityReceived = null;

    /**
     * @var float $quantityBilled
     */
    protected $quantityBilled = null;

    /**
     * @var float $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var float $quantityOnHand
     */
    protected $quantityOnHand = null;

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
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var float $tax1Amt
     */
    protected $tax1Amt = null;

    /**
     * @var float $grossAmt
     */
    protected $grossAmt = null;

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
     * @var string $description
     */
    protected $description = null;

    /**
     * @var RecordRef $purchaseContract
     */
    protected $purchaseContract = null;

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
     * @var float $taxAmount
     */
    protected $taxAmount = null;

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
     * @var RecordRef $landedCostCategory
     */
    protected $landedCostCategory = null;

    /**
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var boolean $isBillable
     */
    protected $isBillable = null;

    /**
     * @var TransactionBillVarianceStatus $billVarianceStatus
     */
    protected $billVarianceStatus = null;

    /**
     * @var boolean $matchBillToReceipt
     */
    protected $matchBillToReceipt = null;

    /**
     * @var \DateTime $expectedReceiptDate
     */
    protected $expectedReceiptDate = null;

    /**
     * @var boolean $isClosed
     */
    protected $isClosed = null;

    /**
     * @var string $taxDetailsReference
     */
    protected $taxDetailsReference = null;

    /**
     * @var RecordRef $createdFrom
     */
    protected $createdFrom = null;

    /**
     * @var RecordRefList $linkedOrderList
     */
    protected $linkedOrderList = null;

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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnShipments()
    {
      return $this->quantityOnShipments;
    }

    /**
     * @param float $quantityOnShipments
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setQuantityOnShipments($quantityOnShipments)
    {
      $this->quantityOnShipments = $quantityOnShipments;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setVendorName($vendorName)
    {
      $this->vendorName = $vendorName;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setQuantityBilled($quantityBilled)
    {
      $this->quantityBilled = $quantityBilled;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setTaxRate2($taxRate2)
    {
      $this->taxRate2 = $taxRate2;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setGrossAmt($grossAmt)
    {
      $this->grossAmt = $grossAmt;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setSerialNumbers($serialNumbers)
    {
      $this->serialNumbers = $serialNumbers;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseContract()
    {
      return $this->purchaseContract;
    }

    /**
     * @param RecordRef $purchaseContract
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setPurchaseContract($purchaseContract)
    {
      $this->purchaseContract = $purchaseContract;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setOptions($options)
    {
      $this->options = $options;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLandedCostCategory()
    {
      return $this->landedCostCategory;
    }

    /**
     * @param RecordRef $landedCostCategory
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setLandedCostCategory($landedCostCategory)
    {
      $this->landedCostCategory = $landedCostCategory;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setIsBillable($isBillable)
    {
      $this->isBillable = $isBillable;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setBillVarianceStatus($billVarianceStatus)
    {
      $this->billVarianceStatus = $billVarianceStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMatchBillToReceipt()
    {
      return $this->matchBillToReceipt;
    }

    /**
     * @param boolean $matchBillToReceipt
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setMatchBillToReceipt($matchBillToReceipt)
    {
      $this->matchBillToReceipt = $matchBillToReceipt;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setIsClosed($isClosed)
    {
      $this->isClosed = $isClosed;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setTaxDetailsReference($taxDetailsReference)
    {
      $this->taxDetailsReference = $taxDetailsReference;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedFrom()
    {
      return $this->createdFrom;
    }

    /**
     * @param RecordRef $createdFrom
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setCreatedFrom($createdFrom)
    {
      $this->createdFrom = $createdFrom;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setLinkedOrderList($linkedOrderList)
    {
      $this->linkedOrderList = $linkedOrderList;
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
     * @return \Nzolt\NetSuite\PurchaseOrderItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
