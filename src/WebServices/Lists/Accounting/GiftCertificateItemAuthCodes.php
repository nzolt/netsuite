<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * GiftCertificateItemAuthCodes
 */
class GiftCertificateItemAuthCodes {

    /**
     * @access public
     * @var string
     */
    protected $authCode;

    /**
     * @access public
     * @var boolean
     */
    protected $used;

    static $paramtypesmap = array(
    	"authCode" => "string",
    	"used" => "boolean",
    );

    /**
     * Set authCode
     *
     * @param string $authCode
     * @return GiftCertificateItemAuthCodes
     */
    public function setAuthCode($authCode) {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * Get authCode
     *
     * @return string
     */
    public function getAuthCode() {
        return $this->authCode;
    }


    /**
     * Set used
     *
     * @param boolean $used
     * @return GiftCertificateItemAuthCodes
     */
    public function setUsed($used) {
        $this->used = $used;
        return $this;
    }

    /**
     * Get used
     *
     * @return boolean
     */
    public function getUsed() {
        return $this->used;
    }

}