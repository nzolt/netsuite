<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\ChangePassword;

/**
 * ChangePasswordRequest
 */
class ChangePasswordRequest {

    /**
     * @access public
     * @var ChangePassword
     */
    protected $changePassword;

    static $paramtypesmap = array(
    	"changePassword" => "ChangePassword",
    );

    /**
     * Set changePassword
     *
     * @param ChangePassword $changePassword
     * @return ChangePasswordRequest
     */
    public function setChangePassword(ChangePassword $changePassword) {
        $this->changePassword = $changePassword;
        return $this;
    }

    /**
     * Get changePassword
     *
     * @return ChangePassword
     */
    public function getChangePassword() {
        return $this->changePassword;
    }

}