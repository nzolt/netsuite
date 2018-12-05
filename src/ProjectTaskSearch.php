<?php

namespace Nzolt\NetSuite;

class ProjectTaskSearch extends SearchRecord
{

    /**
     * @var ProjectTaskSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var JobSearchBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var ProjectTaskSearchBasic $predecessorJoin
     */
    protected $predecessorJoin = null;

    /**
     * @var ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin
     */
    protected $projectTaskAssignmentJoin = null;

    /**
     * @var ResourceAllocationSearchBasic $resourceAllocationJoin
     */
    protected $resourceAllocationJoin = null;

    /**
     * @var ProjectTaskSearchBasic $successorJoin
     */
    protected $successorJoin = null;

    /**
     * @var TimeBillSearchBasic $timeJoin
     */
    protected $timeJoin = null;

    /**
     * @var TransactionSearchBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var NoteSearchBasic $userNotesJoin
     */
    protected $userNotesJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectTaskSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ProjectTaskSearchBasic $basic
     * @return \Nzolt\NetSuite\ProjectTaskSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\ProjectTaskSearch
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
      return $this;
    }

    /**
     * @return ProjectTaskSearchBasic
     */
    public function getPredecessorJoin()
    {
      return $this->predecessorJoin;
    }

    /**
     * @param ProjectTaskSearchBasic $predecessorJoin
     * @return \Nzolt\NetSuite\ProjectTaskSearch
     */
    public function setPredecessorJoin($predecessorJoin)
    {
      $this->predecessorJoin = $predecessorJoin;
      return $this;
    }

    /**
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function getProjectTaskAssignmentJoin()
    {
      return $this->projectTaskAssignmentJoin;
    }

    /**
     * @param ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin
     * @return \Nzolt\NetSuite\ProjectTaskSearch
     */
    public function setProjectTaskAssignmentJoin($projectTaskAssignmentJoin)
    {
      $this->projectTaskAssignmentJoin = $projectTaskAssignmentJoin;
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
     * @return \Nzolt\NetSuite\ProjectTaskSearch
     */
    public function setResourceAllocationJoin($resourceAllocationJoin)
    {
      $this->resourceAllocationJoin = $resourceAllocationJoin;
      return $this;
    }

    /**
     * @return ProjectTaskSearchBasic
     */
    public function getSuccessorJoin()
    {
      return $this->successorJoin;
    }

    /**
     * @param ProjectTaskSearchBasic $successorJoin
     * @return \Nzolt\NetSuite\ProjectTaskSearch
     */
    public function setSuccessorJoin($successorJoin)
    {
      $this->successorJoin = $successorJoin;
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
     * @return \Nzolt\NetSuite\ProjectTaskSearch
     */
    public function setTimeJoin($timeJoin)
    {
      $this->timeJoin = $timeJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getTransactionJoin()
    {
      return $this->transactionJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return \Nzolt\NetSuite\ProjectTaskSearch
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
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
     * @return \Nzolt\NetSuite\ProjectTaskSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return NoteSearchBasic
     */
    public function getUserNotesJoin()
    {
      return $this->userNotesJoin;
    }

    /**
     * @param NoteSearchBasic $userNotesJoin
     * @return \Nzolt\NetSuite\ProjectTaskSearch
     */
    public function setUserNotesJoin($userNotesJoin)
    {
      $this->userNotesJoin = $userNotesJoin;
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
     * @return \Nzolt\NetSuite\ProjectTaskSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
