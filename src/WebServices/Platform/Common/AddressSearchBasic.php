<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * AddressSearchBasic
 */
class AddressSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchStringField
     */
    protected $address;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $address1;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $address2;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $address3;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $addressee;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $attention;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $city;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $country;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $countryCode;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $override;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $phone;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $state;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $zip;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"address" => "SearchStringField",
    	"address1" => "SearchStringField",
    	"address2" => "SearchStringField",
    	"address3" => "SearchStringField",
    	"addressee" => "SearchStringField",
    	"attention" => "SearchStringField",
    	"city" => "SearchStringField",
    	"country" => "SearchEnumMultiSelectField",
    	"countryCode" => "SearchStringField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"override" => "SearchBooleanField",
    	"phone" => "SearchStringField",
    	"state" => "SearchStringField",
    	"zip" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set address
     *
     * @param SearchStringField $address
     * @return AddressSearchBasic
     */
    public function setAddress(SearchStringField $address) {
        $this->address = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return SearchStringField
     */
    public function getAddress() {
        return $this->address;
    }


    /**
     * Set address1
     *
     * @param SearchStringField $address1
     * @return AddressSearchBasic
     */
    public function setAddress1(SearchStringField $address1) {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * Get address1
     *
     * @return SearchStringField
     */
    public function getAddress1() {
        return $this->address1;
    }


    /**
     * Set address2
     *
     * @param SearchStringField $address2
     * @return AddressSearchBasic
     */
    public function setAddress2(SearchStringField $address2) {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * Get address2
     *
     * @return SearchStringField
     */
    public function getAddress2() {
        return $this->address2;
    }


    /**
     * Set address3
     *
     * @param SearchStringField $address3
     * @return AddressSearchBasic
     */
    public function setAddress3(SearchStringField $address3) {
        $this->address3 = $address3;
        return $this;
    }

    /**
     * Get address3
     *
     * @return SearchStringField
     */
    public function getAddress3() {
        return $this->address3;
    }


    /**
     * Set addressee
     *
     * @param SearchStringField $addressee
     * @return AddressSearchBasic
     */
    public function setAddressee(SearchStringField $addressee) {
        $this->addressee = $addressee;
        return $this;
    }

    /**
     * Get addressee
     *
     * @return SearchStringField
     */
    public function getAddressee() {
        return $this->addressee;
    }


    /**
     * Set attention
     *
     * @param SearchStringField $attention
     * @return AddressSearchBasic
     */
    public function setAttention(SearchStringField $attention) {
        $this->attention = $attention;
        return $this;
    }

    /**
     * Get attention
     *
     * @return SearchStringField
     */
    public function getAttention() {
        return $this->attention;
    }


    /**
     * Set city
     *
     * @param SearchStringField $city
     * @return AddressSearchBasic
     */
    public function setCity(SearchStringField $city) {
        $this->city = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return SearchStringField
     */
    public function getCity() {
        return $this->city;
    }


    /**
     * Set country
     *
     * @param SearchEnumMultiSelectField $country
     * @return AddressSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country) {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return SearchEnumMultiSelectField
     */
    public function getCountry() {
        return $this->country;
    }


    /**
     * Set countryCode
     *
     * @param SearchStringField $countryCode
     * @return AddressSearchBasic
     */
    public function setCountryCode(SearchStringField $countryCode) {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Get countryCode
     *
     * @return SearchStringField
     */
    public function getCountryCode() {
        return $this->countryCode;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return AddressSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return AddressSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return AddressSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return AddressSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set override
     *
     * @param SearchBooleanField $override
     * @return AddressSearchBasic
     */
    public function setOverride(SearchBooleanField $override) {
        $this->override = $override;
        return $this;
    }

    /**
     * Get override
     *
     * @return SearchBooleanField
     */
    public function getOverride() {
        return $this->override;
    }


    /**
     * Set phone
     *
     * @param SearchStringField $phone
     * @return AddressSearchBasic
     */
    public function setPhone(SearchStringField $phone) {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return SearchStringField
     */
    public function getPhone() {
        return $this->phone;
    }


    /**
     * Set state
     *
     * @param SearchStringField $state
     * @return AddressSearchBasic
     */
    public function setState(SearchStringField $state) {
        $this->state = $state;
        return $this;
    }

    /**
     * Get state
     *
     * @return SearchStringField
     */
    public function getState() {
        return $this->state;
    }


    /**
     * Set zip
     *
     * @param SearchStringField $zip
     * @return AddressSearchBasic
     */
    public function setZip(SearchStringField $zip) {
        $this->zip = $zip;
        return $this;
    }

    /**
     * Get zip
     *
     * @return SearchStringField
     */
    public function getZip() {
        return $this->zip;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return AddressSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}