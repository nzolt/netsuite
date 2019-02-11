<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\ResourceAllocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchRowBasic;

/**
 * ResourceAllocationSearchRow
 */
class ResourceAllocationSearchRow extends SearchRow {

    /**
     * @access public
     * @var ResourceAllocationSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $employeeJoin;

    /**
     * @access public
     * @var JobSearchRowBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var EntitySearchRowBasic
     */
    protected $requestedByJoin;

    /**
     * @access public
     * @var EntitySearchRowBasic
     */
    protected $resourceJoin;

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
    	"basic" => "ResourceAllocationSearchRowBasic",
    	"customerJoin" => "CustomerSearchRowBasic",
    	"employeeJoin" => "EmployeeSearchRowBasic",
    	"jobJoin" => "JobSearchRowBasic",
    	"requestedByJoin" => "EntitySearchRowBasic",
    	"resourceJoin" => "EntitySearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"vendorJoin" => "VendorSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param ResourceAllocationSearchRowBasic $basic
     * @return ResourceAllocationSearchRow
     */
    public function setBasic(ResourceAllocationSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ResourceAllocationSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set customerJoin
     *
     * @param CustomerSearchRowBasic $customerJoin
     * @return ResourceAllocationSearchRow
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
     * Set employeeJoin
     *
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return ResourceAllocationSearchRow
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
     * Set jobJoin
     *
     * @param JobSearchRowBasic $jobJoin
     * @return ResourceAllocationSearchRow
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
     * Set requestedByJoin
     *
     * @param EntitySearchRowBasic $requestedByJoin
     * @return ResourceAllocationSearchRow
     */
    public function setRequestedByJoin(EntitySearchRowBasic $requestedByJoin) {
        $this->requestedByJoin = $requestedByJoin;
        return $this;
    }

    /**
     * Get requestedByJoin
     *
     * @return EntitySearchRowBasic
     */
    public function getRequestedByJoin() {
        return $this->requestedByJoin;
    }


    /**
     * Set resourceJoin
     *
     * @param EntitySearchRowBasic $resourceJoin
     * @return ResourceAllocationSearchRow
     */
    public function setResourceJoin(EntitySearchRowBasic $resourceJoin) {
        $this->resourceJoin = $resourceJoin;
        return $this;
    }

    /**
     * Get resourceJoin
     *
     * @return EntitySearchRowBasic
     */
    public function getResourceJoin() {
        return $this->resourceJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return ResourceAllocationSearchRow
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
     * @return ResourceAllocationSearchRow
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