<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory\Types;

/**
 * TransferOrderOrderStatus
 */
class TransferOrderOrderStatus {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _pendingApproval = "_pendingApproval";

    /**
     * @var string
     */
    const _pendingFulfillment = "_pendingFulfillment";

    /**
     * @var string
     */
    const _rejected = "_rejected";

    /**
     * @var string
     */
    const _partiallyFulfilled = "_partiallyFulfilled";

    /**
     * @var string
     */
    const _pendingReceiptPartFulfilled = "_pendingReceiptPartFulfilled";

    /**
     * @var string
     */
    const _pendingReceipt = "_pendingReceipt";

    /**
     * @var string
     */
    const _received = "_received";

    /**
     * @var string
     */
    const _closed = "_closed";

    /**
     * @var string
     */
    const _undefined = "_undefined";
}