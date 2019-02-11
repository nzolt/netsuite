<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * DeletedRecordList
 */
class DeletedRecordList {

    /**
     * @access public
     * @var DeletedRecord[]
     */
    public $deletedRecord;

    static $paramtypesmap = array(
    	"deletedRecord" => "DeletedRecord[]",
    );
}