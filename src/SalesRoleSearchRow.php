<?php

namespace Nzolt\NetSuite;

class SalesRoleSearchRow extends SearchRow
{

    /**
     * @var SalesRoleSearchRowBasic $basic
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
     * @return SalesRoleSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param SalesRoleSearchRowBasic $basic
     * @return \Nzolt\NetSuite\SalesRoleSearchRow
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
     * @return \Nzolt\NetSuite\SalesRoleSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
