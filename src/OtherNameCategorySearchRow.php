<?php

namespace Nzolt\NetSuite;

class OtherNameCategorySearchRow extends SearchRow
{

    /**
     * @var OtherNameCategorySearchRowBasic $basic
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
     * @return OtherNameCategorySearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param OtherNameCategorySearchRowBasic $basic
     * @return \Nzolt\NetSuite\OtherNameCategorySearchRow
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
     * @return \Nzolt\NetSuite\OtherNameCategorySearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
