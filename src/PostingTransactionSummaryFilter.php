<?php

namespace Nzolt\NetSuite;

class PostingTransactionSummaryFilter
{

    /**
     * @var RecordRefList $period
     */
    protected $period = null;

    /**
     * @var RecordRefList $account
     */
    protected $account = null;

    /**
     * @var RecordRefList $parentItem
     */
    protected $parentItem = null;

    /**
     * @var RecordRefList $item
     */
    protected $item = null;

    /**
     * @var RecordRefList $entity
     */
    protected $entity = null;

    /**
     * @var RecordRefList $department
     */
    protected $department = null;

    /**
     * @var RecordRefList $class
     */
    protected $class = null;

    /**
     * @var RecordRefList $location
     */
    protected $location = null;

    /**
     * @var RecordRefList $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRefList $book
     */
    protected $book = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRefList
     */
    public function getPeriod()
    {
      return $this->period;
    }

    /**
     * @param RecordRefList $period
     * @return \Nzolt\NetSuite\PostingTransactionSummaryFilter
     */
    public function setPeriod($period)
    {
      $this->period = $period;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param RecordRefList $account
     * @return \Nzolt\NetSuite\PostingTransactionSummaryFilter
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getParentItem()
    {
      return $this->parentItem;
    }

    /**
     * @param RecordRefList $parentItem
     * @return \Nzolt\NetSuite\PostingTransactionSummaryFilter
     */
    public function setParentItem($parentItem)
    {
      $this->parentItem = $parentItem;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RecordRefList $item
     * @return \Nzolt\NetSuite\PostingTransactionSummaryFilter
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param RecordRefList $entity
     * @return \Nzolt\NetSuite\PostingTransactionSummaryFilter
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param RecordRefList $department
     * @return \Nzolt\NetSuite\PostingTransactionSummaryFilter
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param RecordRefList $class
     * @return \Nzolt\NetSuite\PostingTransactionSummaryFilter
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRefList $location
     * @return \Nzolt\NetSuite\PostingTransactionSummaryFilter
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param RecordRefList $subsidiary
     * @return \Nzolt\NetSuite\PostingTransactionSummaryFilter
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getBook()
    {
      return $this->book;
    }

    /**
     * @param RecordRefList $book
     * @return \Nzolt\NetSuite\PostingTransactionSummaryFilter
     */
    public function setBook($book)
    {
      $this->book = $book;
      return $this;
    }

}
