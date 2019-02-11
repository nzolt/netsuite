<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;

/**
 * ProjectTaskAssignmentSearchBasic
 */
class ProjectTaskAssignmentSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $actualWork;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $cost;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $costBase;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $endDate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedWork;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedWorkBaseline;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $grossProfit;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $grossProfitBase;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $price;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $priceBase;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $resource;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $resourceName;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $serviceItem;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $serviceItemDesc;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $unitCost;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $unitCostBase;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $unitPrice;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $unitPriceBase;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $units;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $workCalendar;

    static $paramtypesmap = array(
    	"actualWork" => "SearchDoubleField",
    	"cost" => "SearchDoubleField",
    	"costBase" => "SearchDoubleField",
    	"endDate" => "SearchDateField",
    	"estimatedWork" => "SearchDoubleField",
    	"estimatedWorkBaseline" => "SearchDoubleField",
    	"grossProfit" => "SearchDoubleField",
    	"grossProfitBase" => "SearchDoubleField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"price" => "SearchDoubleField",
    	"priceBase" => "SearchDoubleField",
    	"resource" => "SearchMultiSelectField",
    	"resourceName" => "SearchStringField",
    	"serviceItem" => "SearchStringField",
    	"serviceItemDesc" => "SearchStringField",
    	"startDate" => "SearchDateField",
    	"unitCost" => "SearchDoubleField",
    	"unitCostBase" => "SearchDoubleField",
    	"unitPrice" => "SearchDoubleField",
    	"unitPriceBase" => "SearchDoubleField",
    	"units" => "SearchDoubleField",
    	"workCalendar" => "SearchMultiSelectField",
    );

    /**
     * Set actualWork
     *
     * @param SearchDoubleField $actualWork
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setActualWork(SearchDoubleField $actualWork) {
        $this->actualWork = $actualWork;
        return $this;
    }

    /**
     * Get actualWork
     *
     * @return SearchDoubleField
     */
    public function getActualWork() {
        return $this->actualWork;
    }


    /**
     * Set cost
     *
     * @param SearchDoubleField $cost
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setCost(SearchDoubleField $cost) {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Get cost
     *
     * @return SearchDoubleField
     */
    public function getCost() {
        return $this->cost;
    }


    /**
     * Set costBase
     *
     * @param SearchDoubleField $costBase
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setCostBase(SearchDoubleField $costBase) {
        $this->costBase = $costBase;
        return $this;
    }

    /**
     * Get costBase
     *
     * @return SearchDoubleField
     */
    public function getCostBase() {
        return $this->costBase;
    }


    /**
     * Set endDate
     *
     * @param SearchDateField $endDate
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setEndDate(SearchDateField $endDate) {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Get endDate
     *
     * @return SearchDateField
     */
    public function getEndDate() {
        return $this->endDate;
    }


    /**
     * Set estimatedWork
     *
     * @param SearchDoubleField $estimatedWork
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setEstimatedWork(SearchDoubleField $estimatedWork) {
        $this->estimatedWork = $estimatedWork;
        return $this;
    }

    /**
     * Get estimatedWork
     *
     * @return SearchDoubleField
     */
    public function getEstimatedWork() {
        return $this->estimatedWork;
    }


    /**
     * Set estimatedWorkBaseline
     *
     * @param SearchDoubleField $estimatedWorkBaseline
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setEstimatedWorkBaseline(SearchDoubleField $estimatedWorkBaseline) {
        $this->estimatedWorkBaseline = $estimatedWorkBaseline;
        return $this;
    }

    /**
     * Get estimatedWorkBaseline
     *
     * @return SearchDoubleField
     */
    public function getEstimatedWorkBaseline() {
        return $this->estimatedWorkBaseline;
    }


    /**
     * Set grossProfit
     *
     * @param SearchDoubleField $grossProfit
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setGrossProfit(SearchDoubleField $grossProfit) {
        $this->grossProfit = $grossProfit;
        return $this;
    }

    /**
     * Get grossProfit
     *
     * @return SearchDoubleField
     */
    public function getGrossProfit() {
        return $this->grossProfit;
    }


    /**
     * Set grossProfitBase
     *
     * @param SearchDoubleField $grossProfitBase
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setGrossProfitBase(SearchDoubleField $grossProfitBase) {
        $this->grossProfitBase = $grossProfitBase;
        return $this;
    }

    /**
     * Get grossProfitBase
     *
     * @return SearchDoubleField
     */
    public function getGrossProfitBase() {
        return $this->grossProfitBase;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set price
     *
     * @param SearchDoubleField $price
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setPrice(SearchDoubleField $price) {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return SearchDoubleField
     */
    public function getPrice() {
        return $this->price;
    }


    /**
     * Set priceBase
     *
     * @param SearchDoubleField $priceBase
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setPriceBase(SearchDoubleField $priceBase) {
        $this->priceBase = $priceBase;
        return $this;
    }

    /**
     * Get priceBase
     *
     * @return SearchDoubleField
     */
    public function getPriceBase() {
        return $this->priceBase;
    }


    /**
     * Set resource
     *
     * @param SearchMultiSelectField $resource
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setResource(SearchMultiSelectField $resource) {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Get resource
     *
     * @return SearchMultiSelectField
     */
    public function getResource() {
        return $this->resource;
    }


    /**
     * Set resourceName
     *
     * @param SearchStringField $resourceName
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setResourceName(SearchStringField $resourceName) {
        $this->resourceName = $resourceName;
        return $this;
    }

    /**
     * Get resourceName
     *
     * @return SearchStringField
     */
    public function getResourceName() {
        return $this->resourceName;
    }


    /**
     * Set serviceItem
     *
     * @param SearchStringField $serviceItem
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setServiceItem(SearchStringField $serviceItem) {
        $this->serviceItem = $serviceItem;
        return $this;
    }

    /**
     * Get serviceItem
     *
     * @return SearchStringField
     */
    public function getServiceItem() {
        return $this->serviceItem;
    }


    /**
     * Set serviceItemDesc
     *
     * @param SearchStringField $serviceItemDesc
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setServiceItemDesc(SearchStringField $serviceItemDesc) {
        $this->serviceItemDesc = $serviceItemDesc;
        return $this;
    }

    /**
     * Get serviceItemDesc
     *
     * @return SearchStringField
     */
    public function getServiceItemDesc() {
        return $this->serviceItemDesc;
    }


    /**
     * Set startDate
     *
     * @param SearchDateField $startDate
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setStartDate(SearchDateField $startDate) {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Get startDate
     *
     * @return SearchDateField
     */
    public function getStartDate() {
        return $this->startDate;
    }


    /**
     * Set unitCost
     *
     * @param SearchDoubleField $unitCost
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setUnitCost(SearchDoubleField $unitCost) {
        $this->unitCost = $unitCost;
        return $this;
    }

    /**
     * Get unitCost
     *
     * @return SearchDoubleField
     */
    public function getUnitCost() {
        return $this->unitCost;
    }


    /**
     * Set unitCostBase
     *
     * @param SearchDoubleField $unitCostBase
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setUnitCostBase(SearchDoubleField $unitCostBase) {
        $this->unitCostBase = $unitCostBase;
        return $this;
    }

    /**
     * Get unitCostBase
     *
     * @return SearchDoubleField
     */
    public function getUnitCostBase() {
        return $this->unitCostBase;
    }


    /**
     * Set unitPrice
     *
     * @param SearchDoubleField $unitPrice
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setUnitPrice(SearchDoubleField $unitPrice) {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return SearchDoubleField
     */
    public function getUnitPrice() {
        return $this->unitPrice;
    }


    /**
     * Set unitPriceBase
     *
     * @param SearchDoubleField $unitPriceBase
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setUnitPriceBase(SearchDoubleField $unitPriceBase) {
        $this->unitPriceBase = $unitPriceBase;
        return $this;
    }

    /**
     * Get unitPriceBase
     *
     * @return SearchDoubleField
     */
    public function getUnitPriceBase() {
        return $this->unitPriceBase;
    }


    /**
     * Set units
     *
     * @param SearchDoubleField $units
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setUnits(SearchDoubleField $units) {
        $this->units = $units;
        return $this;
    }

    /**
     * Get units
     *
     * @return SearchDoubleField
     */
    public function getUnits() {
        return $this->units;
    }


    /**
     * Set workCalendar
     *
     * @param SearchMultiSelectField $workCalendar
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setWorkCalendar(SearchMultiSelectField $workCalendar) {
        $this->workCalendar = $workCalendar;
        return $this;
    }

    /**
     * Get workCalendar
     *
     * @return SearchMultiSelectField
     */
    public function getWorkCalendar() {
        return $this->workCalendar;
    }

}