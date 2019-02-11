<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * CustomRecordSearchBasic
 */
class CustomRecordSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var RecordRef
     */
    public $recType;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $availableOffline;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $created;

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
     * @var SearchLongField
     */
    protected $id;

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
     * @var SearchDateField
     */
    protected $lastModified;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $lastModifiedBy;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $owner;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"recType" => "RecordRef",
    	"availableOffline" => "SearchBooleanField",
    	"created" => "SearchDateField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"id" => "SearchLongField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInactive" => "SearchBooleanField",
    	"lastModified" => "SearchDateField",
    	"lastModifiedBy" => "SearchMultiSelectField",
    	"name" => "SearchStringField",
    	"owner" => "SearchMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set availableOffline
     *
     * @param SearchBooleanField $availableOffline
     * @return CustomRecordSearchBasic
     */
    public function setAvailableOffline(SearchBooleanField $availableOffline) {
        $this->availableOffline = $availableOffline;
        return $this;
    }

    /**
     * Get availableOffline
     *
     * @return SearchBooleanField
     */
    public function getAvailableOffline() {
        return $this->availableOffline;
    }


    /**
     * Set created
     *
     * @param SearchDateField $created
     * @return CustomRecordSearchBasic
     */
    public function setCreated(SearchDateField $created) {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return SearchDateField
     */
    public function getCreated() {
        return $this->created;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return CustomRecordSearchBasic
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
     * @return CustomRecordSearchBasic
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
     * Set id
     *
     * @param SearchLongField $id
     * @return CustomRecordSearchBasic
     */
    public function setId(SearchLongField $id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return SearchLongField
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return CustomRecordSearchBasic
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
     * @return CustomRecordSearchBasic
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
     * @return CustomRecordSearchBasic
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
     * Set lastModified
     *
     * @param SearchDateField $lastModified
     * @return CustomRecordSearchBasic
     */
    public function setLastModified(SearchDateField $lastModified) {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * Get lastModified
     *
     * @return SearchDateField
     */
    public function getLastModified() {
        return $this->lastModified;
    }


    /**
     * Set lastModifiedBy
     *
     * @param SearchMultiSelectField $lastModifiedBy
     * @return CustomRecordSearchBasic
     */
    public function setLastModifiedBy(SearchMultiSelectField $lastModifiedBy) {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    /**
     * Get lastModifiedBy
     *
     * @return SearchMultiSelectField
     */
    public function getLastModifiedBy() {
        return $this->lastModifiedBy;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return CustomRecordSearchBasic
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
     * Set owner
     *
     * @param SearchMultiSelectField $owner
     * @return CustomRecordSearchBasic
     */
    public function setOwner(SearchMultiSelectField $owner) {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Get owner
     *
     * @return SearchMultiSelectField
     */
    public function getOwner() {
        return $this->owner;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return CustomRecordSearchBasic
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