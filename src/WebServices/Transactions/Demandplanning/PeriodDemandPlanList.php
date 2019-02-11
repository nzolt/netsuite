<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Demandplanning;

/**
 * PeriodDemandPlanList
 */
class PeriodDemandPlanList {

    /**
     * @access public
     * @var PeriodDemandPlan[]
     */
    public $periodDemandPlan;

    static $paramtypesmap = array(
    	"periodDemandPlan" => "PeriodDemandPlan[]",
    );
}