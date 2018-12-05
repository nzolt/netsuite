<?php

namespace Nzolt\NetSuite;

class SolutionSearch extends SearchRecord
{

    /**
     * @var SolutionSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var SupportCaseSearchBasic $caseJoin
     */
    protected $caseJoin = null;

    /**
     * @var SolutionSearchBasic $relatedSolutionJoin
     */
    protected $relatedSolutionJoin = null;

    /**
     * @var TopicSearchBasic $topicJoin
     */
    protected $topicJoin = null;

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
     * @return SolutionSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param SolutionSearchBasic $basic
     * @return \Nzolt\NetSuite\SolutionSearch
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
     * @return \Nzolt\NetSuite\SolutionSearch
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
      return $this;
    }

    /**
     * @return SolutionSearchBasic
     */
    public function getRelatedSolutionJoin()
    {
      return $this->relatedSolutionJoin;
    }

    /**
     * @param SolutionSearchBasic $relatedSolutionJoin
     * @return \Nzolt\NetSuite\SolutionSearch
     */
    public function setRelatedSolutionJoin($relatedSolutionJoin)
    {
      $this->relatedSolutionJoin = $relatedSolutionJoin;
      return $this;
    }

    /**
     * @return TopicSearchBasic
     */
    public function getTopicJoin()
    {
      return $this->topicJoin;
    }

    /**
     * @param TopicSearchBasic $topicJoin
     * @return \Nzolt\NetSuite\SolutionSearch
     */
    public function setTopicJoin($topicJoin)
    {
      $this->topicJoin = $topicJoin;
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
     * @return \Nzolt\NetSuite\SolutionSearch
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
     * @return \Nzolt\NetSuite\SolutionSearch
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
     * @return \Nzolt\NetSuite\SolutionSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
