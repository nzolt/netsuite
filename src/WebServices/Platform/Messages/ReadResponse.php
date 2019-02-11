<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Messages;

use Nzolt\NetSuite\WebServices\Platform\Core\Status;
use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * ReadResponse
 */
class ReadResponse {

    /**
     * @access public
     * @var Status
     */
    protected $status;

    /**
     * @access public
     * @var Record
     */
    protected $record;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"record" => "Record",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return ReadResponse
     */
    public function setStatus(Status $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return Status
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set record
     *
     * @param Record $record
     * @return ReadResponse
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