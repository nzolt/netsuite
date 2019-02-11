<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetServerTimeResult
 */
class GetServerTimeResult {

    /**
     * @access public
     * @var Status
     */
    protected $status;

    /**
     * @access public
     * @var dateTime
     */
    protected $serverTime;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"serverTime" => "dateTime",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return GetServerTimeResult
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
     * Set serverTime
     *
     * @param \DateTime $serverTime
     * @return GetServerTimeResult
     */
    public function setServerTime(\DateTime $serverTime) {
        $this->serverTime = $serverTime->format('c');
        return $this;
    }

    /**
     * Get serverTime
     *
     * @return \DateTime
     */
    public function getServerTime() {
        return new \DateTime($this->serverTime);
    }

}