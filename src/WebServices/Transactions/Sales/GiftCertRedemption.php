<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

/**
 * GiftCertRedemption
 */
class GiftCertRedemption {

    /**
     * @access public
     * @var RecordRef
     */
    public $authCode;

    /**
     * @access public
     * @var float
     */
    protected $authCodeApplied;

    /**
     * @access public
     * @var float
     */
    protected $authCodeAmtRemaining;

    /**
     * @access public
     * @var float
     */
    protected $giftCertAvailable;

    static $paramtypesmap = array(
    	"authCode" => "RecordRef",
    	"authCodeApplied" => "float",
    	"authCodeAmtRemaining" => "float",
    	"giftCertAvailable" => "float",
    );

    /**
     * Set authCodeApplied
     *
     * @param float $authCodeApplied
     * @return GiftCertRedemption
     */
    public function setAuthCodeApplied($authCodeApplied) {
        $this->authCodeApplied = $authCodeApplied;
        return $this;
    }

    /**
     * Get authCodeApplied
     *
     * @return float
     */
    public function getAuthCodeApplied() {
        return $this->authCodeApplied;
    }


    /**
     * Set authCodeAmtRemaining
     *
     * @param float $authCodeAmtRemaining
     * @return GiftCertRedemption
     */
    public function setAuthCodeAmtRemaining($authCodeAmtRemaining) {
        $this->authCodeAmtRemaining = $authCodeAmtRemaining;
        return $this;
    }

    /**
     * Get authCodeAmtRemaining
     *
     * @return float
     */
    public function getAuthCodeAmtRemaining() {
        return $this->authCodeAmtRemaining;
    }


    /**
     * Set giftCertAvailable
     *
     * @param float $giftCertAvailable
     * @return GiftCertRedemption
     */
    public function setGiftCertAvailable($giftCertAvailable) {
        $this->giftCertAvailable = $giftCertAvailable;
        return $this;
    }

    /**
     * Get giftCertAvailable
     *
     * @return float
     */
    public function getGiftCertAvailable() {
        return $this->giftCertAvailable;
    }

}