<?php

namespace Nzolt\NetSuite;

class TimeSheetSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var SearchColumnSelectField[] $employee
     */
    protected $employee = null;

    /**
     * @var SearchColumnDateField[] $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnLongField[] $id
     */
    protected $id = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchColumnStringField[] $totalHours
     */
    protected $totalHours = null;

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
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param SearchColumnSelectField[] $approvalStatus
     * @return \Nzolt\NetSuite\TimeSheetSearchRowBasic
     */
    public function setApprovalStatus(array $approvalStatus = null)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEmployee()
    {
      return $this->employee;
    }

    /**
     * @param SearchColumnSelectField[] $employee
     * @return \Nzolt\NetSuite\TimeSheetSearchRowBasic
     */
    public function setEmployee(array $employee = null)
    {
      $this->employee = $employee;
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
     * @return \Nzolt\NetSuite\TimeSheetSearchRowBasic
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
     * @return \Nzolt\NetSuite\TimeSheetSearchRowBasic
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
     * @return \Nzolt\NetSuite\TimeSheetSearchRowBasic
     */
    public function setId(array $id = null)
    {
      $this->id = $id;
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
     * @return \Nzolt\NetSuite\TimeSheetSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
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
     * @return \Nzolt\NetSuite\TimeSheetSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTotalHours()
    {
      return $this->totalHours;
    }

    /**
     * @param SearchColumnStringField[] $totalHours
     * @return \Nzolt\NetSuite\TimeSheetSearchRowBasic
     */
    public function setTotalHours(array $totalHours = null)
    {
      $this->totalHours = $totalHours;
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
     * @return \Nzolt\NetSuite\TimeSheetSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
