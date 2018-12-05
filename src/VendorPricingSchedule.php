<?php

namespace Nzolt\NetSuite;

class VendorPricingSchedule
{

    /**
     * @var string $scheduleName
     */
    protected $scheduleName = null;

    /**
     * @var float $scheduleDiscount
     */
    protected $scheduleDiscount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getScheduleName()
    {
      return $this->scheduleName;
    }

    /**
     * @param string $scheduleName
     * @return \Nzolt\NetSuite\VendorPricingSchedule
     */
    public function setScheduleName($scheduleName)
    {
      $this->scheduleName = $scheduleName;
      return $this;
    }

    /**
     * @return float
     */
    public function getScheduleDiscount()
    {
      return $this->scheduleDiscount;
    }

    /**
     * @param float $scheduleDiscount
     * @return \Nzolt\NetSuite\VendorPricingSchedule
     */
    public function setScheduleDiscount($scheduleDiscount)
    {
      $this->scheduleDiscount = $scheduleDiscount;
      return $this;
    }

}
