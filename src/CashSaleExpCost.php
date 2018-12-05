<?php

namespace Nzolt\NetSuite;

class CashSaleExpCost
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
     * @var string $jobDisp
     */
    protected $jobDisp = null;

    /**
     * @var string $employeeDisp
     */
    protected $employeeDisp = null;

    /**
     * @var string $categoryDisp
     */
    protected $categoryDisp = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

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
     * @var float $originalAmount
     */
    protected $originalAmount = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var float $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var string $taxableDisp
     */
    protected $taxableDisp = null;

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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
    public function getJobDisp()
    {
      return $this->jobDisp;
    }

    /**
     * @param string $jobDisp
     * @return \Nzolt\NetSuite\CashSaleExpCost
     */
    public function setJobDisp($jobDisp)
    {
      $this->jobDisp = $jobDisp;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeDisp()
    {
      return $this->employeeDisp;
    }

    /**
     * @param string $employeeDisp
     * @return \Nzolt\NetSuite\CashSaleExpCost
     */
    public function setEmployeeDisp($employeeDisp)
    {
      $this->employeeDisp = $employeeDisp;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryDisp()
    {
      return $this->categoryDisp;
    }

    /**
     * @param string $categoryDisp
     * @return \Nzolt\NetSuite\CashSaleExpCost
     */
    public function setCategoryDisp($categoryDisp)
    {
      $this->categoryDisp = $categoryDisp;
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return float
     */
    public function getOriginalAmount()
    {
      return $this->originalAmount;
    }

    /**
     * @param float $originalAmount
     * @return \Nzolt\NetSuite\CashSaleExpCost
     */
    public function setOriginalAmount($originalAmount)
    {
      $this->originalAmount = $originalAmount;
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxableDisp()
    {
      return $this->taxableDisp;
    }

    /**
     * @param string $taxableDisp
     * @return \Nzolt\NetSuite\CashSaleExpCost
     */
    public function setTaxableDisp($taxableDisp)
    {
      $this->taxableDisp = $taxableDisp;
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
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
     * @return \Nzolt\NetSuite\CashSaleExpCost
     */
    public function setTaxRate2($taxRate2)
    {
      $this->taxRate2 = $taxRate2;
      return $this;
    }

}
