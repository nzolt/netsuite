<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetAllRecord;

/**
 * GetAllRequest
 */
class GetAllRequest {

    /**
     * @access public
     * @var GetAllRecord
     */
    protected $record;

    static $paramtypesmap = array(
    	"record" => "GetAllRecord",
    );

    /**
     * Set record
     *
     * @param GetAllRecord $record
     * @return GetAllRequest
     */
    public function setRecord(GetAllRecord $record) {
        $this->record = $record;
        return $this;
    }

    /**
     * Get record
     *
     * @return GetAllRecord
     */
    public function getRecord() {
        return $this->record;
    }

}