<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\Country;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Address
 */
class Address extends Record {

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var Country
     */
    protected $country;

    /**
     * @access public
     * @var string
     */
    protected $attention;

    /**
     * @access public
     * @var string
     */
    protected $addressee;

    /**
     * @access public
     * @var string
     */
    protected $addrPhone;

    /**
     * @access public
     * @var string
     */
    protected $addr1;

    /**
     * @access public
     * @var string
     */
    protected $addr2;

    /**
     * @access public
     * @var string
     */
    protected $addr3;

    /**
     * @access public
     * @var string
     */
    protected $city;

    /**
     * @access public
     * @var string
     */
    protected $state;

    /**
     * @access public
     * @var string
     */
    protected $zip;

    /**
     * @access public
     * @var string
     */
    protected $addrText;

    /**
     * @access public
     * @var boolean
     */
    protected $override;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"internalId" => "string",
    	"country" => "Country",
    	"attention" => "string",
    	"addressee" => "string",
    	"addrPhone" => "string",
    	"addr1" => "string",
    	"addr2" => "string",
    	"addr3" => "string",
    	"city" => "string",
    	"state" => "string",
    	"zip" => "string",
    	"addrText" => "string",
    	"override" => "boolean",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set internalId
     *
     * @param string $internalId
     * @return Address
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
     * Set country
     *
     * @param Country $country
     * @return Address
     */
    public function setCountry(Country $country) {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return Country
     */
    public function getCountry() {
        return $this->country;
    }


    /**
     * Set attention
     *
     * @param string $attention
     * @return Address
     */
    public function setAttention($attention) {
        $this->attention = $attention;
        return $this;
    }

    /**
     * Get attention
     *
     * @return string
     */
    public function getAttention() {
        return $this->attention;
    }


    /**
     * Set addressee
     *
     * @param string $addressee
     * @return Address
     */
    public function setAddressee($addressee) {
        $this->addressee = $addressee;
        return $this;
    }

    /**
     * Get addressee
     *
     * @return string
     */
    public function getAddressee() {
        return $this->addressee;
    }


    /**
     * Set addrPhone
     *
     * @param string $addrPhone
     * @return Address
     */
    public function setAddrPhone($addrPhone) {
        $this->addrPhone = $addrPhone;
        return $this;
    }

    /**
     * Get addrPhone
     *
     * @return string
     */
    public function getAddrPhone() {
        return $this->addrPhone;
    }


    /**
     * Set addr1
     *
     * @param string $addr1
     * @return Address
     */
    public function setAddr1($addr1) {
        $this->addr1 = $addr1;
        return $this;
    }

    /**
     * Get addr1
     *
     * @return string
     */
    public function getAddr1() {
        return $this->addr1;
    }


    /**
     * Set addr2
     *
     * @param string $addr2
     * @return Address
     */
    public function setAddr2($addr2) {
        $this->addr2 = $addr2;
        return $this;
    }

    /**
     * Get addr2
     *
     * @return string
     */
    public function getAddr2() {
        return $this->addr2;
    }


    /**
     * Set addr3
     *
     * @param string $addr3
     * @return Address
     */
    public function setAddr3($addr3) {
        $this->addr3 = $addr3;
        return $this;
    }

    /**
     * Get addr3
     *
     * @return string
     */
    public function getAddr3() {
        return $this->addr3;
    }


    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity() {
        return $this->city;
    }


    /**
     * Set state
     *
     * @param string $state
     * @return Address
     */
    public function setState($state) {
        $this->state = $state;
        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState() {
        return $this->state;
    }


    /**
     * Set zip
     *
     * @param string $zip
     * @return Address
     */
    public function setZip($zip) {
        $this->zip = $zip;
        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip() {
        return $this->zip;
    }


    /**
     * Set addrText
     *
     * @param string $addrText
     * @return Address
     */
    public function setAddrText($addrText) {
        $this->addrText = $addrText;
        return $this;
    }

    /**
     * Get addrText
     *
     * @return string
     */
    public function getAddrText() {
        return $this->addrText;
    }


    /**
     * Set override
     *
     * @param boolean $override
     * @return Address
     */
    public function setOverride($override) {
        $this->override = $override;
        return $this;
    }

    /**
     * Get override
     *
     * @return boolean
     */
    public function getOverride() {
        return $this->override;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Address
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}