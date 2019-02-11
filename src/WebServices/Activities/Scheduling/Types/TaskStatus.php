<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling\Types;

/**
 * TaskStatus
 */
class TaskStatus {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _completed = "_completed";

    /**
     * @var string
     */
    const _inProgress = "_inProgress";

    /**
     * @var string
     */
    const _notStarted = "_notStarted";
}