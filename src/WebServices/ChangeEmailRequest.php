<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\ChangeEmail;

/**
 * ChangeEmailRequest
 */
class ChangeEmailRequest {

    /**
     * @access public
     * @var ChangeEmail
     */
    protected $changeEmail;

    static $paramtypesmap = array(
    	"changeEmail" => "ChangeEmail",
    );

    /**
     * Set changeEmail
     *
     * @param ChangeEmail $changeEmail
     * @return ChangeEmailRequest
     */
    public function setChangeEmail(ChangeEmail $changeEmail) {
        $this->changeEmail = $changeEmail;
        return $this;
    }

    /**
     * Get changeEmail
     *
     * @return ChangeEmail
     */
    public function getChangeEmail() {
        return $this->changeEmail;
    }

}