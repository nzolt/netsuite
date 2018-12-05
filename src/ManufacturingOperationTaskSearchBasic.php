<?php

namespace Nzolt\NetSuite;

class ManufacturingOperationTaskSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchDoubleField $actualRunTime
     */
    protected $actualRunTime = null;

    /**
     * @var SearchDoubleField $actualSetupTime
     */
    protected $actualSetupTime = null;

    /**
     * @var SearchDoubleField $completedQuantity
     */
    protected $completedQuantity = null;

    /**
     * @var SearchDateField $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchDoubleField $estimatedWork
     */
    protected $estimatedWork = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchLongField $id
     */
    protected $id = null;

    /**
     * @var SearchDoubleField $inputQuantity
     */
    protected $inputQuantity = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchLongField $laborResources
     */
    protected $laborResources = null;

    /**
     * @var SearchDoubleField $lagAmount
     */
    protected $lagAmount = null;

    /**
     * @var SearchEnumMultiSelectField $lagType
     */
    protected $lagType = null;

    /**
     * @var SearchStringField $lagUnits
     */
    protected $lagUnits = null;

    /**
     * @var SearchLongField $machineResources
     */
    protected $machineResources = null;

    /**
     * @var SearchMultiSelectField $manufacturingCostTemplate
     */
    protected $manufacturingCostTemplate = null;

    /**
     * @var SearchMultiSelectField $manufacturingWorkCenter
     */
    protected $manufacturingWorkCenter = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchDoubleField $order
     */
    protected $order = null;

    /**
     * @var SearchMultiSelectField $predecessor
     */
    protected $predecessor = null;

    /**
     * @var SearchDoubleField $remainingQuantity
     */
    protected $remainingQuantity = null;

    /**
     * @var SearchDoubleField $runRate
     */
    protected $runRate = null;

    /**
     * @var SearchDoubleField $runTime
     */
    protected $runTime = null;

    /**
     * @var SearchLongField $sequence
     */
    protected $sequence = null;

    /**
     * @var SearchDoubleField $setupTime
     */
    protected $setupTime = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchMultiSelectField $status
     */
    protected $status = null;

    /**
     * @var SearchMultiSelectField $workOrder
     */
    protected $workOrder = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchDoubleField
     */
    public function getActualRunTime()
    {
      return $this->actualRunTime;
    }

    /**
     * @param SearchDoubleField $actualRunTime
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setActualRunTime($actualRunTime)
    {
      $this->actualRunTime = $actualRunTime;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getActualSetupTime()
    {
      return $this->actualSetupTime;
    }

    /**
     * @param SearchDoubleField $actualSetupTime
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setActualSetupTime($actualSetupTime)
    {
      $this->actualSetupTime = $actualSetupTime;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCompletedQuantity()
    {
      return $this->completedQuantity;
    }

    /**
     * @param SearchDoubleField $completedQuantity
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setCompletedQuantity($completedQuantity)
    {
      $this->completedQuantity = $completedQuantity;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setEstimatedWork($estimatedWork)
    {
      $this->estimatedWork = $estimatedWork;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param SearchLongField $id
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getInputQuantity()
    {
      return $this->inputQuantity;
    }

    /**
     * @param SearchDoubleField $inputQuantity
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setInputQuantity($inputQuantity)
    {
      $this->inputQuantity = $inputQuantity;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLaborResources()
    {
      return $this->laborResources;
    }

    /**
     * @param SearchLongField $laborResources
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setLaborResources($laborResources)
    {
      $this->laborResources = $laborResources;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLagAmount()
    {
      return $this->lagAmount;
    }

    /**
     * @param SearchDoubleField $lagAmount
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setLagAmount($lagAmount)
    {
      $this->lagAmount = $lagAmount;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLagType()
    {
      return $this->lagType;
    }

    /**
     * @param SearchEnumMultiSelectField $lagType
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setLagType($lagType)
    {
      $this->lagType = $lagType;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLagUnits()
    {
      return $this->lagUnits;
    }

    /**
     * @param SearchStringField $lagUnits
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setLagUnits($lagUnits)
    {
      $this->lagUnits = $lagUnits;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getMachineResources()
    {
      return $this->machineResources;
    }

    /**
     * @param SearchLongField $machineResources
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setMachineResources($machineResources)
    {
      $this->machineResources = $machineResources;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManufacturingCostTemplate()
    {
      return $this->manufacturingCostTemplate;
    }

    /**
     * @param SearchMultiSelectField $manufacturingCostTemplate
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setManufacturingCostTemplate($manufacturingCostTemplate)
    {
      $this->manufacturingCostTemplate = $manufacturingCostTemplate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManufacturingWorkCenter()
    {
      return $this->manufacturingWorkCenter;
    }

    /**
     * @param SearchMultiSelectField $manufacturingWorkCenter
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setManufacturingWorkCenter($manufacturingWorkCenter)
    {
      $this->manufacturingWorkCenter = $manufacturingWorkCenter;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchStringField $name
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param SearchDoubleField $order
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPredecessor()
    {
      return $this->predecessor;
    }

    /**
     * @param SearchMultiSelectField $predecessor
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setPredecessor($predecessor)
    {
      $this->predecessor = $predecessor;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRemainingQuantity()
    {
      return $this->remainingQuantity;
    }

    /**
     * @param SearchDoubleField $remainingQuantity
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setRemainingQuantity($remainingQuantity)
    {
      $this->remainingQuantity = $remainingQuantity;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRunRate()
    {
      return $this->runRate;
    }

    /**
     * @param SearchDoubleField $runRate
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setRunRate($runRate)
    {
      $this->runRate = $runRate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRunTime()
    {
      return $this->runTime;
    }

    /**
     * @param SearchDoubleField $runTime
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setRunTime($runTime)
    {
      $this->runTime = $runTime;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getSequence()
    {
      return $this->sequence;
    }

    /**
     * @param SearchLongField $sequence
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getSetupTime()
    {
      return $this->setupTime;
    }

    /**
     * @param SearchDoubleField $setupTime
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setSetupTime($setupTime)
    {
      $this->setupTime = $setupTime;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchMultiSelectField $status
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWorkOrder()
    {
      return $this->workOrder;
    }

    /**
     * @param SearchMultiSelectField $workOrder
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setWorkOrder($workOrder)
    {
      $this->workOrder = $workOrder;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
