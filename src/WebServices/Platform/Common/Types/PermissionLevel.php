<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common\Types;

/**
 * PermissionLevel
 */
class PermissionLevel {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _create = "_create";

    /**
     * @var string
     */
    const _edit = "_edit";

    /**
     * @var string
     */
    const _full = "_full";

    /**
     * @var string
     */
    const _none = "_none";

    /**
     * @var string
     */
    const _view = "_view";
}