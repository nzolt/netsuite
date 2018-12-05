<?php

namespace Nzolt\NetSuite;

class ResourceAllocationSearch extends SearchRecord
{

    /**
     * @var ResourceAllocationSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var CustomerSearchBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var EmployeeSearchBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var JobSearchBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var ProjectTaskSearchBasic $projectTaskJoin
     */
    protected $projectTaskJoin = null;

    /**
     * @var EntitySearchBasic $requestedByJoin
     */
    protected $requestedByJoin = null;

    /**
     * @var EntitySearchBasic $resourceJoin
     */
    protected $resourceJoin = null;

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
     * @return ResourceAllocationSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ResourceAllocationSearchBasic $basic
     * @return \Nzolt\NetSuite\ResourceAllocationSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearch
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearch
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearch
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearch
     */
    public function setProjectTaskJoin($projectTaskJoin)
    {
      $this->projectTaskJoin = $projectTaskJoin;
      return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getRequestedByJoin()
    {
      return $this->requestedByJoin;
    }

    /**
     * @param EntitySearchBasic $requestedByJoin
     * @return \Nzolt\NetSuite\ResourceAllocationSearch
     */
    public function setRequestedByJoin($requestedByJoin)
    {
      $this->requestedByJoin = $requestedByJoin;
      return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getResourceJoin()
    {
      return $this->resourceJoin;
    }

    /**
     * @param EntitySearchBasic $resourceJoin
     * @return \Nzolt\NetSuite\ResourceAllocationSearch
     */
    public function setResourceJoin($resourceJoin)
    {
      $this->resourceJoin = $resourceJoin;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearch
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearch
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
