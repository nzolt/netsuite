<?php

namespace Nzolt\NetSuite;

class ProjectTaskAssignmentSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchDoubleField $actualWork
     */
    protected $actualWork = null;

    /**
     * @var SearchDoubleField $cost
     */
    protected $cost = null;

    /**
     * @var SearchDoubleField $costBase
     */
    protected $costBase = null;

    /**
     * @var SearchDateField $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchDoubleField $estimatedWork
     */
    protected $estimatedWork = null;

    /**
     * @var SearchDoubleField $estimatedWorkBaseline
     */
    protected $estimatedWorkBaseline = null;

    /**
     * @var SearchDoubleField $grossProfit
     */
    protected $grossProfit = null;

    /**
     * @var SearchDoubleField $grossProfitBase
     */
    protected $grossProfitBase = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchDoubleField $price
     */
    protected $price = null;

    /**
     * @var SearchDoubleField $priceBase
     */
    protected $priceBase = null;

    /**
     * @var SearchMultiSelectField $resource
     */
    protected $resource = null;

    /**
     * @var SearchStringField $resourceName
     */
    protected $resourceName = null;

    /**
     * @var SearchStringField $serviceItem
     */
    protected $serviceItem = null;

    /**
     * @var SearchStringField $serviceItemDesc
     */
    protected $serviceItemDesc = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchDoubleField $unitCost
     */
    protected $unitCost = null;

    /**
     * @var SearchDoubleField $unitCostBase
     */
    protected $unitCostBase = null;

    /**
     * @var SearchDoubleField $unitPrice
     */
    protected $unitPrice = null;

    /**
     * @var SearchDoubleField $unitPriceBase
     */
    protected $unitPriceBase = null;

    /**
     * @var SearchDoubleField $units
     */
    protected $units = null;

    /**
     * @var SearchMultiSelectField $workCalendar
     */
    protected $workCalendar = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchDoubleField
     */
    public function getActualWork()
    {
      return $this->actualWork;
    }

    /**
     * @param SearchDoubleField $actualWork
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setActualWork($actualWork)
    {
      $this->actualWork = $actualWork;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param SearchDoubleField $cost
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostBase()
    {
      return $this->costBase;
    }

    /**
     * @param SearchDoubleField $costBase
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setCostBase($costBase)
    {
      $this->costBase = $costBase;
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
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedWork()
    {
      return $this->estimatedWork;
    }

    /**
     * @param SearchDoubleField $estimatedWork
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setEstimatedWork($estimatedWork)
    {
      $this->estimatedWork = $estimatedWork;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedWorkBaseline()
    {
      return $this->estimatedWorkBaseline;
    }

    /**
     * @param SearchDoubleField $estimatedWorkBaseline
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setEstimatedWorkBaseline($estimatedWorkBaseline)
    {
      $this->estimatedWorkBaseline = $estimatedWorkBaseline;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGrossProfit()
    {
      return $this->grossProfit;
    }

    /**
     * @param SearchDoubleField $grossProfit
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setGrossProfit($grossProfit)
    {
      $this->grossProfit = $grossProfit;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGrossProfitBase()
    {
      return $this->grossProfitBase;
    }

    /**
     * @param SearchDoubleField $grossProfitBase
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setGrossProfitBase($grossProfitBase)
    {
      $this->grossProfitBase = $grossProfitBase;
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
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
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
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param SearchDoubleField $price
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPriceBase()
    {
      return $this->priceBase;
    }

    /**
     * @param SearchDoubleField $priceBase
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setPriceBase($priceBase)
    {
      $this->priceBase = $priceBase;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getResource()
    {
      return $this->resource;
    }

    /**
     * @param SearchMultiSelectField $resource
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setResource($resource)
    {
      $this->resource = $resource;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getResourceName()
    {
      return $this->resourceName;
    }

    /**
     * @param SearchStringField $resourceName
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setResourceName($resourceName)
    {
      $this->resourceName = $resourceName;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getServiceItem()
    {
      return $this->serviceItem;
    }

    /**
     * @param SearchStringField $serviceItem
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setServiceItem($serviceItem)
    {
      $this->serviceItem = $serviceItem;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getServiceItemDesc()
    {
      return $this->serviceItemDesc;
    }

    /**
     * @param SearchStringField $serviceItemDesc
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setServiceItemDesc($serviceItemDesc)
    {
      $this->serviceItemDesc = $serviceItemDesc;
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
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnitCost()
    {
      return $this->unitCost;
    }

    /**
     * @param SearchDoubleField $unitCost
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setUnitCost($unitCost)
    {
      $this->unitCost = $unitCost;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnitCostBase()
    {
      return $this->unitCostBase;
    }

    /**
     * @param SearchDoubleField $unitCostBase
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setUnitCostBase($unitCostBase)
    {
      $this->unitCostBase = $unitCostBase;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnitPrice()
    {
      return $this->unitPrice;
    }

    /**
     * @param SearchDoubleField $unitPrice
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setUnitPrice($unitPrice)
    {
      $this->unitPrice = $unitPrice;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnitPriceBase()
    {
      return $this->unitPriceBase;
    }

    /**
     * @param SearchDoubleField $unitPriceBase
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setUnitPriceBase($unitPriceBase)
    {
      $this->unitPriceBase = $unitPriceBase;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param SearchDoubleField $units
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setUnits($units)
    {
      $this->units = $units;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWorkCalendar()
    {
      return $this->workCalendar;
    }

    /**
     * @param SearchMultiSelectField $workCalendar
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchBasic
     */
    public function setWorkCalendar($workCalendar)
    {
      $this->workCalendar = $workCalendar;
      return $this;
    }

}
