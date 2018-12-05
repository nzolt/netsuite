<?php

namespace Nzolt\NetSuite;

class FairValuePrice extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var RecordRef $itemRevenueCategory
     */
    protected $itemRevenueCategory = null;

    /**
     * @var float $fairValue
     */
    protected $fairValue = null;

    /**
     * @var RecordRef $fairValueFormula
     */
    protected $fairValueFormula = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var RecordRef $unitsType
     */
    protected $unitsType = null;

    /**
     * @var RecordRef $units
     */
    protected $units = null;

    /**
     * @var FairValuePriceFairValueRangePolicy $fairValueRangePolicy
     */
    protected $fairValueRangePolicy = null;

    /**
     * @var float $lowValue
     */
    protected $lowValue = null;

    /**
     * @var float $lowValuePercent
     */
    protected $lowValuePercent = null;

    /**
     * @var float $highValue
     */
    protected $highValue = null;

    /**
     * @var float $highValuePercent
     */
    protected $highValuePercent = null;

    /**
     * @var boolean $isVsoePrice
     */
    protected $isVsoePrice = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var DimensionList $dimensionList
     */
    protected $dimensionList = null;

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
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemRevenueCategory()
    {
      return $this->itemRevenueCategory;
    }

    /**
     * @param RecordRef $itemRevenueCategory
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setItemRevenueCategory($itemRevenueCategory)
    {
      $this->itemRevenueCategory = $itemRevenueCategory;
      return $this;
    }

    /**
     * @return float
     */
    public function getFairValue()
    {
      return $this->fairValue;
    }

    /**
     * @param float $fairValue
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setFairValue($fairValue)
    {
      $this->fairValue = $fairValue;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFairValueFormula()
    {
      return $this->fairValueFormula;
    }

    /**
     * @param RecordRef $fairValueFormula
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setFairValueFormula($fairValueFormula)
    {
      $this->fairValueFormula = $fairValueFormula;
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
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnitsType()
    {
      return $this->unitsType;
    }

    /**
     * @param RecordRef $unitsType
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setUnitsType($unitsType)
    {
      $this->unitsType = $unitsType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param RecordRef $units
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setUnits($units)
    {
      $this->units = $units;
      return $this;
    }

    /**
     * @return FairValuePriceFairValueRangePolicy
     */
    public function getFairValueRangePolicy()
    {
      return $this->fairValueRangePolicy;
    }

    /**
     * @param FairValuePriceFairValueRangePolicy $fairValueRangePolicy
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setFairValueRangePolicy($fairValueRangePolicy)
    {
      $this->fairValueRangePolicy = $fairValueRangePolicy;
      return $this;
    }

    /**
     * @return float
     */
    public function getLowValue()
    {
      return $this->lowValue;
    }

    /**
     * @param float $lowValue
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setLowValue($lowValue)
    {
      $this->lowValue = $lowValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getLowValuePercent()
    {
      return $this->lowValuePercent;
    }

    /**
     * @param float $lowValuePercent
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setLowValuePercent($lowValuePercent)
    {
      $this->lowValuePercent = $lowValuePercent;
      return $this;
    }

    /**
     * @return float
     */
    public function getHighValue()
    {
      return $this->highValue;
    }

    /**
     * @param float $highValue
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setHighValue($highValue)
    {
      $this->highValue = $highValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getHighValuePercent()
    {
      return $this->highValuePercent;
    }

    /**
     * @param float $highValuePercent
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setHighValuePercent($highValuePercent)
    {
      $this->highValuePercent = $highValuePercent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVsoePrice()
    {
      return $this->isVsoePrice;
    }

    /**
     * @param boolean $isVsoePrice
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setIsVsoePrice($isVsoePrice)
    {
      $this->isVsoePrice = $isVsoePrice;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return DimensionList
     */
    public function getDimensionList()
    {
      return $this->dimensionList;
    }

    /**
     * @param DimensionList $dimensionList
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setDimensionList($dimensionList)
    {
      $this->dimensionList = $dimensionList;
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
     * @return \Nzolt\NetSuite\FairValuePrice
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
     * @return \Nzolt\NetSuite\FairValuePrice
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
