<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

/**
 * WorkOrderCompletionOperation
 */
class WorkOrderCompletionOperation {

    /**
     * @access public
     * @var integer
     */
    protected $operationSequence;

    /**
     * @access public
     * @var string
     */
    protected $operationName;

    /**
     * @access public
     * @var string
     */
    protected $workCenter;

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
     * @var float
     */
    protected $inputQuantity;

    /**
     * @access public
     * @var float
     */
    protected $quantityRemaining;

    /**
     * @access public
     * @var float
     */
    protected $predecessorCompletedQuantity;

    /**
     * @access public
     * @var float
     */
    protected $completedQuantity;

    /**
     * @access public
     * @var boolean
     */
    protected $recordSetup;

    /**
     * @access public
     * @var float
     */
    protected $machineSetupTime;

    /**
     * @access public
     * @var float
     */
    protected $laborSetupTime;

    /**
     * @access public
     * @var float
     */
    protected $machineRunTime;

    /**
     * @access public
     * @var float
     */
    protected $laborRunTime;

    static $paramtypesmap = array(
    	"operationSequence" => "integer",
    	"operationName" => "string",
    	"workCenter" => "string",
    	"machineResources" => "integer",
    	"laborResources" => "integer",
    	"inputQuantity" => "float",
    	"quantityRemaining" => "float",
    	"predecessorCompletedQuantity" => "float",
    	"completedQuantity" => "float",
    	"recordSetup" => "boolean",
    	"machineSetupTime" => "float",
    	"laborSetupTime" => "float",
    	"machineRunTime" => "float",
    	"laborRunTime" => "float",
    );

    /**
     * Set operationSequence
     *
     * @param integer $operationSequence
     * @return WorkOrderCompletionOperation
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
     * Set operationName
     *
     * @param string $operationName
     * @return WorkOrderCompletionOperation
     */
    public function setOperationName($operationName) {
        $this->operationName = $operationName;
        return $this;
    }

    /**
     * Get operationName
     *
     * @return string
     */
    public function getOperationName() {
        return $this->operationName;
    }


    /**
     * Set workCenter
     *
     * @param string $workCenter
     * @return WorkOrderCompletionOperation
     */
    public function setWorkCenter($workCenter) {
        $this->workCenter = $workCenter;
        return $this;
    }

    /**
     * Get workCenter
     *
     * @return string
     */
    public function getWorkCenter() {
        return $this->workCenter;
    }


    /**
     * Set machineResources
     *
     * @param integer $machineResources
     * @return WorkOrderCompletionOperation
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
     * @return WorkOrderCompletionOperation
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
     * Set inputQuantity
     *
     * @param float $inputQuantity
     * @return WorkOrderCompletionOperation
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
     * Set quantityRemaining
     *
     * @param float $quantityRemaining
     * @return WorkOrderCompletionOperation
     */
    public function setQuantityRemaining($quantityRemaining) {
        $this->quantityRemaining = $quantityRemaining;
        return $this;
    }

    /**
     * Get quantityRemaining
     *
     * @return float
     */
    public function getQuantityRemaining() {
        return $this->quantityRemaining;
    }


    /**
     * Set predecessorCompletedQuantity
     *
     * @param float $predecessorCompletedQuantity
     * @return WorkOrderCompletionOperation
     */
    public function setPredecessorCompletedQuantity($predecessorCompletedQuantity) {
        $this->predecessorCompletedQuantity = $predecessorCompletedQuantity;
        return $this;
    }

    /**
     * Get predecessorCompletedQuantity
     *
     * @return float
     */
    public function getPredecessorCompletedQuantity() {
        return $this->predecessorCompletedQuantity;
    }


    /**
     * Set completedQuantity
     *
     * @param float $completedQuantity
     * @return WorkOrderCompletionOperation
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
     * Set recordSetup
     *
     * @param boolean $recordSetup
     * @return WorkOrderCompletionOperation
     */
    public function setRecordSetup($recordSetup) {
        $this->recordSetup = $recordSetup;
        return $this;
    }

    /**
     * Get recordSetup
     *
     * @return boolean
     */
    public function getRecordSetup() {
        return $this->recordSetup;
    }


    /**
     * Set machineSetupTime
     *
     * @param float $machineSetupTime
     * @return WorkOrderCompletionOperation
     */
    public function setMachineSetupTime($machineSetupTime) {
        $this->machineSetupTime = $machineSetupTime;
        return $this;
    }

    /**
     * Get machineSetupTime
     *
     * @return float
     */
    public function getMachineSetupTime() {
        return $this->machineSetupTime;
    }


    /**
     * Set laborSetupTime
     *
     * @param float $laborSetupTime
     * @return WorkOrderCompletionOperation
     */
    public function setLaborSetupTime($laborSetupTime) {
        $this->laborSetupTime = $laborSetupTime;
        return $this;
    }

    /**
     * Get laborSetupTime
     *
     * @return float
     */
    public function getLaborSetupTime() {
        return $this->laborSetupTime;
    }


    /**
     * Set machineRunTime
     *
     * @param float $machineRunTime
     * @return WorkOrderCompletionOperation
     */
    public function setMachineRunTime($machineRunTime) {
        $this->machineRunTime = $machineRunTime;
        return $this;
    }

    /**
     * Get machineRunTime
     *
     * @return float
     */
    public function getMachineRunTime() {
        return $this->machineRunTime;
    }


    /**
     * Set laborRunTime
     *
     * @param float $laborRunTime
     * @return WorkOrderCompletionOperation
     */
    public function setLaborRunTime($laborRunTime) {
        $this->laborRunTime = $laborRunTime;
        return $this;
    }

    /**
     * Get laborRunTime
     *
     * @return float
     */
    public function getLaborRunTime() {
        return $this->laborRunTime;
    }

}