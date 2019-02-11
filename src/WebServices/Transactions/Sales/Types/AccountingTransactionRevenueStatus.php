<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales\Types;

/**
 * AccountingTransactionRevenueStatus
 */
class AccountingTransactionRevenueStatus {

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
    const _onRevCommitment = "_onRevCommitment";

    /**
     * @var string
     */
    const _pending = "_pending";
}