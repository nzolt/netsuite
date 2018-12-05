<?php

namespace Nzolt\NetSuite;

class ResourceAllocationSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $allocationType
     */
    protected $allocationType = null;

    /**
     * @var SearchColumnEnumSelectField[] $allocationUnit
     */
    protected $allocationUnit = null;

    /**
     * @var SearchColumnEnumSelectField[] $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var SearchColumnSelectField[] $project
     */
    protected $project = null;

    /**
     * @var SearchColumnSelectField[] $customer
     */
    protected $customer = null;

    /**
     * @var SearchColumnDateField[] $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnSelectField[] $nextApprover
     */
    protected $nextApprover = null;

    /**
     * @var SearchColumnStringField[] $notes
     */
    protected $notes = null;

    /**
     * @var SearchColumnDoubleField[] $numberHours
     */
    protected $numberHours = null;

    /**
     * @var SearchColumnDoubleField[] $percentOfTime
     */
    protected $percentOfTime = null;

    /**
     * @var SearchColumnSelectField[] $requestedBy
     */
    protected $requestedBy = null;

    /**
     * @var SearchColumnSelectField[] $resource
     */
    protected $resource = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAllocationType()
    {
      return $this->allocationType;
    }

    /**
     * @param SearchColumnSelectField[] $allocationType
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setAllocationType(array $allocationType = null)
    {
      $this->allocationType = $allocationType;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAllocationUnit()
    {
      return $this->allocationUnit;
    }

    /**
     * @param SearchColumnEnumSelectField[] $allocationUnit
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setAllocationUnit(array $allocationUnit = null)
    {
      $this->allocationUnit = $allocationUnit;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $approvalStatus
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setApprovalStatus(array $approvalStatus = null)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProject()
    {
      return $this->project;
    }

    /**
     * @param SearchColumnSelectField[] $project
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setProject(array $project = null)
    {
      $this->project = $project;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param SearchColumnSelectField[] $customer
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setCustomer(array $customer = null)
    {
      $this->customer = $customer;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setEndDate(array $endDate = null)
    {
      $this->endDate = $endDate;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getNextApprover()
    {
      return $this->nextApprover;
    }

    /**
     * @param SearchColumnSelectField[] $nextApprover
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setNextApprover(array $nextApprover = null)
    {
      $this->nextApprover = $nextApprover;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param SearchColumnStringField[] $notes
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setNotes(array $notes = null)
    {
      $this->notes = $notes;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getNumberHours()
    {
      return $this->numberHours;
    }

    /**
     * @param SearchColumnDoubleField[] $numberHours
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setNumberHours(array $numberHours = null)
    {
      $this->numberHours = $numberHours;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPercentOfTime()
    {
      return $this->percentOfTime;
    }

    /**
     * @param SearchColumnDoubleField[] $percentOfTime
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setPercentOfTime(array $percentOfTime = null)
    {
      $this->percentOfTime = $percentOfTime;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRequestedBy()
    {
      return $this->requestedBy;
    }

    /**
     * @param SearchColumnSelectField[] $requestedBy
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setRequestedBy(array $requestedBy = null)
    {
      $this->requestedBy = $requestedBy;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getResource()
    {
      return $this->resource;
    }

    /**
     * @param SearchColumnSelectField[] $resource
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setResource(array $resource = null)
    {
      $this->resource = $resource;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
