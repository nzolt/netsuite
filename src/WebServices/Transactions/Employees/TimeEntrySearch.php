<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeEntrySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ClassificationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\DepartmentSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskAssignmentSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ResourceAllocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeSheetSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchBasic;

/**
 * TimeEntrySearch
 */
class TimeEntrySearch extends SearchRecord {

    /**
     * @access public
     * @var TimeEntrySearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var PhoneCallSearchBasic
     */
    protected $callJoin;

    /**
     * @access public
     * @var SupportCaseSearchBasic
     */
    protected $caseJoin;

    /**
     * @access public
     * @var ClassificationSearchBasic
     */
    protected $classJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var DepartmentSearchBasic
     */
    protected $departmentJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $employeeJoin;

    /**
     * @access public
     * @var CalendarEventSearchBasic
     */
    protected $eventJoin;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $itemJoin;

    /**
     * @access public
     * @var JobSearchBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var LocationSearchBasic
     */
    protected $locationJoin;

    /**
     * @access public
     * @var ProjectTaskSearchBasic
     */
    protected $projectTaskJoin;

    /**
     * @access public
     * @var ProjectTaskAssignmentSearchBasic
     */
    protected $projectTaskAssignmentJoin;

    /**
     * @access public
     * @var ResourceAllocationSearchBasic
     */
    protected $resourceAllocationJoin;

    /**
     * @access public
     * @var TaskSearchBasic
     */
    protected $taskJoin;

