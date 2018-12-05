<?php

namespace Nzolt\NetSuite;

class CustomerMessageSearch extends SearchRecord
{

    /**
     * @var CustomerMessageSearchBasic $basic
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
     * @return CustomerMessageSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CustomerMessageSearchBasic $basic
     * @return \Nzolt\NetSuite\CustomerMessageSearch
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
     * @return \Nzolt\NetSuite\CustomerMessageSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
