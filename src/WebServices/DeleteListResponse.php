<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Messages\WriteResponseList;

/**
 * DeleteListResponse
 */
class DeleteListResponse {

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
     * @return DeleteListResponse
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