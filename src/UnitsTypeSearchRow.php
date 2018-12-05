<?php

namespace Nzolt\NetSuite;

class UnitsTypeSearchRow extends SearchRow
{

    /**
     * @var UnitsTypeSearchRowBasic $basic
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
     * @return UnitsTypeSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param UnitsTypeSearchRowBasic $basic
     * @return \Nzolt\NetSuite\UnitsTypeSearchRow
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
     * @return \Nzolt\NetSuite\UnitsTypeSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
