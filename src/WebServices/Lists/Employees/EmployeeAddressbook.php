<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

use Nzolt\NetSuite\WebServices\Platform\Common\Address;

/**
 * EmployeeAddressbook
 */
class EmployeeAddressbook {

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
     * @var Address
     */
    protected $addressbookAddress;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    static $paramtypesmap = array(
    	"defaultShipping" => "boolean",
    	"defaultBilling" => "boolean",
    	"label" => "string",
    	"addressbookAddress" => "Address",
    	"internalId" => "string",
    );

    /**
     * Set defaultShipping
     *
     * @param boolean $defaultShipping
     * @return EmployeeAddressbook
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
     * @return EmployeeAddressbook
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
     * @return EmployeeAddressbook
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
     * Set addressbookAddress
     *
     * @param Address $addressbookAddress
     * @return EmployeeAddressbook
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


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return EmployeeAddressbook
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

}