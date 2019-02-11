<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\InitializeRecord;

/**
 * InitializeRequest
 */
class InitializeRequest {

    /**
     * @access public
     * @var InitializeRecord
     */
    protected $initializeRecord;

    static $paramtypesmap = array(
    	"initializeRecord" => "InitializeRecord",
    );

    /**
     * Set initializeRecord
     *
     * @param InitializeRecord $initializeRecord
     * @return InitializeRequest
     */
    public function setInitializeRecord(InitializeRecord $initializeRecord) {
        $this->initializeRecord = $initializeRecord;
        return $this;
    }

    /**
     * Get initializeRecord
     *
     * @return InitializeRecord
     */
    public function getInitializeRecord() {
        return $this->initializeRecord;
    }

}