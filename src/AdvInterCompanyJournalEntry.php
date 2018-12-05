<?php

namespace Nzolt\NetSuite;

class AdvInterCompanyJournalEntry extends Record
{

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var \DateTime $reversalDate
     */
    protected $reversalDate = null;

    /**
     * @var boolean $reversalDefer
     */
    protected $reversalDefer = null;

    /**
     * @var RecordRef $parentExpenseAlloc
     */
    protected $parentExpenseAlloc = null;

    /**
     * @var boolean $isBookSpecific
     */
    protected $isBookSpecific = null;

    /**
     * @var RecordRef $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var string $reversalEntry
     */
    protected $reversalEntry = null;

    /**
     * @var RecordRef $createdFrom
     */
    protected $createdFrom = null;

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
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var boolean $approved
     */
    protected $approved = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var boolean $performAutoBalance
     */
    protected $performAutoBalance = null;

    /**
     * @var AdvInterCompanyJournalEntryLineList $lineList
     */
    protected $lineList = null;

    /**
     * @var AdvInterCompanyJournalEntryAccountingBookDetailList $accountingBookDetailList
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
     * @return RecordRef
     */
    public function getPostingPeriod()
    {
      return $this->postingPeriod;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
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
     * @return RecordRef
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param RecordRef $currency
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReversalDate()
    {
      if ($this->reversalDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->reversalDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $reversalDate
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setReversalDate(\DateTime $reversalDate = null)
    {
      if ($reversalDate == null) {
       $this->reversalDate = null;
      } else {
        $this->reversalDate = $reversalDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReversalDefer()
    {
      return $this->reversalDefer;
    }

    /**
     * @param boolean $reversalDefer
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setReversalDefer($reversalDefer)
    {
      $this->reversalDefer = $reversalDefer;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentExpenseAlloc()
    {
      return $this->parentExpenseAlloc;
    }

    /**
     * @param RecordRef $parentExpenseAlloc
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setParentExpenseAlloc($parentExpenseAlloc)
    {
      $this->parentExpenseAlloc = $parentExpenseAlloc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBookSpecific()
    {
      return $this->isBookSpecific;
    }

    /**
     * @param boolean $isBookSpecific
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setIsBookSpecific($isBookSpecific)
    {
      $this->isBookSpecific = $isBookSpecific;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccountingBook()
    {
      return $this->accountingBook;
    }

    /**
     * @param RecordRef $accountingBook
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setAccountingBook($accountingBook)
    {
      $this->accountingBook = $accountingBook;
      return $this;
    }

    /**
     * @return string
     */
    public function getReversalEntry()
    {
      return $this->reversalEntry;
    }

    /**
     * @param string $reversalEntry
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setReversalEntry($reversalEntry)
    {
      $this->reversalEntry = $reversalEntry;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setCreatedFrom($createdFrom)
    {
      $this->createdFrom = $createdFrom;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApproved()
    {
      return $this->approved;
    }

    /**
     * @param boolean $approved
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setApproved($approved)
    {
      $this->approved = $approved;
      return $this;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
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
     * @return boolean
     */
    public function getPerformAutoBalance()
    {
      return $this->performAutoBalance;
    }

    /**
     * @param boolean $performAutoBalance
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setPerformAutoBalance($performAutoBalance)
    {
      $this->performAutoBalance = $performAutoBalance;
      return $this;
    }

    /**
     * @return AdvInterCompanyJournalEntryLineList
     */
    public function getLineList()
    {
      return $this->lineList;
    }

    /**
     * @param AdvInterCompanyJournalEntryLineList $lineList
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setLineList($lineList)
    {
      $this->lineList = $lineList;
      return $this;
    }

    /**
     * @return AdvInterCompanyJournalEntryAccountingBookDetailList
     */
    public function getAccountingBookDetailList()
    {
      return $this->accountingBookDetailList;
    }

    /**
     * @param AdvInterCompanyJournalEntryAccountingBookDetailList $accountingBookDetailList
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntry
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
