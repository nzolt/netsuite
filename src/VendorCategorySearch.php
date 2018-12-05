<?php

namespace Nzolt\NetSuite;

class VendorCategorySearch extends SearchRecord
{

    /**
     * @var VendorCategorySearchBasic $basic
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
     * @return VendorCategorySearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param VendorCategorySearchBasic $basic
     * @return \Nzolt\NetSuite\VendorCategorySearch
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
     * @return \Nzolt\NetSuite\VendorCategorySearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
