<?php

namespace Nzolt\NetSuite;

class ResourceAllocation extends Record
{

    /**
     * @var RecordRef $requestedby
     */
    protected $requestedby = null;

    /**
     * @var ResourceAllocationApprovalStatus $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var RecordRef $nextApprover
     */
    protected $nextApprover = null;

    /**
     * @var RecordRef $allocationResource
     */
    protected $allocationResource = null;

    /**
     * @var RecordRef $project
     */
    protected $project = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var float $allocationAmount
     */
    protected $allocationAmount = null;

    /**
     * @var ResourceAllocationAllocationUnit $allocationUnit
     */
    protected $allocationUnit = null;

    /**
     * @var float $numberHours
     */
    protected $numberHours = null;

    /**
     * @var float $percentOfTime
     */
    protected $percentOfTime = null;

    /**
     * @var RecordRef $allocationType
     */
    protected $allocationType = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

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
    public function getRequestedby()
    {
      return $this->requestedby;
    }

    /**
     * @param RecordRef $requestedby
     * @return \Nzolt\NetSuite\ResourceAllocation
     */
    public function setRequestedby($requestedby)
    {
      $this->requestedby = $requestedby;
      return $this;
    }

    /**
     * @return ResourceAllocationApprovalStatus
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param ResourceAllocationApprovalStatus $approvalStatus
     * @return \Nzolt\NetSuite\ResourceAllocation
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNextApprover()
    {
      return $this->nextApprover;
    }

    /**
     * @param RecordRef $nextApprover
     * @return \Nzolt\NetSuite\ResourceAllocation
     */
    public function setNextApprover($nextApprover)
    {
      $this->nextApprover = $nextApprover;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAllocationResource()
    {
      return $this->allocationResource;
    }

    /**
     * @param RecordRef $allocationResource
     * @return \Nzolt\NetSuite\ResourceAllocation
     */
    public function setAllocationResource($allocationResource)
    {
      $this->allocationResource = $allocationResource;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProject()
    {
      return $this->project;
    }

    /**
     * @param RecordRef $project
     * @return \Nzolt\NetSuite\ResourceAllocation
     */
    public function setProject($project)
    {
      $this->project = $project;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param string $notes
     * @return \Nzolt\NetSuite\ResourceAllocation
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
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
     * @return \Nzolt\NetSuite\ResourceAllocation
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
     * @return \Nzolt\NetSuite\ResourceAllocation
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
     * @return float
     */
    public function getAllocationAmount()
    {
      return $this->allocationAmount;
    }

    /**
     * @param float $allocationAmount
     * @return \Nzolt\NetSuite\ResourceAllocation
     */
    public function setAllocationAmount($allocationAmount)
    {
      $this->allocationAmount = $allocationAmount;
      return $this;
    }

    /**
     * @return ResourceAllocationAllocationUnit
     */
    public function getAllocationUnit()
    {
      return $this->allocationUnit;
    }

    /**
     * @param ResourceAllocationAllocationUnit $allocationUnit
     * @return \Nzolt\NetSuite\ResourceAllocation
     */
    public function setAllocationUnit($allocationUnit)
    {
      $this->allocationUnit = $allocationUnit;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumberHours()
    {
      return $this->numberHours;
    }

    /**
     * @param float $numberHours
     * @return \Nzolt\NetSuite\ResourceAllocation
     */
    public function setNumberHours($numberHours)
    {
      $this->numberHours = $numberHours;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentOfTime()
    {
      return $this->percentOfTime;
    }

    /**
     * @param float $percentOfTime
     * @return \Nzolt\NetSuite\ResourceAllocation
     */
    public function setPercentOfTime($percentOfTime)
    {
      $this->percentOfTime = $percentOfTime;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAllocationType()
    {
      return $this->allocationType;
    }

    /**
     * @param RecordRef $allocationType
     * @return \Nzolt\NetSuite\ResourceAllocation
     */
    public function setAllocationType($allocationType)
    {
      $this->allocationType = $allocationType;
      return $this;
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
     * @return \Nzolt\NetSuite\ResourceAllocation
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\ResourceAllocation
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
     * @return \Nzolt\NetSuite\ResourceAllocation
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
     * @return \Nzolt\NetSuite\ResourceAllocation
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
