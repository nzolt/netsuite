<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships\Types;

/**
 * JobBillingType
 */
class JobBillingType {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _none = "_none";

    /**
     * @var string
     */
    const _chargeBased = "_chargeBased";

    /**
     * @var string
     */
    const _fixedBidInterval = "_fixedBidInterval";

    /**
     * @var string
     */
    const _fixedBidMilestone = "_fixedBidMilestone";

    /**
     * @var string
     */
    const _timeAndMaterials = "_timeAndMaterials";
}