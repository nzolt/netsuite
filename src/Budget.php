<?php

namespace Nzolt\NetSuite;

class Budget extends Record
{

    /**
     * @var RecordRef $year
     */
    protected $year = null;

    /**
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $category
     */
    protected $category = null;

    /**
     * @var BudgetBudgetType $budgetType
     */
    protected $budgetType = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var float $periodAmount1
     */
    protected $periodAmount1 = null;

    /**
     * @var float $periodAmount2
     */
    protected $periodAmount2 = null;

    /**
     * @var float $periodAmount3
     */
    protected $periodAmount3 = null;

    /**
     * @var float $periodAmount4
     */
    protected $periodAmount4 = null;

    /**
     * @var float $periodAmount5
     */
    protected $periodAmount5 = null;

    /**
     * @var float $periodAmount6
     */
    protected $periodAmount6 = null;

    /**
     * @var float $periodAmount7
     */
    protected $periodAmount7 = null;

    /**
     * @var float $periodAmount8
     */
    protected $periodAmount8 = null;

    /**
     * @var float $periodAmount9
     */
    protected $periodAmount9 = null;

    /**
     * @var float $periodAmount10
     */
    protected $periodAmount10 = null;

    /**
     * @var float $periodAmount11
     */
    protected $periodAmount11 = null;

    /**
     * @var float $periodAmount12
     */
    protected $periodAmount12 = null;

    /**
     * @var float $periodAmount13
     */
    protected $periodAmount13 = null;

    /**
     * @var float $periodAmount14
     */
    protected $periodAmount14 = null;

    /**
     * @var float $periodAmount15
     */
    protected $periodAmount15 = null;

    /**
     * @var float $periodAmount16
     */
    protected $periodAmount16 = null;

    /**
     * @var float $periodAmount17
     */
    protected $periodAmount17 = null;

    /**
     * @var float $periodAmount18
     */
    protected $periodAmount18 = null;

    /**
     * @var float $periodAmount19
     */
    protected $periodAmount19 = null;

    /**
     * @var float $periodAmount20
     */
    protected $periodAmount20 = null;

    /**
     * @var float $periodAmount21
     */
    protected $periodAmount21 = null;

    /**
     * @var float $periodAmount22
     */
    protected $periodAmount22 = null;

    /**
     * @var float $periodAmount23
     */
    protected $periodAmount23 = null;

    /**
     * @var float $periodAmount24
     */
    protected $periodAmount24 = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @param string $internalId
     */
    public function __construct($internalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
    }

    /**
     * @return RecordRef
     */
    public function getYear()
    {
      return $this->year;
    }

