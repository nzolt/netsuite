<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * CheckAsyncStatusRequest
 */
class CheckAsyncStatusRequest {

    /**
     * @access public
     * @var string
     */
    protected $jobId;

    static $paramtypesmap = array(
    	"jobId" => "string",
    );

    /**
     * Set jobId
     *
     * @param string $jobId
     * @return CheckAsyncStatusRequest
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

}