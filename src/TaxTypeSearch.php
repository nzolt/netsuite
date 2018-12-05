<?php

namespace Nzolt\NetSuite;

class TaxTypeSearch extends SearchRecord
{

    /**
     * @var TaxTypeSearchBasic $basic
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
     * @return TaxTypeSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param TaxTypeSearchBasic $basic
     * @return \Nzolt\NetSuite\TaxTypeSearch
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
     * @return \Nzolt\NetSuite\TaxTypeSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
