<?php

namespace Nzolt\NetSuite;

class IssueSearch extends SearchRecord
{

    /**
     * @var IssueSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var SupportCaseSearchBasic $caseJoin
     */
    protected $caseJoin = null;

    /**
     * @var EmployeeSearchBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var FileSearchBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var EntityGroupSearchBasic $productTeamJoin
     */
    protected $productTeamJoin = null;

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
     * @return IssueSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param IssueSearchBasic $basic
     * @return \Nzolt\NetSuite\IssueSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return SupportCaseSearchBasic
     */
    public function getCaseJoin()
    {
      return $this->caseJoin;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return \Nzolt\NetSuite\IssueSearch
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
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
     * @return \Nzolt\NetSuite\IssueSearch
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
      return $this;
    }

    /**
     * @return FileSearchBasic
     */
    public function getFileJoin()
    {
      return $this->fileJoin;
    }

    /**
     * @param FileSearchBasic $fileJoin
     * @return \Nzolt\NetSuite\IssueSearch
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return EntityGroupSearchBasic
     */
    public function getProductTeamJoin()
    {
      return $this->productTeamJoin;
    }

    /**
     * @param EntityGroupSearchBasic $productTeamJoin
     * @return \Nzolt\NetSuite\IssueSearch
     */
    public function setProductTeamJoin($productTeamJoin)
    {
      $this->productTeamJoin = $productTeamJoin;
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
     * @return \Nzolt\NetSuite\IssueSearch
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
     * @return \Nzolt\NetSuite\IssueSearch
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
     * @return \Nzolt\NetSuite\IssueSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
