<?php

namespace Nzolt\NetSuite;

class CustomListSearch extends SearchRecord
{

    /**
     * @var CustomListSearchBasic $basic
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
     * @return CustomListSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CustomListSearchBasic $basic
     * @return \Nzolt\NetSuite\CustomListSearch
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
     * @return \Nzolt\NetSuite\CustomListSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
