<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Messages;

use Nzolt\NetSuite\WebServices\Platform\Core\Status;
use Nzolt\NetSuite\WebServices\Platform\Core\BaseRef;

/**
 * WriteResponse
 */
class WriteResponse {

    /**
     * @access public
     * @var Status
     */
    protected $status;

    /**
     * @access public
     * @var BaseRef
     */
    protected $baseRef;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"baseRef" => "BaseRef",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return WriteResponse
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
     * Set baseRef
     *
     * @param BaseRef $baseRef
     * @return WriteResponse
     */
    public function setBaseRef(BaseRef $baseRef) {
        $this->baseRef = $baseRef;
        return $this;
    }

    /**
     * Get baseRef
     *
     * @return BaseRef
     */
    public function getBaseRef() {
        return $this->baseRef;
    }

}