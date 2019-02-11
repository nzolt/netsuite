<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting\Types;

/**
 * RevRecScheduleRecurrenceType
 */
class RevRecScheduleRecurrenceType {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _custom = "_custom";

    /**
     * @var string
     */
    const _straightLineByEvenPeriods = "_straightLineByEvenPeriods";

    /**
     * @var string
     */
    const _straightLineProrateFirstAndLastPeriod = "_straightLineProrateFirstAndLastPeriod";

    /**
     * @var string
     */
    const _straightLineProrateFirstAndLastPeriodPeriodRate = "_straightLineProrateFirstAndLastPeriodPeriodRate";

    /**
     * @var string
     */
    const _straightLineUsingExactDays = "_straightLineUsingExactDays";
}