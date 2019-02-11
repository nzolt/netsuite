<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\AsyncStatusResult;

/**
 * AsyncStatusResponse
 */
class AsyncStatusResponse {

    /**
     * @access public
     * @var AsyncStatusResult
     */
    protected $asyncStatusResult;

    static $paramtypesmap = array(
    	"asyncStatusResult" => "AsyncStatusResult",
    );

    /**
     * Set asyncStatusResult
     *
     * @param AsyncStatusResult $asyncStatusResult
     * @return AsyncStatusResponse
     */
    public function setAsyncStatusResult(AsyncStatusResult $asyncStatusResult) {
        $this->asyncStatusResult = $asyncStatusResult;
        return $this;
    }

    /**
     * Get asyncStatusResult
     *
     * @return AsyncStatusResult
     */
    public function getAsyncStatusResult() {
        return $this->asyncStatusResult;
    }

}