<?php

namespace Nzolt\NetSuite;

class PricingSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchBooleanField $assignedPriceLevel
     */
    protected $assignedPriceLevel = null;

    /**
     * @var SearchMultiSelectField $currency
     */
    protected $currency = null;

    /**
     * @var SearchMultiSelectField $customer
     */
    protected $customer = null;

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
     * @var SearchDoubleField $maximumQuantity
     */
    protected $maximumQuantity = null;

    /**
     * @var SearchDoubleField $minimumQuantity
     */
    protected $minimumQuantity = null;

    /**
     * @var SearchMultiSelectField $priceLevel
     */
    protected $priceLevel = null;

    /**
     * @var SearchDoubleField $rate
     */
    protected $rate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchBooleanField
     */
    public function getAssignedPriceLevel()
    {
      return $this->assignedPriceLevel;
    }

    /**
     * @param SearchBooleanField $assignedPriceLevel
     * @return \Nzolt\NetSuite\PricingSearchBasic
     */
    public function setAssignedPriceLevel($assignedPriceLevel)
    {
      $this->assignedPriceLevel = $assignedPriceLevel;
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
     * @return \Nzolt\NetSuite\PricingSearchBasic
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
     * @return \Nzolt\NetSuite\PricingSearchBasic
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
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
     * @return \Nzolt\NetSuite\PricingSearchBasic
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
     * @return \Nzolt\NetSuite\PricingSearchBasic
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
     * @return \Nzolt\NetSuite\PricingSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getMaximumQuantity()
    {
      return $this->maximumQuantity;
    }

    /**
     * @param SearchDoubleField $maximumQuantity
     * @return \Nzolt\NetSuite\PricingSearchBasic
     */
    public function setMaximumQuantity($maximumQuantity)
    {
      $this->maximumQuantity = $maximumQuantity;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getMinimumQuantity()
    {
      return $this->minimumQuantity;
    }

    /**
     * @param SearchDoubleField $minimumQuantity
     * @return \Nzolt\NetSuite\PricingSearchBasic
     */
    public function setMinimumQuantity($minimumQuantity)
    {
      $this->minimumQuantity = $minimumQuantity;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPriceLevel()
    {
      return $this->priceLevel;
    }

    /**
     * @param SearchMultiSelectField $priceLevel
     * @return \Nzolt\NetSuite\PricingSearchBasic
     */
    public function setPriceLevel($priceLevel)
    {
      $this->priceLevel = $priceLevel;
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
     * @return \Nzolt\NetSuite\PricingSearchBasic
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

}
