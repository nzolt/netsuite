<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * UpdateRequest
 */
class UpdateRequest {

    /**
     * @access public
     * @var Record
     */
    protected $record;

    static $paramtypesmap = array(
    	"record" => "Record",
    );

    /**
     * Set record
     *
     * @param Record $record
     * @return UpdateRequest
     */
    public function setRecord(Record $record) {
        $this->record = $record;
        return $this;
    }

    /**
     * Get record
     *
     * @return Record
     */
    public function getRecord() {
        return $this->record;
    }

}