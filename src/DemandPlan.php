<?php

namespace Nzolt\NetSuite;

class DemandPlan
{

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var float $calculatedQuantity
     */
    protected $calculatedQuantity = null;

    /**
     * @var PeriodDemandPlanList $periodDemandPlanList
     */
    protected $periodDemandPlanList = null;

    /**
     * @param \DateTime $startDate
     */
    public function __construct(\DateTime $startDate)
    {
      $this->startDate = $startDate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\DemandPlan
     */
    public function setStartDate(\DateTime $startDate)
    {
      $this->startDate = $startDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\DemandPlan
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getCalculatedQuantity()
    {
      return $this->calculatedQuantity;
    }

    /**
     * @param float $calculatedQuantity
     * @return \Nzolt\NetSuite\DemandPlan
     */
    public function setCalculatedQuantity($calculatedQuantity)
    {
      $this->calculatedQuantity = $calculatedQuantity;
      return $this;
    }

    /**
     * @return PeriodDemandPlanList
     */
    public function getPeriodDemandPlanList()
    {
      return $this->periodDemandPlanList;
    }

    /**
     * @param PeriodDemandPlanList $periodDemandPlanList
     * @return \Nzolt\NetSuite\DemandPlan
     */
    public function setPeriodDemandPlanList($periodDemandPlanList)
    {
      $this->periodDemandPlanList = $periodDemandPlanList;
      return $this;
    }

}
