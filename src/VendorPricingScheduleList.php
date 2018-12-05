<?php

namespace Nzolt\NetSuite;

class VendorPricingScheduleList
{

    /**
     * @var VendorPricingSchedule[] $pricingSchedule
     */
    protected $pricingSchedule = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return VendorPricingSchedule[]
     */
    public function getPricingSchedule()
    {
      return $this->pricingSchedule;
    }

    /**
     * @param VendorPricingSchedule[] $pricingSchedule
     * @return \Nzolt\NetSuite\VendorPricingScheduleList
     */
    public function setPricingSchedule(array $pricingSchedule = null)
    {
      $this->pricingSchedule = $pricingSchedule;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\VendorPricingScheduleList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
