<?php

namespace Nzolt\NetSuite;

class FileSearch extends SearchRecord
{

    /**
     * @var FileSearchBasic $basic
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
     * @return FileSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param FileSearchBasic $basic
     * @return \Nzolt\NetSuite\FileSearch
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
     * @return \Nzolt\NetSuite\FileSearch
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
     * @return \Nzolt\NetSuite\FileSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
