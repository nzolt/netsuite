<?php

namespace Nzolt\NetSuite;

class ItemDemandPlanSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $alternateSourceItem
     */
    protected $alternateSourceItem = null;

    /**
     * @var SearchColumnLongField[] $analysisDuration
     */
    protected $analysisDuration = null;

    /**
     * @var SearchColumnDateField[] $demandDate
     */
    protected $demandDate = null;

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
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnStringField[] $memo
     */
    protected $memo = null;

    /**
     * @var SearchColumnLongField[] $projectionDuration
     */
    protected $projectionDuration = null;

    /**
     * @var SearchColumnStringField[] $projectionInterval
     */
    protected $projectionInterval = null;

    /**
     * @var SearchColumnStringField[] $projectionMethod
     */
    protected $projectionMethod = null;

    /**
     * @var SearchColumnDateField[] $projectionStartDate
     */
    protected $projectionStartDate = null;

    /**
     * @var SearchColumnDoubleField[] $quantity
     */
    protected $quantity = null;

    /**
     * @var SearchColumnDoubleField[] $quantityUom
     */
    protected $quantityUom = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnSelectField[] $units
     */
    protected $units = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAlternateSourceItem()
    {
      return $this->alternateSourceItem;
    }

    /**
     * @param SearchColumnSelectField[] $alternateSourceItem
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setAlternateSourceItem(array $alternateSourceItem = null)
    {
      $this->alternateSourceItem = $alternateSourceItem;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getAnalysisDuration()
    {
      return $this->analysisDuration;
    }

    /**
     * @param SearchColumnLongField[] $analysisDuration
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setAnalysisDuration(array $analysisDuration = null)
    {
      $this->analysisDuration = $analysisDuration;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDemandDate()
    {
      return $this->demandDate;
    }

    /**
     * @param SearchColumnDateField[] $demandDate
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setDemandDate(array $demandDate = null)
    {
      $this->demandDate = $demandDate;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setMemo(array $memo = null)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getProjectionDuration()
    {
      return $this->projectionDuration;
    }

    /**
     * @param SearchColumnLongField[] $projectionDuration
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setProjectionDuration(array $projectionDuration = null)
    {
      $this->projectionDuration = $projectionDuration;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getProjectionInterval()
    {
      return $this->projectionInterval;
    }

    /**
     * @param SearchColumnStringField[] $projectionInterval
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setProjectionInterval(array $projectionInterval = null)
    {
      $this->projectionInterval = $projectionInterval;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getProjectionMethod()
    {
      return $this->projectionMethod;
    }

    /**
     * @param SearchColumnStringField[] $projectionMethod
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setProjectionMethod(array $projectionMethod = null)
    {
      $this->projectionMethod = $projectionMethod;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getProjectionStartDate()
    {
      return $this->projectionStartDate;
    }

    /**
     * @param SearchColumnDateField[] $projectionStartDate
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setProjectionStartDate(array $projectionStartDate = null)
    {
      $this->projectionStartDate = $projectionStartDate;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setQuantity(array $quantity = null)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityUom()
    {
      return $this->quantityUom;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityUom
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setQuantityUom(array $quantityUom = null)
    {
      $this->quantityUom = $quantityUom;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setUnits(array $units = null)
    {
      $this->units = $units;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
