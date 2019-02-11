<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetCustomizationIdResult;

/**
 * GetCustomizationIdResponse
 */
class GetCustomizationIdResponse {

    /**
     * @access public
     * @var GetCustomizationIdResult
     */
    protected $getCustomizationIdResult;

    static $paramtypesmap = array(
    	"getCustomizationIdResult" => "GetCustomizationIdResult",
    );

    /**
     * Set getCustomizationIdResult
     *
     * @param GetCustomizationIdResult $getCustomizationIdResult
     * @return GetCustomizationIdResponse
     */
    public function setGetCustomizationIdResult(GetCustomizationIdResult $getCustomizationIdResult) {
        $this->getCustomizationIdResult = $getCustomizationIdResult;
        return $this;
    }

    /**
     * Get getCustomizationIdResult
     *
     * @return GetCustomizationIdResult
     */
    public function getGetCustomizationIdResult() {
        return $this->getCustomizationIdResult;
    }

}