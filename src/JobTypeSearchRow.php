<?php

namespace Nzolt\NetSuite;

class JobTypeSearchRow extends SearchRow
{

    /**
     * @var JobTypeSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JobTypeSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param JobTypeSearchRowBasic $basic
     * @return \Nzolt\NetSuite\JobTypeSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\JobTypeSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
