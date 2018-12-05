<?php

namespace Nzolt\NetSuite;

class CurrencyRateSearchRow extends SearchRow
{

    /**
     * @var CurrencyRateSearchRowBasic $basic
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
     * @return CurrencyRateSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CurrencyRateSearchRowBasic $basic
     * @return \Nzolt\NetSuite\CurrencyRateSearchRow
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
     * @return \Nzolt\NetSuite\CurrencyRateSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
