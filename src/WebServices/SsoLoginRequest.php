<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\SsoPassport;

/**
 * SsoLoginRequest
 */
class SsoLoginRequest {

    /**
     * @access public
     * @var SsoPassport
     */
    protected $ssoPassport;

    static $paramtypesmap = array(
    	"ssoPassport" => "SsoPassport",
    );

    /**
     * Set ssoPassport
     *
     * @param SsoPassport $ssoPassport
     * @return SsoLoginRequest
     */
    public function setSsoPassport(SsoPassport $ssoPassport) {
        $this->ssoPassport = $ssoPassport;
        return $this;
    }

    /**
     * Get ssoPassport
     *
     * @return SsoPassport
     */
    public function getSsoPassport() {
        return $this->ssoPassport;
    }

}