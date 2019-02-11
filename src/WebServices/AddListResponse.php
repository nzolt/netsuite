<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Messages\WriteResponseList;

/**
 * AddListResponse
 */
class AddListResponse {

    /**
     * @access public
     * @var WriteResponseList
     */
    protected $writeResponseList;

    static $paramtypesmap = array(
    	"writeResponseList" => "WriteResponseList",
    );

    /**
     * Set writeResponseList
     *
     * @param WriteResponseList $writeResponseList
     * @return AddListResponse
     */
    public function setWriteResponseList(WriteResponseList $writeResponseList) {
        $this->writeResponseList = $writeResponseList;
        return $this;
    }

    /**
     * Get writeResponseList
     *
     * @return WriteResponseList
     */
    public function getWriteResponseList() {
        return $this->writeResponseList;
    }

}