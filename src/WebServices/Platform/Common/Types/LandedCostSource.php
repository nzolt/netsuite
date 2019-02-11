<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common\Types;

/**
 * LandedCostSource
 */
class LandedCostSource {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _manual = "_manual";

    /**
     * @var string
     */
    const _otherTransaction = "_otherTransaction";

    /**
     * @var string
     */
    const _otherTransactionExcludeTax = "_otherTransactionExcludeTax";

    /**
     * @var string
     */
    const _thisTransaction = "_thisTransaction";
}