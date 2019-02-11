<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\UpdateInviteeStatusReference;

/**
 * UpdateInviteeStatusRequest
 */
class UpdateInviteeStatusRequest {

    /**
     * @access public
     * @var UpdateInviteeStatusReference
     */
    protected $updateInviteeStatusReference;

    static $paramtypesmap = array(
    	"updateInviteeStatusReference" => "UpdateInviteeStatusReference",
    );

    /**
     * Set updateInviteeStatusReference
     *
     * @param UpdateInviteeStatusReference $updateInviteeStatusReference
     * @return UpdateInviteeStatusRequest
     */
    public function setUpdateInviteeStatusReference(UpdateInviteeStatusReference $updateInviteeStatusReference) {
        $this->updateInviteeStatusReference = $updateInviteeStatusReference;
        return $this;
    }

    /**
     * Get updateInviteeStatusReference
     *
     * @return UpdateInviteeStatusReference
     */
    public function getUpdateInviteeStatusReference() {
        return $this->updateInviteeStatusReference;
    }

}