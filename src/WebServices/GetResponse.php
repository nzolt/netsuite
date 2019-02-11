<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Messages\ReadResponse;

/**
 * GetResponse
 */
class GetResponse {

    /**
     * @access public
     * @var ReadResponse
     */
    protected $readResponse;

    static $paramtypesmap = array(
    	"readResponse" => "ReadResponse",
    );

    /**
     * Set readResponse
     *
     * @param ReadResponse $readResponse
     * @return GetResponse
     */
    public function setReadResponse(ReadResponse $readResponse) {
        $this->readResponse = $readResponse;
        return $this;
    }

    /**
     * Get readResponse
     *
     * @return ReadResponse
     */
    public function getReadResponse() {
        return $this->readResponse;
    }

}