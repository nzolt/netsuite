<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Demandplanning\Types;

/**
 * ItemSupplyPlanOrderType
 */
class ItemSupplyPlanOrderType {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _purchaseOrder = "_purchaseOrder";

    /**
     * @var string
     */
    const _transferOrder = "_transferOrder";

    /**
     * @var string
     */
    const _workOrder = "_workOrder";
}