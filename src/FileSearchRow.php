<?php

namespace Nzolt\NetSuite;

class FileSearchRow extends SearchRow
{

    /**
     * @var FileSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var CustomerSearchRowBasic $shopperJoin
     */
    protected $shopperJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FileSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param FileSearchRowBasic $basic
     * @return \Nzolt\NetSuite\FileSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getShopperJoin()
    {
      return $this->shopperJoin;
    }

    /**
     * @param CustomerSearchRowBasic $shopperJoin
     * @return \Nzolt\NetSuite\FileSearchRow
     */
    public function setShopperJoin($shopperJoin)
    {
      $this->shopperJoin = $shopperJoin;
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
     * @return \Nzolt\NetSuite\FileSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
