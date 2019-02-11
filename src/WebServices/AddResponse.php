<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Messages\WriteResponse;

/**
 * AddResponse
 */
class AddResponse {

    /**
     * @access public
     * @var WriteResponse
     */
    protected $writeResponse;

    static $paramtypesmap = array(
    	"writeResponse" => "WriteResponse",
    );

    /**
     * Set writeResponse
     *
     * @param WriteResponse $writeResponse
     * @return AddResponse
     */
    public function setWriteResponse(WriteResponse $writeResponse) {
        $this->writeResponse = $writeResponse;
        return $this;
    }

    /**
     * Get writeResponse
     *
     * @return WriteResponse
     */
    public function getWriteResponse() {
        return $this->writeResponse;
    }

}