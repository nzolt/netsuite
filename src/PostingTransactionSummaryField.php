<?php

namespace Nzolt\NetSuite;

class PostingTransactionSummaryField
{

    /**
     * @var boolean $period
     */
    protected $period = null;

    /**
     * @var boolean $account
     */
    protected $account = null;

    /**
     * @var boolean $parentItem
     */
    protected $parentItem = null;

    /**
     * @var boolean $item
     */
    protected $item = null;

    /**
     * @var boolean $entity
     */
    protected $entity = null;

    /**
     * @var boolean $department
     */
    protected $department = null;

    /**
     * @var boolean $class
     */
    protected $class = null;

    /**
     * @var boolean $location
     */
    protected $location = null;

    /**
     * @var boolean $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var boolean $book
     */
    protected $book = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getPeriod()
    {
      return $this->period;
    }

    /**
     * @param boolean $period
     * @return \Nzolt\NetSuite\PostingTransactionSummaryField
     */
    public function setPeriod($period)
    {
      $this->period = $period;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param boolean $account
     * @return \Nzolt\NetSuite\PostingTransactionSummaryField
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getParentItem()
    {
      return $this->parentItem;
    }

    /**
     * @param boolean $parentItem
     * @return \Nzolt\NetSuite\PostingTransactionSummaryField
     */
    public function setParentItem($parentItem)
    {
      $this->parentItem = $parentItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param boolean $item
     * @return \Nzolt\NetSuite\PostingTransactionSummaryField
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param boolean $entity
     * @return \Nzolt\NetSuite\PostingTransactionSummaryField
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param boolean $department
     * @return \Nzolt\NetSuite\PostingTransactionSummaryField
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param boolean $class
     * @return \Nzolt\NetSuite\PostingTransactionSummaryField
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param boolean $location
     * @return \Nzolt\NetSuite\PostingTransactionSummaryField
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param boolean $subsidiary
     * @return \Nzolt\NetSuite\PostingTransactionSummaryField
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBook()
    {
      return $this->book;
    }

    /**
     * @param boolean $book
     * @return \Nzolt\NetSuite\PostingTransactionSummaryField
     */
    public function setBook($book)
    {
      $this->book = $book;
      return $this;
    }

}
