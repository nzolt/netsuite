<?php

namespace Nzolt\NetSuite;

class VendorReturnAuthorizationExpense
{

    /**
     * @var int $orderLine
     */
    protected $orderLine = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var RecordRef $category
     */
    protected $category = null;

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var float $taxAmount
     */
    protected $taxAmount = null;

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
     * @var string $taxDetailsReference
     */
    protected $taxDetailsReference = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

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
     * @var RecordRef $amortizationSched
     */
    protected $amortizationSched = null;

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
     * @return int
     */
    public function getOrderLine()
    {
      return $this->orderLine;
    }

    /**
     * @param int $orderLine
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param RecordRef $category
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param RecordRef $account
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
     */
    public function setAccount($account)
    {
      $this->account = $account;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
     */
    public function setGrossAmt($grossAmt)
    {
      $this->grossAmt = $grossAmt;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
     */
    public function setTaxDetailsReference($taxDetailsReference)
    {
      $this->taxDetailsReference = $taxDetailsReference;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
     */
    public function setIsBillable($isBillable)
    {
      $this->isBillable = $isBillable;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
     */
    public function setAmortizationSched($amortizationSched)
    {
      $this->amortizationSched = $amortizationSched;
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpense
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
