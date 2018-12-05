<?php

namespace Nzolt\NetSuite;

class UsageSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $customer
     */
    protected $customer = null;

    /**
     * @var SearchColumnDateField[] $date
     */
    protected $date = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnSelectField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnStringField[] $memo
     */
    protected $memo = null;

    /**
     * @var SearchColumnDoubleField[] $quantity
     */
    protected $quantity = null;

    /**
     * @var SearchColumnSelectField[] $subscription
     */
    protected $subscription = null;

    /**
     * @var SearchColumnSelectField[] $subscriptionLine
     */
    protected $subscriptionLine = null;

    /**
     * @var SearchColumnSelectField[] $subscriptionPlan
     */
    protected $subscriptionPlan = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param SearchColumnSelectField[] $customer
     * @return \Nzolt\NetSuite\UsageSearchRowBasic
     */
    public function setCustomer(array $customer = null)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param SearchColumnDateField[] $date
     * @return \Nzolt\NetSuite\UsageSearchRowBasic
     */
    public function setDate(array $date = null)
    {
      $this->date = $date;
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
     * @return \Nzolt\NetSuite\UsageSearchRowBasic
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
     * @return \Nzolt\NetSuite\UsageSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return \Nzolt\NetSuite\UsageSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return \Nzolt\NetSuite\UsageSearchRowBasic
     */
    public function setMemo(array $memo = null)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param SearchColumnDoubleField[] $quantity
     * @return \Nzolt\NetSuite\UsageSearchRowBasic
     */
    public function setQuantity(array $quantity = null)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscription()
    {
      return $this->subscription;
    }

    /**
     * @param SearchColumnSelectField[] $subscription
     * @return \Nzolt\NetSuite\UsageSearchRowBasic
     */
    public function setSubscription(array $subscription = null)
    {
      $this->subscription = $subscription;
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
     * @return \Nzolt\NetSuite\UsageSearchRowBasic
     */
    public function setSubscriptionLine(array $subscriptionLine = null)
    {
      $this->subscriptionLine = $subscriptionLine;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscriptionPlan()
    {
      return $this->subscriptionPlan;
    }

    /**
     * @param SearchColumnSelectField[] $subscriptionPlan
     * @return \Nzolt\NetSuite\UsageSearchRowBasic
     */
    public function setSubscriptionPlan(array $subscriptionPlan = null)
    {
      $this->subscriptionPlan = $subscriptionPlan;
      return $this;
    }

}
