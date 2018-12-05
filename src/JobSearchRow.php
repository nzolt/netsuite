<?php

namespace Nzolt\NetSuite;

class JobSearchRow extends SearchRow
{

    /**
     * @var JobSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var BillingAccountSearchRowBasic $billingAccountJoin
     */
    protected $billingAccountJoin = null;

    /**
     * @var BillingScheduleSearchRowBasic $billingScheduleJoin
     */
    protected $billingScheduleJoin = null;

    /**
     * @var ContactSearchRowBasic $contactPrimaryJoin
     */
    protected $contactPrimaryJoin = null;

    /**
     * @var CustomerSearchRowBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var ProjectTaskSearchRowBasic $projectTaskJoin
     */
    protected $projectTaskJoin = null;

    /**
     * @var ResourceAllocationSearchRowBasic $resourceAllocationJoin
     */
    protected $resourceAllocationJoin = null;

    /**
     * @var TaskSearchRowBasic $taskJoin
     */
    protected $taskJoin = null;

    /**
     * @var TimeBillSearchRowBasic $timeJoin
     */
    protected $timeJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param JobSearchRowBasic $basic
     * @return \Nzolt\NetSuite\JobSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return BillingAccountSearchRowBasic
     */
    public function getBillingAccountJoin()
    {
      return $this->billingAccountJoin;
    }

    /**
     * @param BillingAccountSearchRowBasic $billingAccountJoin
     * @return \Nzolt\NetSuite\JobSearchRow
     */
    public function setBillingAccountJoin($billingAccountJoin)
    {
      $this->billingAccountJoin = $billingAccountJoin;
      return $this;
    }

    /**
     * @return BillingScheduleSearchRowBasic
     */
    public function getBillingScheduleJoin()
    {
      return $this->billingScheduleJoin;
    }

    /**
     * @param BillingScheduleSearchRowBasic $billingScheduleJoin
     * @return \Nzolt\NetSuite\JobSearchRow
     */
    public function setBillingScheduleJoin($billingScheduleJoin)
    {
      $this->billingScheduleJoin = $billingScheduleJoin;
      return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getContactPrimaryJoin()
    {
      return $this->contactPrimaryJoin;
    }

    /**
     * @param ContactSearchRowBasic $contactPrimaryJoin
     * @return \Nzolt\NetSuite\JobSearchRow
     */
    public function setContactPrimaryJoin($contactPrimaryJoin)
    {
      $this->contactPrimaryJoin = $contactPrimaryJoin;
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
     * @return \Nzolt\NetSuite\JobSearchRow
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
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
     * @return \Nzolt\NetSuite\JobSearchRow
     */
    public function setProjectTaskJoin($projectTaskJoin)
    {
      $this->projectTaskJoin = $projectTaskJoin;
      return $this;
    }

    /**
     * @return ResourceAllocationSearchRowBasic
     */
    public function getResourceAllocationJoin()
    {
      return $this->resourceAllocationJoin;
    }

    /**
     * @param ResourceAllocationSearchRowBasic $resourceAllocationJoin
     * @return \Nzolt\NetSuite\JobSearchRow
     */
    public function setResourceAllocationJoin($resourceAllocationJoin)
    {
      $this->resourceAllocationJoin = $resourceAllocationJoin;
      return $this;
    }

    /**
     * @return TaskSearchRowBasic
     */
    public function getTaskJoin()
    {
      return $this->taskJoin;
    }

    /**
     * @param TaskSearchRowBasic $taskJoin
     * @return \Nzolt\NetSuite\JobSearchRow
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
      return $this;
    }

    /**
     * @return TimeBillSearchRowBasic
     */
    public function getTimeJoin()
    {
      return $this->timeJoin;
    }

    /**
     * @param TimeBillSearchRowBasic $timeJoin
     * @return \Nzolt\NetSuite\JobSearchRow
     */
    public function setTimeJoin($timeJoin)
    {
      $this->timeJoin = $timeJoin;
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
     * @return \Nzolt\NetSuite\JobSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
