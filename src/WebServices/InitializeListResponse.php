<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Messages\ReadResponseList;

/**
 * InitializeListResponse
 */
class InitializeListResponse {

    /**
     * @access public
     * @var ReadResponseList
     */
    protected $readResponseList;

    static $paramtypesmap = array(
    	"readResponseList" => "ReadResponseList",
    );

    /**
     * Set readResponseList
     *
     * @param ReadResponseList $readResponseList
     * @return InitializeListResponse
     */
    public function setReadResponseList(ReadResponseList $readResponseList) {
        $this->readResponseList = $readResponseList;
        return $this;
    }

    /**
     * Get readResponseList
     *
     * @return ReadResponseList
     */
    public function getReadResponseList() {
        return $this->readResponseList;
    }

}