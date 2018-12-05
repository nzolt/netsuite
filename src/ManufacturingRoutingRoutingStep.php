<?php

namespace Nzolt\NetSuite;

class ManufacturingRoutingRoutingStep
{

    /**
     * @var int $operationSequence
     */
    protected $operationSequence = null;

    /**
     * @var string $operationName
     */
    protected $operationName = null;

    /**
     * @var RecordRef $manufacturingWorkCenter
     */
    protected $manufacturingWorkCenter = null;

    /**
     * @var int $machineResources
     */
    protected $machineResources = null;

    /**
     * @var int $laborResources
     */
    protected $laborResources = null;

    /**
     * @var RecordRef $manufacturingCostTemplate
     */
    protected $manufacturingCostTemplate = null;

    /**
     * @var float $setupTime
     */
    protected $setupTime = null;

    /**
     * @var float $runRate
     */
    protected $runRate = null;

    /**
     * @var ManufacturingLagType $lagType
     */
    protected $lagType = null;

    /**
     * @var int $lagAmount
     */
    protected $lagAmount = null;

    /**
     * @var string $lagUnits
     */
    protected $lagUnits = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getOperationSequence()
    {
      return $this->operationSequence;
    }

    /**
     * @param int $operationSequence
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingStep
     */
    public function setOperationSequence($operationSequence)
    {
      $this->operationSequence = $operationSequence;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperationName()
    {
      return $this->operationName;
    }

    /**
     * @param string $operationName
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingStep
     */
    public function setOperationName($operationName)
    {
      $this->operationName = $operationName;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getManufacturingWorkCenter()
    {
      return $this->manufacturingWorkCenter;
    }

    /**
     * @param RecordRef $manufacturingWorkCenter
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingStep
     */
    public function setManufacturingWorkCenter($manufacturingWorkCenter)
    {
      $this->manufacturingWorkCenter = $manufacturingWorkCenter;
      return $this;
    }

    /**
     * @return int
     */
    public function getMachineResources()
    {
      return $this->machineResources;
    }

    /**
     * @param int $machineResources
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingStep
     */
    public function setMachineResources($machineResources)
    {
      $this->machineResources = $machineResources;
      return $this;
    }

    /**
     * @return int
     */
    public function getLaborResources()
    {
      return $this->laborResources;
    }

    /**
     * @param int $laborResources
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingStep
     */
    public function setLaborResources($laborResources)
    {
      $this->laborResources = $laborResources;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getManufacturingCostTemplate()
    {
      return $this->manufacturingCostTemplate;
    }

    /**
     * @param RecordRef $manufacturingCostTemplate
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingStep
     */
    public function setManufacturingCostTemplate($manufacturingCostTemplate)
    {
      $this->manufacturingCostTemplate = $manufacturingCostTemplate;
      return $this;
    }

    /**
     * @return float
     */
    public function getSetupTime()
    {
      return $this->setupTime;
    }

    /**
     * @param float $setupTime
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingStep
     */
    public function setSetupTime($setupTime)
    {
      $this->setupTime = $setupTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getRunRate()
    {
      return $this->runRate;
    }

    /**
     * @param float $runRate
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingStep
     */
    public function setRunRate($runRate)
    {
      $this->runRate = $runRate;
      return $this;
    }

    /**
     * @return ManufacturingLagType
     */
    public function getLagType()
    {
      return $this->lagType;
    }

    /**
     * @param ManufacturingLagType $lagType
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingStep
     */
    public function setLagType($lagType)
    {
      $this->lagType = $lagType;
      return $this;
    }

    /**
     * @return int
     */
    public function getLagAmount()
    {
      return $this->lagAmount;
    }

    /**
     * @param int $lagAmount
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingStep
     */
    public function setLagAmount($lagAmount)
    {
      $this->lagAmount = $lagAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getLagUnits()
    {
      return $this->lagUnits;
    }

    /**
     * @param string $lagUnits
     * @return \Nzolt\NetSuite\ManufacturingRoutingRoutingStep
     */
    public function setLagUnits($lagUnits)
    {
      $this->lagUnits = $lagUnits;
      return $this;
    }

}
