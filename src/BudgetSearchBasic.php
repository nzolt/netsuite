<?php

namespace Nzolt\NetSuite;

class BudgetSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $account
     */
    protected $account = null;

    /**
     * @var SearchDoubleField $amount
     */
    protected $amount = null;

    /**
     * @var SearchMultiSelectField $category
     */
    protected $category = null;

    /**
     * @var SearchMultiSelectField $class
     */
    protected $class = null;

    /**
     * @var SearchMultiSelectField $currency
     */
    protected $currency = null;

    /**
     * @var SearchMultiSelectField $customer
     */
    protected $customer = null;

    /**
     * @var SearchMultiSelectField $department
     */
    protected $department = null;

    /**
     * @var SearchBooleanField $global
     */
    protected $global = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchMultiSelectField $year
     */
    protected $year = null;

    /**
     * @var SearchMultiSelectField $year2
     */
    protected $year2 = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param SearchMultiSelectField $account
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param SearchDoubleField $amount
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param SearchMultiSelectField $category
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param SearchMultiSelectField $customer
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getGlobal()
    {
      return $this->global;
    }

    /**
     * @param SearchBooleanField $global
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setGlobal($global)
    {
      $this->global = $global;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getYear()
    {
      return $this->year;
    }

    /**
     * @param SearchMultiSelectField $year
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setYear($year)
    {
      $this->year = $year;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getYear2()
    {
      return $this->year2;
    }

    /**
     * @param SearchMultiSelectField $year2
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setYear2($year2)
    {
      $this->year2 = $year2;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\BudgetSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
