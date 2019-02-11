<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Customers\Types;

/**
 * ChargeStage
 */
class ChargeStage {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _hold = "_hold";

    /**
     * @var string
     */
    const _nonBillable = "_nonBillable";

    /**
     * @var string
     */
    const _processed = "_processed";

    /**
     * @var string
     */
    const _ready = "_ready";
}