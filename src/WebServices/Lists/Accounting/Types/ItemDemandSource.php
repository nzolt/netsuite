<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting\Types;

/**
 * ItemDemandSource
 */
class ItemDemandSource {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _enteredAndPlannedOrders = "_enteredAndPlannedOrders";

    /**
     * @var string
     */
    const _forecastAndOrders = "_forecastAndOrders";

    /**
     * @var string
     */
    const _forecastConsumption = "_forecastConsumption";

    /**
     * @var string
     */
    const _forecastFromDemandPlan = "_forecastFromDemandPlan";
}