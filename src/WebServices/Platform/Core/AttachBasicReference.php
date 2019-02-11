<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * AttachBasicReference
 */
class AttachBasicReference extends AttachReference {

    /**
     * @access public
     * @var BaseRef
     */
    protected $attachedRecord;

    static $paramtypesmap = array(
    	"attachedRecord" => "BaseRef",
    );

    /**
     * Set attachedRecord
     *
     * @param BaseRef $attachedRecord
     * @return AttachBasicReference
     */
    public function setAttachedRecord(BaseRef $attachedRecord) {
        $this->attachedRecord = $attachedRecord;
        return $this;
    }

    /**
     * Get attachedRecord
     *
     * @return BaseRef
     */
    public function getAttachedRecord() {
        return $this->attachedRecord;
    }

}