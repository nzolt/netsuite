<?php

namespace Nzolt\NetSuite;

class Usage extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var RecordRef $subscriptionPlan
     */
    protected $subscriptionPlan = null;

    /**
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var RecordRef $usageSubscription
     */
    protected $usageSubscription = null;

    /**
     * @var RecordRef $usageSubscriptionLine
     */
    protected $usageSubscriptionLine = null;

    /**
     * @var float $usageQuantity
     */
    protected $usageQuantity = null;

    /**
     * @var \DateTime $usageDate
     */
    protected $usageDate = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\Usage
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\Usage
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\Usage
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubscriptionPlan()
    {
      return $this->subscriptionPlan;
    }

    /**
     * @param RecordRef $subscriptionPlan
     * @return \Nzolt\NetSuite\Usage
     */
    public function setSubscriptionPlan($subscriptionPlan)
    {
      $this->subscriptionPlan = $subscriptionPlan;
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
     * @return \Nzolt\NetSuite\Usage
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUsageSubscription()
    {
      return $this->usageSubscription;
    }

    /**
     * @param RecordRef $usageSubscription
     * @return \Nzolt\NetSuite\Usage
     */
    public function setUsageSubscription($usageSubscription)
    {
      $this->usageSubscription = $usageSubscription;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUsageSubscriptionLine()
    {
      return $this->usageSubscriptionLine;
    }

    /**
     * @param RecordRef $usageSubscriptionLine
     * @return \Nzolt\NetSuite\Usage
     */
    public function setUsageSubscriptionLine($usageSubscriptionLine)
    {
      $this->usageSubscriptionLine = $usageSubscriptionLine;
      return $this;
    }

    /**
     * @return float
     */
    public function getUsageQuantity()
    {
      return $this->usageQuantity;
    }

    /**
     * @param float $usageQuantity
     * @return \Nzolt\NetSuite\Usage
     */
    public function setUsageQuantity($usageQuantity)
    {
      $this->usageQuantity = $usageQuantity;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUsageDate()
    {
      if ($this->usageDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->usageDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $usageDate
     * @return \Nzolt\NetSuite\Usage
     */
    public function setUsageDate(\DateTime $usageDate = null)
    {
      if ($usageDate == null) {
       $this->usageDate = null;
      } else {
        $this->usageDate = $usageDate->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\Usage
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\Usage
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
