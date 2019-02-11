<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting\Types;

/**
 * ItemOutOfStockBehavior
 */
class ItemOutOfStockBehavior {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _allowBackOrdersButDisplayOutOfStockMessage = "_allowBackOrdersButDisplayOutOfStockMessage";

    /**
     * @var string
     */
    const _allowBackOrdersWithNoOutOfStockMessage = "_allowBackOrdersWithNoOutOfStockMessage";

    /**
     * @var string
     */
    const _default = "_default";

    /**
     * @var string
     */
    const _disallowBackOrdersButDisplayOutOfStockMessage = "_disallowBackOrdersButDisplayOutOfStockMessage";

    /**
     * @var string
     */
    const _removeItemWhenOutOfStock = "_removeItemWhenOutOfStock";
}