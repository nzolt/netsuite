<?php

namespace Nzolt\NetSuite;

class JobTypeSearch extends SearchRecord
{

    /**
     * @var JobTypeSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JobTypeSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param JobTypeSearchBasic $basic
     * @return \Nzolt\NetSuite\JobTypeSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\JobTypeSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
