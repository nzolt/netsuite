<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Common\Address;

/**
 * VendorAddressbook
 */
class VendorAddressbook {

    /**
     * @access public
     * @var boolean
     */
    protected $defaultShipping;

    /**
     * @access public
     * @var boolean
     */
    protected $defaultBilling;

    /**
     * @access public
     * @var string
     */
    protected $label;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var Address
     */
    protected $addressbookAddress;

    static $paramtypesmap = array(
    	"defaultShipping" => "boolean",
    	"defaultBilling" => "boolean",
    	"label" => "string",
    	"internalId" => "string",
    	"addressbookAddress" => "Address",
    );

    /**
     * Set defaultShipping
     *
     * @param boolean $defaultShipping
     * @return VendorAddressbook
     */
    public function setDefaultShipping($defaultShipping) {
        $this->defaultShipping = $defaultShipping;
        return $this;
    }

    /**
     * Get defaultShipping
     *
     * @return boolean
     */
    public function getDefaultShipping() {
        return $this->defaultShipping;
    }


    /**
     * Set defaultBilling
     *
     * @param boolean $defaultBilling
     * @return VendorAddressbook
     */
    public function setDefaultBilling($defaultBilling) {
        $this->defaultBilling = $defaultBilling;
        return $this;
    }

    /**
     * Get defaultBilling
     *
     * @return boolean
     */
    public function getDefaultBilling() {
        return $this->defaultBilling;
    }


    /**
     * Set label
     *
     * @param string $label
     * @return VendorAddressbook
     */
    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel() {
        return $this->label;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return VendorAddressbook
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set addressbookAddress
     *
     * @param Address $addressbookAddress
     * @return VendorAddressbook
     */
    public function setAddressbookAddress(Address $addressbookAddress) {
        $this->addressbookAddress = $addressbookAddress;
        return $this;
    }

    /**
     * Get addressbookAddress
     *
     * @return Address
     */
    public function getAddressbookAddress() {
        return $this->addressbookAddress;
    }

}