<?php

namespace Nzolt\NetSuite;

class SalesRoleSearch extends SearchRecord
{

    /**
     * @var SalesRoleSearchBasic $basic
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
     * @return SalesRoleSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param SalesRoleSearchBasic $basic
     * @return \Nzolt\NetSuite\SalesRoleSearch
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
     * @return \Nzolt\NetSuite\SalesRoleSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
