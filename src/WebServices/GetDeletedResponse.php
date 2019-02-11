<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetDeletedResult;

/**
 * GetDeletedResponse
 */
class GetDeletedResponse {

    /**
     * @access public
     * @var GetDeletedResult
     */
    protected $getDeletedResult;

    static $paramtypesmap = array(
    	"getDeletedResult" => "GetDeletedResult",
    );

    /**
     * Set getDeletedResult
     *
     * @param GetDeletedResult $getDeletedResult
     * @return GetDeletedResponse
     */
    public function setGetDeletedResult(GetDeletedResult $getDeletedResult) {
        $this->getDeletedResult = $getDeletedResult;
        return $this;
    }

    /**
     * Get getDeletedResult
     *
     * @return GetDeletedResult
     */
    public function getGetDeletedResult() {
        return $this->getDeletedResult;
    }

}