<?php

namespace Nzolt\NetSuite;

class JobSearch extends SearchRecord
{

    /**
     * @var JobSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var BillingAccountSearchBasic $billingAccountJoin
     */
    protected $billingAccountJoin = null;

    /**
     * @var BillingScheduleSearchBasic $billingScheduleJoin
     */
    protected $billingScheduleJoin = null;

    /**
     * @var ContactSearchBasic $contactPrimaryJoin
     */
    protected $contactPrimaryJoin = null;

    /**
     * @var CustomerSearchBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var ProjectTaskSearchBasic $projectTaskJoin
     */
    protected $projectTaskJoin = null;

    /**
     * @var ResourceAllocationSearchBasic $resourceAllocationJoin
     */
    protected $resourceAllocationJoin = null;

    /**
     * @var TaskSearchBasic $taskJoin
     */
    protected $taskJoin = null;

    /**
     * @var TimeBillSearchBasic $timeJoin
     */
    protected $timeJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JobSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param JobSearchBasic $basic
     * @return \Nzolt\NetSuite\JobSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return BillingAccountSearchBasic
     */
    public function getBillingAccountJoin()
    {
      return $this->billingAccountJoin;
    }

    /**
     * @param BillingAccountSearchBasic $billingAccountJoin
     * @return \Nzolt\NetSuite\JobSearch
     */
    public function setBillingAccountJoin($billingAccountJoin)
    {
      $this->billingAccountJoin = $billingAccountJoin;
      return $this;
    }

    /**
     * @return BillingScheduleSearchBasic
     */
    public function getBillingScheduleJoin()
    {
      return $this->billingScheduleJoin;
    }

    /**
     * @param BillingScheduleSearchBasic $billingScheduleJoin
     * @return \Nzolt\NetSuite\JobSearch
     */
    public function setBillingScheduleJoin($billingScheduleJoin)
    {
      $this->billingScheduleJoin = $billingScheduleJoin;
      return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getContactPrimaryJoin()
    {
      return $this->contactPrimaryJoin;
    }

    /**
     * @param ContactSearchBasic $contactPrimaryJoin
     * @return \Nzolt\NetSuite\JobSearch
     */
    public function setContactPrimaryJoin($contactPrimaryJoin)
    {
      $this->contactPrimaryJoin = $contactPrimaryJoin;
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
     * @return \Nzolt\NetSuite\JobSearch
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
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
     * @return \Nzolt\NetSuite\JobSearch
     */
    public function setProjectTaskJoin($projectTaskJoin)
    {
      $this->projectTaskJoin = $projectTaskJoin;
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
     * @return \Nzolt\NetSuite\JobSearch
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
     * @return \Nzolt\NetSuite\JobSearch
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
      return $this;
    }

    /**
     * @return TimeBillSearchBasic
     */
    public function getTimeJoin()
    {
      return $this->timeJoin;
    }

    /**
     * @param TimeBillSearchBasic $timeJoin
     * @return \Nzolt\NetSuite\JobSearch
     */
    public function setTimeJoin($timeJoin)
    {
      $this->timeJoin = $timeJoin;
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
     * @return \Nzolt\NetSuite\JobSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
