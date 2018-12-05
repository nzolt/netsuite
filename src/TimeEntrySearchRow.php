<?php

namespace Nzolt\NetSuite;

class TimeEntrySearchRow extends SearchRow
{

    /**
     * @var TimeEntrySearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var PhoneCallSearchRowBasic $callJoin
     */
    protected $callJoin = null;

    /**
     * @var SupportCaseSearchRowBasic $caseJoin
     */
    protected $caseJoin = null;

    /**
     * @var ClassificationSearchRowBasic $classJoin
     */
    protected $classJoin = null;

    /**
     * @var CustomerSearchRowBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var DepartmentSearchRowBasic $departmentJoin
     */
    protected $departmentJoin = null;

    /**
     * @var EmployeeSearchRowBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var CalendarEventSearchRowBasic $eventJoin
     */
    protected $eventJoin = null;

    /**
     * @var ItemSearchRowBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var JobSearchRowBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var LocationSearchRowBasic $locationJoin
     */
    protected $locationJoin = null;

    /**
     * @var ProjectTaskSearchRowBasic $projectTaskJoin
     */
    protected $projectTaskJoin = null;

    /**
     * @var ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin
     */
    protected $projectTaskAssignmentJoin = null;

    /**
     * @var ResourceAllocationSearchRowBasic $resourceAllocationJoin
     */
    protected $resourceAllocationJoin = null;

    /**
     * @var TaskSearchRowBasic $taskJoin
     */
    protected $taskJoin = null;

    /**
     * @var TimeSheetSearchRowBasic $timeSheetJoin
     */
    protected $timeSheetJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var VendorSearchRowBasic $vendorJoin
     */
    protected $vendorJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TimeEntrySearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param TimeEntrySearchRowBasic $basic
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return PhoneCallSearchRowBasic
     */
    public function getCallJoin()
    {
      return $this->callJoin;
    }

    /**
     * @param PhoneCallSearchRowBasic $callJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setCallJoin($callJoin)
    {
      $this->callJoin = $callJoin;
      return $this;
    }

    /**
     * @return SupportCaseSearchRowBasic
     */
    public function getCaseJoin()
    {
      return $this->caseJoin;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
      return $this;
    }

    /**
     * @return ClassificationSearchRowBasic
     */
    public function getClassJoin()
    {
      return $this->classJoin;
    }

    /**
     * @param ClassificationSearchRowBasic $classJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setClassJoin($classJoin)
    {
      $this->classJoin = $classJoin;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerJoin()
    {
      return $this->customerJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return DepartmentSearchRowBasic
     */
    public function getDepartmentJoin()
    {
      return $this->departmentJoin;
    }

    /**
     * @param DepartmentSearchRowBasic $departmentJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setDepartmentJoin($departmentJoin)
    {
      $this->departmentJoin = $departmentJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getEmployeeJoin()
    {
      return $this->employeeJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
      return $this;
    }

    /**
     * @return CalendarEventSearchRowBasic
     */
    public function getEventJoin()
    {
      return $this->eventJoin;
    }

    /**
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setEventJoin($eventJoin)
    {
      $this->eventJoin = $eventJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getJobJoin()
    {
      return $this->jobJoin;
    }

    /**
     * @param JobSearchRowBasic $jobJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
      return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getLocationJoin()
    {
      return $this->locationJoin;
    }

    /**
     * @param LocationSearchRowBasic $locationJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setLocationJoin($locationJoin)
    {
      $this->locationJoin = $locationJoin;
      return $this;
    }

    /**
     * @return ProjectTaskSearchRowBasic
     */
    public function getProjectTaskJoin()
    {
      return $this->projectTaskJoin;
    }

    /**
     * @param ProjectTaskSearchRowBasic $projectTaskJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setProjectTaskJoin($projectTaskJoin)
    {
      $this->projectTaskJoin = $projectTaskJoin;
      return $this;
    }

    /**
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function getProjectTaskAssignmentJoin()
    {
      return $this->projectTaskAssignmentJoin;
    }

    /**
     * @param ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setProjectTaskAssignmentJoin($projectTaskAssignmentJoin)
    {
      $this->projectTaskAssignmentJoin = $projectTaskAssignmentJoin;
      return $this;
    }

    /**
     * @return ResourceAllocationSearchRowBasic
     */
    public function getResourceAllocationJoin()
    {
      return $this->resourceAllocationJoin;
    }

    /**
     * @param ResourceAllocationSearchRowBasic $resourceAllocationJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setResourceAllocationJoin($resourceAllocationJoin)
    {
      $this->resourceAllocationJoin = $resourceAllocationJoin;
      return $this;
    }

    /**
     * @return TaskSearchRowBasic
     */
    public function getTaskJoin()
    {
      return $this->taskJoin;
    }

    /**
     * @param TaskSearchRowBasic $taskJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
      return $this;
    }

    /**
     * @return TimeSheetSearchRowBasic
     */
    public function getTimeSheetJoin()
    {
      return $this->timeSheetJoin;
    }

    /**
     * @param TimeSheetSearchRowBasic $timeSheetJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setTimeSheetJoin($timeSheetJoin)
    {
      $this->timeSheetJoin = $timeSheetJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getVendorJoin()
    {
      return $this->vendorJoin;
    }

    /**
     * @param VendorSearchRowBasic $vendorJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setVendorJoin($vendorJoin)
    {
      $this->vendorJoin = $vendorJoin;
      return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return \Nzolt\NetSuite\TimeEntrySearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
