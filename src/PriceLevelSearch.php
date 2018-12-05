<?php

namespace Nzolt\NetSuite;

class PriceLevelSearch extends SearchRecord
{

    /**
     * @var PriceLevelSearchBasic $basic
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
     * @return PriceLevelSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PriceLevelSearchBasic $basic
     * @return \Nzolt\NetSuite\PriceLevelSearch
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
     * @return \Nzolt\NetSuite\PriceLevelSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
