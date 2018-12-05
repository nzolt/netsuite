<?php

namespace Nzolt\NetSuite;

class TimeBillSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var SearchColumnStringField[] $break
     */
    protected $break = null;

    /**
     * @var SearchColumnSelectField[] $class
     */
    protected $class = null;

    /**
     * @var SearchColumnSelectField[] $customer
     */
    protected $customer = null;

    /**
     * @var SearchColumnDateField[] $date
     */
    protected $date = null;

    /**
     * @var SearchColumnDateField[] $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchColumnSelectField[] $department
     */
    protected $department = null;

    /**
     * @var SearchColumnDoubleField[] $durationDecimal
     */
    protected $durationDecimal = null;

    /**
     * @var SearchColumnSelectField[] $employee
     */
    protected $employee = null;

    /**
     * @var SearchColumnDateField[] $endTime
     */
    protected $endTime = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnStringField[] $hours
     */
    protected $hours = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isBillable
     */
    protected $isBillable = null;

    /**
     * @var SearchColumnBooleanField[] $isExempt
     */
    protected $isExempt = null;

    /**
     * @var SearchColumnBooleanField[] $isProductive
     */
    protected $isProductive = null;

    /**
     * @var SearchColumnBooleanField[] $isUtilized
     */
    protected $isUtilized = null;

    /**
     * @var SearchColumnStringField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnDateField[] $lastModified
     */
    protected $lastModified = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnStringField[] $memo
     */
    protected $memo = null;

    /**
     * @var SearchColumnBooleanField[] $paidExternally
     */
    protected $paidExternally = null;

    /**
     * @var SearchColumnSelectField[] $payItem
     */
    protected $payItem = null;

    /**
     * @var SearchColumnDateField[] $payrollDate
     */
    protected $payrollDate = null;

    /**
     * @var SearchColumnDoubleField[] $rate
     */
    protected $rate = null;

    /**
     * @var SearchColumnStringField[] $rejectionNote
     */
    protected $rejectionNote = null;

    /**
     * @var SearchColumnDateField[] $startTime
     */
    protected $startTime = null;

    /**
     * @var SearchColumnStringField[] $status
     */
    protected $status = null;

    /**
     * @var SearchColumnStringField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnBooleanField[] $supervisorApproval
     */
    protected $supervisorApproval = null;

    /**
     * @var SearchColumnStringField[] $temporaryLocalJurisdiction
     */
    protected $temporaryLocalJurisdiction = null;

    /**
     * @var SearchColumnStringField[] $temporaryStateJurisdiction
     */
    protected $temporaryStateJurisdiction = null;

    /**
     * @var SearchColumnSelectField[] $timeSheet
     */
    protected $timeSheet = null;

    /**
     * @var SearchColumnEnumSelectField[] $type
     */
    protected $type = null;

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
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setApprovalStatus(array $approvalStatus = null)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBreak()
    {
      return $this->break;
    }

    /**
     * @param SearchColumnStringField[] $break
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setBreak(array $break = null)
    {
      $this->break = $break;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setClass(array $class = null)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setCustomer(array $customer = null)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param SearchColumnDateField[] $date
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setDate(array $date = null)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateCreated()
    {
      return $this->dateCreated;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setDateCreated(array $dateCreated = null)
    {
      $this->dateCreated = $dateCreated;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setDepartment(array $department = null)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDurationDecimal()
    {
      return $this->durationDecimal;
    }

    /**
     * @param SearchColumnDoubleField[] $durationDecimal
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setDurationDecimal(array $durationDecimal = null)
    {
      $this->durationDecimal = $durationDecimal;
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
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setEmployee(array $employee = null)
    {
      $this->employee = $employee;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndTime()
    {
      return $this->endTime;
    }

    /**
     * @param SearchColumnDateField[] $endTime
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setEndTime(array $endTime = null)
    {
      $this->endTime = $endTime;
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
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getHours()
    {
      return $this->hours;
    }

    /**
     * @param SearchColumnStringField[] $hours
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setHours(array $hours = null)
    {
      $this->hours = $hours;
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
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsBillable()
    {
      return $this->isBillable;
    }

    /**
     * @param SearchColumnBooleanField[] $isBillable
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setIsBillable(array $isBillable = null)
    {
      $this->isBillable = $isBillable;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsExempt()
    {
      return $this->isExempt;
    }

    /**
     * @param SearchColumnBooleanField[] $isExempt
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setIsExempt(array $isExempt = null)
    {
      $this->isExempt = $isExempt;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsProductive()
    {
      return $this->isProductive;
    }

    /**
     * @param SearchColumnBooleanField[] $isProductive
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setIsProductive(array $isProductive = null)
    {
      $this->isProductive = $isProductive;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsUtilized()
    {
      return $this->isUtilized;
    }

    /**
     * @param SearchColumnBooleanField[] $isUtilized
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setIsUtilized(array $isUtilized = null)
    {
      $this->isUtilized = $isUtilized;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchColumnStringField[] $item
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModified()
    {
      return $this->lastModified;
    }

    /**
     * @param SearchColumnDateField[] $lastModified
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setLastModified(array $lastModified = null)
    {
      $this->lastModified = $lastModified;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setMemo(array $memo = null)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPaidExternally()
    {
      return $this->paidExternally;
    }

    /**
     * @param SearchColumnBooleanField[] $paidExternally
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setPaidExternally(array $paidExternally = null)
    {
      $this->paidExternally = $paidExternally;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPayItem()
    {
      return $this->payItem;
    }

    /**
     * @param SearchColumnSelectField[] $payItem
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setPayItem(array $payItem = null)
    {
      $this->payItem = $payItem;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getPayrollDate()
    {
      return $this->payrollDate;
    }

    /**
     * @param SearchColumnDateField[] $payrollDate
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setPayrollDate(array $payrollDate = null)
    {
      $this->payrollDate = $payrollDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param SearchColumnDoubleField[] $rate
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setRate(array $rate = null)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRejectionNote()
    {
      return $this->rejectionNote;
    }

    /**
     * @param SearchColumnStringField[] $rejectionNote
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setRejectionNote(array $rejectionNote = null)
    {
      $this->rejectionNote = $rejectionNote;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param SearchColumnDateField[] $startTime
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setStartTime(array $startTime = null)
    {
      $this->startTime = $startTime;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchColumnStringField[] $status
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setStatus(array $status = null)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchColumnStringField[] $subsidiary
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSupervisorApproval()
    {
      return $this->supervisorApproval;
    }

    /**
     * @param SearchColumnBooleanField[] $supervisorApproval
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setSupervisorApproval(array $supervisorApproval = null)
    {
      $this->supervisorApproval = $supervisorApproval;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTemporaryLocalJurisdiction()
    {
      return $this->temporaryLocalJurisdiction;
    }

    /**
     * @param SearchColumnStringField[] $temporaryLocalJurisdiction
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setTemporaryLocalJurisdiction(array $temporaryLocalJurisdiction = null)
    {
      $this->temporaryLocalJurisdiction = $temporaryLocalJurisdiction;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTemporaryStateJurisdiction()
    {
      return $this->temporaryStateJurisdiction;
    }

    /**
     * @param SearchColumnStringField[] $temporaryStateJurisdiction
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setTemporaryStateJurisdiction(array $temporaryStateJurisdiction = null)
    {
      $this->temporaryStateJurisdiction = $temporaryStateJurisdiction;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTimeSheet()
    {
      return $this->timeSheet;
    }

    /**
     * @param SearchColumnSelectField[] $timeSheet
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setTimeSheet(array $timeSheet = null)
    {
      $this->timeSheet = $timeSheet;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param SearchColumnEnumSelectField[] $type
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setType(array $type = null)
    {
      $this->type = $type;
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
     * @return \Nzolt\NetSuite\TimeBillSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
