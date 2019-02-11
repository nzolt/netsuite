<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\DetachReference;

/**
 * DetachRequest
 */
class DetachRequest {

    /**
     * @access public
     * @var DetachReference
     */
    protected $detachReference;

    static $paramtypesmap = array(
    	"detachReference" => "DetachReference",
    );

    /**
     * Set detachReference
     *
     * @param DetachReference $detachReference
     * @return DetachRequest
     */
    public function setDetachReference(DetachReference $detachReference) {
        $this->detachReference = $detachReference;
        return $this;
    }

    /**
     * Get detachReference
     *
     * @return DetachReference
     */
    public function getDetachReference() {
        return $this->detachReference;
    }

}