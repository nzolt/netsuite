<?php

namespace Nzolt\NetSuite;

class CustomTransactionLine
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
     * @var float $amount
     */
    protected $amount = null;

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
     * @var RecordRef $location
     */
    protected $location = null;

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
     * @return \Nzolt\NetSuite\CustomTransactionLine
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
     * @return \Nzolt\NetSuite\CustomTransactionLine
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
     * @return \Nzolt\NetSuite\CustomTransactionLine
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
     * @return \Nzolt\NetSuite\CustomTransactionLine
     */
    public function setCredit($credit)
    {
      $this->credit = $credit;
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
     * @return \Nzolt\NetSuite\CustomTransactionLine
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
     * @return \Nzolt\NetSuite\CustomTransactionLine
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
     * @return \Nzolt\NetSuite\CustomTransactionLine
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
     * @return \Nzolt\NetSuite\CustomTransactionLine
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
     * @return \Nzolt\NetSuite\CustomTransactionLine
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
     * @return \Nzolt\NetSuite\CustomTransactionLine
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\CustomTransactionLine
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
