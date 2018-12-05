<?php

namespace Nzolt\NetSuite;

class ConsolidatedExchangeRateSearch extends SearchRecord
{

    /**
     * @var ConsolidatedExchangeRateSearchBasic $basic
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
     * @return ConsolidatedExchangeRateSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ConsolidatedExchangeRateSearchBasic $basic
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearch
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
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
