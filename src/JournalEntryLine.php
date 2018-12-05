<?php

namespace Nzolt\NetSuite;

class JournalEntryLine
{

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var float $debit
     */
    protected $debit = null;

    /**
     * @var float $credit
     */
    protected $credit = null;

    /**
     * @var RecordRef $taxAccount
     */
    protected $taxAccount = null;

    /**
     * @var RecordRef $lineTaxCode
     */
    protected $lineTaxCode = null;

    /**
     * @var float $lineTaxRate
     */
    protected $lineTaxRate = null;

    /**
     * @var float $debitTax
     */
    protected $debitTax = null;

    /**
     * @var float $creditTax
     */
    protected $creditTax = null;

    /**
     * @var float $taxBasis
     */
    protected $taxBasis = null;

    /**
     * @var float $totalAmount
     */
    protected $totalAmount = null;

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
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var float $grossAmt
     */
    protected $grossAmt = null;

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
     * @var RecordRef $revenueRecognitionRule
     */
    protected $revenueRecognitionRule = null;

    /**
     * @var boolean $eliminate
     */
    protected $eliminate = null;

    /**
     * @var RecordRef $schedule
     */
    protected $schedule = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var string $residual
     */
    protected $residual = null;

    /**
     * @var RecordRef $scheduleNum
     */
    protected $scheduleNum = null;

    /**
     * @var float $tax1Amt
     */
    protected $tax1Amt = null;

    /**
     * @var RecordRef $tax1Acct
     */
    protected $tax1Acct = null;

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
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param RecordRef $account
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setAccount($account)
    {
      $this->account = $account;
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
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return float
     */
    public function getDebit()
    {
      return $this->debit;
    }

    /**
     * @param float $debit
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setDebit($debit)
    {
      $this->debit = $debit;
      return $this;
    }

    /**
     * @return float
     */
    public function getCredit()
    {
      return $this->credit;
    }

    /**
     * @param float $credit
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setCredit($credit)
    {
      $this->credit = $credit;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxAccount()
    {
      return $this->taxAccount;
    }

    /**
     * @param RecordRef $taxAccount
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setTaxAccount($taxAccount)
    {
      $this->taxAccount = $taxAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLineTaxCode()
    {
      return $this->lineTaxCode;
    }

    /**
     * @param RecordRef $lineTaxCode
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setLineTaxCode($lineTaxCode)
    {
      $this->lineTaxCode = $lineTaxCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getLineTaxRate()
    {
      return $this->lineTaxRate;
    }

    /**
     * @param float $lineTaxRate
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setLineTaxRate($lineTaxRate)
    {
      $this->lineTaxRate = $lineTaxRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getDebitTax()
    {
      return $this->debitTax;
    }

    /**
     * @param float $debitTax
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setDebitTax($debitTax)
    {
      $this->debitTax = $debitTax;
      return $this;
    }

    /**
     * @return float
     */
    public function getCreditTax()
    {
      return $this->creditTax;
    }

    /**
     * @param float $creditTax
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setCreditTax($creditTax)
    {
      $this->creditTax = $creditTax;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxBasis()
    {
      return $this->taxBasis;
    }

    /**
     * @param float $taxBasis
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setTaxBasis($taxBasis)
    {
      $this->taxBasis = $taxBasis;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
      return $this->totalAmount;
    }

    /**
     * @param float $totalAmount
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setTotalAmount($totalAmount)
    {
      $this->totalAmount = $totalAmount;
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
     * @return \Nzolt\NetSuite\JournalEntryLine
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
     * @return \Nzolt\NetSuite\JournalEntryLine
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
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setTaxRate1($taxRate1)
    {
      $this->taxRate1 = $taxRate1;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param RecordRef $entity
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
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
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setGrossAmt($grossAmt)
    {
      $this->grossAmt = $grossAmt;
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
     * @return \Nzolt\NetSuite\JournalEntryLine
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
     * @return \Nzolt\NetSuite\JournalEntryLine
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
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevenueRecognitionRule()
    {
      return $this->revenueRecognitionRule;
    }

    /**
     * @param RecordRef $revenueRecognitionRule
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setRevenueRecognitionRule($revenueRecognitionRule)
    {
      $this->revenueRecognitionRule = $revenueRecognitionRule;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEliminate()
    {
      return $this->eliminate;
    }

    /**
     * @param boolean $eliminate
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setEliminate($eliminate)
    {
      $this->eliminate = $eliminate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSchedule()
    {
      return $this->schedule;
    }

    /**
     * @param RecordRef $schedule
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setSchedule($schedule)
    {
      $this->schedule = $schedule;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getResidual()
    {
      return $this->residual;
    }

    /**
     * @param string $residual
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setResidual($residual)
    {
      $this->residual = $residual;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getScheduleNum()
    {
      return $this->scheduleNum;
    }

    /**
     * @param RecordRef $scheduleNum
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setScheduleNum($scheduleNum)
    {
      $this->scheduleNum = $scheduleNum;
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
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setTax1Amt($tax1Amt)
    {
      $this->tax1Amt = $tax1Amt;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTax1Acct()
    {
      return $this->tax1Acct;
    }

    /**
     * @param RecordRef $tax1Acct
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setTax1Acct($tax1Acct)
    {
      $this->tax1Acct = $tax1Acct;
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
     * @return \Nzolt\NetSuite\JournalEntryLine
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
