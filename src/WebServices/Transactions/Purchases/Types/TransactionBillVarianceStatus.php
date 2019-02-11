<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases\Types;

/**
 * TransactionBillVarianceStatus
 */
class TransactionBillVarianceStatus {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _journalNotPosted = "_journalNotPosted";

    /**
     * @var string
     */
    const _journalPosted = "_journalPosted";

    /**
     * @var string
     */
    const _noVariances = "_noVariances";
}