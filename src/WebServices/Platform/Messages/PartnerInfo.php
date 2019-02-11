<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Messages;

/**
 * PartnerInfo
 */
class PartnerInfo {

    /**
     * @access public
     * @var string
     */
    protected $partnerId;

    static $paramtypesmap = array(
    	"partnerId" => "string",
    );

    /**
     * Set partnerId
     *
     * @param string $partnerId
     * @return PartnerInfo
     */
    public function setPartnerId($partnerId) {
        $this->partnerId = $partnerId;
        return $this;
    }

    /**
     * Get partnerId
     *
     * @return string
     */
    public function getPartnerId() {
        return $this->partnerId;
    }

}