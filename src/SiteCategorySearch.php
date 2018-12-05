<?php

namespace Nzolt\NetSuite;

class SiteCategorySearch extends SearchRecord
{

    /**
     * @var SiteCategorySearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var CustomerSearchBasic $shopperJoin
     */
    protected $shopperJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SiteCategorySearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param SiteCategorySearchBasic $basic
     * @return \Nzolt\NetSuite\SiteCategorySearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getShopperJoin()
    {
      return $this->shopperJoin;
    }

    /**
     * @param CustomerSearchBasic $shopperJoin
     * @return \Nzolt\NetSuite\SiteCategorySearch
     */
    public function setShopperJoin($shopperJoin)
    {
      $this->shopperJoin = $shopperJoin;
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
     * @return \Nzolt\NetSuite\SiteCategorySearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
