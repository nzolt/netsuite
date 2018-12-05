<?php

namespace Nzolt\NetSuite;

class StatisticalJournalEntryLine
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
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $scheduleNum
     */
    protected $scheduleNum = null;

    /**
     * @var float $debit
     */
    protected $debit = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $lineUnit
     */
    protected $lineUnit = null;

    /**
     * @var string $previewDebit
     */
    protected $previewDebit = null;

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
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLine
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLine
     */
    public function setLine($line)
    {
      $this->line = $line;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLine
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLine
     */
    public function setScheduleNum($scheduleNum)
    {
      $this->scheduleNum = $scheduleNum;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLine
     */
    public function setDebit($debit)
    {
      $this->debit = $debit;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLine
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLine
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLine
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLine
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLineUnit()
    {
      return $this->lineUnit;
    }

    /**
     * @param RecordRef $lineUnit
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLine
     */
    public function setLineUnit($lineUnit)
    {
      $this->lineUnit = $lineUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreviewDebit()
    {
      return $this->previewDebit;
    }

    /**
     * @param string $previewDebit
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLine
     */
    public function setPreviewDebit($previewDebit)
    {
      $this->previewDebit = $previewDebit;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLine
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
