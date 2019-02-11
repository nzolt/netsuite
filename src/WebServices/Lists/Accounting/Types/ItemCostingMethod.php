<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting\Types;

/**
 * ItemCostingMethod
 */
class ItemCostingMethod {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _average = "_average";

    /**
     * @var string
     */
    const _fifo = "_fifo";

    /**
     * @var string
     */
    const _lifo = "_lifo";

    /**
     * @var string
     */
    const _lotNumbered = "_lotNumbered";

    /**
     * @var string
     */
    const _serialized = "_serialized";

    /**
     * @var string
     */
    const _standard = "_standard";
}