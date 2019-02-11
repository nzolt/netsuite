<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\BillingScheduleSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ResourceAllocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchBasic;

/**
 * JobSearch
 */
class JobSearch extends SearchRecord {

    /**
     * @access public
     * @var JobSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var BillingScheduleSearchBasic
     */
    protected $billingScheduleJoin;

    /**
     * @access public
     * @var ContactSearchBasic
     */
    protected $contactPrimaryJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var ProjectTaskSearchBasic
     */
    protected $projectTaskJoin;

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
     * @var TimeBillSearchBasic
     */
    protected $timeJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "JobSearchBasic",
    	"billingScheduleJoin" => "BillingScheduleSearchBasic",
    	"contactPrimaryJoin" => "ContactSearchBasic",
    	"customerJoin" => "CustomerSearchBasic",
    	"projectTaskJoin" => "ProjectTaskSearchBasic",
    	"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
    	"taskJoin" => "TaskSearchBasic",
    	"timeJoin" => "TimeBillSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param JobSearchBasic $basic
     * @return JobSearch
     */
    public function setBasic(JobSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return JobSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set billingScheduleJoin
     *
     * @param BillingScheduleSearchBasic $billingScheduleJoin
     * @return JobSearch
     */
    public function setBillingScheduleJoin(BillingScheduleSearchBasic $billingScheduleJoin) {
        $this->billingScheduleJoin = $billingScheduleJoin;
        return $this;
    }

    /**
     * Get billingScheduleJoin
     *
     * @return BillingScheduleSearchBasic
     */
    public function getBillingScheduleJoin() {
        return $this->billingScheduleJoin;
    }


    /**
     * Set contactPrimaryJoin
     *
     * @param ContactSearchBasic $contactPrimaryJoin
     * @return JobSearch
     */
    public function setContactPrimaryJoin(ContactSearchBasic $contactPrimaryJoin) {
        $this->contactPrimaryJoin = $contactPrimaryJoin;
        return $this;
    }

    /**
     * Get contactPrimaryJoin
     *
     * @return ContactSearchBasic
     */
    public function getContactPrimaryJoin() {
        return $this->contactPrimaryJoin;
    }


    /**
     * Set customerJoin
     *
     * @param CustomerSearchBasic $customerJoin
     * @return JobSearch
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
     * Set projectTaskJoin
     *
     * @param ProjectTaskSearchBasic $projectTaskJoin
     * @return JobSearch
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
     * Set resourceAllocationJoin
     *
     * @param ResourceAllocationSearchBasic $resourceAllocationJoin
     * @return JobSearch
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
     * @return JobSearch
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
     * Set timeJoin
     *
     * @param TimeBillSearchBasic $timeJoin
     * @return JobSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin) {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * Get timeJoin
     *
     * @return TimeBillSearchBasic
     */
    public function getTimeJoin() {
        return $this->timeJoin;
    }

}