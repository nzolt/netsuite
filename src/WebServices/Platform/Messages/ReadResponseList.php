<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Messages;

use Nzolt\NetSuite\WebServices\Platform\Core\Status;

/**
 * ReadResponseList
 */
class ReadResponseList {

    /**
     * @access public
     * @var Status
     */
    protected $status;

    /**
     * @access public
     * @var ReadResponse[]
     */
    public $readResponse;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"readResponse" => "ReadResponse[]",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return ReadResponseList
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