<?php

namespace Nzolt\NetSuite;

class WorkOrderCompletionOperation
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
     * @var string $workCenter
     */
    protected $workCenter = null;

    /**
     * @var int $machineResources
     */
    protected $machineResources = null;

    /**
     * @var int $laborResources
     */
    protected $laborResources = null;

    /**
     * @var float $inputQuantity
     */
    protected $inputQuantity = null;

    /**
     * @var float $quantityRemaining
     */
    protected $quantityRemaining = null;

    /**
     * @var float $predecessorCompletedQuantity
     */
    protected $predecessorCompletedQuantity = null;

    /**
     * @var float $completedQuantity
     */
    protected $completedQuantity = null;

    /**
     * @var boolean $recordSetup
     */
    protected $recordSetup = null;

    /**
     * @var float $machineSetupTime
     */
    protected $machineSetupTime = null;

    /**
     * @var float $laborSetupTime
     */
    protected $laborSetupTime = null;

    /**
     * @var float $machineRunTime
     */
    protected $machineRunTime = null;

    /**
     * @var float $laborRunTime
     */
    protected $laborRunTime = null;

    
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
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
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
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
     */
    public function setOperationName($operationName)
    {
      $this->operationName = $operationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkCenter()
    {
      return $this->workCenter;
    }

    /**
     * @param string $workCenter
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
     */
    public function setWorkCenter($workCenter)
    {
      $this->workCenter = $workCenter;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
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
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
     */
    public function setLaborResources($laborResources)
    {
      $this->laborResources = $laborResources;
      return $this;
    }

    /**
     * @return float
     */
    public function getInputQuantity()
    {
      return $this->inputQuantity;
    }

    /**
     * @param float $inputQuantity
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
     */
    public function setInputQuantity($inputQuantity)
    {
      $this->inputQuantity = $inputQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityRemaining()
    {
      return $this->quantityRemaining;
    }

    /**
     * @param float $quantityRemaining
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
     */
    public function setQuantityRemaining($quantityRemaining)
    {
      $this->quantityRemaining = $quantityRemaining;
      return $this;
    }

    /**
     * @return float
     */
    public function getPredecessorCompletedQuantity()
    {
      return $this->predecessorCompletedQuantity;
    }

    /**
     * @param float $predecessorCompletedQuantity
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
     */
    public function setPredecessorCompletedQuantity($predecessorCompletedQuantity)
    {
      $this->predecessorCompletedQuantity = $predecessorCompletedQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getCompletedQuantity()
    {
      return $this->completedQuantity;
    }

    /**
     * @param float $completedQuantity
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
     */
    public function setCompletedQuantity($completedQuantity)
    {
      $this->completedQuantity = $completedQuantity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRecordSetup()
    {
      return $this->recordSetup;
    }

    /**
     * @param boolean $recordSetup
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
     */
    public function setRecordSetup($recordSetup)
    {
      $this->recordSetup = $recordSetup;
      return $this;
    }

    /**
     * @return float
     */
    public function getMachineSetupTime()
    {
      return $this->machineSetupTime;
    }

    /**
     * @param float $machineSetupTime
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
     */
    public function setMachineSetupTime($machineSetupTime)
    {
      $this->machineSetupTime = $machineSetupTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getLaborSetupTime()
    {
      return $this->laborSetupTime;
    }

    /**
     * @param float $laborSetupTime
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
     */
    public function setLaborSetupTime($laborSetupTime)
    {
      $this->laborSetupTime = $laborSetupTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getMachineRunTime()
    {
      return $this->machineRunTime;
    }

    /**
     * @param float $machineRunTime
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
     */
    public function setMachineRunTime($machineRunTime)
    {
      $this->machineRunTime = $machineRunTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getLaborRunTime()
    {
      return $this->laborRunTime;
    }

    /**
     * @param float $laborRunTime
     * @return \Nzolt\NetSuite\WorkOrderCompletionOperation
     */
    public function setLaborRunTime($laborRunTime)
    {
      $this->laborRunTime = $laborRunTime;
      return $this;
    }

}
