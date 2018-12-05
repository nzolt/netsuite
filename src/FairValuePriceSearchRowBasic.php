<?php

namespace Nzolt\NetSuite;

class FairValuePriceSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $currency
     */
    protected $currency = null;

    /**
     * @var SearchColumnDateField[] $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnDoubleField[] $fairValue
     */
    protected $fairValue = null;

    /**
     * @var SearchColumnSelectField[] $fairValueFormula
     */
    protected $fairValueFormula = null;

    /**
     * @var SearchColumnEnumSelectField[] $fairValueRangePolicy
     */
    protected $fairValueRangePolicy = null;

    /**
     * @var SearchColumnDoubleField[] $highValue
     */
    protected $highValue = null;

    /**
     * @var SearchColumnDoubleField[] $highValuePercent
     */
    protected $highValuePercent = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isVsoePrice
     */
    protected $isVsoePrice = null;

    /**
     * @var SearchColumnSelectField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnSelectField[] $itemRevenueCategory
     */
    protected $itemRevenueCategory = null;

    /**
     * @var SearchColumnDoubleField[] $lowValue
     */
    protected $lowValue = null;

    /**
     * @var SearchColumnDoubleField[] $lowValuePercent
     */
    protected $lowValuePercent = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchColumnSelectField[] $units
     */
    protected $units = null;

    /**
     * @var SearchColumnSelectField[] $unitsType
     */
    protected $unitsType = null;

    
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
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setCurrency(array $currency = null)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setEndDate(array $endDate = null)
    {
      $this->endDate = $endDate;
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
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFairValue()
    {
      return $this->fairValue;
    }

    /**
     * @param SearchColumnDoubleField[] $fairValue
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setFairValue(array $fairValue = null)
    {
      $this->fairValue = $fairValue;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getFairValueFormula()
    {
      return $this->fairValueFormula;
    }

    /**
     * @param SearchColumnSelectField[] $fairValueFormula
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setFairValueFormula(array $fairValueFormula = null)
    {
      $this->fairValueFormula = $fairValueFormula;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getFairValueRangePolicy()
    {
      return $this->fairValueRangePolicy;
    }

    /**
     * @param SearchColumnEnumSelectField[] $fairValueRangePolicy
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setFairValueRangePolicy(array $fairValueRangePolicy = null)
    {
      $this->fairValueRangePolicy = $fairValueRangePolicy;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getHighValue()
    {
      return $this->highValue;
    }

    /**
     * @param SearchColumnDoubleField[] $highValue
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setHighValue(array $highValue = null)
    {
      $this->highValue = $highValue;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getHighValuePercent()
    {
      return $this->highValuePercent;
    }

    /**
     * @param SearchColumnDoubleField[] $highValuePercent
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setHighValuePercent(array $highValuePercent = null)
    {
      $this->highValuePercent = $highValuePercent;
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
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsVsoePrice()
    {
      return $this->isVsoePrice;
    }

    /**
     * @param SearchColumnBooleanField[] $isVsoePrice
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setIsVsoePrice(array $isVsoePrice = null)
    {
      $this->isVsoePrice = $isVsoePrice;
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
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItemRevenueCategory()
    {
      return $this->itemRevenueCategory;
    }

    /**
     * @param SearchColumnSelectField[] $itemRevenueCategory
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setItemRevenueCategory(array $itemRevenueCategory = null)
    {
      $this->itemRevenueCategory = $itemRevenueCategory;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLowValue()
    {
      return $this->lowValue;
    }

    /**
     * @param SearchColumnDoubleField[] $lowValue
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setLowValue(array $lowValue = null)
    {
      $this->lowValue = $lowValue;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLowValuePercent()
    {
      return $this->lowValuePercent;
    }

    /**
     * @param SearchColumnDoubleField[] $lowValuePercent
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setLowValuePercent(array $lowValuePercent = null)
    {
      $this->lowValuePercent = $lowValuePercent;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param SearchColumnSelectField[] $units
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setUnits(array $units = null)
    {
      $this->units = $units;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUnitsType()
    {
      return $this->unitsType;
    }

    /**
     * @param SearchColumnSelectField[] $unitsType
     * @return \Nzolt\NetSuite\FairValuePriceSearchRowBasic
     */
    public function setUnitsType(array $unitsType = null)
    {
      $this->unitsType = $unitsType;
      return $this;
    }

}
