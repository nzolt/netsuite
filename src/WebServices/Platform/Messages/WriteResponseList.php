<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Messages;

use Nzolt\NetSuite\WebServices\Platform\Core\Status;

/**
 * WriteResponseList
 */
class WriteResponseList {

    /**
     * @access public
     * @var Status
     */
    protected $status;

    /**
     * @access public
     * @var WriteResponse[]
     */
    public $writeResponse;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"writeResponse" => "WriteResponse[]",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return WriteResponseList
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

}