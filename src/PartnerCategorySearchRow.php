<?php

namespace Nzolt\NetSuite;

class PartnerCategorySearchRow extends SearchRow
{

    /**
     * @var PartnerCategorySearchRowBasic $basic
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
     * @return PartnerCategorySearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PartnerCategorySearchRowBasic $basic
     * @return \Nzolt\NetSuite\PartnerCategorySearchRow
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
     * @return \Nzolt\NetSuite\PartnerCategorySearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
