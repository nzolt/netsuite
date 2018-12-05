<?php

namespace Nzolt\NetSuite;

class ResourceAllocationSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $allocationType
     */
    protected $allocationType = null;

    /**
     * @var SearchEnumMultiSelectField $allocationUnit
     */
    protected $allocationUnit = null;

    /**
     * @var SearchEnumMultiSelectField $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var SearchMultiSelectField $customer
     */
    protected $customer = null;

    /**
     * @var SearchDateField $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchMultiSelectField $nextApprover
     */
    protected $nextApprover = null;

    /**
     * @var SearchStringField $notes
     */
    protected $notes = null;

    /**
     * @var SearchDoubleField $numberHours
     */
    protected $numberHours = null;

    /**
     * @var SearchDoubleField $percentOfTime
     */
    protected $percentOfTime = null;

    /**
     * @var SearchMultiSelectField $project
     */
    protected $project = null;

    /**
     * @var SearchMultiSelectField $requestedBy
     */
    protected $requestedBy = null;

    /**
     * @var SearchMultiSelectField $resource
     */
    protected $resource = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAllocationType()
    {
      return $this->allocationType;
    }

    /**
     * @param SearchMultiSelectField $allocationType
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setAllocationType($allocationType)
    {
      $this->allocationType = $allocationType;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAllocationUnit()
    {
      return $this->allocationUnit;
    }

    /**
     * @param SearchEnumMultiSelectField $allocationUnit
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setAllocationUnit($allocationUnit)
    {
      $this->allocationUnit = $allocationUnit;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $approvalStatus
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param SearchMultiSelectField $customer
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getNextApprover()
    {
      return $this->nextApprover;
    }

    /**
     * @param SearchMultiSelectField $nextApprover
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setNextApprover($nextApprover)
    {
      $this->nextApprover = $nextApprover;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param SearchStringField $notes
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getNumberHours()
    {
      return $this->numberHours;
    }

    /**
     * @param SearchDoubleField $numberHours
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setNumberHours($numberHours)
    {
      $this->numberHours = $numberHours;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPercentOfTime()
    {
      return $this->percentOfTime;
    }

    /**
     * @param SearchDoubleField $percentOfTime
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setPercentOfTime($percentOfTime)
    {
      $this->percentOfTime = $percentOfTime;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProject()
    {
      return $this->project;
    }

    /**
     * @param SearchMultiSelectField $project
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setProject($project)
    {
      $this->project = $project;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRequestedBy()
    {
      return $this->requestedBy;
    }

    /**
     * @param SearchMultiSelectField $requestedBy
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setRequestedBy($requestedBy)
    {
      $this->requestedBy = $requestedBy;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getResource()
    {
      return $this->resource;
    }

    /**
     * @param SearchMultiSelectField $resource
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setResource($resource)
    {
      $this->resource = $resource;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
