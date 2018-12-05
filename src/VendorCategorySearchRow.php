<?php

namespace Nzolt\NetSuite;

class VendorCategorySearchRow extends SearchRow
{

    /**
     * @var VendorCategorySearchRowBasic $basic
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
     * @return VendorCategorySearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param VendorCategorySearchRowBasic $basic
     * @return \Nzolt\NetSuite\VendorCategorySearchRow
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
     * @return \Nzolt\NetSuite\VendorCategorySearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
