<?php

namespace Nzolt\NetSuite;

class AdvInterCompanyJournalEntryLine
{

    /**
     * @var RecordRef $lineSubsidiary
     */
    protected $lineSubsidiary = null;

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
     * @var RecordRef $dueToFromSubsidiary
     */
    protected $dueToFromSubsidiary = null;

    /**
     * @var float $grossAmt
     */
    protected $grossAmt = null;

    /**
     * @var RecordRef $schedule
     */
    protected $schedule = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

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
     * @var string $residual
     */
    protected $residual = null;

    /**
     * @var RecordRef $amortizationSched
     */
    protected $amortizationSched = null;

    /**
     * @var RecordRef $scheduleNum
     */
    protected $scheduleNum = null;

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
     * @var float $tax1Amt
     */
    protected $tax1Amt = null;

    /**
     * @var RecordRef $tax1Acct
     */
    protected $tax1Acct = null;

    /**
     * @var float $lineFxRate
     */
    protected $lineFxRate = null;

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
    public function getLineSubsidiary()
    {
      return $this->lineSubsidiary;
    }

    /**
     * @param RecordRef $lineSubsidiary
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setLineSubsidiary($lineSubsidiary)
    {
      $this->lineSubsidiary = $lineSubsidiary;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setCredit($credit)
    {
      $this->credit = $credit;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDueToFromSubsidiary()
    {
      return $this->dueToFromSubsidiary;
    }

    /**
     * @param RecordRef $dueToFromSubsidiary
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setDueToFromSubsidiary($dueToFromSubsidiary)
    {
      $this->dueToFromSubsidiary = $dueToFromSubsidiary;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setGrossAmt($grossAmt)
    {
      $this->grossAmt = $grossAmt;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setSchedule($schedule)
    {
      $this->schedule = $schedule;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
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
     * @return RecordRef
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param RecordRef $class
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setClass($class)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
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
     * @return RecordRef
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRef $location
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setEliminate($eliminate)
    {
      $this->eliminate = $eliminate;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setResidual($residual)
    {
      $this->residual = $residual;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setAmortizationSched($amortizationSched)
    {
      $this->amortizationSched = $amortizationSched;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setScheduleNum($scheduleNum)
    {
      $this->scheduleNum = $scheduleNum;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setAmortizationResidual($amortizationResidual)
    {
      $this->amortizationResidual = $amortizationResidual;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setTax1Acct($tax1Acct)
    {
      $this->tax1Acct = $tax1Acct;
      return $this;
    }

    /**
     * @return float
     */
    public function getLineFxRate()
    {
      return $this->lineFxRate;
    }

    /**
     * @param float $lineFxRate
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setLineFxRate($lineFxRate)
    {
      $this->lineFxRate = $lineFxRate;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLine
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
