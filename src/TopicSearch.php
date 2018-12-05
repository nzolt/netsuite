<?php

namespace Nzolt\NetSuite;

class TopicSearch extends SearchRecord
{

    /**
     * @var TopicSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var SolutionSearchBasic $solutionJoin
     */
    protected $solutionJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TopicSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param TopicSearchBasic $basic
     * @return \Nzolt\NetSuite\TopicSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return SolutionSearchBasic
     */
    public function getSolutionJoin()
    {
      return $this->solutionJoin;
    }

    /**
     * @param SolutionSearchBasic $solutionJoin
     * @return \Nzolt\NetSuite\TopicSearch
     */
    public function setSolutionJoin($solutionJoin)
    {
      $this->solutionJoin = $solutionJoin;
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
     * @return \Nzolt\NetSuite\TopicSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
