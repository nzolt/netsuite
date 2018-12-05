<?php

namespace Nzolt\NetSuite;

class JobStatusSearchRow extends SearchRow
{

    /**
     * @var JobStatusSearchRowBasic $basic
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
     * @return JobStatusSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param JobStatusSearchRowBasic $basic
     * @return \Nzolt\NetSuite\JobStatusSearchRow
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
     * @return \Nzolt\NetSuite\JobStatusSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
