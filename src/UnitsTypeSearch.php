<?php

namespace Nzolt\NetSuite;

class UnitsTypeSearch extends SearchRecord
{

    /**
     * @var UnitsTypeSearchBasic $basic
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
     * @return UnitsTypeSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param UnitsTypeSearchBasic $basic
     * @return \Nzolt\NetSuite\UnitsTypeSearch
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
     * @return \Nzolt\NetSuite\UnitsTypeSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
