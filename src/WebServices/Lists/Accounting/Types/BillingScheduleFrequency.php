<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting\Types;

/**
 * BillingScheduleFrequency
 */
class BillingScheduleFrequency {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _annually = "_annually";

    /**
     * @var string
     */
    const _custom = "_custom";

    /**
     * @var string
     */
    const _daily = "_daily";

    /**
     * @var string
     */
    const _endOfPeriod = "_endOfPeriod";

    /**
     * @var string
     */
    const _monthly = "_monthly";

    /**
     * @var string
     */
    const _never = "_never";

    /**
     * @var string
     */
    const _oneTime = "_oneTime";

    /**
     * @var string
     */
    const _startOfPeriod = "_startOfPeriod";

    /**
     * @var string
     */
    const _weekly = "_weekly";
}