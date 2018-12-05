<?php

namespace Nzolt\NetSuite;

class TaxTypeSearchRow extends SearchRow
{

    /**
     * @var TaxTypeSearchRowBasic $basic
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
     * @return TaxTypeSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param TaxTypeSearchRowBasic $basic
     * @return \Nzolt\NetSuite\TaxTypeSearchRow
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
     * @return \Nzolt\NetSuite\TaxTypeSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
