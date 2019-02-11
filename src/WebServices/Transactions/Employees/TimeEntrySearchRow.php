<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeEntrySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ClassificationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\DepartmentSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskAssignmentSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ResourceAllocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeSheetSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchRowBasic;

/**
 * TimeEntrySearchRow
 */
class TimeEntrySearchRow extends SearchRow {

    /**
     * @access public
     * @var TimeEntrySearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var PhoneCallSearchRowBasic
     */
    protected $callJoin;

    /**
     * @access public
     * @var SupportCaseSearchRowBasic
     */
    protected $caseJoin;

    /**
     * @access public
     * @var ClassificationSearchRowBasic
     */
    protected $classJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var DepartmentSearchRowBasic
     */
    protected $departmentJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $employeeJoin;

    /**
     * @access public
     * @var CalendarEventSearchRowBasic
     */
    protected $eventJoin;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $itemJoin;

    /**
     * @access public
     * @var JobSearchRowBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var LocationSearchRowBasic
     */
    protected $locationJoin;

    /**
     * @access public
     * @var ProjectTaskSearchRowBasic
     */
    protected $projectTaskJoin;

    /**
     * @access public
     * @var ProjectTaskAssignmentSearchRowBasic
     */
    protected $projectTaskAssignmentJoin;

    /**
     * @access public
     * @var ResourceAllocationSearchRowBasic
     */
    protected $resourceAllocationJoin;

    /**
     * @access public
     * @var TaskSearchRowBasic
     */
    protected $taskJoin;

