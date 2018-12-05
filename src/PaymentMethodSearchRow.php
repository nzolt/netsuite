<?php

namespace Nzolt\NetSuite;

class PaymentMethodSearchRow extends SearchRow
{

    /**
     * @var PaymentMethodSearchRowBasic $basic
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
     * @return PaymentMethodSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PaymentMethodSearchRowBasic $basic
     * @return \Nzolt\NetSuite\PaymentMethodSearchRow
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
     * @return \Nzolt\NetSuite\PaymentMethodSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
