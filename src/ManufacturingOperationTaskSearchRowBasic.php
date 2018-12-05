<?php

namespace Nzolt\NetSuite;

class ManufacturingOperationTaskSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnDoubleField[] $actualRunTime
     */
    protected $actualRunTime = null;

    /**
     * @var SearchColumnDoubleField[] $actualSetupTime
     */
    protected $actualSetupTime = null;

    /**
     * @var SearchColumnDoubleField[] $completedQuantity
     */
    protected $completedQuantity = null;

    /**
     * @var SearchColumnDateField[] $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedWork
     */
    protected $estimatedWork = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnLongField[] $id
     */
    protected $id = null;

    /**
     * @var SearchColumnDoubleField[] $inputQuantity
     */
    protected $inputQuantity = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnLongField[] $laborResources
     */
    protected $laborResources = null;

    /**
     * @var SearchColumnDoubleField[] $lagAmount
     */
    protected $lagAmount = null;

    /**
     * @var SearchColumnEnumSelectField[] $lagType
     */
    protected $lagType = null;

    /**
     * @var SearchColumnStringField[] $lagUnits
     */
    protected $lagUnits = null;

    /**
     * @var SearchColumnLongField[] $machineResources
     */
    protected $machineResources = null;

    /**
     * @var SearchColumnSelectField[] $manufacturingCostTemplate
     */
    protected $manufacturingCostTemplate = null;

    /**
     * @var SearchColumnSelectField[] $manufacturingWorkCenter
     */
    protected $manufacturingWorkCenter = null;

    /**
     * @var SearchColumnStringField[] $message
     */
    protected $message = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnDoubleField[] $order
     */
    protected $order = null;

    /**
     * @var SearchColumnSelectField[] $predecessor
     */
    protected $predecessor = null;

    /**
     * @var SearchColumnStringField[] $predecessorType
     */
    protected $predecessorType = null;

    /**
     * @var SearchColumnDoubleField[] $remainingQuantity
     */
    protected $remainingQuantity = null;

    /**
     * @var SearchColumnDoubleField[] $runRate
     */
    protected $runRate = null;

    /**
     * @var SearchColumnDoubleField[] $runTime
     */
    protected $runTime = null;

    /**
     * @var SearchColumnLongField[] $sequence
     */
    protected $sequence = null;

    /**
     * @var SearchColumnDoubleField[] $setupTime
     */
    protected $setupTime = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchColumnSelectField[] $status
     */
    protected $status = null;

    /**
     * @var SearchColumnStringField[] $workOrder
     */
    protected $workOrder = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getActualRunTime()
    {
      return $this->actualRunTime;
    }

    /**
     * @param SearchColumnDoubleField[] $actualRunTime
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setActualRunTime(array $actualRunTime = null)
    {
      $this->actualRunTime = $actualRunTime;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getActualSetupTime()
    {
      return $this->actualSetupTime;
    }

    /**
     * @param SearchColumnDoubleField[] $actualSetupTime
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setActualSetupTime(array $actualSetupTime = null)
    {
      $this->actualSetupTime = $actualSetupTime;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCompletedQuantity()
    {
      return $this->completedQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $completedQuantity
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setCompletedQuantity(array $completedQuantity = null)
    {
      $this->completedQuantity = $completedQuantity;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setEstimatedWork(array $estimatedWork = null)
    {
      $this->estimatedWork = $estimatedWork;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param SearchColumnLongField[] $id
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setId(array $id = null)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getInputQuantity()
    {
      return $this->inputQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $inputQuantity
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setInputQuantity(array $inputQuantity = null)
    {
      $this->inputQuantity = $inputQuantity;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLaborResources()
    {
      return $this->laborResources;
    }

    /**
     * @param SearchColumnLongField[] $laborResources
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setLaborResources(array $laborResources = null)
    {
      $this->laborResources = $laborResources;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLagAmount()
    {
      return $this->lagAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $lagAmount
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setLagAmount(array $lagAmount = null)
    {
      $this->lagAmount = $lagAmount;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLagType()
    {
      return $this->lagType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $lagType
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setLagType(array $lagType = null)
    {
      $this->lagType = $lagType;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLagUnits()
    {
      return $this->lagUnits;
    }

    /**
     * @param SearchColumnStringField[] $lagUnits
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setLagUnits(array $lagUnits = null)
    {
      $this->lagUnits = $lagUnits;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getMachineResources()
    {
      return $this->machineResources;
    }

    /**
     * @param SearchColumnLongField[] $machineResources
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setMachineResources(array $machineResources = null)
    {
      $this->machineResources = $machineResources;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getManufacturingCostTemplate()
    {
      return $this->manufacturingCostTemplate;
    }

    /**
     * @param SearchColumnSelectField[] $manufacturingCostTemplate
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setManufacturingCostTemplate(array $manufacturingCostTemplate = null)
    {
      $this->manufacturingCostTemplate = $manufacturingCostTemplate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getManufacturingWorkCenter()
    {
      return $this->manufacturingWorkCenter;
    }

    /**
     * @param SearchColumnSelectField[] $manufacturingWorkCenter
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setManufacturingWorkCenter(array $manufacturingWorkCenter = null)
    {
      $this->manufacturingWorkCenter = $manufacturingWorkCenter;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setMessage(array $message = null)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param SearchColumnDoubleField[] $order
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setOrder(array $order = null)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPredecessor()
    {
      return $this->predecessor;
    }

    /**
     * @param SearchColumnSelectField[] $predecessor
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setPredecessor(array $predecessor = null)
    {
      $this->predecessor = $predecessor;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPredecessorType()
    {
      return $this->predecessorType;
    }

    /**
     * @param SearchColumnStringField[] $predecessorType
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setPredecessorType(array $predecessorType = null)
    {
      $this->predecessorType = $predecessorType;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRemainingQuantity()
    {
      return $this->remainingQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $remainingQuantity
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setRemainingQuantity(array $remainingQuantity = null)
    {
      $this->remainingQuantity = $remainingQuantity;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRunRate()
    {
      return $this->runRate;
    }

    /**
     * @param SearchColumnDoubleField[] $runRate
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setRunRate(array $runRate = null)
    {
      $this->runRate = $runRate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRunTime()
    {
      return $this->runTime;
    }

    /**
     * @param SearchColumnDoubleField[] $runTime
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setRunTime(array $runTime = null)
    {
      $this->runTime = $runTime;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getSequence()
    {
      return $this->sequence;
    }

    /**
     * @param SearchColumnLongField[] $sequence
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setSequence(array $sequence = null)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSetupTime()
    {
      return $this->setupTime;
    }

    /**
     * @param SearchColumnDoubleField[] $setupTime
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setSetupTime(array $setupTime = null)
    {
      $this->setupTime = $setupTime;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchColumnSelectField[] $status
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setStatus(array $status = null)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getWorkOrder()
    {
      return $this->workOrder;
    }

    /**
     * @param SearchColumnStringField[] $workOrder
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setWorkOrder(array $workOrder = null)
    {
      $this->workOrder = $workOrder;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
