<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetSavedSearchRecord;

/**
 * GetSavedSearchRequest
 */
class GetSavedSearchRequest {

    /**
     * @access public
     * @var GetSavedSearchRecord
     */
    protected $record;

    static $paramtypesmap = array(
    	"record" => "GetSavedSearchRecord",
    );

    /**
     * Set record
     *
     * @param GetSavedSearchRecord $record
     * @return GetSavedSearchRequest
     */
    public function setRecord(GetSavedSearchRecord $record) {
        $this->record = $record;
        return $this;
    }

    /**
     * Get record
     *
     * @return GetSavedSearchRecord
     */
    public function getRecord() {
        return $this->record;
    }

}