<?php

namespace Nzolt\NetSuite;

class TaxGroupSearchRow extends SearchRow
{

    /**
     * @var TaxGroupSearchRowBasic $basic
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
     * @return TaxGroupSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param TaxGroupSearchRowBasic $basic
     * @return \Nzolt\NetSuite\TaxGroupSearchRow
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
     * @return \Nzolt\NetSuite\TaxGroupSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