    /**
     * @access public
     * @var TimeSheetSearchRowBasic
     */
    protected $timeSheetJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var VendorSearchRowBasic
     */
    protected $vendorJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "TimeEntrySearchRowBasic",
    	"callJoin" => "PhoneCallSearchRowBasic",
    	"caseJoin" => "SupportCaseSearchRowBasic",
    	"classJoin" => "ClassificationSearchRowBasic",
    	"customerJoin" => "CustomerSearchRowBasic",
    	"departmentJoin" => "DepartmentSearchRowBasic",
    	"employeeJoin" => "EmployeeSearchRowBasic",
    	"eventJoin" => "CalendarEventSearchRowBasic",
    	"itemJoin" => "ItemSearchRowBasic",
    	"jobJoin" => "JobSearchRowBasic",
    	"locationJoin" => "LocationSearchRowBasic",
    	"projectTaskJoin" => "ProjectTaskSearchRowBasic",
    	"projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchRowBasic",
    	"resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
    	"taskJoin" => "TaskSearchRowBasic",
    	"timeSheetJoin" => "TimeSheetSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"vendorJoin" => "VendorSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param TimeEntrySearchRowBasic $basic
     * @return TimeEntrySearchRow
     */
    public function setBasic(TimeEntrySearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return TimeEntrySearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set callJoin
     *
     * @param PhoneCallSearchRowBasic $callJoin
     * @return TimeEntrySearchRow
     */
    public function setCallJoin(PhoneCallSearchRowBasic $callJoin) {
        $this->callJoin = $callJoin;
        return $this;
    }

    /**
     * Get callJoin
     *
     * @return PhoneCallSearchRowBasic
     */
    public function getCallJoin() {
        return $this->callJoin;
    }


    /**
     * Set caseJoin
     *
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return TimeEntrySearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin) {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * Get caseJoin
     *
     * @return SupportCaseSearchRowBasic
     */
    public function getCaseJoin() {
        return $this->caseJoin;
    }


    /**
     * Set classJoin
     *
     * @param ClassificationSearchRowBasic $classJoin
     * @return TimeEntrySearchRow
     */
    public function setClassJoin(ClassificationSearchRowBasic $classJoin) {
        $this->classJoin = $classJoin;
        return $this;
    }

    /**
     * Get classJoin
     *
     * @return ClassificationSearchRowBasic
     */
    public function getClassJoin() {
        return $this->classJoin;
    }


    /**
     * Set customerJoin
     *
     * @param CustomerSearchRowBasic $customerJoin
     * @return TimeEntrySearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin) {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * Get customerJoin
     *
     * @return CustomerSearchRowBasic
     */
    public function getCustomerJoin() {
        return $this->customerJoin;
    }


    /**
     * Set departmentJoin
     *
     * @param DepartmentSearchRowBasic $departmentJoin
     * @return TimeEntrySearchRow
     */
    public function setDepartmentJoin(DepartmentSearchRowBasic $departmentJoin) {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * Get departmentJoin
     *
     * @return DepartmentSearchRowBasic
     */
    public function getDepartmentJoin() {
        return $this->departmentJoin;
    }


    /**
     * Set employeeJoin
     *
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return TimeEntrySearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin) {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * Get employeeJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getEmployeeJoin() {
        return $this->employeeJoin;
    }


    /**
     * Set eventJoin
     *
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return TimeEntrySearchRow
     */
    public function setEventJoin(CalendarEventSearchRowBasic $eventJoin) {
        $this->eventJoin = $eventJoin;
        return $this;
    }

    /**
     * Get eventJoin
     *
     * @return CalendarEventSearchRowBasic
     */
    public function getEventJoin() {
        return $this->eventJoin;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchRowBasic $itemJoin
     * @return TimeEntrySearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin) {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * Get itemJoin
     *
     * @return ItemSearchRowBasic
     */
    public function getItemJoin() {
        return $this->itemJoin;
    }


    /**
     * Set jobJoin
     *
     * @param JobSearchRowBasic $jobJoin
     * @return TimeEntrySearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin) {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * Get jobJoin
     *
     * @return JobSearchRowBasic
     */
    public function getJobJoin() {
        return $this->jobJoin;
    }


    /**
     * Set locationJoin
     *
     * @param LocationSearchRowBasic $locationJoin
     * @return TimeEntrySearchRow
     */
    public function setLocationJoin(LocationSearchRowBasic $locationJoin) {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * Get locationJoin
     *
     * @return LocationSearchRowBasic
     */
    public function getLocationJoin() {
        return $this->locationJoin;
    }


    /**
     * Set projectTaskJoin
     *
     * @param ProjectTaskSearchRowBasic $projectTaskJoin
     * @return TimeEntrySearchRow
     */
    public function setProjectTaskJoin(ProjectTaskSearchRowBasic $projectTaskJoin) {
        $this->projectTaskJoin = $projectTaskJoin;
        return $this;
    }

    /**
     * Get projectTaskJoin
     *
     * @return ProjectTaskSearchRowBasic
     */
    public function getProjectTaskJoin() {
        return $this->projectTaskJoin;
    }


    /**
     * Set projectTaskAssignmentJoin
     *
     * @param ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin
     * @return TimeEntrySearchRow
     */
    public function setProjectTaskAssignmentJoin(ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin) {
        $this->projectTaskAssignmentJoin = $projectTaskAssignmentJoin;
        return $this;
    }

    /**
     * Get projectTaskAssignmentJoin
     *
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function getProjectTaskAssignmentJoin() {
        return $this->projectTaskAssignmentJoin;
    }


    /**
     * Set resourceAllocationJoin
     *
     * @param ResourceAllocationSearchRowBasic $resourceAllocationJoin
     * @return TimeEntrySearchRow
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchRowBasic $resourceAllocationJoin) {
        $this->resourceAllocationJoin = $resourceAllocationJoin;
        return $this;
    }

    /**
     * Get resourceAllocationJoin
     *
     * @return ResourceAllocationSearchRowBasic
     */
    public function getResourceAllocationJoin() {
        return $this->resourceAllocationJoin;
    }


    /**
     * Set taskJoin
     *
     * @param TaskSearchRowBasic $taskJoin
     * @return TimeEntrySearchRow
     */
    public function setTaskJoin(TaskSearchRowBasic $taskJoin) {
        $this->taskJoin = $taskJoin;
        return $this;
    }

    /**
     * Get taskJoin
     *
     * @return TaskSearchRowBasic
     */
    public function getTaskJoin() {
        return $this->taskJoin;
    }


    /**
     * Set timeSheetJoin
     *
     * @param TimeSheetSearchRowBasic $timeSheetJoin
     * @return TimeEntrySearchRow
     */
    public function setTimeSheetJoin(TimeSheetSearchRowBasic $timeSheetJoin) {
        $this->timeSheetJoin = $timeSheetJoin;
        return $this;
    }

    /**
     * Get timeSheetJoin
     *
     * @return TimeSheetSearchRowBasic
     */
    public function getTimeSheetJoin() {
        return $this->timeSheetJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return TimeEntrySearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }


    /**
     * Set vendorJoin
     *
     * @param VendorSearchRowBasic $vendorJoin
     * @return TimeEntrySearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin) {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * Get vendorJoin
     *
     * @return VendorSearchRowBasic
     */
    public function getVendorJoin() {
        return $this->vendorJoin;
    }

}