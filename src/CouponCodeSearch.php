<?php

namespace Nzolt\NetSuite;

class CouponCodeSearch extends SearchRecord
{

    /**
     * @var CouponCodeSearchBasic $basic
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
     * @return CouponCodeSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CouponCodeSearchBasic $basic
     * @return \Nzolt\NetSuite\CouponCodeSearch
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
     * @return \Nzolt\NetSuite\CouponCodeSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
