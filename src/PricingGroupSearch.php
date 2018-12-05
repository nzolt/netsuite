<?php

namespace Nzolt\NetSuite;

class PricingGroupSearch extends SearchRecord
{

    /**
     * @var PricingGroupSearchBasic $basic
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
     * @return PricingGroupSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PricingGroupSearchBasic $basic
     * @return \Nzolt\NetSuite\PricingGroupSearch
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
     * @return \Nzolt\NetSuite\PricingGroupSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
