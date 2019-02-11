<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Messages;

use Nzolt\NetSuite\WebServices\Platform\Core\Status;
use Nzolt\NetSuite\WebServices\Platform\Core\WsRoleList;

/**
 * SessionResponse
 */
class SessionResponse {

    /**
     * @access public
     * @var Status
     */
    protected $status;

    /**
     * @access public
     * @var RecordRef
     */
    public $userId;

    /**
     * @access public
     * @var WsRoleList
     */
    protected $wsRoleList;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"userId" => "RecordRef",
    	"wsRoleList" => "WsRoleList",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return SessionResponse
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
     * Set wsRoleList
     *
     * @param WsRoleList $wsRoleList
     * @return SessionResponse
     */
    public function setWsRoleList(WsRoleList $wsRoleList) {
        $this->wsRoleList = $wsRoleList;
        return $this;
    }

    /**
     * Get wsRoleList
     *
     * @return WsRoleList
     */
    public function getWsRoleList() {
        return $this->wsRoleList;
    }

}