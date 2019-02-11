<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * RecordList
 */
class RecordList {

    /**
     * @access public
     * @var Record[]
     */
    public $record;

    static $paramtypesmap = array(
    	"record" => "Record[]",
    );
}