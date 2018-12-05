<?php

namespace Nzolt\NetSuite;

class PeriodDemandPlanList
{

    /**
     * @var PeriodDemandPlan[] $periodDemandPlan
     */
    protected $periodDemandPlan = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PeriodDemandPlan[]
     */
    public function getPeriodDemandPlan()
    {
      return $this->periodDemandPlan;
    }

    /**
     * @param PeriodDemandPlan[] $periodDemandPlan
     * @return \Nzolt\NetSuite\PeriodDemandPlanList
     */
    public function setPeriodDemandPlan(array $periodDemandPlan = null)
    {
      $this->periodDemandPlan = $periodDemandPlan;
      return $this;
    }

}
