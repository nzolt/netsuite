<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * VendorRoles
 */
class VendorRoles {

    /**
     * @access public
     * @var RecordRef
     */
    public $selectedRole;

    static $paramtypesmap = array(
    	"selectedRole" => "RecordRef",
    );
}