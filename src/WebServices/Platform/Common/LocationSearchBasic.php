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
 * LocationSearchBasic
 */
class LocationSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchStringField
     */
    protected $address;

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
    protected $county;

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
    protected $isInactive;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isOffice;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $makeInventoryAvailable;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $makeInventoryAvailableStore;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $nameNoHierarchy;

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
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $tranprefix;

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
    	"city" => "SearchStringField",
    	"country" => "SearchEnumMultiSelectField",
    	"county" => "SearchStringField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInactive" => "SearchBooleanField",
    	"isOffice" => "SearchBooleanField",
    	"makeInventoryAvailable" => "SearchBooleanField",
    	"makeInventoryAvailableStore" => "SearchBooleanField",
    	"name" => "SearchStringField",
    	"nameNoHierarchy" => "SearchStringField",
    	"phone" => "SearchStringField",
    	"state" => "SearchStringField",
    	"subsidiary" => "SearchMultiSelectField",
    	"tranprefix" => "SearchStringField",
    	"zip" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set address
     *
     * @param SearchStringField $address
     * @return LocationSearchBasic
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
     * Set city
     *
     * @param SearchStringField $city
     * @return LocationSearchBasic
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
     * @return LocationSearchBasic
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
     * Set county
     *
     * @param SearchStringField $county
     * @return LocationSearchBasic
     */
    public function setCounty(SearchStringField $county) {
        $this->county = $county;
        return $this;
    }

    /**
     * Get county
     *
     * @return SearchStringField
     */
    public function getCounty() {
        return $this->county;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return LocationSearchBasic
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
     * @return LocationSearchBasic
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
     * @return LocationSearchBasic
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
     * @return LocationSearchBasic
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
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return LocationSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return SearchBooleanField
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set isOffice
     *
     * @param SearchBooleanField $isOffice
     * @return LocationSearchBasic
     */
    public function setIsOffice(SearchBooleanField $isOffice) {
        $this->isOffice = $isOffice;
        return $this;
    }

    /**
     * Get isOffice
     *
     * @return SearchBooleanField
     */
    public function getIsOffice() {
        return $this->isOffice;
    }


    /**
     * Set makeInventoryAvailable
     *
     * @param SearchBooleanField $makeInventoryAvailable
     * @return LocationSearchBasic
     */
    public function setMakeInventoryAvailable(SearchBooleanField $makeInventoryAvailable) {
        $this->makeInventoryAvailable = $makeInventoryAvailable;
        return $this;
    }

    /**
     * Get makeInventoryAvailable
     *
     * @return SearchBooleanField
     */
    public function getMakeInventoryAvailable() {
        return $this->makeInventoryAvailable;
    }


    /**
     * Set makeInventoryAvailableStore
     *
     * @param SearchBooleanField $makeInventoryAvailableStore
     * @return LocationSearchBasic
     */
    public function setMakeInventoryAvailableStore(SearchBooleanField $makeInventoryAvailableStore) {
        $this->makeInventoryAvailableStore = $makeInventoryAvailableStore;
        return $this;
    }

    /**
     * Get makeInventoryAvailableStore
     *
     * @return SearchBooleanField
     */
    public function getMakeInventoryAvailableStore() {
        return $this->makeInventoryAvailableStore;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return LocationSearchBasic
     */
    public function setName(SearchStringField $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return SearchStringField
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set nameNoHierarchy
     *
     * @param SearchStringField $nameNoHierarchy
     * @return LocationSearchBasic
     */
    public function setNameNoHierarchy(SearchStringField $nameNoHierarchy) {
        $this->nameNoHierarchy = $nameNoHierarchy;
        return $this;
    }

    /**
     * Get nameNoHierarchy
     *
     * @return SearchStringField
     */
    public function getNameNoHierarchy() {
        return $this->nameNoHierarchy;
    }


    /**
     * Set phone
     *
     * @param SearchStringField $phone
     * @return LocationSearchBasic
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
     * @return LocationSearchBasic
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
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return LocationSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary) {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return SearchMultiSelectField
     */
    public function getSubsidiary() {
        return $this->subsidiary;
    }


    /**
     * Set tranprefix
     *
     * @param SearchStringField $tranprefix
     * @return LocationSearchBasic
     */
    public function setTranprefix(SearchStringField $tranprefix) {
        $this->tranprefix = $tranprefix;
        return $this;
    }

    /**
     * Get tranprefix
     *
     * @return SearchStringField
     */
    public function getTranprefix() {
        return $this->tranprefix;
    }


    /**
     * Set zip
     *
     * @param SearchStringField $zip
     * @return LocationSearchBasic
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
     * @return LocationSearchBasic
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