<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * DetachReference
 */
class DetachReference {

    /**
     * @access public
     * @var BaseRef
     */
    protected $detachFrom;

    static $paramtypesmap = array(
    	"detachFrom" => "BaseRef",
    );

    /**
     * Set detachFrom
     *
     * @param BaseRef $detachFrom
     * @return DetachReference
     */
    public function setDetachFrom(BaseRef $detachFrom) {
        $this->detachFrom = $detachFrom;
        return $this;
    }

    /**
     * Get detachFrom
     *
     * @return BaseRef
     */
    public function getDetachFrom() {
        return $this->detachFrom;
    }

}