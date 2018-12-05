<?php

namespace Nzolt\NetSuite;

class PricingGroupSearchRow extends SearchRow
{

    /**
     * @var PricingGroupSearchRowBasic $basic
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
     * @return PricingGroupSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PricingGroupSearchRowBasic $basic
     * @return \Nzolt\NetSuite\PricingGroupSearchRow
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
     * @return \Nzolt\NetSuite\PricingGroupSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
