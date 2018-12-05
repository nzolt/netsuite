<?php

namespace Nzolt\NetSuite;

class TopicSearchRow extends SearchRow
{

    /**
     * @var TopicSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var SolutionSearchRowBasic $solutionJoin
     */
    protected $solutionJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TopicSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param TopicSearchRowBasic $basic
     * @return \Nzolt\NetSuite\TopicSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return SolutionSearchRowBasic
     */
    public function getSolutionJoin()
    {
      return $this->solutionJoin;
    }

    /**
     * @param SolutionSearchRowBasic $solutionJoin
     * @return \Nzolt\NetSuite\TopicSearchRow
     */
    public function setSolutionJoin($solutionJoin)
    {
      $this->solutionJoin = $solutionJoin;
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
     * @return \Nzolt\NetSuite\TopicSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
