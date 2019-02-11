<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetServerTimeResult;

/**
 * GetServerTimeResponse
 */
class GetServerTimeResponse {

    /**
     * @access public
     * @var GetServerTimeResult
     */
    protected $getServerTimeResult;

    static $paramtypesmap = array(
    	"getServerTimeResult" => "GetServerTimeResult",
    );

    /**
     * Set getServerTimeResult
     *
     * @param GetServerTimeResult $getServerTimeResult
     * @return GetServerTimeResponse
     */
    public function setGetServerTimeResult(GetServerTimeResult $getServerTimeResult) {
        $this->getServerTimeResult = $getServerTimeResult;
        return $this;
    }

    /**
     * Get getServerTimeResult
     *
     * @return GetServerTimeResult
     */
    public function getGetServerTimeResult() {
        return $this->getServerTimeResult;
    }

}