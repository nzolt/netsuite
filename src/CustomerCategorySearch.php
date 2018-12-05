<?php

namespace Nzolt\NetSuite;

class CustomerCategorySearch extends SearchRecord
{

    /**
     * @var CustomerCategorySearchBasic $basic
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
     * @return CustomerCategorySearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CustomerCategorySearchBasic $basic
     * @return \Nzolt\NetSuite\CustomerCategorySearch
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
     * @return \Nzolt\NetSuite\CustomerCategorySearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
