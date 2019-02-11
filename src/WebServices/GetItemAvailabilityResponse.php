<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetItemAvailabilityResult;

/**
 * GetItemAvailabilityResponse
 */
class GetItemAvailabilityResponse {

    /**
     * @access public
     * @var GetItemAvailabilityResult
     */
    protected $getItemAvailabilityResult;

    static $paramtypesmap = array(
    	"getItemAvailabilityResult" => "GetItemAvailabilityResult",
    );

    /**
     * Set getItemAvailabilityResult
     *
     * @param GetItemAvailabilityResult $getItemAvailabilityResult
     * @return GetItemAvailabilityResponse
     */
    public function setGetItemAvailabilityResult(GetItemAvailabilityResult $getItemAvailabilityResult) {
        $this->getItemAvailabilityResult = $getItemAvailabilityResult;
        return $this;
    }

    /**
     * Get getItemAvailabilityResult
     *
     * @return GetItemAvailabilityResult
     */
    public function getGetItemAvailabilityResult() {
        return $this->getItemAvailabilityResult;
    }

}