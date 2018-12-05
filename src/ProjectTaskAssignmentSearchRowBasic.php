<?php

namespace Nzolt\NetSuite;

class ProjectTaskAssignmentSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnDoubleField[] $actualWork
     */
    protected $actualWork = null;

    /**
     * @var SearchColumnDoubleField[] $cost
     */
    protected $cost = null;

    /**
     * @var SearchColumnDoubleField[] $costBase
     */
    protected $costBase = null;

    /**
     * @var SearchColumnDateField[] $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedWork
     */
    protected $estimatedWork = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedWorkBaseline
     */
    protected $estimatedWorkBaseline = null;

    /**
     * @var SearchColumnDoubleField[] $grossProfit
     */
    protected $grossProfit = null;

    /**
     * @var SearchColumnDoubleField[] $grossProfitBase
     */
    protected $grossProfitBase = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnDoubleField[] $price
     */
    protected $price = null;

    /**
     * @var SearchColumnDoubleField[] $priceBase
     */
    protected $priceBase = null;

    /**
     * @var SearchColumnSelectField[] $resource
     */
    protected $resource = null;

    /**
     * @var SearchColumnStringField[] $resourceName
     */
    protected $resourceName = null;

    /**
     * @var SearchColumnStringField[] $serviceItem
     */
    protected $serviceItem = null;

    /**
     * @var SearchColumnStringField[] $serviceItemDesc
     */
    protected $serviceItemDesc = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchColumnDoubleField[] $unitCost
     */
    protected $unitCost = null;

    /**
     * @var SearchColumnDoubleField[] $unitCostBase
     */
    protected $unitCostBase = null;

    /**
     * @var SearchColumnDoubleField[] $unitPrice
     */
    protected $unitPrice = null;

    /**
     * @var SearchColumnDoubleField[] $unitPriceBase
     */
    protected $unitPriceBase = null;

    /**
     * @var SearchColumnDoubleField[] $units
     */
    protected $units = null;

    /**
     * @var SearchColumnSelectField[] $workCalendar
     */
    protected $workCalendar = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getActualWork()
    {
      return $this->actualWork;
    }

    /**
     * @param SearchColumnDoubleField[] $actualWork
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setActualWork(array $actualWork = null)
    {
      $this->actualWork = $actualWork;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param SearchColumnDoubleField[] $cost
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setCost(array $cost = null)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostBase()
    {
      return $this->costBase;
    }

    /**
     * @param SearchColumnDoubleField[] $costBase
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setCostBase(array $costBase = null)
    {
      $this->costBase = $costBase;
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
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setEndDate(array $endDate = null)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedWork()
    {
      return $this->estimatedWork;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedWork
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setEstimatedWork(array $estimatedWork = null)
    {
      $this->estimatedWork = $estimatedWork;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedWorkBaseline()
    {
      return $this->estimatedWorkBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedWorkBaseline
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setEstimatedWorkBaseline(array $estimatedWorkBaseline = null)
    {
      $this->estimatedWorkBaseline = $estimatedWorkBaseline;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGrossProfit()
    {
      return $this->grossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $grossProfit
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setGrossProfit(array $grossProfit = null)
    {
      $this->grossProfit = $grossProfit;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGrossProfitBase()
    {
      return $this->grossProfitBase;
    }

    /**
     * @param SearchColumnDoubleField[] $grossProfitBase
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setGrossProfitBase(array $grossProfitBase = null)
    {
      $this->grossProfitBase = $grossProfitBase;
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
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param SearchColumnDoubleField[] $price
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setPrice(array $price = null)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPriceBase()
    {
      return $this->priceBase;
    }

    /**
     * @param SearchColumnDoubleField[] $priceBase
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setPriceBase(array $priceBase = null)
    {
      $this->priceBase = $priceBase;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getResource()
    {
      return $this->resource;
    }

    /**
     * @param SearchColumnSelectField[] $resource
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setResource(array $resource = null)
    {
      $this->resource = $resource;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getResourceName()
    {
      return $this->resourceName;
    }

    /**
     * @param SearchColumnStringField[] $resourceName
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setResourceName(array $resourceName = null)
    {
      $this->resourceName = $resourceName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getServiceItem()
    {
      return $this->serviceItem;
    }

    /**
     * @param SearchColumnStringField[] $serviceItem
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setServiceItem(array $serviceItem = null)
    {
      $this->serviceItem = $serviceItem;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getServiceItemDesc()
    {
      return $this->serviceItemDesc;
    }

    /**
     * @param SearchColumnStringField[] $serviceItemDesc
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setServiceItemDesc(array $serviceItemDesc = null)
    {
      $this->serviceItemDesc = $serviceItemDesc;
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
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitCost()
    {
      return $this->unitCost;
    }

    /**
     * @param SearchColumnDoubleField[] $unitCost
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setUnitCost(array $unitCost = null)
    {
      $this->unitCost = $unitCost;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitCostBase()
    {
      return $this->unitCostBase;
    }

    /**
     * @param SearchColumnDoubleField[] $unitCostBase
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setUnitCostBase(array $unitCostBase = null)
    {
      $this->unitCostBase = $unitCostBase;
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
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setUnitPrice(array $unitPrice = null)
    {
      $this->unitPrice = $unitPrice;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitPriceBase()
    {
      return $this->unitPriceBase;
    }

    /**
     * @param SearchColumnDoubleField[] $unitPriceBase
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setUnitPriceBase(array $unitPriceBase = null)
    {
      $this->unitPriceBase = $unitPriceBase;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param SearchColumnDoubleField[] $units
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setUnits(array $units = null)
    {
      $this->units = $units;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWorkCalendar()
    {
      return $this->workCalendar;
    }

    /**
     * @param SearchColumnSelectField[] $workCalendar
     * @return \Nzolt\NetSuite\ProjectTaskAssignmentSearchRowBasic
     */
    public function setWorkCalendar(array $workCalendar = null)
    {
      $this->workCalendar = $workCalendar;
      return $this;
    }

}
