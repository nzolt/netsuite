<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\ResourceAllocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchBasic;

/**
 * ResourceAllocationSearch
 */
class ResourceAllocationSearch extends SearchRecord {

    /**
     * @access public
     * @var ResourceAllocationSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $employeeJoin;

    /**
     * @access public
     * @var JobSearchBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var EntitySearchBasic
     */
    protected $requestedByJoin;

    /**
     * @access public
     * @var EntitySearchBasic
     */
    protected $resourceJoin;

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
    	"basic" => "ResourceAllocationSearchBasic",
    	"customerJoin" => "CustomerSearchBasic",
    	"employeeJoin" => "EmployeeSearchBasic",
    	"jobJoin" => "JobSearchBasic",
    	"requestedByJoin" => "EntitySearchBasic",
    	"resourceJoin" => "EntitySearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"vendorJoin" => "VendorSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param ResourceAllocationSearchBasic $basic
     * @return ResourceAllocationSearch
     */
    public function setBasic(ResourceAllocationSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ResourceAllocationSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set customerJoin
     *
     * @param CustomerSearchBasic $customerJoin
     * @return ResourceAllocationSearch
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
     * Set employeeJoin
     *
     * @param EmployeeSearchBasic $employeeJoin
     * @return ResourceAllocationSearch
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
     * Set jobJoin
     *
     * @param JobSearchBasic $jobJoin
     * @return ResourceAllocationSearch
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
     * Set requestedByJoin
     *
     * @param EntitySearchBasic $requestedByJoin
     * @return ResourceAllocationSearch
     */
    public function setRequestedByJoin(EntitySearchBasic $requestedByJoin) {
        $this->requestedByJoin = $requestedByJoin;
        return $this;
    }

    /**
     * Get requestedByJoin
     *
     * @return EntitySearchBasic
     */
    public function getRequestedByJoin() {
        return $this->requestedByJoin;
    }


    /**
     * Set resourceJoin
     *
     * @param EntitySearchBasic $resourceJoin
     * @return ResourceAllocationSearch
     */
    public function setResourceJoin(EntitySearchBasic $resourceJoin) {
        $this->resourceJoin = $resourceJoin;
        return $this;
    }

    /**
     * Get resourceJoin
     *
     * @return EntitySearchBasic
     */
    public function getResourceJoin() {
        return $this->resourceJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return ResourceAllocationSearch
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
     * @return ResourceAllocationSearch
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