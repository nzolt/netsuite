<?php

namespace Nzolt\NetSuite;

class WinLossReasonSearch extends SearchRecord
{

    /**
     * @var WinLossReasonSearchBasic $basic
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
     * @return WinLossReasonSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param WinLossReasonSearchBasic $basic
     * @return \Nzolt\NetSuite\WinLossReasonSearch
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
     * @return \Nzolt\NetSuite\WinLossReasonSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
