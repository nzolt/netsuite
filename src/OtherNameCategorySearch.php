<?php

namespace Nzolt\NetSuite;

class OtherNameCategorySearch extends SearchRecord
{

    /**
     * @var OtherNameCategorySearchBasic $basic
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
     * @return OtherNameCategorySearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param OtherNameCategorySearchBasic $basic
     * @return \Nzolt\NetSuite\OtherNameCategorySearch
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
     * @return \Nzolt\NetSuite\OtherNameCategorySearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
