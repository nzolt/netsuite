<?php

namespace Nzolt\NetSuite;

class BillingScheduleSearchRow extends SearchRow
{

    /**
     * @var BillingScheduleSearchRowBasic $basic
     */
    protected $basic = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BillingScheduleSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param BillingScheduleSearchRowBasic $basic
     * @return \Nzolt\NetSuite\BillingScheduleSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

}
