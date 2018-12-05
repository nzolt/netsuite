<?php

namespace Nzolt\NetSuite;

class ExpenseReport extends Record
{

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var \DateTime $dueDate
     */
    protected $dueDate = null;

    /**
     * @var RecordRef $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var RecordRef $nextApprover
     */
    protected $nextApprover = null;

    /**
     * @var float $advance
     */
    protected $advance = null;

    /**
     * @var float $tax1Amt
     */
    protected $tax1Amt = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var boolean $complete
     */
    protected $complete = null;

    /**
     * @var boolean $supervisorApproval
     */
    protected $supervisorApproval = null;

    /**
     * @var boolean $accountingApproval
     */
    protected $accountingApproval = null;

    /**
     * @var boolean $useMultiCurrency
     */
    protected $useMultiCurrency = null;

    /**
     * @var float $tax2Amt
     */
    protected $tax2Amt = null;

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
     * @var ExpenseReportExpenseList $expenseList
     */
    protected $expenseList = null;

    /**
     * @var AccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setCreatedDate(\DateTime $createdDate = null)
    {
      if ($createdDate == null) {
       $this->createdDate = null;
      } else {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->lastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastModifiedDate
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate = null)
    {
      if ($lastModifiedDate == null) {
       $this->lastModifiedDate = null;
      } else {
        $this->lastModifiedDate = $lastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setAccount($account)
    {
      $this->account = $account;
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
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param RecordRef $subsidiary
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return string
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param string $tranId
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod()
    {
      return $this->postingPeriod;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTranDate()
    {
      if ($this->tranDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->tranDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $tranDate
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setTranDate(\DateTime $tranDate = null)
    {
      if ($tranDate == null) {
       $this->tranDate = null;
      } else {
        $this->tranDate = $tranDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
      if ($this->dueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dueDate
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setDueDate(\DateTime $dueDate = null)
    {
      if ($dueDate == null) {
       $this->dueDate = null;
      } else {
        $this->dueDate = $dueDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param RecordRef $approvalStatus
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param float $total
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNextApprover()
    {
      return $this->nextApprover;
    }

    /**
     * @param RecordRef $nextApprover
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setNextApprover($nextApprover)
    {
      $this->nextApprover = $nextApprover;
      return $this;
    }

    /**
     * @return float
     */
    public function getAdvance()
    {
      return $this->advance;
    }

    /**
     * @param float $advance
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setAdvance($advance)
    {
      $this->advance = $advance;
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
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setTax1Amt($tax1Amt)
    {
      $this->tax1Amt = $tax1Amt;
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
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getComplete()
    {
      return $this->complete;
    }

    /**
     * @param boolean $complete
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setComplete($complete)
    {
      $this->complete = $complete;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSupervisorApproval()
    {
      return $this->supervisorApproval;
    }

    /**
     * @param boolean $supervisorApproval
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setSupervisorApproval($supervisorApproval)
    {
      $this->supervisorApproval = $supervisorApproval;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAccountingApproval()
    {
      return $this->accountingApproval;
    }

    /**
     * @param boolean $accountingApproval
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setAccountingApproval($accountingApproval)
    {
      $this->accountingApproval = $accountingApproval;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseMultiCurrency()
    {
      return $this->useMultiCurrency;
    }

    /**
     * @param boolean $useMultiCurrency
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setUseMultiCurrency($useMultiCurrency)
    {
      $this->useMultiCurrency = $useMultiCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax2Amt()
    {
      return $this->tax2Amt;
    }

    /**
     * @param float $tax2Amt
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setTax2Amt($tax2Amt)
    {
      $this->tax2Amt = $tax2Amt;
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
     * @return \Nzolt\NetSuite\ExpenseReport
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
     * @return \Nzolt\NetSuite\ExpenseReport
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
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return ExpenseReportExpenseList
     */
    public function getExpenseList()
    {
      return $this->expenseList;
    }

    /**
     * @param ExpenseReportExpenseList $expenseList
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setExpenseList($expenseList)
    {
      $this->expenseList = $expenseList;
      return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList()
    {
      return $this->accountingBookDetailList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
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
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\ExpenseReport
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
