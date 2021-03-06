<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales\Types;

/**
 * TransactionApprovalStatus
 */
class TransactionApprovalStatus {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _approved = "_approved";

    /**
     * @var string
     */
    const _pendingApproval = "_pendingApproval";

    /**
     * @var string
     */
    const _rejected = "_rejected";
}