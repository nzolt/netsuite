<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Supplychain\Types\ManufacturingOperationTaskStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ManufacturingOperationTask
 */
class ManufacturingOperationTask extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $manufacturingWorkCenter;

    /**
     * @access public
     * @var RecordRef
     */
    public $manufacturingCostTemplate;

    /**
     * @access public
     * @var string
     */
    protected $title;

    /**
     * @access public
     * @var integer
     */
    protected $operationSequence;

    /**
     * @access public
     * @var RecordRef
     */
    public $workOrder;

    /**
     * @access public
     * @var RecordRef
     */
    public $order;

    /**
     * @access public
     * @var ManufacturingOperationTaskStatus
     */
    protected $status;

    /**
     * @access public
     * @var string
     */
    protected $message;

    /**
     * @access public
     * @var float
     */
    protected $estimatedWork;

    /**
     * @access public
     * @var float
     */
    protected $actualWork;

    /**
     * @access public
     * @var float
     */
    protected $remainingWork;

    /**
     * @access public
     * @var float
     */
    protected $inputQuantity;

    /**
     * @access public
     * @var float
     */
    protected $completedQuantity;

    /**
     * @access public
     * @var float
     */
    protected $setupTime;

    /**
     * @access public
     * @var float
     */
    protected $runRate;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    /**
     * @access public
     * @var boolean
     */
    protected $autoCalculateLag;

    /**
     * @access public
     * @var integer
     */
    protected $machineResources;

    /**
     * @access public
     * @var integer
     */
    protected $laborResources;

    /**
     * @access public
     * @var ManufacturingCostDetailList
     */
    protected $costDetailList;

    /**
     * @access public
     * @var ManufacturingOperationTaskPredecessorList
     */
    protected $predecessorList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"customForm" => "RecordRef",
    	"manufacturingWorkCenter" => "RecordRef",
    	"manufacturingCostTemplate" => "RecordRef",
    	"title" => "string",
    	"operationSequence" => "integer",
    	"workOrder" => "RecordRef",
    	"order" => "RecordRef",
    	"status" => "ManufacturingOperationTaskStatus",
    	"message" => "string",
    	"estimatedWork" => "float",
    	"actualWork" => "float",
    	"remainingWork" => "float",
    	"inputQuantity" => "float",
    	"completedQuantity" => "float",
    	"setupTime" => "float",
    	"runRate" => "float",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"autoCalculateLag" => "boolean",
    	"machineResources" => "integer",
    	"laborResources" => "integer",
    	"costDetailList" => "ManufacturingCostDetailList",
    	"predecessorList" => "ManufacturingOperationTaskPredecessorList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set title
     *
     * @param string $title
     * @return ManufacturingOperationTask
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set operationSequence
     *
     * @param integer $operationSequence
     * @return ManufacturingOperationTask
     */
    public function setOperationSequence($operationSequence) {
        $this->operationSequence = $operationSequence;
        return $this;
    }

    /**
     * Get operationSequence
     *
     * @return integer
     */
    public function getOperationSequence() {
        return $this->operationSequence;
    }


    /**
     * Set status
     *
     * @param ManufacturingOperationTaskStatus $status
     * @return ManufacturingOperationTask
     */
    public function setStatus(ManufacturingOperationTaskStatus $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return ManufacturingOperationTaskStatus
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return ManufacturingOperationTask
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }


    /**
     * Set estimatedWork
     *
     * @param float $estimatedWork
     * @return ManufacturingOperationTask
     */
    public function setEstimatedWork($estimatedWork) {
        $this->estimatedWork = $estimatedWork;
        return $this;
    }

    /**
     * Get estimatedWork
     *
     * @return float
     */
    public function getEstimatedWork() {
        return $this->estimatedWork;
    }


    /**
     * Set actualWork
     *
     * @param float $actualWork
     * @return ManufacturingOperationTask
     */
    public function setActualWork($actualWork) {
        $this->actualWork = $actualWork;
        return $this;
    }

    /**
     * Get actualWork
     *
     * @return float
     */
    public function getActualWork() {
        return $this->actualWork;
    }


    /**
     * Set remainingWork
     *
     * @param float $remainingWork
     * @return ManufacturingOperationTask
     */
    public function setRemainingWork($remainingWork) {
        $this->remainingWork = $remainingWork;
        return $this;
    }

    /**
     * Get remainingWork
     *
     * @return float
     */
    public function getRemainingWork() {
        return $this->remainingWork;
    }


    /**
     * Set inputQuantity
     *
     * @param float $inputQuantity
     * @return ManufacturingOperationTask
     */
    public function setInputQuantity($inputQuantity) {
        $this->inputQuantity = $inputQuantity;
        return $this;
    }

    /**
     * Get inputQuantity
     *
     * @return float
     */
    public function getInputQuantity() {
        return $this->inputQuantity;
    }


    /**
     * Set completedQuantity
     *
     * @param float $completedQuantity
     * @return ManufacturingOperationTask
     */
    public function setCompletedQuantity($completedQuantity) {
        $this->completedQuantity = $completedQuantity;
        return $this;
    }

    /**
     * Get completedQuantity
     *
     * @return float
     */
    public function getCompletedQuantity() {
        return $this->completedQuantity;
    }


    /**
     * Set setupTime
     *
     * @param float $setupTime
     * @return ManufacturingOperationTask
     */
    public function setSetupTime($setupTime) {
        $this->setupTime = $setupTime;
        return $this;
    }

    /**
     * Get setupTime
     *
     * @return float
     */
    public function getSetupTime() {
        return $this->setupTime;
    }


    /**
     * Set runRate
     *
     * @param float $runRate
     * @return ManufacturingOperationTask
     */
    public function setRunRate($runRate) {
        $this->runRate = $runRate;
        return $this;
    }

    /**
     * Get runRate
     *
     * @return float
     */
    public function getRunRate() {
        return $this->runRate;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return ManufacturingOperationTask
     */
    public function setStartDate(\DateTime $startDate) {
        $this->startDate = $startDate->format('c');
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate() {
        return new \DateTime($this->startDate);
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return ManufacturingOperationTask
     */
    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate->format('c');
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return new \DateTime($this->endDate);
    }


    /**
     * Set autoCalculateLag
     *
     * @param boolean $autoCalculateLag
     * @return ManufacturingOperationTask
     */
    public function setAutoCalculateLag($autoCalculateLag) {
        $this->autoCalculateLag = $autoCalculateLag;
        return $this;
    }

    /**
     * Get autoCalculateLag
     *
     * @return boolean
     */
    public function getAutoCalculateLag() {
        return $this->autoCalculateLag;
    }


    /**
     * Set machineResources
     *
     * @param integer $machineResources
     * @return ManufacturingOperationTask
     */
    public function setMachineResources($machineResources) {
        $this->machineResources = $machineResources;
        return $this;
    }

    /**
     * Get machineResources
     *
     * @return integer
     */
    public function getMachineResources() {
        return $this->machineResources;
    }


    /**
     * Set laborResources
     *
     * @param integer $laborResources
     * @return ManufacturingOperationTask
     */
    public function setLaborResources($laborResources) {
        $this->laborResources = $laborResources;
        return $this;
    }

    /**
     * Get laborResources
     *
     * @return integer
     */
    public function getLaborResources() {
        return $this->laborResources;
    }


    /**
     * Set costDetailList
     *
     * @param ManufacturingCostDetailList $costDetailList
     * @return ManufacturingOperationTask
     */
    public function setCostDetailList(ManufacturingCostDetailList $costDetailList) {
        $this->costDetailList = $costDetailList;
        return $this;
    }

    /**
     * Get costDetailList
     *
     * @return ManufacturingCostDetailList
     */
    public function getCostDetailList() {
        return $this->costDetailList;
    }


    /**
     * Set predecessorList
     *
     * @param ManufacturingOperationTaskPredecessorList $predecessorList
     * @return ManufacturingOperationTask
     */
    public function setPredecessorList(ManufacturingOperationTaskPredecessorList $predecessorList) {
        $this->predecessorList = $predecessorList;
        return $this;
    }

    /**
     * Get predecessorList
     *
     * @return ManufacturingOperationTaskPredecessorList
     */
    public function getPredecessorList() {
        return $this->predecessorList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ManufacturingOperationTask
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return ManufacturingOperationTask
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return ManufacturingOperationTask
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}