    /**
     * @access public
     * @var TimeSheetSearchBasic
     */
    protected $timeSheetJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var VendorSearchBasic
     */
    protected $vendorJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "TimeEntrySearchBasic",
    	"callJoin" => "PhoneCallSearchBasic",
    	"caseJoin" => "SupportCaseSearchBasic",
    	"classJoin" => "ClassificationSearchBasic",
    	"customerJoin" => "CustomerSearchBasic",
    	"departmentJoin" => "DepartmentSearchBasic",
    	"employeeJoin" => "EmployeeSearchBasic",
    	"eventJoin" => "CalendarEventSearchBasic",
    	"itemJoin" => "ItemSearchBasic",
    	"jobJoin" => "JobSearchBasic",
    	"locationJoin" => "LocationSearchBasic",
    	"projectTaskJoin" => "ProjectTaskSearchBasic",
    	"projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchBasic",
    	"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
    	"taskJoin" => "TaskSearchBasic",
    	"timeSheetJoin" => "TimeSheetSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"vendorJoin" => "VendorSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param TimeEntrySearchBasic $basic
     * @return TimeEntrySearch
     */
    public function setBasic(TimeEntrySearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return TimeEntrySearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set callJoin
     *
     * @param PhoneCallSearchBasic $callJoin
     * @return TimeEntrySearch
     */
    public function setCallJoin(PhoneCallSearchBasic $callJoin) {
        $this->callJoin = $callJoin;
        return $this;
    }

    /**
     * Get callJoin
     *
     * @return PhoneCallSearchBasic
     */
    public function getCallJoin() {
        return $this->callJoin;
    }


    /**
     * Set caseJoin
     *
     * @param SupportCaseSearchBasic $caseJoin
     * @return TimeEntrySearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin) {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * Get caseJoin
     *
     * @return SupportCaseSearchBasic
     */
    public function getCaseJoin() {
        return $this->caseJoin;
    }


    /**
     * Set classJoin
     *
     * @param ClassificationSearchBasic $classJoin
     * @return TimeEntrySearch
     */
    public function setClassJoin(ClassificationSearchBasic $classJoin) {
        $this->classJoin = $classJoin;
        return $this;
    }

    /**
     * Get classJoin
     *
     * @return ClassificationSearchBasic
     */
    public function getClassJoin() {
        return $this->classJoin;
    }


    /**
     * Set customerJoin
     *
     * @param CustomerSearchBasic $customerJoin
     * @return TimeEntrySearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin) {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * Get customerJoin
     *
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin() {
        return $this->customerJoin;
    }


    /**
     * Set departmentJoin
     *
     * @param DepartmentSearchBasic $departmentJoin
     * @return TimeEntrySearch
     */
    public function setDepartmentJoin(DepartmentSearchBasic $departmentJoin) {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * Get departmentJoin
     *
     * @return DepartmentSearchBasic
     */
    public function getDepartmentJoin() {
        return $this->departmentJoin;
    }


    /**
     * Set employeeJoin
     *
     * @param EmployeeSearchBasic $employeeJoin
     * @return TimeEntrySearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin) {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * Get employeeJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getEmployeeJoin() {
        return $this->employeeJoin;
    }


    /**
     * Set eventJoin
     *
     * @param CalendarEventSearchBasic $eventJoin
     * @return TimeEntrySearch
     */
    public function setEventJoin(CalendarEventSearchBasic $eventJoin) {
        $this->eventJoin = $eventJoin;
        return $this;
    }

    /**
     * Get eventJoin
     *
     * @return CalendarEventSearchBasic
     */
    public function getEventJoin() {
        return $this->eventJoin;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchBasic $itemJoin
     * @return TimeEntrySearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin) {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * Get itemJoin
     *
     * @return ItemSearchBasic
     */
    public function getItemJoin() {
        return $this->itemJoin;
    }


    /**
     * Set jobJoin
     *
     * @param JobSearchBasic $jobJoin
     * @return TimeEntrySearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin) {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * Get jobJoin
     *
     * @return JobSearchBasic
     */
    public function getJobJoin() {
        return $this->jobJoin;
    }


    /**
     * Set locationJoin
     *
     * @param LocationSearchBasic $locationJoin
     * @return TimeEntrySearch
     */
    public function setLocationJoin(LocationSearchBasic $locationJoin) {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * Get locationJoin
     *
     * @return LocationSearchBasic
     */
    public function getLocationJoin() {
        return $this->locationJoin;
    }


    /**
     * Set projectTaskJoin
     *
     * @param ProjectTaskSearchBasic $projectTaskJoin
     * @return TimeEntrySearch
     */
    public function setProjectTaskJoin(ProjectTaskSearchBasic $projectTaskJoin) {
        $this->projectTaskJoin = $projectTaskJoin;
        return $this;
    }

    /**
     * Get projectTaskJoin
     *
     * @return ProjectTaskSearchBasic
     */
    public function getProjectTaskJoin() {
        return $this->projectTaskJoin;
    }


    /**
     * Set projectTaskAssignmentJoin
     *
     * @param ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin
     * @return TimeEntrySearch
     */
    public function setProjectTaskAssignmentJoin(ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin) {
        $this->projectTaskAssignmentJoin = $projectTaskAssignmentJoin;
        return $this;
    }

    /**
     * Get projectTaskAssignmentJoin
     *
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function getProjectTaskAssignmentJoin() {
        return $this->projectTaskAssignmentJoin;
    }


    /**
     * Set resourceAllocationJoin
     *
     * @param ResourceAllocationSearchBasic $resourceAllocationJoin
     * @return TimeEntrySearch
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchBasic $resourceAllocationJoin) {
        $this->resourceAllocationJoin = $resourceAllocationJoin;
        return $this;
    }

    /**
     * Get resourceAllocationJoin
     *
     * @return ResourceAllocationSearchBasic
     */
    public function getResourceAllocationJoin() {
        return $this->resourceAllocationJoin;
    }


    /**
     * Set taskJoin
     *
     * @param TaskSearchBasic $taskJoin
     * @return TimeEntrySearch
     */
    public function setTaskJoin(TaskSearchBasic $taskJoin) {
        $this->taskJoin = $taskJoin;
        return $this;
    }

    /**
     * Get taskJoin
     *
     * @return TaskSearchBasic
     */
    public function getTaskJoin() {
        return $this->taskJoin;
    }


    /**
     * Set timeSheetJoin
     *
     * @param TimeSheetSearchBasic $timeSheetJoin
     * @return TimeEntrySearch
     */
    public function setTimeSheetJoin(TimeSheetSearchBasic $timeSheetJoin) {
        $this->timeSheetJoin = $timeSheetJoin;
        return $this;
    }

    /**
     * Get timeSheetJoin
     *
     * @return TimeSheetSearchBasic
     */
    public function getTimeSheetJoin() {
        return $this->timeSheetJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return TimeEntrySearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }


    /**
     * Set vendorJoin
     *
     * @param VendorSearchBasic $vendorJoin
     * @return TimeEntrySearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin) {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * Get vendorJoin
     *
     * @return VendorSearchBasic
     */
    public function getVendorJoin() {
        return $this->vendorJoin;
    }

}