<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling\Types;

/**
 * CalendarEventStatus
 */
class CalendarEventStatus {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _canceled = "_canceled";

    /**
     * @var string
     */
    const _completed = "_completed";

    /**
     * @var string
     */
    const _confirmed = "_confirmed";

    /**
     * @var string
     */
    const _tentative = "_tentative";
}