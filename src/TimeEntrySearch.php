<?php

namespace Nzolt\NetSuite;

class TimeEntrySearch extends SearchRecord
{

    /**
     * @var TimeEntrySearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var PhoneCallSearchBasic $callJoin
     */
    protected $callJoin = null;

    /**
     * @var SupportCaseSearchBasic $caseJoin
     */
    protected $caseJoin = null;

    /**
     * @var ClassificationSearchBasic $classJoin
     */
    protected $classJoin = null;

    /**
     * @var CustomerSearchBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var DepartmentSearchBasic $departmentJoin
     */
    protected $departmentJoin = null;

    /**
     * @var EmployeeSearchBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var CalendarEventSearchBasic $eventJoin
     */
    protected $eventJoin = null;

    /**
     * @var ItemSearchBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var JobSearchBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var LocationSearchBasic $locationJoin
     */
    protected $locationJoin = null;

    /**
     * @var ProjectTaskSearchBasic $projectTaskJoin
     */
    protected $projectTaskJoin = null;

    /**
     * @var ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin
     */
    protected $projectTaskAssignmentJoin = null;

    /**
     * @var ResourceAllocationSearchBasic $resourceAllocationJoin
     */
    protected $resourceAllocationJoin = null;

    /**
     * @var TaskSearchBasic $taskJoin
     */
    protected $taskJoin = null;

    /**
     * @var TimeSheetSearchBasic $timeSheetJoin
     */
    protected $timeSheetJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var VendorSearchBasic $vendorJoin
     */
    protected $vendorJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TimeEntrySearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param TimeEntrySearchBasic $basic
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return PhoneCallSearchBasic
     */
    public function getCallJoin()
    {
      return $this->callJoin;
    }

    /**
     * @param PhoneCallSearchBasic $callJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setCallJoin($callJoin)
    {
      $this->callJoin = $callJoin;
      return $this;
    }

    /**
     * @return SupportCaseSearchBasic
     */
    public function getCaseJoin()
    {
      return $this->caseJoin;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
      return $this;
    }

    /**
     * @return ClassificationSearchBasic
     */
    public function getClassJoin()
    {
      return $this->classJoin;
    }

    /**
     * @param ClassificationSearchBasic $classJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setClassJoin($classJoin)
    {
      $this->classJoin = $classJoin;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin()
    {
      return $this->customerJoin;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return DepartmentSearchBasic
     */
    public function getDepartmentJoin()
    {
      return $this->departmentJoin;
    }

    /**
     * @param DepartmentSearchBasic $departmentJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setDepartmentJoin($departmentJoin)
    {
      $this->departmentJoin = $departmentJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getEmployeeJoin()
    {
      return $this->employeeJoin;
    }

    /**
     * @param EmployeeSearchBasic $employeeJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
      return $this;
    }

    /**
     * @return CalendarEventSearchBasic
     */
    public function getEventJoin()
    {
      return $this->eventJoin;
    }

    /**
     * @param CalendarEventSearchBasic $eventJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setEventJoin($eventJoin)
    {
      $this->eventJoin = $eventJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getJobJoin()
    {
      return $this->jobJoin;
    }

    /**
     * @param JobSearchBasic $jobJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
      return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getLocationJoin()
    {
      return $this->locationJoin;
    }

    /**
     * @param LocationSearchBasic $locationJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setLocationJoin($locationJoin)
    {
      $this->locationJoin = $locationJoin;
      return $this;
    }

    /**
     * @return ProjectTaskSearchBasic
     */
    public function getProjectTaskJoin()
    {
      return $this->projectTaskJoin;
    }

    /**
     * @param ProjectTaskSearchBasic $projectTaskJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setProjectTaskJoin($projectTaskJoin)
    {
      $this->projectTaskJoin = $projectTaskJoin;
      return $this;
    }

    /**
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function getProjectTaskAssignmentJoin()
    {
      return $this->projectTaskAssignmentJoin;
    }

    /**
     * @param ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setProjectTaskAssignmentJoin($projectTaskAssignmentJoin)
    {
      $this->projectTaskAssignmentJoin = $projectTaskAssignmentJoin;
      return $this;
    }

    /**
     * @return ResourceAllocationSearchBasic
     */
    public function getResourceAllocationJoin()
    {
      return $this->resourceAllocationJoin;
    }

    /**
     * @param ResourceAllocationSearchBasic $resourceAllocationJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setResourceAllocationJoin($resourceAllocationJoin)
    {
      $this->resourceAllocationJoin = $resourceAllocationJoin;
      return $this;
    }

    /**
     * @return TaskSearchBasic
     */
    public function getTaskJoin()
    {
      return $this->taskJoin;
    }

    /**
     * @param TaskSearchBasic $taskJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
      return $this;
    }

    /**
     * @return TimeSheetSearchBasic
     */
    public function getTimeSheetJoin()
    {
      return $this->timeSheetJoin;
    }

    /**
     * @param TimeSheetSearchBasic $timeSheetJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setTimeSheetJoin($timeSheetJoin)
    {
      $this->timeSheetJoin = $timeSheetJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getVendorJoin()
    {
      return $this->vendorJoin;
    }

    /**
     * @param VendorSearchBasic $vendorJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setVendorJoin($vendorJoin)
    {
      $this->vendorJoin = $vendorJoin;
      return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return \Nzolt\NetSuite\TimeEntrySearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
