<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * GetAsyncResultRequest
 */
class GetAsyncResultRequest {

    /**
     * @access public
     * @var string
     */
    protected $jobId;

    /**
     * @access public
     * @var integer
     */
    protected $pageIndex;

    static $paramtypesmap = array(
    	"jobId" => "string",
    	"pageIndex" => "integer",
    );

    /**
     * Set jobId
     *
     * @param string $jobId
     * @return GetAsyncResultRequest
     */
    public function setJobId($jobId) {
        $this->jobId = $jobId;
        return $this;
    }

    /**
     * Get jobId
     *
     * @return string
     */
    public function getJobId() {
        return $this->jobId;
    }


    /**
     * Set pageIndex
     *
     * @param integer $pageIndex
     * @return GetAsyncResultRequest
     */
    public function setPageIndex($pageIndex) {
        $this->pageIndex = $pageIndex;
        return $this;
    }

    /**
     * Get pageIndex
     *
     * @return integer
     */
    public function getPageIndex() {
        return $this->pageIndex;
    }

}