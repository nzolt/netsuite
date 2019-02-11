<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

use Nzolt\NetSuite\WebServices\Lists\Supplychain\Types\ManufacturingLagType;

/**
 * ManufacturingRoutingRoutingStep
 */
class ManufacturingRoutingRoutingStep {

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
     * @var RecordRef
     */
    public $manufacturingWorkCenter;

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
     * @var RecordRef
     */
    public $manufacturingCostTemplate;

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
     * @var ManufacturingLagType
     */
    protected $lagType;

    /**
     * @access public
     * @var integer
     */
    protected $lagAmount;

    /**
     * @access public
     * @var string
     */
    protected $lagUnits;

    static $paramtypesmap = array(
    	"operationSequence" => "integer",
    	"operationName" => "string",
    	"manufacturingWorkCenter" => "RecordRef",
    	"machineResources" => "integer",
    	"laborResources" => "integer",
    	"manufacturingCostTemplate" => "RecordRef",
    	"setupTime" => "float",
    	"runRate" => "float",
    	"lagType" => "ManufacturingLagType",
    	"lagAmount" => "integer",
    	"lagUnits" => "string",
    );

    /**
     * Set operationSequence
     *
     * @param integer $operationSequence
     * @return ManufacturingRoutingRoutingStep
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
     * @return ManufacturingRoutingRoutingStep
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
     * Set machineResources
     *
     * @param integer $machineResources
     * @return ManufacturingRoutingRoutingStep
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
     * @return ManufacturingRoutingRoutingStep
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
     * Set setupTime
     *
     * @param float $setupTime
     * @return ManufacturingRoutingRoutingStep
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
     * @return ManufacturingRoutingRoutingStep
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
     * Set lagType
     *
     * @param ManufacturingLagType $lagType
     * @return ManufacturingRoutingRoutingStep
     */
    public function setLagType(ManufacturingLagType $lagType) {
        $this->lagType = $lagType;
        return $this;
    }

    /**
     * Get lagType
     *
     * @return ManufacturingLagType
     */
    public function getLagType() {
        return $this->lagType;
    }


    /**
     * Set lagAmount
     *
     * @param integer $lagAmount
     * @return ManufacturingRoutingRoutingStep
     */
    public function setLagAmount($lagAmount) {
        $this->lagAmount = $lagAmount;
        return $this;
    }

    /**
     * Get lagAmount
     *
     * @return integer
     */
    public function getLagAmount() {
        return $this->lagAmount;
    }


    /**
     * Set lagUnits
     *
     * @param string $lagUnits
     * @return ManufacturingRoutingRoutingStep
     */
    public function setLagUnits($lagUnits) {
        $this->lagUnits = $lagUnits;
        return $this;
    }

    /**
     * Get lagUnits
     *
     * @return string
     */
    public function getLagUnits() {
        return $this->lagUnits;
    }

}