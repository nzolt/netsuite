<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Messages\SessionResponse;

/**
 * MapSsoResponse
 */
class MapSsoResponse {

    /**
     * @access public
     * @var SessionResponse
     */
    protected $sessionResponse;

    static $paramtypesmap = array(
    	"sessionResponse" => "SessionResponse",
    );

    /**
     * Set sessionResponse
     *
     * @param SessionResponse $sessionResponse
     * @return MapSsoResponse
     */
    public function setSessionResponse(SessionResponse $sessionResponse) {
        $this->sessionResponse = $sessionResponse;
        return $this;
    }

    /**
     * Get sessionResponse
     *
     * @return SessionResponse
     */
    public function getSessionResponse() {
        return $this->sessionResponse;
    }

}