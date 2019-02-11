<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\SsoCredentials;

/**
 * MapSsoRequest
 */
class MapSsoRequest {

    /**
     * @access public
     * @var SsoCredentials
     */
    protected $ssoCredentials;

    static $paramtypesmap = array(
    	"ssoCredentials" => "SsoCredentials",
    );

    /**
     * Set ssoCredentials
     *
     * @param SsoCredentials $ssoCredentials
     * @return MapSsoRequest
     */
    public function setSsoCredentials(SsoCredentials $ssoCredentials) {
        $this->ssoCredentials = $ssoCredentials;
        return $this;
    }

    /**
     * Get ssoCredentials
     *
     * @return SsoCredentials
     */
    public function getSsoCredentials() {
        return $this->ssoCredentials;
    }

}