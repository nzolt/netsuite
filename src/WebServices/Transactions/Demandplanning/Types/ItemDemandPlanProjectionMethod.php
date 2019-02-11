<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Demandplanning\Types;

/**
 * ItemDemandPlanProjectionMethod
 */
class ItemDemandPlanProjectionMethod {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _linearRegression = "_linearRegression";

    /**
     * @var string
     */
    const _movingAverage = "_movingAverage";

    /**
     * @var string
     */
    const _salesForecast = "_salesForecast";

    /**
     * @var string
     */
    const _seasonalAverage = "_seasonalAverage";
}