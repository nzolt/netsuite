<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales\Types;

/**
 * TransactionPaymentEventType
 */
class TransactionPaymentEventType {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _authorizationRequest = "_authorizationRequest";

    /**
     * @var string
     */
    const _captureRequest = "_captureRequest";

    /**
     * @var string
     */
    const _creditRequest = "_creditRequest";

    /**
     * @var string
     */
    const _overrideHold = "_overrideHold";

    /**
     * @var string
     */
    const _refundRequest = "_refundRequest";

    /**
     * @var string
     */
    const _saleRequest = "_saleRequest";
}