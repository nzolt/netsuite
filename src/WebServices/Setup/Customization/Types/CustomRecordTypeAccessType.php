<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization\Types;

/**
 * CustomRecordTypeAccessType
 */
class CustomRecordTypeAccessType {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _noPermissionRequired = "_noPermissionRequired";

    /**
     * @var string
     */
    const _requireCustomRecordEntriesPermission = "_requireCustomRecordEntriesPermission";

    /**
     * @var string
     */
    const _usePermissionList = "_usePermissionList";
}