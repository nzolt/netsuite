<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\BaseRef;

/**
 * GetRequest
 */
class GetRequest {

    /**
     * @access public
     * @var BaseRef
     */
    protected $baseRef;

    static $paramtypesmap = array(
    	"baseRef" => "BaseRef",
    );

    /**
     * Set baseRef
     *
     * @param BaseRef $baseRef
     * @return GetRequest
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