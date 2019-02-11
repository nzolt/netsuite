<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common\Types;

/**
 * RevenueCommitStatus
 */
class RevenueCommitStatus {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _committed = "_committed";

    /**
     * @var string
     */
    const _partiallyCommitted = "_partiallyCommitted";

    /**
     * @var string
     */
    const _pendingCommitment = "_pendingCommitment";
}