<?php

namespace Nzolt\NetSuite;

class StatisticalJournalEntry extends Record
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
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var RecordRef $parentExpenseAlloc
     */
    protected $parentExpenseAlloc = null;

    /**
     * @var boolean $approved
     */
    protected $approved = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var \DateTime $reversalDate
     */
    protected $reversalDate = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var boolean $reversalDefer
     */
    protected $reversalDefer = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $unitsType
     */
    protected $unitsType = null;

    /**
     * @var StatisticalJournalEntryLineList $lineList
     */
    protected $lineList = null;

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
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
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
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
     */
    public function setParentExpenseAlloc($parentExpenseAlloc)
    {
      $this->parentExpenseAlloc = $parentExpenseAlloc;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
     */
    public function setApproved($approved)
    {
      $this->approved = $approved;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
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
    public function getPostingPeriod()
    {
      return $this->postingPeriod;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
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
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
     */
    public function setReversalDefer($reversalDefer)
    {
      $this->reversalDefer = $reversalDefer;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnitsType()
    {
      return $this->unitsType;
    }

    /**
     * @param RecordRef $unitsType
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
     */
    public function setUnitsType($unitsType)
    {
      $this->unitsType = $unitsType;
      return $this;
    }

    /**
     * @return StatisticalJournalEntryLineList
     */
    public function getLineList()
    {
      return $this->lineList;
    }

    /**
     * @param StatisticalJournalEntryLineList $lineList
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
     */
    public function setLineList($lineList)
    {
      $this->lineList = $lineList;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntry
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
