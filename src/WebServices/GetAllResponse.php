<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetAllResult;

/**
 * GetAllResponse
 */
class GetAllResponse {

    /**
     * @access public
     * @var GetAllResult
     */
    protected $getAllResult;

    static $paramtypesmap = array(
    	"getAllResult" => "GetAllResult",
    );

    /**
     * Set getAllResult
     *
     * @param GetAllResult $getAllResult
     * @return GetAllResponse
     */
    public function setGetAllResult(GetAllResult $getAllResult) {
        $this->getAllResult = $getAllResult;
        return $this;
    }

    /**
     * Get getAllResult
     *
     * @return GetAllResult
     */
    public function getGetAllResult() {
        return $this->getAllResult;
    }

}