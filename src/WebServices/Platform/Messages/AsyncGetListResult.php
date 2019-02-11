<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Messages;

/**
 * AsyncGetListResult
 */
class AsyncGetListResult extends AsyncResult {

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
     * @return AsyncGetListResult
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