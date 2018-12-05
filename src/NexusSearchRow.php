<?php

namespace Nzolt\NetSuite;

class NexusSearchRow extends SearchRow
{

    /**
     * @var NexusSearchRowBasic $basic
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
     * @return NexusSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param NexusSearchRowBasic $basic
     * @return \Nzolt\NetSuite\NexusSearchRow
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
     * @return \Nzolt\NetSuite\NexusSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
