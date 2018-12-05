<?php

namespace Nzolt\NetSuite;

class UsageSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $customer
     */
    protected $customer = null;

    /**
     * @var SearchDateField $date
     */
    protected $date = null;

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
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchStringField $memo
     */
    protected $memo = null;

    /**
     * @var SearchDoubleField $quantity
     */
    protected $quantity = null;

    /**
     * @var SearchMultiSelectField $subscription
     */
    protected $subscription = null;

    /**
     * @var SearchMultiSelectField $subscriptionLine
     */
    protected $subscriptionLine = null;

    /**
     * @var SearchMultiSelectField $subscriptionPlan
     */
    protected $subscriptionPlan = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\UsageSearchBasic
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param SearchDateField $date
     * @return \Nzolt\NetSuite\UsageSearchBasic
     */
    public function setDate($date)
    {
      $this->date = $date;
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
     * @return \Nzolt\NetSuite\UsageSearchBasic
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
     * @return \Nzolt\NetSuite\UsageSearchBasic
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
     * @return \Nzolt\NetSuite\UsageSearchBasic
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
     * @return \Nzolt\NetSuite\UsageSearchBasic
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
     * @return \Nzolt\NetSuite\UsageSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchStringField $memo
     * @return \Nzolt\NetSuite\UsageSearchBasic
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\UsageSearchBasic
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubscription()
    {
      return $this->subscription;
    }

    /**
     * @param SearchMultiSelectField $subscription
     * @return \Nzolt\NetSuite\UsageSearchBasic
     */
    public function setSubscription($subscription)
    {
      $this->subscription = $subscription;
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
     * @return \Nzolt\NetSuite\UsageSearchBasic
     */
    public function setSubscriptionLine($subscriptionLine)
    {
      $this->subscriptionLine = $subscriptionLine;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubscriptionPlan()
    {
      return $this->subscriptionPlan;
    }

    /**
     * @param SearchMultiSelectField $subscriptionPlan
     * @return \Nzolt\NetSuite\UsageSearchBasic
     */
    public function setSubscriptionPlan($subscriptionPlan)
    {
      $this->subscriptionPlan = $subscriptionPlan;
      return $this;
    }

}
