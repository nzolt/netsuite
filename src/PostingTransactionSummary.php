<?php

namespace Nzolt\NetSuite;

class PostingTransactionSummary
{

    /**
     * @var RecordRef $period
     */
    protected $period = null;

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var RecordRef $parentItem
     */
    protected $parentItem = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

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
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $book
     */
    protected $book = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @param float $amount
     */
    public function __construct($amount)
    {
      $this->amount = $amount;
    }

    /**
     * @return RecordRef
     */
    public function getPeriod()
    {
      return $this->period;
    }

    /**
     * @param RecordRef $period
     * @return \Nzolt\NetSuite\PostingTransactionSummary
     */
    public function setPeriod($period)
    {
      $this->period = $period;
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
     * @return \Nzolt\NetSuite\PostingTransactionSummary
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentItem()
    {
      return $this->parentItem;
    }

    /**
     * @param RecordRef $parentItem
     * @return \Nzolt\NetSuite\PostingTransactionSummary
     */
    public function setParentItem($parentItem)
    {
      $this->parentItem = $parentItem;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RecordRef $item
     * @return \Nzolt\NetSuite\PostingTransactionSummary
     */
    public function setItem($item)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\PostingTransactionSummary
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
     * @return \Nzolt\NetSuite\PostingTransactionSummary
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
     * @return \Nzolt\NetSuite\PostingTransactionSummary
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
     * @return \Nzolt\NetSuite\PostingTransactionSummary
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
     * @return \Nzolt\NetSuite\PostingTransactionSummary
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBook()
    {
      return $this->book;
    }

    /**
     * @param RecordRef $book
     * @return \Nzolt\NetSuite\PostingTransactionSummary
     */
    public function setBook($book)
    {
      $this->book = $book;
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
     * @return \Nzolt\NetSuite\PostingTransactionSummary
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
