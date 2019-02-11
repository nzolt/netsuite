<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory\Types;

/**
 * WorkOrderOrderStatus
 */
class WorkOrderOrderStatus {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _built = "_built";

    /**
     * @var string
     */
    const _cancelled = "_cancelled";

    /**
     * @var string
     */
    const _closed = "_closed";

    /**
     * @var string
     */
    const _inProcess = "_inProcess";

    /**
     * @var string
     */
    const _planned = "_planned";

    /**
     * @var string
     */
    const _released = "_released";

    /**
     * @var string
     */
    const _undefined = "_undefined";
}