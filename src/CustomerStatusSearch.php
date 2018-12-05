<?php

namespace Nzolt\NetSuite;

class CustomerStatusSearch extends SearchRecord
{

    /**
     * @var CustomerStatusSearchBasic $basic
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
     * @return CustomerStatusSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CustomerStatusSearchBasic $basic
     * @return \Nzolt\NetSuite\CustomerStatusSearch
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
     * @return \Nzolt\NetSuite\CustomerStatusSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
