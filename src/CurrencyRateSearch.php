<?php

namespace Nzolt\NetSuite;

class CurrencyRateSearch extends SearchRecord
{

    /**
     * @var CurrencyRateSearchBasic $basic
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
     * @return CurrencyRateSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CurrencyRateSearchBasic $basic
     * @return \Nzolt\NetSuite\CurrencyRateSearch
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
     * @return \Nzolt\NetSuite\CurrencyRateSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
