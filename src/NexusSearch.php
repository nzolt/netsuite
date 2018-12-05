<?php

namespace Nzolt\NetSuite;

class NexusSearch extends SearchRecord
{

    /**
     * @var NexusSearchBasic $basic
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
     * @return NexusSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param NexusSearchBasic $basic
     * @return \Nzolt\NetSuite\NexusSearch
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
     * @return \Nzolt\NetSuite\NexusSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
