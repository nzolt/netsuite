<?php

namespace Nzolt\NetSuite;

class WinLossReasonSearchRow extends SearchRow
{

    /**
     * @var WinLossReasonSearchRowBasic $basic
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
     * @return WinLossReasonSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param WinLossReasonSearchRowBasic $basic
     * @return \Nzolt\NetSuite\WinLossReasonSearchRow
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
     * @return \Nzolt\NetSuite\WinLossReasonSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
