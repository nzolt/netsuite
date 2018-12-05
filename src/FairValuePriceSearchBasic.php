<?php

namespace Nzolt\NetSuite;

class FairValuePriceSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $currency
     */
    protected $currency = null;

    /**
     * @var SearchDateField $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchDoubleField $fairValue
     */
    protected $fairValue = null;

    /**
     * @var SearchMultiSelectField $fairValueFormula
     */
    protected $fairValueFormula = null;

    /**
     * @var SearchEnumMultiSelectField $fairValueRangePolicy
     */
    protected $fairValueRangePolicy = null;

    /**
     * @var SearchDoubleField $highValue
     */
    protected $highValue = null;

    /**
     * @var SearchDoubleField $highValuePercent
     */
    protected $highValuePercent = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isVsoePrice
     */
    protected $isVsoePrice = null;

    /**
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchMultiSelectField $itemRevenueCategory
     */
    protected $itemRevenueCategory = null;

    /**
     * @var SearchDoubleField $lowValue
     */
    protected $lowValue = null;

    /**
     * @var SearchDoubleField $lowValuePercent
     */
    protected $lowValuePercent = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchMultiSelectField $unitsType
     */
    protected $unitsType = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchDateField $endDate
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
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
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
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
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFairValue()
    {
      return $this->fairValue;
    }

    /**
     * @param SearchDoubleField $fairValue
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setFairValue($fairValue)
    {
      $this->fairValue = $fairValue;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFairValueFormula()
    {
      return $this->fairValueFormula;
    }

    /**
     * @param SearchMultiSelectField $fairValueFormula
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setFairValueFormula($fairValueFormula)
    {
      $this->fairValueFormula = $fairValueFormula;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getFairValueRangePolicy()
    {
      return $this->fairValueRangePolicy;
    }

    /**
     * @param SearchEnumMultiSelectField $fairValueRangePolicy
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setFairValueRangePolicy($fairValueRangePolicy)
    {
      $this->fairValueRangePolicy = $fairValueRangePolicy;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getHighValue()
    {
      return $this->highValue;
    }

    /**
     * @param SearchDoubleField $highValue
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setHighValue($highValue)
    {
      $this->highValue = $highValue;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getHighValuePercent()
    {
      return $this->highValuePercent;
    }

    /**
     * @param SearchDoubleField $highValuePercent
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setHighValuePercent($highValuePercent)
    {
      $this->highValuePercent = $highValuePercent;
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
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
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
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsVsoePrice()
    {
      return $this->isVsoePrice;
    }

    /**
     * @param SearchBooleanField $isVsoePrice
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setIsVsoePrice($isVsoePrice)
    {
      $this->isVsoePrice = $isVsoePrice;
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
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemRevenueCategory()
    {
      return $this->itemRevenueCategory;
    }

    /**
     * @param SearchMultiSelectField $itemRevenueCategory
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setItemRevenueCategory($itemRevenueCategory)
    {
      $this->itemRevenueCategory = $itemRevenueCategory;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLowValue()
    {
      return $this->lowValue;
    }

    /**
     * @param SearchDoubleField $lowValue
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setLowValue($lowValue)
    {
      $this->lowValue = $lowValue;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLowValuePercent()
    {
      return $this->lowValuePercent;
    }

    /**
     * @param SearchDoubleField $lowValuePercent
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setLowValuePercent($lowValuePercent)
    {
      $this->lowValuePercent = $lowValuePercent;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchDateField $startDate
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUnitsType()
    {
      return $this->unitsType;
    }

    /**
     * @param SearchMultiSelectField $unitsType
     * @return \Nzolt\NetSuite\FairValuePriceSearchBasic
     */
    public function setUnitsType($unitsType)
    {
      $this->unitsType = $unitsType;
      return $this;
    }

}
