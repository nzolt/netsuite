<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * AttachReference
 */
class AttachReference {

    /**
     * @access public
     * @var BaseRef
     */
    protected $attachTo;

    static $paramtypesmap = array(
    	"attachTo" => "BaseRef",
    );

    /**
     * Set attachTo
     *
     * @param BaseRef $attachTo
     * @return AttachReference
     */
    public function setAttachTo(BaseRef $attachTo) {
        $this->attachTo = $attachTo;
        return $this;
    }

    /**
     * Get attachTo
     *
     * @return BaseRef
     */
    public function getAttachTo() {
        return $this->attachTo;
    }

}