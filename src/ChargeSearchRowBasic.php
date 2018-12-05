<?php

namespace Nzolt\NetSuite;

class ChargeSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnDoubleField[] $amount
     */
    protected $amount = null;

    /**
     * @var SearchColumnSelectField[] $billingAccount
     */
    protected $billingAccount = null;

    /**
     * @var SearchColumnSelectField[] $billingItem
     */
    protected $billingItem = null;

    /**
     * @var SearchColumnSelectField[] $billTo
     */
    protected $billTo = null;

    /**
     * @var SearchColumnDateField[] $chargeDate
     */
    protected $chargeDate = null;

    /**
     * @var SearchColumnSelectField[] $class
     */
    protected $class = null;

    /**
     * @var SearchColumnSelectField[] $chargeType
     */
    protected $chargeType = null;

    /**
     * @var SearchColumnDateField[] $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchColumnSelectField[] $currency
     */
    protected $currency = null;

    /**
     * @var SearchColumnSelectField[] $department
     */
    protected $department = null;

    /**
     * @var SearchColumnStringField[] $description
     */
    protected $description = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnDateField[] $modifiedDate
     */
    protected $modifiedDate = null;

    /**
     * @var SearchColumnStringField[] $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var SearchColumnStringField[] $quantity
     */
    protected $quantity = null;

    /**
     * @var SearchColumnStringField[] $rate
     */
    protected $rate = null;

    /**
     * @var SearchColumnSelectField[] $rule
     */
    protected $rule = null;

    /**
     * @var SearchColumnStringField[] $runId
     */
    protected $runId = null;

    /**
     * @var SearchColumnStringField[] $salesOrder
     */
    protected $salesOrder = null;

    /**
     * @var SearchColumnEnumSelectField[] $stage
     */
    protected $stage = null;

    /**
     * @var SearchColumnSelectField[] $subscriptionLine
     */
    protected $subscriptionLine = null;

    /**
     * @var SearchColumnEnumSelectField[] $use
     */
    protected $use = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setAmount(array $amount = null)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingAccount()
    {
      return $this->billingAccount;
    }

    /**
     * @param SearchColumnSelectField[] $billingAccount
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setBillingAccount(array $billingAccount = null)
    {
      $this->billingAccount = $billingAccount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingItem()
    {
      return $this->billingItem;
    }

    /**
     * @param SearchColumnSelectField[] $billingItem
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setBillingItem(array $billingItem = null)
    {
      $this->billingItem = $billingItem;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillTo()
    {
      return $this->billTo;
    }

    /**
     * @param SearchColumnSelectField[] $billTo
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setBillTo(array $billTo = null)
    {
      $this->billTo = $billTo;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getChargeDate()
    {
      return $this->chargeDate;
    }

    /**
     * @param SearchColumnDateField[] $chargeDate
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setChargeDate(array $chargeDate = null)
    {
      $this->chargeDate = $chargeDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setClass(array $class = null)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getChargeType()
    {
      return $this->chargeType;
    }

    /**
     * @param SearchColumnSelectField[] $chargeType
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setChargeType(array $chargeType = null)
    {
      $this->chargeType = $chargeType;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate()
    {
      return $this->createdDate;
    }

    /**
     * @param SearchColumnDateField[] $createdDate
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setCreatedDate(array $createdDate = null)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchColumnSelectField[] $currency
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setCurrency(array $currency = null)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setDepartment(array $department = null)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setDescription(array $description = null)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
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
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getModifiedDate()
    {
      return $this->modifiedDate;
    }

    /**
     * @param SearchColumnDateField[] $modifiedDate
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setModifiedDate(array $modifiedDate = null)
    {
      $this->modifiedDate = $modifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPostingPeriod()
    {
      return $this->postingPeriod;
    }

    /**
     * @param SearchColumnStringField[] $postingPeriod
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setPostingPeriod(array $postingPeriod = null)
    {
      $this->postingPeriod = $postingPeriod;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param SearchColumnStringField[] $quantity
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setQuantity(array $quantity = null)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param SearchColumnStringField[] $rate
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setRate(array $rate = null)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRule()
    {
      return $this->rule;
    }

    /**
     * @param SearchColumnSelectField[] $rule
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setRule(array $rule = null)
    {
      $this->rule = $rule;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRunId()
    {
      return $this->runId;
    }

    /**
     * @param SearchColumnStringField[] $runId
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setRunId(array $runId = null)
    {
      $this->runId = $runId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSalesOrder()
    {
      return $this->salesOrder;
    }

    /**
     * @param SearchColumnStringField[] $salesOrder
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setSalesOrder(array $salesOrder = null)
    {
      $this->salesOrder = $salesOrder;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStage()
    {
      return $this->stage;
    }

    /**
     * @param SearchColumnEnumSelectField[] $stage
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setStage(array $stage = null)
    {
      $this->stage = $stage;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscriptionLine()
    {
      return $this->subscriptionLine;
    }

    /**
     * @param SearchColumnSelectField[] $subscriptionLine
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setSubscriptionLine(array $subscriptionLine = null)
    {
      $this->subscriptionLine = $subscriptionLine;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getUse()
    {
      return $this->use;
    }

    /**
     * @param SearchColumnEnumSelectField[] $use
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setUse(array $use = null)
    {
      $this->use = $use;
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
     * @return \Nzolt\NetSuite\ChargeSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
