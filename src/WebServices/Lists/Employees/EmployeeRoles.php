<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

/**
 * EmployeeRoles
 */
class EmployeeRoles {

    /**
     * @access public
     * @var RecordRef
     */
    public $selectedRole;

    static $paramtypesmap = array(
    	"selectedRole" => "RecordRef",
    );
}