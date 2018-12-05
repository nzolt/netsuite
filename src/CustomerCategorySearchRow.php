<?php

namespace Nzolt\NetSuite;

class CustomerCategorySearchRow extends SearchRow
{

    /**
     * @var CustomerCategorySearchRowBasic $basic
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
     * @return CustomerCategorySearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CustomerCategorySearchRowBasic $basic
     * @return \Nzolt\NetSuite\CustomerCategorySearchRow
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
     * @return \Nzolt\NetSuite\CustomerCategorySearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
