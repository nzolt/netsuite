<?php

namespace Nzolt\NetSuite;

class ResourceAllocationSearchRow extends SearchRow
{

    /**
     * @var ResourceAllocationSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var CustomerSearchRowBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var EmployeeSearchRowBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var JobSearchRowBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var ProjectTaskSearchRowBasic $projectTaskJoin
     */
    protected $projectTaskJoin = null;

    /**
     * @var EntitySearchRowBasic $requestedByJoin
     */
    protected $requestedByJoin = null;

    /**
     * @var EntitySearchRowBasic $resourceJoin
     */
    protected $resourceJoin = null;

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
     * @return ResourceAllocationSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ResourceAllocationSearchRowBasic $basic
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRow
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRow
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRow
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRow
     */
    public function setProjectTaskJoin($projectTaskJoin)
    {
      $this->projectTaskJoin = $projectTaskJoin;
      return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getRequestedByJoin()
    {
      return $this->requestedByJoin;
    }

    /**
     * @param EntitySearchRowBasic $requestedByJoin
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRow
     */
    public function setRequestedByJoin($requestedByJoin)
    {
      $this->requestedByJoin = $requestedByJoin;
      return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getResourceJoin()
    {
      return $this->resourceJoin;
    }

    /**
     * @param EntitySearchRowBasic $resourceJoin
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRow
     */
    public function setResourceJoin($resourceJoin)
    {
      $this->resourceJoin = $resourceJoin;
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRow
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRow
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
