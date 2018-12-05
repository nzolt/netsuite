<?php

namespace Nzolt\NetSuite;

class TaxGroupSearch extends SearchRecord
{

    /**
     * @var TaxGroupSearchBasic $basic
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
     * @return TaxGroupSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param TaxGroupSearchBasic $basic
     * @return \Nzolt\NetSuite\TaxGroupSearch
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
     * @return \Nzolt\NetSuite\TaxGroupSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
