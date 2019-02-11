<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales\Types;

/**
 * OpportunityStatus
 */
class OpportunityStatus {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _closedLost = "_closedLost";

    /**
     * @var string
     */
    const _closedWon = "_closedWon";

    /**
     * @var string
     */
    const _inProgress = "_inProgress";

    /**
     * @var string
     */
    const _issuedEstimate = "_issuedEstimate";
}