<?php

namespace Nzolt\NetSuite;

class TimeEntrySearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var SearchBooleanField $billable
     */
    protected $billable = null;

    /**
     * @var SearchMultiSelectField $billingClass
     */
    protected $billingClass = null;

    /**
     * @var SearchBooleanField $billingStatus
     */
    protected $billingStatus = null;

    /**
     * @var SearchMultiSelectField $class
     */
    protected $class = null;

    /**
     * @var SearchMultiSelectField $customer
     */
    protected $customer = null;

    /**
     * @var SearchDateField $date
     */
    protected $date = null;

    /**
     * @var SearchDateField $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchMultiSelectField $department
     */
    protected $department = null;

    /**
     * @var SearchDoubleField $duration
     */
    protected $duration = null;

    /**
     * @var SearchMultiSelectField $employee
     */
    protected $employee = null;

    /**
     * @var SearchBooleanField $exempt
     */
    protected $exempt = null;

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
     * @var SearchBooleanField $isCharged
     */
    protected $isCharged = null;

    /**
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchDateField $lastModified
     */
    protected $lastModified = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchStringField $memo
     */
    protected $memo = null;

    /**
     * @var SearchMultiSelectField $nextApprover
     */
    protected $nextApprover = null;

    /**
     * @var SearchBooleanField $paidByPayroll
     */
    protected $paidByPayroll = null;

    /**
     * @var SearchBooleanField $paidExternally
     */
    protected $paidExternally = null;

    /**
     * @var SearchMultiSelectField $payItem
     */
    protected $payItem = null;

    /**
     * @var SearchBooleanField $productive
     */
    protected $productive = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchEnumMultiSelectField $type
     */
    protected $type = null;

    /**
     * @var SearchBooleanField $utilized
     */
    protected $utilized = null;

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
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBillable()
    {
      return $this->billable;
    }

    /**
     * @param SearchBooleanField $billable
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setBillable($billable)
    {
      $this->billable = $billable;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingClass()
    {
      return $this->billingClass;
    }

    /**
     * @param SearchMultiSelectField $billingClass
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setBillingClass($billingClass)
    {
      $this->billingClass = $billingClass;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBillingStatus()
    {
      return $this->billingStatus;
    }

    /**
     * @param SearchBooleanField $billingStatus
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setBillingStatus($billingStatus)
    {
      $this->billingStatus = $billingStatus;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setClass($class)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param SearchDateField $date
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateCreated()
    {
      return $this->dateCreated;
    }

    /**
     * @param SearchDateField $dateCreated
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setDateCreated($dateCreated)
    {
      $this->dateCreated = $dateCreated;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDuration()
    {
      return $this->duration;
    }

    /**
     * @param SearchDoubleField $duration
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
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
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setEmployee($employee)
    {
      $this->employee = $employee;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getExempt()
    {
      return $this->exempt;
    }

    /**
     * @param SearchBooleanField $exempt
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setExempt($exempt)
    {
      $this->exempt = $exempt;
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
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
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
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
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
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
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
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsCharged()
    {
      return $this->isCharged;
    }

    /**
     * @param SearchBooleanField $isCharged
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setIsCharged($isCharged)
    {
      $this->isCharged = $isCharged;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModified()
    {
      return $this->lastModified;
    }

    /**
     * @param SearchDateField $lastModified
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setLastModified($lastModified)
    {
      $this->lastModified = $lastModified;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchStringField $memo
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setNextApprover($nextApprover)
    {
      $this->nextApprover = $nextApprover;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPaidByPayroll()
    {
      return $this->paidByPayroll;
    }

    /**
     * @param SearchBooleanField $paidByPayroll
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setPaidByPayroll($paidByPayroll)
    {
      $this->paidByPayroll = $paidByPayroll;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPaidExternally()
    {
      return $this->paidExternally;
    }

    /**
     * @param SearchBooleanField $paidExternally
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setPaidExternally($paidExternally)
    {
      $this->paidExternally = $paidExternally;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPayItem()
    {
      return $this->payItem;
    }

    /**
     * @param SearchMultiSelectField $payItem
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setPayItem($payItem)
    {
      $this->payItem = $payItem;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getProductive()
    {
      return $this->productive;
    }

    /**
     * @param SearchBooleanField $productive
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setProductive($productive)
    {
      $this->productive = $productive;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param SearchEnumMultiSelectField $type
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUtilized()
    {
      return $this->utilized;
    }

    /**
     * @param SearchBooleanField $utilized
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setUtilized($utilized)
    {
      $this->utilized = $utilized;
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
     * @return \Nzolt\NetSuite\TimeEntrySearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
