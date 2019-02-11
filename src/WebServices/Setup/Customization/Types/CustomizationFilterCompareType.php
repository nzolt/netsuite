<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization\Types;

/**
 * CustomizationFilterCompareType
 */
class CustomizationFilterCompareType {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _equal = "_equal";

    /**
     * @var string
     */
    const _greaterThan = "_greaterThan";

    /**
     * @var string
     */
    const _greaterThanOrEqual = "_greaterThanOrEqual";

    /**
     * @var string
     */
    const _lessThan = "_lessThan";

    /**
     * @var string
     */
    const _lessThanOrEqual = "_lessThanOrEqual";

    /**
     * @var string
     */
    const _notEqual = "_notEqual";
}