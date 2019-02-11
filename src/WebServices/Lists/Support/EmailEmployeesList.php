<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

/**
 * EmailEmployeesList
 */
class EmailEmployeesList {

    /**
     * @access public
     * @var RecordRef[]
     */
    public $emailEmployees;

    static $paramtypesmap = array(
    	"emailEmployees" => "RecordRef[]",
    );
}