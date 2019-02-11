<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * ManufacturingOperationTaskSearchBasic
 */
class ManufacturingOperationTaskSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $actualRunTime;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $actualSetupTime;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $completedQuantity;

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
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $id;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $inputQuantity;

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
     * @var SearchLongField
     */
    protected $laborResources;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $lagAmount;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $lagType;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $lagUnits;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $machineResources;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $manufacturingCostTemplate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $manufacturingWorkCenter;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $order;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $predecessor;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $remainingQuantity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $runRate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $runTime;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $sequence;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $setupTime;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $status;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $workOrder;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"actualRunTime" => "SearchDoubleField",
    	"actualSetupTime" => "SearchDoubleField",
    	"completedQuantity" => "SearchDoubleField",
    	"endDate" => "SearchDateField",
    	"estimatedWork" => "SearchDoubleField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"id" => "SearchLongField",
    	"inputQuantity" => "SearchDoubleField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"laborResources" => "SearchLongField",
    	"lagAmount" => "SearchDoubleField",
    	"lagType" => "SearchEnumMultiSelectField",
    	"lagUnits" => "SearchStringField",
    	"machineResources" => "SearchLongField",
    	"manufacturingCostTemplate" => "SearchMultiSelectField",
    	"manufacturingWorkCenter" => "SearchMultiSelectField",
    	"name" => "SearchStringField",
    	"order" => "SearchDoubleField",
    	"predecessor" => "SearchMultiSelectField",
    	"remainingQuantity" => "SearchDoubleField",
    	"runRate" => "SearchDoubleField",
    	"runTime" => "SearchDoubleField",
    	"sequence" => "SearchLongField",
    	"setupTime" => "SearchDoubleField",
    	"startDate" => "SearchDateField",
    	"status" => "SearchMultiSelectField",
    	"workOrder" => "SearchMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set actualRunTime
     *
     * @param SearchDoubleField $actualRunTime
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setActualRunTime(SearchDoubleField $actualRunTime) {
        $this->actualRunTime = $actualRunTime;
        return $this;
    }

    /**
     * Get actualRunTime
     *
     * @return SearchDoubleField
     */
    public function getActualRunTime() {
        return $this->actualRunTime;
    }


    /**
     * Set actualSetupTime
     *
     * @param SearchDoubleField $actualSetupTime
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setActualSetupTime(SearchDoubleField $actualSetupTime) {
        $this->actualSetupTime = $actualSetupTime;
        return $this;
    }

    /**
     * Get actualSetupTime
     *
     * @return SearchDoubleField
     */
    public function getActualSetupTime() {
        return $this->actualSetupTime;
    }


    /**
     * Set completedQuantity
     *
     * @param SearchDoubleField $completedQuantity
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setCompletedQuantity(SearchDoubleField $completedQuantity) {
        $this->completedQuantity = $completedQuantity;
        return $this;
    }

    /**
     * Get completedQuantity
     *
     * @return SearchDoubleField
     */
    public function getCompletedQuantity() {
        return $this->completedQuantity;
    }


    /**
     * Set endDate
     *
     * @param SearchDateField $endDate
     * @return ManufacturingOperationTaskSearchBasic
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
     * @return ManufacturingOperationTaskSearchBasic
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
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set id
     *
     * @param SearchLongField $id
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setId(SearchLongField $id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return SearchLongField
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set inputQuantity
     *
     * @param SearchDoubleField $inputQuantity
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setInputQuantity(SearchDoubleField $inputQuantity) {
        $this->inputQuantity = $inputQuantity;
        return $this;
    }

    /**
     * Get inputQuantity
     *
     * @return SearchDoubleField
     */
    public function getInputQuantity() {
        return $this->inputQuantity;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return ManufacturingOperationTaskSearchBasic
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
     * @return ManufacturingOperationTaskSearchBasic
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
     * Set laborResources
     *
     * @param SearchLongField $laborResources
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setLaborResources(SearchLongField $laborResources) {
        $this->laborResources = $laborResources;
        return $this;
    }

    /**
     * Get laborResources
     *
     * @return SearchLongField
     */
    public function getLaborResources() {
        return $this->laborResources;
    }


    /**
     * Set lagAmount
     *
     * @param SearchDoubleField $lagAmount
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setLagAmount(SearchDoubleField $lagAmount) {
        $this->lagAmount = $lagAmount;
        return $this;
    }

    /**
     * Get lagAmount
     *
     * @return SearchDoubleField
     */
    public function getLagAmount() {
        return $this->lagAmount;
    }


    /**
     * Set lagType
     *
     * @param SearchEnumMultiSelectField $lagType
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setLagType(SearchEnumMultiSelectField $lagType) {
        $this->lagType = $lagType;
        return $this;
    }

    /**
     * Get lagType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getLagType() {
        return $this->lagType;
    }


    /**
     * Set lagUnits
     *
     * @param SearchStringField $lagUnits
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setLagUnits(SearchStringField $lagUnits) {
        $this->lagUnits = $lagUnits;
        return $this;
    }

    /**
     * Get lagUnits
     *
     * @return SearchStringField
     */
    public function getLagUnits() {
        return $this->lagUnits;
    }


    /**
     * Set machineResources
     *
     * @param SearchLongField $machineResources
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setMachineResources(SearchLongField $machineResources) {
        $this->machineResources = $machineResources;
        return $this;
    }

    /**
     * Get machineResources
     *
     * @return SearchLongField
     */
    public function getMachineResources() {
        return $this->machineResources;
    }


    /**
     * Set manufacturingCostTemplate
     *
     * @param SearchMultiSelectField $manufacturingCostTemplate
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setManufacturingCostTemplate(SearchMultiSelectField $manufacturingCostTemplate) {
        $this->manufacturingCostTemplate = $manufacturingCostTemplate;
        return $this;
    }

    /**
     * Get manufacturingCostTemplate
     *
     * @return SearchMultiSelectField
     */
    public function getManufacturingCostTemplate() {
        return $this->manufacturingCostTemplate;
    }


    /**
     * Set manufacturingWorkCenter
     *
     * @param SearchMultiSelectField $manufacturingWorkCenter
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setManufacturingWorkCenter(SearchMultiSelectField $manufacturingWorkCenter) {
        $this->manufacturingWorkCenter = $manufacturingWorkCenter;
        return $this;
    }

    /**
     * Get manufacturingWorkCenter
     *
     * @return SearchMultiSelectField
     */
    public function getManufacturingWorkCenter() {
        return $this->manufacturingWorkCenter;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setName(SearchStringField $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return SearchStringField
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set order
     *
     * @param SearchDoubleField $order
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setOrder(SearchDoubleField $order) {
        $this->order = $order;
        return $this;
    }

    /**
     * Get order
     *
     * @return SearchDoubleField
     */
    public function getOrder() {
        return $this->order;
    }


    /**
     * Set predecessor
     *
     * @param SearchMultiSelectField $predecessor
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setPredecessor(SearchMultiSelectField $predecessor) {
        $this->predecessor = $predecessor;
        return $this;
    }

    /**
     * Get predecessor
     *
     * @return SearchMultiSelectField
     */
    public function getPredecessor() {
        return $this->predecessor;
    }


    /**
     * Set remainingQuantity
     *
     * @param SearchDoubleField $remainingQuantity
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setRemainingQuantity(SearchDoubleField $remainingQuantity) {
        $this->remainingQuantity = $remainingQuantity;
        return $this;
    }

    /**
     * Get remainingQuantity
     *
     * @return SearchDoubleField
     */
    public function getRemainingQuantity() {
        return $this->remainingQuantity;
    }


    /**
     * Set runRate
     *
     * @param SearchDoubleField $runRate
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setRunRate(SearchDoubleField $runRate) {
        $this->runRate = $runRate;
        return $this;
    }

    /**
     * Get runRate
     *
     * @return SearchDoubleField
     */
    public function getRunRate() {
        return $this->runRate;
    }


    /**
     * Set runTime
     *
     * @param SearchDoubleField $runTime
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setRunTime(SearchDoubleField $runTime) {
        $this->runTime = $runTime;
        return $this;
    }

    /**
     * Get runTime
     *
     * @return SearchDoubleField
     */
    public function getRunTime() {
        return $this->runTime;
    }


    /**
     * Set sequence
     *
     * @param SearchLongField $sequence
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setSequence(SearchLongField $sequence) {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Get sequence
     *
     * @return SearchLongField
     */
    public function getSequence() {
        return $this->sequence;
    }


    /**
     * Set setupTime
     *
     * @param SearchDoubleField $setupTime
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setSetupTime(SearchDoubleField $setupTime) {
        $this->setupTime = $setupTime;
        return $this;
    }

    /**
     * Get setupTime
     *
     * @return SearchDoubleField
     */
    public function getSetupTime() {
        return $this->setupTime;
    }


    /**
     * Set startDate
     *
     * @param SearchDateField $startDate
     * @return ManufacturingOperationTaskSearchBasic
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
     * Set status
     *
     * @param SearchMultiSelectField $status
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setStatus(SearchMultiSelectField $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return SearchMultiSelectField
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set workOrder
     *
     * @param SearchMultiSelectField $workOrder
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setWorkOrder(SearchMultiSelectField $workOrder) {
        $this->workOrder = $workOrder;
        return $this;
    }

    /**
     * Get workOrder
     *
     * @return SearchMultiSelectField
     */
    public function getWorkOrder() {
        return $this->workOrder;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}