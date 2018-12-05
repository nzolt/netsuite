<?php

namespace Nzolt\NetSuite;

class ExpenseReportExpense
{

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var \DateTime $expenseDate
     */
    protected $expenseDate = null;

    /**
     * @var RecordRef $category
     */
    protected $category = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var float $rate
     */
    protected $rate = null;

    /**
     * @var float $foreignAmount
     */
    protected $foreignAmount = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var RecordRef $taxCode
     */
    protected $taxCode = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var float $taxRate1
     */
    protected $taxRate1 = null;

    /**
     * @var float $tax1Amt
     */
    protected $tax1Amt = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var float $grossAmt
     */
    protected $grossAmt = null;

    /**
     * @var float $taxRate2
     */
    protected $taxRate2 = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var boolean $isBillable
     */
    protected $isBillable = null;

    /**
     * @var RecordRef $expMediaItem
     */
    protected $expMediaItem = null;

    /**
     * @var boolean $isNonReimbursable
     */
    protected $isNonReimbursable = null;

    /**
     * @var boolean $receipt
     */
    protected $receipt = null;

    /**
     * @var int $refNumber
     */
    protected $refNumber = null;

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
    public function getLine()
    {
      return $this->line;
    }

    /**
     * @param int $line
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpenseDate()
    {
      if ($this->expenseDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expenseDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expenseDate
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setExpenseDate(\DateTime $expenseDate = null)
    {
      if ($expenseDate == null) {
       $this->expenseDate = null;
      } else {
        $this->expenseDate = $expenseDate->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setCategory($category)
    {
      $this->category = $category;
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param float $rate
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return float
     */
    public function getForeignAmount()
    {
      return $this->foreignAmount;
    }

    /**
     * @param float $foreignAmount
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setForeignAmount($foreignAmount)
    {
      $this->foreignAmount = $foreignAmount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param RecordRef $currency
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param float $exchangeRate
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setTaxCode($taxCode)
    {
      $this->taxCode = $taxCode;
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setTaxRate1($taxRate1)
    {
      $this->taxRate1 = $taxRate1;
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setTax1Amt($tax1Amt)
    {
      $this->tax1Amt = $tax1Amt;
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setGrossAmt($grossAmt)
    {
      $this->grossAmt = $grossAmt;
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setTaxRate2($taxRate2)
    {
      $this->taxRate2 = $taxRate2;
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setIsBillable($isBillable)
    {
      $this->isBillable = $isBillable;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpMediaItem()
    {
      return $this->expMediaItem;
    }

    /**
     * @param RecordRef $expMediaItem
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setExpMediaItem($expMediaItem)
    {
      $this->expMediaItem = $expMediaItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNonReimbursable()
    {
      return $this->isNonReimbursable;
    }

    /**
     * @param boolean $isNonReimbursable
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setIsNonReimbursable($isNonReimbursable)
    {
      $this->isNonReimbursable = $isNonReimbursable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReceipt()
    {
      return $this->receipt;
    }

    /**
     * @param boolean $receipt
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setReceipt($receipt)
    {
      $this->receipt = $receipt;
      return $this;
    }

    /**
     * @return int
     */
    public function getRefNumber()
    {
      return $this->refNumber;
    }

    /**
     * @param int $refNumber
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setRefNumber($refNumber)
    {
      $this->refNumber = $refNumber;
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
     * @return \Nzolt\NetSuite\ExpenseReportExpense
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
