<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core\Types;

/**
 * SearchLongFieldOperator
 */
class SearchLongFieldOperator {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const between = "between";

    /**
     * @var string
     */
    const NSempty = "empty";

    /**
     * @var string
     */
    const equalTo = "equalTo";

    /**
     * @var string
     */
    const greaterThan = "greaterThan";

    /**
     * @var string
     */
    const greaterThanOrEqualTo = "greaterThanOrEqualTo";

    /**
     * @var string
     */
    const lessThan = "lessThan";

    /**
     * @var string
     */
    const lessThanOrEqualTo = "lessThanOrEqualTo";

    /**
     * @var string
     */
    const notBetween = "notBetween";

    /**
     * @var string
     */
    const notEmpty = "notEmpty";

    /**
     * @var string
     */
    const notEqualTo = "notEqualTo";

    /**
     * @var string
     */
    const notGreaterThan = "notGreaterThan";

    /**
     * @var string
     */
    const notGreaterThanOrEqualTo = "notGreaterThanOrEqualTo";

    /**
     * @var string
     */
    const notLessThan = "notLessThan";

    /**
     * @var string
     */
    const notLessThanOrEqualTo = "notLessThanOrEqualTo";
}