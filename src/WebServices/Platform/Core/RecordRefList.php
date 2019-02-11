<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * RecordRefList
 */
class RecordRefList {

    /**
     * @access public
     * @var RecordRef[]
     */
    public $recordRef;

    static $paramtypesmap = array(
    	"recordRef" => "RecordRef[]",
    );
}