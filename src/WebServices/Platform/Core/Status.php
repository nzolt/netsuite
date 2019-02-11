<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * Status
 */
class Status {

    /**
     * @access public
     * @var StatusDetail[]
     */
    public $statusDetail;

    /**
     * @access public
     * @var boolean
     */
    protected $isSuccess;

    static $paramtypesmap = array(
    	"statusDetail" => "StatusDetail[]",
    	"isSuccess" => "boolean",
    );

    /**
     * Set isSuccess
     *
     * @param boolean $isSuccess
     * @return Status
     */
    public function setIsSuccess($isSuccess) {
        $this->isSuccess = $isSuccess;
        return $this;
    }

    /**
     * Get isSuccess
     *
     * @return boolean
     */
    public function getIsSuccess() {
        return $this->isSuccess;
    }

}