<?php

namespace Nzolt\NetSuite;

class CustomListSearchRow extends SearchRow
{

    /**
     * @var CustomListSearchRowBasic $basic
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
     * @return CustomListSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CustomListSearchRowBasic $basic
     * @return \Nzolt\NetSuite\CustomListSearchRow
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
     * @return \Nzolt\NetSuite\CustomListSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
