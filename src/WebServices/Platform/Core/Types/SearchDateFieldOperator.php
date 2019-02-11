<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core\Types;

/**
 * SearchDateFieldOperator
 */
class SearchDateFieldOperator {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const after = "after";

    /**
     * @var string
     */
    const before = "before";

    /**
     * @var string
     */
    const NSempty = "empty";

    /**
     * @var string
     */
    const notAfter = "notAfter";

    /**
     * @var string
     */
    const notBefore = "notBefore";

    /**
     * @var string
     */
    const notEmpty = "notEmpty";

    /**
     * @var string
     */
    const notOn = "notOn";

    /**
     * @var string
     */
    const notOnOrAfter = "notOnOrAfter";

    /**
     * @var string
     */
    const notOnOrBefore = "notOnOrBefore";

    /**
     * @var string
     */
    const notWithin = "notWithin";

    /**
     * @var string
     */
    const on = "on";

    /**
     * @var string
     */
    const onOrAfter = "onOrAfter";

    /**
     * @var string
     */
    const onOrBefore = "onOrBefore";

    /**
     * @var string
     */
    const within = "within";
}