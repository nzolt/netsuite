<?php

namespace Nzolt\NetSuite;

class PaymentMethodSearch extends SearchRecord
{

    /**
     * @var PaymentMethodSearchBasic $basic
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
     * @return PaymentMethodSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PaymentMethodSearchBasic $basic
     * @return \Nzolt\NetSuite\PaymentMethodSearch
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
     * @return \Nzolt\NetSuite\PaymentMethodSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
