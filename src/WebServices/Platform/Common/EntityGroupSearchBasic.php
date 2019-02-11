<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * EntityGroupSearchBasic
 */
class EntityGroupSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchStringField
     */
    protected $email;

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
     * @var SearchStringField
     */
    protected $groupName;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $groupOwner;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $groupType;

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
    protected $isDynamic;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isInactive;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isManufacturingWorkCenter;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isPrivate;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $laborResources;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $machineResources;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $workCalendar;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"email" => "SearchStringField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"groupName" => "SearchStringField",
    	"groupOwner" => "SearchMultiSelectField",
    	"groupType" => "SearchMultiSelectField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isDynamic" => "SearchBooleanField",
    	"isInactive" => "SearchBooleanField",
    	"isManufacturingWorkCenter" => "SearchBooleanField",
    	"isPrivate" => "SearchBooleanField",
    	"laborResources" => "SearchLongField",
    	"lastModifiedDate" => "SearchDateField",
    	"machineResources" => "SearchLongField",
    	"subsidiary" => "SearchMultiSelectField",
    	"workCalendar" => "SearchMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set email
     *
     * @param SearchStringField $email
     * @return EntityGroupSearchBasic
     */
    public function setEmail(SearchStringField $email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return SearchStringField
     */
    public function getEmail() {
        return $this->email;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return EntityGroupSearchBasic
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
     * @return EntityGroupSearchBasic
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
     * Set groupName
     *
     * @param SearchStringField $groupName
     * @return EntityGroupSearchBasic
     */
    public function setGroupName(SearchStringField $groupName) {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * Get groupName
     *
     * @return SearchStringField
     */
    public function getGroupName() {
        return $this->groupName;
    }


    /**
     * Set groupOwner
     *
     * @param SearchMultiSelectField $groupOwner
     * @return EntityGroupSearchBasic
     */
    public function setGroupOwner(SearchMultiSelectField $groupOwner) {
        $this->groupOwner = $groupOwner;
        return $this;
    }

    /**
     * Get groupOwner
     *
     * @return SearchMultiSelectField
     */
    public function getGroupOwner() {
        return $this->groupOwner;
    }


    /**
     * Set groupType
     *
     * @param SearchMultiSelectField $groupType
     * @return EntityGroupSearchBasic
     */
    public function setGroupType(SearchMultiSelectField $groupType) {
        $this->groupType = $groupType;
        return $this;
    }

    /**
     * Get groupType
     *
     * @return SearchMultiSelectField
     */
    public function getGroupType() {
        return $this->groupType;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return EntityGroupSearchBasic
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
     * @return EntityGroupSearchBasic
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
     * Set isDynamic
     *
     * @param SearchBooleanField $isDynamic
     * @return EntityGroupSearchBasic
     */
    public function setIsDynamic(SearchBooleanField $isDynamic) {
        $this->isDynamic = $isDynamic;
        return $this;
    }

    /**
     * Get isDynamic
     *
     * @return SearchBooleanField
     */
    public function getIsDynamic() {
        return $this->isDynamic;
    }


    /**
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return EntityGroupSearchBasic
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
     * Set isManufacturingWorkCenter
     *
     * @param SearchBooleanField $isManufacturingWorkCenter
     * @return EntityGroupSearchBasic
     */
    public function setIsManufacturingWorkCenter(SearchBooleanField $isManufacturingWorkCenter) {
        $this->isManufacturingWorkCenter = $isManufacturingWorkCenter;
        return $this;
    }

    /**
     * Get isManufacturingWorkCenter
     *
     * @return SearchBooleanField
     */
    public function getIsManufacturingWorkCenter() {
        return $this->isManufacturingWorkCenter;
    }


    /**
     * Set isPrivate
     *
     * @param SearchBooleanField $isPrivate
     * @return EntityGroupSearchBasic
     */
    public function setIsPrivate(SearchBooleanField $isPrivate) {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * Get isPrivate
     *
     * @return SearchBooleanField
     */
    public function getIsPrivate() {
        return $this->isPrivate;
    }


    /**
     * Set laborResources
     *
     * @param SearchLongField $laborResources
     * @return EntityGroupSearchBasic
     */
    public function setLaborResources(SearchLongField $laborResources) {
        $this->laborResources = $laborResources;
        return $this;
    }

    /**
     * Get laborResources
     *
     * @return SearchLongField
     */
    public function getLaborResources() {
        return $this->laborResources;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return EntityGroupSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return SearchDateField
     */
    public function getLastModifiedDate() {
        return $this->lastModifiedDate;
    }


    /**
     * Set machineResources
     *
     * @param SearchLongField $machineResources
     * @return EntityGroupSearchBasic
     */
    public function setMachineResources(SearchLongField $machineResources) {
        $this->machineResources = $machineResources;
        return $this;
    }

    /**
     * Get machineResources
     *
     * @return SearchLongField
     */
    public function getMachineResources() {
        return $this->machineResources;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return EntityGroupSearchBasic
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
     * Set workCalendar
     *
     * @param SearchMultiSelectField $workCalendar
     * @return EntityGroupSearchBasic
     */
    public function setWorkCalendar(SearchMultiSelectField $workCalendar) {
        $this->workCalendar = $workCalendar;
        return $this;
    }

    /**
     * Get workCalendar
     *
     * @return SearchMultiSelectField
     */
    public function getWorkCalendar() {
        return $this->workCalendar;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return EntityGroupSearchBasic
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