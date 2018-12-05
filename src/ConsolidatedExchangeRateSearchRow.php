<?php

namespace Nzolt\NetSuite;

class ConsolidatedExchangeRateSearchRow extends SearchRow
{

    /**
     * @var ConsolidatedExchangeRateSearchRowBasic $basic
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
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ConsolidatedExchangeRateSearchRowBasic $basic
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRow
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
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
