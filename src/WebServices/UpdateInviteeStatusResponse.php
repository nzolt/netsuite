<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Messages\WriteResponse;

/**
 * UpdateInviteeStatusResponse
 */
class UpdateInviteeStatusResponse {

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
     * @return UpdateInviteeStatusResponse
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