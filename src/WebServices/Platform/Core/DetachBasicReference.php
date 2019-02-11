<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * DetachBasicReference
 */
class DetachBasicReference extends DetachReference {

    /**
     * @access public
     * @var BaseRef
     */
    protected $detachedRecord;

    static $paramtypesmap = array(
    	"detachedRecord" => "BaseRef",
    );

    /**
     * Set detachedRecord
     *
     * @param BaseRef $detachedRecord
     * @return DetachBasicReference
     */
    public function setDetachedRecord(BaseRef $detachedRecord) {
        $this->detachedRecord = $detachedRecord;
        return $this;
    }

    /**
     * Get detachedRecord
     *
     * @return BaseRef
     */
    public function getDetachedRecord() {
        return $this->detachedRecord;
    }

}