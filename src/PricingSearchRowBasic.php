<?php

namespace Nzolt\NetSuite;

class PricingSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $currency
     */
    protected $currency = null;

    /**
     * @var SearchColumnSelectField[] $customer
     */
    protected $customer = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnSelectField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnDoubleField[] $maximumQuantity
     */
    protected $maximumQuantity = null;

    /**
     * @var SearchColumnDoubleField[] $minimumQuantity
     */
    protected $minimumQuantity = null;

    /**
     * @var SearchColumnSelectField[] $priceLevel
     */
    protected $priceLevel = null;

    /**
     * @var SearchColumnStringField[] $quantityRange
     */
    protected $quantityRange = null;

    /**
     * @var SearchColumnSelectField[] $saleUnit
     */
    protected $saleUnit = null;

    /**
     * @var SearchColumnDoubleField[] $unitPrice
     */
    protected $unitPrice = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\PricingSearchRowBasic
     */
    public function setCurrency(array $currency = null)
    {
      $this->currency = $currency;
      return $this;
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
     * @return \Nzolt\NetSuite\PricingSearchRowBasic
     */
    public function setCustomer(array $customer = null)
    {
      $this->customer = $customer;
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
     * @return \Nzolt\NetSuite\PricingSearchRowBasic
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
     * @return \Nzolt\NetSuite\PricingSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getMaximumQuantity()
    {
      return $this->maximumQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $maximumQuantity
     * @return \Nzolt\NetSuite\PricingSearchRowBasic
     */
    public function setMaximumQuantity(array $maximumQuantity = null)
    {
      $this->maximumQuantity = $maximumQuantity;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getMinimumQuantity()
    {
      return $this->minimumQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $minimumQuantity
     * @return \Nzolt\NetSuite\PricingSearchRowBasic
     */
    public function setMinimumQuantity(array $minimumQuantity = null)
    {
      $this->minimumQuantity = $minimumQuantity;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPriceLevel()
    {
      return $this->priceLevel;
    }

    /**
     * @param SearchColumnSelectField[] $priceLevel
     * @return \Nzolt\NetSuite\PricingSearchRowBasic
     */
    public function setPriceLevel(array $priceLevel = null)
    {
      $this->priceLevel = $priceLevel;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getQuantityRange()
    {
      return $this->quantityRange;
    }

    /**
     * @param SearchColumnStringField[] $quantityRange
     * @return \Nzolt\NetSuite\PricingSearchRowBasic
     */
    public function setQuantityRange(array $quantityRange = null)
    {
      $this->quantityRange = $quantityRange;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSaleUnit()
    {
      return $this->saleUnit;
    }

    /**
     * @param SearchColumnSelectField[] $saleUnit
     * @return \Nzolt\NetSuite\PricingSearchRowBasic
     */
    public function setSaleUnit(array $saleUnit = null)
    {
      $this->saleUnit = $saleUnit;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitPrice()
    {
      return $this->unitPrice;
    }

    /**
     * @param SearchColumnDoubleField[] $unitPrice
     * @return \Nzolt\NetSuite\PricingSearchRowBasic
     */
    public function setUnitPrice(array $unitPrice = null)
    {
      $this->unitPrice = $unitPrice;
      return $this;
    }

}
