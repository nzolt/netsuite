<?php

namespace Nzolt\NetSuite;

class DemandPlanMatrix
{

    /**
     * @var DemandPlan[] $demandPlan
     */
    protected $demandPlan = null;

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
     * @return DemandPlan[]
     */
    public function getDemandPlan()
    {
      return $this->demandPlan;
    }

    /**
     * @param DemandPlan[] $demandPlan
     * @return \Nzolt\NetSuite\DemandPlanMatrix
     */
    public function setDemandPlan(array $demandPlan = null)
    {
      $this->demandPlan = $demandPlan;
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
     * @return \Nzolt\NetSuite\DemandPlanMatrix
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
