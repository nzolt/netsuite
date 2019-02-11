<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support\Types;

/**
 * IssueTrackCode
 */
class IssueTrackCode {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _never = "_never";

    /**
     * @var string
     */
    const _onAnyChange = "_onAnyChange";

    /**
     * @var string
     */
    const _whenBaseStatusIsClosed = "_whenBaseStatusIsClosed";

    /**
     * @var string
     */
    const _whenBaseStatusIsOnHold = "_whenBaseStatusIsOnHold";

    /**
     * @var string
     */
    const _whenBaseStatusIsOpen = "_whenBaseStatusIsOpen";

    /**
     * @var string
     */
    const _whenBaseStatusIsResolved = "_whenBaseStatusIsResolved";
}