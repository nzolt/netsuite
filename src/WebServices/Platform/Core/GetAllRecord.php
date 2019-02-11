<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\GetAllRecordType;

/**
 * GetAllRecord
 */
class GetAllRecord {

    /**
     * @access public
     * @var GetAllRecordType
     */
    protected $recordType;

    static $paramtypesmap = array(
    	"recordType" => "GetAllRecordType",
    );

    /**
     * Set recordType
     *
     * @param GetAllRecordType $recordType
     * @return GetAllRecord
     */
    public function setRecordType(GetAllRecordType $recordType) {
        $this->recordType = $recordType;
        return $this;
    }

    /**
     * Get recordType
     *
     * @return GetAllRecordType
     */
    public function getRecordType() {
        return $this->recordType;
    }

}