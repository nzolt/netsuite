<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetSelectValueResult;

/**
 * getSelectValueResponse
 */
class getSelectValueResponse {

    /**
     * @access public
     * @var GetSelectValueResult
     */
    protected $getSelectValueResult;

    static $paramtypesmap = array(
    	"getSelectValueResult" => "GetSelectValueResult",
    );

    /**
     * Set getSelectValueResult
     *
     * @param GetSelectValueResult $getSelectValueResult
     * @return getSelectValueResponse
     */
    public function setGetSelectValueResult(GetSelectValueResult $getSelectValueResult) {
        $this->getSelectValueResult = $getSelectValueResult;
        return $this;
    }

    /**
     * Get getSelectValueResult
     *
     * @return GetSelectValueResult
     */
    public function getGetSelectValueResult() {
        return $this->getSelectValueResult;
    }

}