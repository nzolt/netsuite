<?php

namespace Nzolt\NetSuite;

class PriceLevelSearchRow extends SearchRow
{

    /**
     * @var PriceLevelSearchRowBasic $basic
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
     * @return PriceLevelSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PriceLevelSearchRowBasic $basic
     * @return \Nzolt\NetSuite\PriceLevelSearchRow
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
     * @return \Nzolt\NetSuite\PriceLevelSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
