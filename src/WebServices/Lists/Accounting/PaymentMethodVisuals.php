<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * PaymentMethodVisuals
 */
class PaymentMethodVisuals {

    /**
     * @access public
     * @var string
     */
    protected $flags;

    /**
     * @access public
     * @var string
     */
    protected $location;

    static $paramtypesmap = array(
    	"flags" => "string",
    	"location" => "string",
    );

    /**
     * Set flags
     *
     * @param string $flags
     * @return PaymentMethodVisuals
     */
    public function setFlags($flags) {
        $this->flags = $flags;
        return $this;
    }

    /**
     * Get flags
     *
     * @return string
     */
    public function getFlags() {
        return $this->flags;
    }


    /**
     * Set location
     *
     * @param string $location
     * @return PaymentMethodVisuals
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation() {
        return $this->location;
    }

}