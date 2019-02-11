<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SsoPassport
 */
class SsoPassport {

    /**
     * @access public
     * @var string
     */
    protected $authenticationToken;

    /**
     * @access public
     * @var string
     */
    protected $partnerId;

    /**
     * @access public
     * @var string
     */
    protected $partnerAccount;

    static $paramtypesmap = array(
    	"authenticationToken" => "string",
    	"partnerId" => "string",
    	"partnerAccount" => "string",
    );

    /**
     * Set authenticationToken
     *
     * @param string $authenticationToken
     * @return SsoPassport
     */
    public function setAuthenticationToken($authenticationToken) {
        $this->authenticationToken = $authenticationToken;
        return $this;
    }

    /**
     * Get authenticationToken
     *
     * @return string
     */
    public function getAuthenticationToken() {
        return $this->authenticationToken;
    }


    /**
     * Set partnerId
     *
     * @param string $partnerId
     * @return SsoPassport
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


    /**
     * Set partnerAccount
     *
     * @param string $partnerAccount
     * @return SsoPassport
     */
    public function setPartnerAccount($partnerAccount) {
        $this->partnerAccount = $partnerAccount;
        return $this;
    }

    /**
     * Get partnerAccount
     *
     * @return string
     */
    public function getPartnerAccount() {
        return $this->partnerAccount;
    }

}