    /**
     * @param RecordRef $year
     * @return \Nzolt\NetSuite\Budget
     */
    public function setYear($year)
    {
      $this->year = $year;
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
     * @return \Nzolt\NetSuite\Budget
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
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
     * @return \Nzolt\NetSuite\Budget
     */
    public function setItem($item)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\Budget
     */
    public function setClass($class)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\Budget
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\Budget
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\Budget
     */
    public function setAccount($account)
    {
      $this->account = $account;
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
     * @return \Nzolt\NetSuite\Budget
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\Budget
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return BudgetBudgetType
     */
    public function getBudgetType()
    {
      return $this->budgetType;
    }

    /**
     * @param BudgetBudgetType $budgetType
     * @return \Nzolt\NetSuite\Budget
     */
    public function setBudgetType($budgetType)
    {
      $this->budgetType = $budgetType;
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
     * @return \Nzolt\NetSuite\Budget
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount1()
    {
      return $this->periodAmount1;
    }

    /**
     * @param float $periodAmount1
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount1($periodAmount1)
    {
      $this->periodAmount1 = $periodAmount1;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount2()
    {
      return $this->periodAmount2;
    }

    /**
     * @param float $periodAmount2
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount2($periodAmount2)
    {
      $this->periodAmount2 = $periodAmount2;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount3()
    {
      return $this->periodAmount3;
    }

    /**
     * @param float $periodAmount3
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount3($periodAmount3)
    {
      $this->periodAmount3 = $periodAmount3;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount4()
    {
      return $this->periodAmount4;
    }

    /**
     * @param float $periodAmount4
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount4($periodAmount4)
    {
      $this->periodAmount4 = $periodAmount4;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount5()
    {
      return $this->periodAmount5;
    }

    /**
     * @param float $periodAmount5
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount5($periodAmount5)
    {
      $this->periodAmount5 = $periodAmount5;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount6()
    {
      return $this->periodAmount6;
    }

    /**
     * @param float $periodAmount6
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount6($periodAmount6)
    {
      $this->periodAmount6 = $periodAmount6;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount7()
    {
      return $this->periodAmount7;
    }

    /**
     * @param float $periodAmount7
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount7($periodAmount7)
    {
      $this->periodAmount7 = $periodAmount7;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount8()
    {
      return $this->periodAmount8;
    }

    /**
     * @param float $periodAmount8
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount8($periodAmount8)
    {
      $this->periodAmount8 = $periodAmount8;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount9()
    {
      return $this->periodAmount9;
    }

    /**
     * @param float $periodAmount9
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount9($periodAmount9)
    {
      $this->periodAmount9 = $periodAmount9;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount10()
    {
      return $this->periodAmount10;
    }

    /**
     * @param float $periodAmount10
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount10($periodAmount10)
    {
      $this->periodAmount10 = $periodAmount10;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount11()
    {
      return $this->periodAmount11;
    }

    /**
     * @param float $periodAmount11
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount11($periodAmount11)
    {
      $this->periodAmount11 = $periodAmount11;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount12()
    {
      return $this->periodAmount12;
    }

    /**
     * @param float $periodAmount12
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount12($periodAmount12)
    {
      $this->periodAmount12 = $periodAmount12;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount13()
    {
      return $this->periodAmount13;
    }

    /**
     * @param float $periodAmount13
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount13($periodAmount13)
    {
      $this->periodAmount13 = $periodAmount13;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount14()
    {
      return $this->periodAmount14;
    }

    /**
     * @param float $periodAmount14
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount14($periodAmount14)
    {
      $this->periodAmount14 = $periodAmount14;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount15()
    {
      return $this->periodAmount15;
    }

    /**
     * @param float $periodAmount15
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount15($periodAmount15)
    {
      $this->periodAmount15 = $periodAmount15;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount16()
    {
      return $this->periodAmount16;
    }

    /**
     * @param float $periodAmount16
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount16($periodAmount16)
    {
      $this->periodAmount16 = $periodAmount16;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount17()
    {
      return $this->periodAmount17;
    }

    /**
     * @param float $periodAmount17
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount17($periodAmount17)
    {
      $this->periodAmount17 = $periodAmount17;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount18()
    {
      return $this->periodAmount18;
    }

    /**
     * @param float $periodAmount18
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount18($periodAmount18)
    {
      $this->periodAmount18 = $periodAmount18;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount19()
    {
      return $this->periodAmount19;
    }

    /**
     * @param float $periodAmount19
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount19($periodAmount19)
    {
      $this->periodAmount19 = $periodAmount19;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount20()
    {
      return $this->periodAmount20;
    }

    /**
     * @param float $periodAmount20
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount20($periodAmount20)
    {
      $this->periodAmount20 = $periodAmount20;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount21()
    {
      return $this->periodAmount21;
    }

    /**
     * @param float $periodAmount21
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount21($periodAmount21)
    {
      $this->periodAmount21 = $periodAmount21;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount22()
    {
      return $this->periodAmount22;
    }

    /**
     * @param float $periodAmount22
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount22($periodAmount22)
    {
      $this->periodAmount22 = $periodAmount22;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount23()
    {
      return $this->periodAmount23;
    }

    /**
     * @param float $periodAmount23
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount23($periodAmount23)
    {
      $this->periodAmount23 = $periodAmount23;
      return $this;
    }

    /**
     * @return float
     */
    public function getPeriodAmount24()
    {
      return $this->periodAmount24;
    }

    /**
     * @param float $periodAmount24
     * @return \Nzolt\NetSuite\Budget
     */
    public function setPeriodAmount24($periodAmount24)
    {
      $this->periodAmount24 = $periodAmount24;
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
     * @return \Nzolt\NetSuite\Budget
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Nzolt\NetSuite\Budget
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
     * @return \Nzolt\NetSuite\Budget
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
