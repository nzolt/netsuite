<?php

namespace Nzolt\NetSuite;

class PartnerCategorySearch extends SearchRecord
{

    /**
     * @var PartnerCategorySearchBasic $basic
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
     * @return PartnerCategorySearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PartnerCategorySearchBasic $basic
     * @return \Nzolt\NetSuite\PartnerCategorySearch
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
     * @return \Nzolt\NetSuite\PartnerCategorySearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
