<?php

namespace Nzolt\NetSuite;

class BudgetSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $account
     */
    protected $account = null;

    /**
     * @var SearchColumnDoubleField[] $amount
     */
    protected $amount = null;

    /**
     * @var SearchColumnStringField[] $category
     */
    protected $category = null;

    /**
     * @var SearchColumnStringField[] $class
     */
    protected $class = null;

    /**
     * @var SearchColumnStringField[] $classnohierarchy
     */
    protected $classnohierarchy = null;

    /**
     * @var SearchColumnStringField[] $currency
     */
    protected $currency = null;

    /**
     * @var SearchColumnStringField[] $customer
     */
    protected $customer = null;

    /**
     * @var SearchColumnStringField[] $department
     */
    protected $department = null;

    /**
     * @var SearchColumnStringField[] $departmentnohierarchy
     */
    protected $departmentnohierarchy = null;

    /**
     * @var SearchColumnBooleanField[] $global
     */
    protected $global = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnStringField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnStringField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnStringField[] $locationnohierarchy
     */
    protected $locationnohierarchy = null;

    /**
     * @var SearchColumnStringField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnStringField[] $subsidiarynohierarchy
     */
    protected $subsidiarynohierarchy = null;

    /**
     * @var SearchColumnStringField[] $year
     */
    protected $year = null;

    /**
     * @var SearchColumnStringField[] $year2
     */
    protected $year2 = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param SearchColumnStringField[] $account
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setAccount(array $account = null)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param SearchColumnDoubleField[] $amount
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setAmount(array $amount = null)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param SearchColumnStringField[] $category
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setCategory(array $category = null)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchColumnStringField[] $class
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setClass(array $class = null)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getClassnohierarchy()
    {
      return $this->classnohierarchy;
    }

    /**
     * @param SearchColumnStringField[] $classnohierarchy
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setClassnohierarchy(array $classnohierarchy = null)
    {
      $this->classnohierarchy = $classnohierarchy;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchColumnStringField[] $currency
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setCurrency(array $currency = null)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param SearchColumnStringField[] $customer
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setCustomer(array $customer = null)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchColumnStringField[] $department
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setDepartment(array $department = null)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDepartmentnohierarchy()
    {
      return $this->departmentnohierarchy;
    }

    /**
     * @param SearchColumnStringField[] $departmentnohierarchy
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setDepartmentnohierarchy(array $departmentnohierarchy = null)
    {
      $this->departmentnohierarchy = $departmentnohierarchy;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getGlobal()
    {
      return $this->global;
    }

    /**
     * @param SearchColumnBooleanField[] $global
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setGlobal(array $global = null)
    {
      $this->global = $global;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchColumnStringField[] $item
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnStringField[] $location
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocationnohierarchy()
    {
      return $this->locationnohierarchy;
    }

    /**
     * @param SearchColumnStringField[] $locationnohierarchy
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setLocationnohierarchy(array $locationnohierarchy = null)
    {
      $this->locationnohierarchy = $locationnohierarchy;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchColumnStringField[] $subsidiary
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSubsidiarynohierarchy()
    {
      return $this->subsidiarynohierarchy;
    }

    /**
     * @param SearchColumnStringField[] $subsidiarynohierarchy
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setSubsidiarynohierarchy(array $subsidiarynohierarchy = null)
    {
      $this->subsidiarynohierarchy = $subsidiarynohierarchy;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getYear()
    {
      return $this->year;
    }

    /**
     * @param SearchColumnStringField[] $year
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setYear(array $year = null)
    {
      $this->year = $year;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getYear2()
    {
      return $this->year2;
    }

    /**
     * @param SearchColumnStringField[] $year2
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setYear2(array $year2 = null)
    {
      $this->year2 = $year2;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\BudgetSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
