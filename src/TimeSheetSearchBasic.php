<?php

namespace Nzolt\NetSuite;

class TimeSheetSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var SearchMultiSelectField $employee
     */
    protected $employee = null;

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
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchDateField $timeSheetDate
     */
    protected $timeSheetDate = null;

    /**
     * @var SearchDoubleField $totalHours
     */
    protected $totalHours = null;

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
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param SearchMultiSelectField $approvalStatus
     * @return \Nzolt\NetSuite\TimeSheetSearchBasic
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEmployee()
    {
      return $this->employee;
    }

    /**
     * @param SearchMultiSelectField $employee
     * @return \Nzolt\NetSuite\TimeSheetSearchBasic
     */
    public function setEmployee($employee)
    {
      $this->employee = $employee;
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
     * @return \Nzolt\NetSuite\TimeSheetSearchBasic
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
     * @return \Nzolt\NetSuite\TimeSheetSearchBasic
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
     * @return \Nzolt\NetSuite\TimeSheetSearchBasic
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Nzolt\NetSuite\TimeSheetSearchBasic
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
     * @return \Nzolt\NetSuite\TimeSheetSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getTimeSheetDate()
    {
      return $this->timeSheetDate;
    }

    /**
     * @param SearchDateField $timeSheetDate
     * @return \Nzolt\NetSuite\TimeSheetSearchBasic
     */
    public function setTimeSheetDate($timeSheetDate)
    {
      $this->timeSheetDate = $timeSheetDate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTotalHours()
    {
      return $this->totalHours;
    }

    /**
     * @param SearchDoubleField $totalHours
     * @return \Nzolt\NetSuite\TimeSheetSearchBasic
     */
    public function setTotalHours($totalHours)
    {
      $this->totalHours = $totalHours;
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
     * @return \Nzolt\NetSuite\TimeSheetSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
