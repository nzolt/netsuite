<?php

namespace Nzolt\NetSuite;

class PurchaseRequisitionExpense
{

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var RecordRef $category
     */
    protected $category = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var boolean $isClosed
     */
    protected $isClosed = null;

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var RecordRef $poVendor
     */
    protected $poVendor = null;

    /**
     * @var float $estimatedAmount
     */
    protected $estimatedAmount = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var RecordRefList $linkedOrderList
     */
    protected $linkedOrderList = null;

    /**
     * @var string $linkedOrderStatus
     */
    protected $linkedOrderStatus = null;

    /**
     * @var boolean $isBillable
     */
    protected $isBillable = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param RecordRef $category
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
     */
    public function setCategory($category)
    {
      $this->category = $category;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsClosed()
    {
      return $this->isClosed;
    }

    /**
     * @param boolean $isClosed
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
     */
    public function setIsClosed($isClosed)
    {
      $this->isClosed = $isClosed;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPoVendor()
    {
      return $this->poVendor;
    }

    /**
     * @param RecordRef $poVendor
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
     */
    public function setPoVendor($poVendor)
    {
      $this->poVendor = $poVendor;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedAmount()
    {
      return $this->estimatedAmount;
    }

    /**
     * @param float $estimatedAmount
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
     */
    public function setEstimatedAmount($estimatedAmount)
    {
      $this->estimatedAmount = $estimatedAmount;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param RecordRef $customer
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getLinkedOrderList()
    {
      return $this->linkedOrderList;
    }

    /**
     * @param RecordRefList $linkedOrderList
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
     */
    public function setLinkedOrderList($linkedOrderList)
    {
      $this->linkedOrderList = $linkedOrderList;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkedOrderStatus()
    {
      return $this->linkedOrderStatus;
    }

    /**
     * @param string $linkedOrderStatus
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
     */
    public function setLinkedOrderStatus($linkedOrderStatus)
    {
      $this->linkedOrderStatus = $linkedOrderStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBillable()
    {
      return $this->isBillable;
    }

    /**
     * @param boolean $isBillable
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpense
     */
    public function setIsBillable($isBillable)
    {
      $this->isBillable = $isBillable;
      return $this;
    }

}
