<?php

namespace Nzolt\NetSuite;

class ManufacturingOperationTask extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $manufacturingWorkCenter
     */
    protected $manufacturingWorkCenter = null;

    /**
     * @var RecordRef $manufacturingCostTemplate
     */
    protected $manufacturingCostTemplate = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var int $operationSequence
     */
    protected $operationSequence = null;

    /**
     * @var RecordRef $workOrder
     */
    protected $workOrder = null;

    /**
     * @var RecordRef $order
     */
    protected $order = null;

    /**
     * @var ManufacturingOperationTaskStatus $status
     */
    protected $status = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var float $estimatedWork
     */
    protected $estimatedWork = null;

    /**
     * @var float $actualWork
     */
    protected $actualWork = null;

    /**
     * @var float $remainingWork
     */
    protected $remainingWork = null;

    /**
     * @var float $inputQuantity
     */
    protected $inputQuantity = null;

    /**
     * @var float $completedQuantity
     */
    protected $completedQuantity = null;

    /**
     * @var float $setupTime
     */
    protected $setupTime = null;

    /**
     * @var float $runRate
     */
    protected $runRate = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var boolean $autoCalculateLag
     */
    protected $autoCalculateLag = null;

    /**
     * @var int $machineResources
     */
    protected $machineResources = null;

    /**
     * @var int $laborResources
     */
    protected $laborResources = null;

    /**
     * @var ManufacturingCostDetailList $costDetailList
     */
    protected $costDetailList = null;

    /**
     * @var ManufacturingOperationTaskPredecessorList $predecessorList
     */
    protected $predecessorList = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setManufacturingWorkCenter($manufacturingWorkCenter)
    {
      $this->manufacturingWorkCenter = $manufacturingWorkCenter;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setManufacturingCostTemplate($manufacturingCostTemplate)
    {
      $this->manufacturingCostTemplate = $manufacturingCostTemplate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setOperationSequence($operationSequence)
    {
      $this->operationSequence = $operationSequence;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWorkOrder()
    {
      return $this->workOrder;
    }

    /**
     * @param RecordRef $workOrder
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setWorkOrder($workOrder)
    {
      $this->workOrder = $workOrder;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param RecordRef $order
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return ManufacturingOperationTaskStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param ManufacturingOperationTaskStatus $status
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedWork()
    {
      return $this->estimatedWork;
    }

    /**
     * @param float $estimatedWork
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setEstimatedWork($estimatedWork)
    {
      $this->estimatedWork = $estimatedWork;
      return $this;
    }

    /**
     * @return float
     */
    public function getActualWork()
    {
      return $this->actualWork;
    }

    /**
     * @param float $actualWork
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setActualWork($actualWork)
    {
      $this->actualWork = $actualWork;
      return $this;
    }

    /**
     * @return float
     */
    public function getRemainingWork()
    {
      return $this->remainingWork;
    }

    /**
     * @param float $remainingWork
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setRemainingWork($remainingWork)
    {
      $this->remainingWork = $remainingWork;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setInputQuantity($inputQuantity)
    {
      $this->inputQuantity = $inputQuantity;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setCompletedQuantity($completedQuantity)
    {
      $this->completedQuantity = $completedQuantity;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setRunRate($runRate)
    {
      $this->runRate = $runRate;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoCalculateLag()
    {
      return $this->autoCalculateLag;
    }

    /**
     * @param boolean $autoCalculateLag
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setAutoCalculateLag($autoCalculateLag)
    {
      $this->autoCalculateLag = $autoCalculateLag;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setLaborResources($laborResources)
    {
      $this->laborResources = $laborResources;
      return $this;
    }

    /**
     * @return ManufacturingCostDetailList
     */
    public function getCostDetailList()
    {
      return $this->costDetailList;
    }

    /**
     * @param ManufacturingCostDetailList $costDetailList
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setCostDetailList($costDetailList)
    {
      $this->costDetailList = $costDetailList;
      return $this;
    }

    /**
     * @return ManufacturingOperationTaskPredecessorList
     */
    public function getPredecessorList()
    {
      return $this->predecessorList;
    }

    /**
     * @param ManufacturingOperationTaskPredecessorList $predecessorList
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setPredecessorList($predecessorList)
    {
      $this->predecessorList = $predecessorList;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\ManufacturingOperationTask
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
