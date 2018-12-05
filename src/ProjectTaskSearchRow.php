<?php

namespace Nzolt\NetSuite;

class ProjectTaskSearchRow extends SearchRow
{

    /**
     * @var ProjectTaskSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var JobSearchRowBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var ProjectTaskSearchRowBasic $predecessorJoin
     */
    protected $predecessorJoin = null;

    /**
     * @var ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin
     */
    protected $projectTaskAssignmentJoin = null;

    /**
     * @var ResourceAllocationSearchRowBasic $resourceAllocationJoin
     */
    protected $resourceAllocationJoin = null;

    /**
     * @var ProjectTaskSearchRowBasic $successorJoin
     */
    protected $successorJoin = null;

    /**
     * @var TimeBillSearchRowBasic $timeJoin
     */
    protected $timeJoin = null;

    /**
     * @var TransactionSearchRowBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var NoteSearchRowBasic $userNotesJoin
     */
    protected $userNotesJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectTaskSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ProjectTaskSearchRowBasic $basic
     * @return \Nzolt\NetSuite\ProjectTaskSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\ProjectTaskSearchRow
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
      return $this;
    }

    /**
     * @return ProjectTaskSearchRowBasic
     */
    public function getPredecessorJoin()
    {
      return $this->predecessorJoin;
    }

    /**
     * @param ProjectTaskSearchRowBasic $predecessorJoin
     * @return \Nzolt\NetSuite\ProjectTaskSearchRow
     */
    public function setPredecessorJoin($predecessorJoin)
    {
      $this->predecessorJoin = $predecessorJoin;
      return $this;
    }

    /**
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function getProjectTaskAssignmentJoin()
    {
      return $this->projectTaskAssignmentJoin;
    }

    /**
     * @param ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin
     * @return \Nzolt\NetSuite\ProjectTaskSearchRow
     */
    public function setProjectTaskAssignmentJoin($projectTaskAssignmentJoin)
    {
      $this->projectTaskAssignmentJoin = $projectTaskAssignmentJoin;
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
     * @return \Nzolt\NetSuite\ProjectTaskSearchRow
     */
    public function setResourceAllocationJoin($resourceAllocationJoin)
    {
      $this->resourceAllocationJoin = $resourceAllocationJoin;
      return $this;
    }

    /**
     * @return ProjectTaskSearchRowBasic
     */
    public function getSuccessorJoin()
    {
      return $this->successorJoin;
    }

    /**
     * @param ProjectTaskSearchRowBasic $successorJoin
     * @return \Nzolt\NetSuite\ProjectTaskSearchRow
     */
    public function setSuccessorJoin($successorJoin)
    {
      $this->successorJoin = $successorJoin;
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
     * @return \Nzolt\NetSuite\ProjectTaskSearchRow
     */
    public function setTimeJoin($timeJoin)
    {
      $this->timeJoin = $timeJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getTransactionJoin()
    {
      return $this->transactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return \Nzolt\NetSuite\ProjectTaskSearchRow
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
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
     * @return \Nzolt\NetSuite\ProjectTaskSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return NoteSearchRowBasic
     */
    public function getUserNotesJoin()
    {
      return $this->userNotesJoin;
    }

    /**
     * @param NoteSearchRowBasic $userNotesJoin
     * @return \Nzolt\NetSuite\ProjectTaskSearchRow
     */
    public function setUserNotesJoin($userNotesJoin)
    {
      $this->userNotesJoin = $userNotesJoin;
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
     * @return \Nzolt\NetSuite\ProjectTaskSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
