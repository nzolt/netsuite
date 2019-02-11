<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Messages\AsyncResult;

/**
 * GetAsyncResultResponse
 */
class GetAsyncResultResponse {

    /**
     * @access public
     * @var AsyncResult
     */
    protected $asyncResult;

    static $paramtypesmap = array(
    	"asyncResult" => "AsyncResult",
    );

    /**
     * Set asyncResult
     *
     * @param AsyncResult $asyncResult
     * @return GetAsyncResultResponse
     */
    public function setAsyncResult(AsyncResult $asyncResult) {
        $this->asyncResult = $asyncResult;
        return $this;
    }

    /**
     * Get asyncResult
     *
     * @return AsyncResult
     */
    public function getAsyncResult() {
        return $this->asyncResult;
    }

}