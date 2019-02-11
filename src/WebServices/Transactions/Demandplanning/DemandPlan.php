<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Demandplanning;

/**
 * DemandPlan
 */
class DemandPlan {

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    /**
     * @access public
     * @var float
     */
    protected $calculatedQuantity;

    /**
     * @access public
     * @var PeriodDemandPlanList
     */
    protected $periodDemandPlanList;

    static $paramtypesmap = array(
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"calculatedQuantity" => "float",
    	"periodDemandPlanList" => "PeriodDemandPlanList",
    );

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return DemandPlan
     */
    public function setStartDate(\DateTime $startDate) {
        $this->startDate = $startDate->format('c');
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate() {
        return new \DateTime($this->startDate);
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return DemandPlan
     */
    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate->format('c');
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return new \DateTime($this->endDate);
    }


    /**
     * Set calculatedQuantity
     *
     * @param float $calculatedQuantity
     * @return DemandPlan
     */
    public function setCalculatedQuantity($calculatedQuantity) {
        $this->calculatedQuantity = $calculatedQuantity;
        return $this;
    }

    /**
     * Get calculatedQuantity
     *
     * @return float
     */
    public function getCalculatedQuantity() {
        return $this->calculatedQuantity;
    }


    /**
     * Set periodDemandPlanList
     *
     * @param PeriodDemandPlanList $periodDemandPlanList
     * @return DemandPlan
     */
    public function setPeriodDemandPlanList(PeriodDemandPlanList $periodDemandPlanList) {
        $this->periodDemandPlanList = $periodDemandPlanList;
        return $this;
    }

    /**
     * Get periodDemandPlanList
     *
     * @return PeriodDemandPlanList
     */
    public function getPeriodDemandPlanList() {
        return $this->periodDemandPlanList;
    }

}