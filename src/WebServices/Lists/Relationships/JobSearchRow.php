<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\BillingScheduleSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ResourceAllocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchRowBasic;

/**
 * JobSearchRow
 */
class JobSearchRow extends SearchRow {

    /**
     * @access public
     * @var JobSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var BillingScheduleSearchRowBasic
     */
    protected $billingScheduleJoin;

    /**
     * @access public
     * @var ContactSearchRowBasic
     */
    protected $contactPrimaryJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var ProjectTaskSearchRowBasic
     */
    protected $projectTaskJoin;

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
     * @var TimeBillSearchRowBasic
     */
    protected $timeJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "JobSearchRowBasic",
    	"billingScheduleJoin" => "BillingScheduleSearchRowBasic",
    	"contactPrimaryJoin" => "ContactSearchRowBasic",
    	"customerJoin" => "CustomerSearchRowBasic",
    	"projectTaskJoin" => "ProjectTaskSearchRowBasic",
    	"resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
    	"taskJoin" => "TaskSearchRowBasic",
    	"timeJoin" => "TimeBillSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param JobSearchRowBasic $basic
     * @return JobSearchRow
     */
    public function setBasic(JobSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return JobSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set billingScheduleJoin
     *
     * @param BillingScheduleSearchRowBasic $billingScheduleJoin
     * @return JobSearchRow
     */
    public function setBillingScheduleJoin(BillingScheduleSearchRowBasic $billingScheduleJoin) {
        $this->billingScheduleJoin = $billingScheduleJoin;
        return $this;
    }

    /**
     * Get billingScheduleJoin
     *
     * @return BillingScheduleSearchRowBasic
     */
    public function getBillingScheduleJoin() {
        return $this->billingScheduleJoin;
    }


    /**
     * Set contactPrimaryJoin
     *
     * @param ContactSearchRowBasic $contactPrimaryJoin
     * @return JobSearchRow
     */
    public function setContactPrimaryJoin(ContactSearchRowBasic $contactPrimaryJoin) {
        $this->contactPrimaryJoin = $contactPrimaryJoin;
        return $this;
    }

    /**
     * Get contactPrimaryJoin
     *
     * @return ContactSearchRowBasic
     */
    public function getContactPrimaryJoin() {
        return $this->contactPrimaryJoin;
    }


    /**
     * Set customerJoin
     *
     * @param CustomerSearchRowBasic $customerJoin
     * @return JobSearchRow
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
     * Set projectTaskJoin
     *
     * @param ProjectTaskSearchRowBasic $projectTaskJoin
     * @return JobSearchRow
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
     * Set resourceAllocationJoin
     *
     * @param ResourceAllocationSearchRowBasic $resourceAllocationJoin
     * @return JobSearchRow
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
     * @return JobSearchRow
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
     * Set timeJoin
     *
     * @param TimeBillSearchRowBasic $timeJoin
     * @return JobSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin) {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * Get timeJoin
     *
     * @return TimeBillSearchRowBasic
     */
    public function getTimeJoin() {
        return $this->timeJoin;
    }

}