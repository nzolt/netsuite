<?php

namespace Nzolt\NetSuite;

class BillingScheduleSearch extends SearchRecord
{

    /**
     * @var BillingScheduleSearchBasic $basic
     */
    protected $basic = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BillingScheduleSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param BillingScheduleSearchBasic $basic
     * @return \Nzolt\NetSuite\BillingScheduleSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

}
