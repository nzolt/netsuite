<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases\Types;

/**
 * VendorReturnAuthorizationOrderStatus
 */
class VendorReturnAuthorizationOrderStatus {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _cancelled = "_cancelled";

    /**
     * @var string
     */
    const _closed = "_closed";

    /**
     * @var string
     */
    const _credited = "_credited";

    /**
     * @var string
     */
    const _partiallyReturned = "_partiallyReturned";

    /**
     * @var string
     */
    const _pendingApproval = "_pendingApproval";

    /**
     * @var string
     */
    const _pendingCredit = "_pendingCredit";

    /**
     * @var string
     */
    const _pendingCreditPartiallyReturned = "_pendingCreditPartiallyReturned";

    /**
     * @var string
     */
    const _pendingReturn = "_pendingReturn";

    /**
     * @var string
     */
    const _undefined = "_undefined";
}