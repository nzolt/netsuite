<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\AttachReference;

/**
 * AttachRequest
 */
class AttachRequest {

    /**
     * @access public
     * @var AttachReference
     */
    protected $attachReference;

    static $paramtypesmap = array(
    	"attachReference" => "AttachReference",
    );

    /**
     * Set attachReference
     *
     * @param AttachReference $attachReference
     * @return AttachRequest
     */
    public function setAttachReference(AttachReference $attachReference) {
        $this->attachReference = $attachReference;
        return $this;
    }

    /**
     * Get attachReference
     *
     * @return AttachReference
     */
    public function getAttachReference() {
        return $this->attachReference;
    }

}