<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetDataCenterUrlsResult;

/**
 * GetDataCenterUrlsResponse
 */
class GetDataCenterUrlsResponse {

    /**
     * @access public
     * @var GetDataCenterUrlsResult
     */
    protected $getDataCenterUrlsResult;

    static $paramtypesmap = array(
    	"getDataCenterUrlsResult" => "GetDataCenterUrlsResult",
    );

    /**
     * Set getDataCenterUrlsResult
     *
     * @param GetDataCenterUrlsResult $getDataCenterUrlsResult
     * @return GetDataCenterUrlsResponse
     */
    public function setGetDataCenterUrlsResult(GetDataCenterUrlsResult $getDataCenterUrlsResult) {
        $this->getDataCenterUrlsResult = $getDataCenterUrlsResult;
        return $this;
    }

    /**
     * Get getDataCenterUrlsResult
     *
     * @return GetDataCenterUrlsResult
     */
    public function getGetDataCenterUrlsResult() {
        return $this->getDataCenterUrlsResult;
    }

}