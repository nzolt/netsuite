<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * UpdateInviteeStatusListRequest
 */
class UpdateInviteeStatusListRequest {

    /**
     * @access public
     * @var UpdateInviteeStatusReference[]
     */
    public $updateInviteeStatusReference;

    static $paramtypesmap = array(
    	"updateInviteeStatusReference" => "UpdateInviteeStatusReference[]",
    );
}