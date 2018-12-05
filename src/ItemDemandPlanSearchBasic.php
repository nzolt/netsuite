<?php

namespace Nzolt\NetSuite;

class ItemDemandPlanSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $alternateSourceItem
     */
    protected $alternateSourceItem = null;

    /**
     * @var SearchLongField $analysisDuration
     */
    protected $analysisDuration = null;

    /**
     * @var SearchDateField $demandDate
     */
    protected $demandDate = null;

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
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchStringField $memo
     */
    protected $memo = null;

    /**
     * @var SearchLongField $projectionDuration
     */
    protected $projectionDuration = null;

    /**
     * @var SearchMultiSelectField $projectionInterval
     */
    protected $projectionInterval = null;

    /**
     * @var SearchEnumMultiSelectField $projectionMethod
     */
    protected $projectionMethod = null;

    /**
     * @var SearchDateField $projectionStartDate
     */
    protected $projectionStartDate = null;

    /**
     * @var SearchDoubleField $quantity
     */
    protected $quantity = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchMultiSelectField $units
     */
    protected $units = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAlternateSourceItem()
    {
      return $this->alternateSourceItem;
    }

    /**
     * @param SearchMultiSelectField $alternateSourceItem
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setAlternateSourceItem($alternateSourceItem)
    {
      $this->alternateSourceItem = $alternateSourceItem;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getAnalysisDuration()
    {
      return $this->analysisDuration;
    }

    /**
     * @param SearchLongField $analysisDuration
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setAnalysisDuration($analysisDuration)
    {
      $this->analysisDuration = $analysisDuration;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDemandDate()
    {
      return $this->demandDate;
    }

    /**
     * @param SearchDateField $demandDate
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setDemandDate($demandDate)
    {
      $this->demandDate = $demandDate;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getProjectionDuration()
    {
      return $this->projectionDuration;
    }

    /**
     * @param SearchLongField $projectionDuration
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setProjectionDuration($projectionDuration)
    {
      $this->projectionDuration = $projectionDuration;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProjectionInterval()
    {
      return $this->projectionInterval;
    }

    /**
     * @param SearchMultiSelectField $projectionInterval
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setProjectionInterval($projectionInterval)
    {
      $this->projectionInterval = $projectionInterval;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getProjectionMethod()
    {
      return $this->projectionMethod;
    }

    /**
     * @param SearchEnumMultiSelectField $projectionMethod
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setProjectionMethod($projectionMethod)
    {
      $this->projectionMethod = $projectionMethod;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getProjectionStartDate()
    {
      return $this->projectionStartDate;
    }

    /**
     * @param SearchDateField $projectionStartDate
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setProjectionStartDate($projectionStartDate)
    {
      $this->projectionStartDate = $projectionStartDate;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param SearchMultiSelectField $units
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setUnits($units)
    {
      $this->units = $units;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
