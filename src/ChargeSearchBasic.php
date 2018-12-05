<?php

namespace Nzolt\NetSuite;

class ChargeSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchDoubleField $amount
     */
    protected $amount = null;

    /**
     * @var SearchMultiSelectField $billingAccount
     */
    protected $billingAccount = null;

    /**
     * @var SearchMultiSelectField $billingItem
     */
    protected $billingItem = null;

    /**
     * @var SearchMultiSelectField $billTo
     */
    protected $billTo = null;

    /**
     * @var SearchDateField $chargeDate
     */
    protected $chargeDate = null;

    /**
     * @var SearchMultiSelectField $class
     */
    protected $class = null;

    /**
     * @var SearchMultiSelectField $chargeType
     */
    protected $chargeType = null;

    /**
     * @var SearchDateField $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchMultiSelectField $currency
     */
    protected $currency = null;

    /**
     * @var SearchMultiSelectField $department
     */
    protected $department = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchDateField $modifiedDate
     */
    protected $modifiedDate = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var PostingPeriodDate $postingPeriodRelative
     */
    protected $postingPeriodRelative = null;

    /**
     * @var SearchDoubleField $quantity
     */
    protected $quantity = null;

    /**
     * @var SearchDoubleField $rate
     */
    protected $rate = null;

    /**
     * @var SearchMultiSelectField $rule
     */
    protected $rule = null;

    /**
     * @var SearchStringField $runId
     */
    protected $runId = null;

    /**
     * @var SearchLongField $salesOrder
     */
    protected $salesOrder = null;

    /**
     * @var SearchEnumMultiSelectField $stage
     */
    protected $stage = null;

    /**
     * @var SearchMultiSelectField $subscriptionLine
     */
    protected $subscriptionLine = null;

    /**
     * @var SearchEnumMultiSelectField $use
     */
    protected $use = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingAccount()
    {
      return $this->billingAccount;
    }

    /**
     * @param SearchMultiSelectField $billingAccount
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setBillingAccount($billingAccount)
    {
      $this->billingAccount = $billingAccount;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingItem()
    {
      return $this->billingItem;
    }

    /**
     * @param SearchMultiSelectField $billingItem
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setBillingItem($billingItem)
    {
      $this->billingItem = $billingItem;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillTo()
    {
      return $this->billTo;
    }

    /**
     * @param SearchMultiSelectField $billTo
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setBillTo($billTo)
    {
      $this->billTo = $billTo;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getChargeDate()
    {
      return $this->chargeDate;
    }

    /**
     * @param SearchDateField $chargeDate
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setChargeDate($chargeDate)
    {
      $this->chargeDate = $chargeDate;
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
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getChargeType()
    {
      return $this->chargeType;
    }

    /**
     * @param SearchMultiSelectField $chargeType
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setChargeType($chargeType)
    {
      $this->chargeType = $chargeType;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreatedDate()
    {
      return $this->createdDate;
    }

    /**
     * @param SearchDateField $createdDate
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setCreatedDate($createdDate)
    {
      $this->createdDate = $createdDate;
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
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
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
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
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
     * @return \Nzolt\NetSuite\ChargeSearchBasic
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
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
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
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getModifiedDate()
    {
      return $this->modifiedDate;
    }

    /**
     * @param SearchDateField $modifiedDate
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setModifiedDate($modifiedDate)
    {
      $this->modifiedDate = $modifiedDate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod()
    {
      return $this->postingPeriod;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
      return $this;
    }

    /**
     * @return PostingPeriodDate
     */
    public function getPostingPeriodRelative()
    {
      return $this->postingPeriodRelative;
    }

    /**
     * @param PostingPeriodDate $postingPeriodRelative
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setPostingPeriodRelative($postingPeriodRelative)
    {
      $this->postingPeriodRelative = $postingPeriodRelative;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param SearchDoubleField $quantity
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param SearchDoubleField $rate
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRule()
    {
      return $this->rule;
    }

    /**
     * @param SearchMultiSelectField $rule
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setRule($rule)
    {
      $this->rule = $rule;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getRunId()
    {
      return $this->runId;
    }

    /**
     * @param SearchStringField $runId
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setRunId($runId)
    {
      $this->runId = $runId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getSalesOrder()
    {
      return $this->salesOrder;
    }

    /**
     * @param SearchLongField $salesOrder
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setSalesOrder($salesOrder)
    {
      $this->salesOrder = $salesOrder;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStage()
    {
      return $this->stage;
    }

    /**
     * @param SearchEnumMultiSelectField $stage
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setStage($stage)
    {
      $this->stage = $stage;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubscriptionLine()
    {
      return $this->subscriptionLine;
    }

    /**
     * @param SearchMultiSelectField $subscriptionLine
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setSubscriptionLine($subscriptionLine)
    {
      $this->subscriptionLine = $subscriptionLine;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getUse()
    {
      return $this->use;
    }

    /**
     * @param SearchEnumMultiSelectField $use
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setUse($use)
    {
      $this->use = $use;
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
     * @return \Nzolt\NetSuite\ChargeSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
