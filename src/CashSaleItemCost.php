<?php

namespace Nzolt\NetSuite;

class CashSaleItemCost
{

    /**
     * @var boolean $apply
     */
    protected $apply = null;

    /**
     * @var int $doc
     */
    protected $doc = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var string $taxDetailsReference
     */
    protected $taxDetailsReference = null;

    /**
     * @var \DateTime $billedDate
     */
    protected $billedDate = null;

    /**
     * @var string $itemDisp
     */
    protected $itemDisp = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var string $jobDisp
     */
    protected $jobDisp = null;

    /**
     * @var string $department
     */
    protected $department = null;

    /**
     * @var string $class
     */
    protected $class = null;

    /**
     * @var string $location
     */
    protected $location = null;

    /**
     * @var string $unitDisp
     */
    protected $unitDisp = null;

    /**
     * @var CustomFieldList $options
     */
    protected $options = null;

    /**
     * @var string $itemCostCount
     */
    protected $itemCostCount = null;

    /**
     * @var string $quantity
     */
    protected $quantity = null;

    /**
     * @var string $serialNumbers
     */
    protected $serialNumbers = null;

    /**
     * @var float $cost
     */
    protected $cost = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var float $taxAmount
     */
    protected $taxAmount = null;

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

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getApply()
    {
      return $this->apply;
    }

    /**
     * @param boolean $apply
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setApply($apply)
    {
      $this->apply = $apply;
      return $this;
    }

    /**
     * @return int
     */
    public function getDoc()
    {
      return $this->doc;
    }

    /**
     * @param int $doc
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setDoc($doc)
    {
      $this->doc = $doc;
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setLine($line)
    {
      $this->line = $line;
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setTaxDetailsReference($taxDetailsReference)
    {
      $this->taxDetailsReference = $taxDetailsReference;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBilledDate()
    {
      if ($this->billedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->billedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $billedDate
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setBilledDate(\DateTime $billedDate = null)
    {
      if ($billedDate == null) {
       $this->billedDate = null;
      } else {
        $this->billedDate = $billedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDisp()
    {
      return $this->itemDisp;
    }

    /**
     * @param string $itemDisp
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setItemDisp($itemDisp)
    {
      $this->itemDisp = $itemDisp;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobDisp()
    {
      return $this->jobDisp;
    }

    /**
     * @param string $jobDisp
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setJobDisp($jobDisp)
    {
      $this->jobDisp = $jobDisp;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param string $department
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param string $class
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitDisp()
    {
      return $this->unitDisp;
    }

    /**
     * @param string $unitDisp
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setUnitDisp($unitDisp)
    {
      $this->unitDisp = $unitDisp;
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemCostCount()
    {
      return $this->itemCostCount;
    }

    /**
     * @param string $itemCostCount
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setItemCostCount($itemCostCount)
    {
      $this->itemCostCount = $itemCostCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param string $quantity
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setSerialNumbers($serialNumbers)
    {
      $this->serialNumbers = $serialNumbers;
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
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
     * @return float
     */
    public function getGrossAmt()
    {
      return $this->grossAmt;
    }

    /**
     * @param float $grossAmt
     * @return \Nzolt\NetSuite\CashSaleItemCost
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
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
     * @return \Nzolt\NetSuite\CashSaleItemCost
     */
    public function setTaxRate2($taxRate2)
    {
      $this->taxRate2 = $taxRate2;
      return $this;
    }

}
