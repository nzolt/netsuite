<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\AsyncStatusType;

/**
 * AsyncStatusResult
 */
class AsyncStatusResult {

    /**
     * @access public
     * @var string
     */
    protected $jobId;

    /**
     * @access public
     * @var AsyncStatusType
     */
    protected $status;

    /**
     * @access public
     * @var float
     */
    protected $percentCompleted;

    /**
     * @access public
     * @var float
     */
    protected $estRemainingDuration;

    static $paramtypesmap = array(
    	"jobId" => "string",
    	"status" => "AsyncStatusType",
    	"percentCompleted" => "float",
    	"estRemainingDuration" => "float",
    );

    /**
     * Set jobId
     *
     * @param string $jobId
     * @return AsyncStatusResult
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
     * Set status
     *
     * @param AsyncStatusType $status
     * @return AsyncStatusResult
     */
    public function setStatus(AsyncStatusType $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return AsyncStatusType
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set percentCompleted
     *
     * @param float $percentCompleted
     * @return AsyncStatusResult
     */
    public function setPercentCompleted($percentCompleted) {
        $this->percentCompleted = $percentCompleted;
        return $this;
    }

    /**
     * Get percentCompleted
     *
     * @return float
     */
    public function getPercentCompleted() {
        return $this->percentCompleted;
    }


    /**
     * Set estRemainingDuration
     *
     * @param float $estRemainingDuration
     * @return AsyncStatusResult
     */
    public function setEstRemainingDuration($estRemainingDuration) {
        $this->estRemainingDuration = $estRemainingDuration;
        return $this;
    }

    /**
     * Get estRemainingDuration
     *
     * @return float
     */
    public function getEstRemainingDuration() {
        return $this->estRemainingDuration;
    }

}