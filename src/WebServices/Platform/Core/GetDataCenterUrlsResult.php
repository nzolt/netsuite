<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetDataCenterUrlsResult
 */
class GetDataCenterUrlsResult {

    /**
     * @access public
     * @var Status
     */
    protected $status;

    /**
     * @access public
     * @var DataCenterUrls
     */
    protected $dataCenterUrls;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"dataCenterUrls" => "DataCenterUrls",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return GetDataCenterUrlsResult
     */
    public function setStatus(Status $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return Status
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set dataCenterUrls
     *
     * @param DataCenterUrls $dataCenterUrls
     * @return GetDataCenterUrlsResult
     */
    public function setDataCenterUrls(DataCenterUrls $dataCenterUrls) {
        $this->dataCenterUrls = $dataCenterUrls;
        return $this;
    }

    /**
     * Get dataCenterUrls
     *
     * @return DataCenterUrls
     */
    public function getDataCenterUrls() {
        return $this->dataCenterUrls;
    }

}