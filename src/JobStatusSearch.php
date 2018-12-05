<?php

namespace Nzolt\NetSuite;

class JobStatusSearch extends SearchRecord
{

    /**
     * @var JobStatusSearchBasic $basic
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
     * @return JobStatusSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param JobStatusSearchBasic $basic
     * @return \Nzolt\NetSuite\JobStatusSearch
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
     * @return \Nzolt\NetSuite\JobStatusSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
