<?php

namespace Nzolt\NetSuite;

class SolutionSearchRow extends SearchRow
{

    /**
     * @var SolutionSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var SupportCaseSearchRowBasic $caseJoin
     */
    protected $caseJoin = null;

    /**
     * @var SolutionSearchRowBasic $relatedSolutionJoin
     */
    protected $relatedSolutionJoin = null;

    /**
     * @var TopicSearchRowBasic $topicJoin
     */
    protected $topicJoin = null;

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
     * @return SolutionSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param SolutionSearchRowBasic $basic
     * @return \Nzolt\NetSuite\SolutionSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return SupportCaseSearchRowBasic
     */
    public function getCaseJoin()
    {
      return $this->caseJoin;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return \Nzolt\NetSuite\SolutionSearchRow
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
      return $this;
    }

    /**
     * @return SolutionSearchRowBasic
     */
    public function getRelatedSolutionJoin()
    {
      return $this->relatedSolutionJoin;
    }

    /**
     * @param SolutionSearchRowBasic $relatedSolutionJoin
     * @return \Nzolt\NetSuite\SolutionSearchRow
     */
    public function setRelatedSolutionJoin($relatedSolutionJoin)
    {
      $this->relatedSolutionJoin = $relatedSolutionJoin;
      return $this;
    }

    /**
     * @return TopicSearchRowBasic
     */
    public function getTopicJoin()
    {
      return $this->topicJoin;
    }

    /**
     * @param TopicSearchRowBasic $topicJoin
     * @return \Nzolt\NetSuite\SolutionSearchRow
     */
    public function setTopicJoin($topicJoin)
    {
      $this->topicJoin = $topicJoin;
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
     * @return \Nzolt\NetSuite\SolutionSearchRow
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
     * @return \Nzolt\NetSuite\SolutionSearchRow
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
     * @return \Nzolt\NetSuite\SolutionSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
