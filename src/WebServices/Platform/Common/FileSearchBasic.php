<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;

/**
 * FileSearchBasic
 */
class FileSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $availableWithoutLogin;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $created;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dateViewed;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $description;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $documentSize;

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
     * @var SearchEnumMultiSelectField
     */
    protected $fileType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $folder;

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
    protected $isAvailable;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isLink;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $modified;

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
     * @var SearchStringField
     */
    protected $url;

    static $paramtypesmap = array(
    	"availableWithoutLogin" => "SearchBooleanField",
    	"created" => "SearchDateField",
    	"dateViewed" => "SearchDateField",
    	"description" => "SearchStringField",
    	"documentSize" => "SearchLongField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"fileType" => "SearchEnumMultiSelectField",
    	"folder" => "SearchMultiSelectField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isAvailable" => "SearchBooleanField",
    	"isLink" => "SearchBooleanField",
    	"modified" => "SearchDateField",
    	"name" => "SearchStringField",
    	"owner" => "SearchMultiSelectField",
    	"url" => "SearchStringField",
    );

    /**
     * Set availableWithoutLogin
     *
     * @param SearchBooleanField $availableWithoutLogin
     * @return FileSearchBasic
     */
    public function setAvailableWithoutLogin(SearchBooleanField $availableWithoutLogin) {
        $this->availableWithoutLogin = $availableWithoutLogin;
        return $this;
    }

    /**
     * Get availableWithoutLogin
     *
     * @return SearchBooleanField
     */
    public function getAvailableWithoutLogin() {
        return $this->availableWithoutLogin;
    }


    /**
     * Set created
     *
     * @param SearchDateField $created
     * @return FileSearchBasic
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
     * Set dateViewed
     *
     * @param SearchDateField $dateViewed
     * @return FileSearchBasic
     */
    public function setDateViewed(SearchDateField $dateViewed) {
        $this->dateViewed = $dateViewed;
        return $this;
    }

    /**
     * Get dateViewed
     *
     * @return SearchDateField
     */
    public function getDateViewed() {
        return $this->dateViewed;
    }


    /**
     * Set description
     *
     * @param SearchStringField $description
     * @return FileSearchBasic
     */
    public function setDescription(SearchStringField $description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return SearchStringField
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set documentSize
     *
     * @param SearchLongField $documentSize
     * @return FileSearchBasic
     */
    public function setDocumentSize(SearchLongField $documentSize) {
        $this->documentSize = $documentSize;
        return $this;
    }

    /**
     * Get documentSize
     *
     * @return SearchLongField
     */
    public function getDocumentSize() {
        return $this->documentSize;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return FileSearchBasic
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
     * @return FileSearchBasic
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
     * Set fileType
     *
     * @param SearchEnumMultiSelectField $fileType
     * @return FileSearchBasic
     */
    public function setFileType(SearchEnumMultiSelectField $fileType) {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * Get fileType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getFileType() {
        return $this->fileType;
    }


    /**
     * Set folder
     *
     * @param SearchMultiSelectField $folder
     * @return FileSearchBasic
     */
    public function setFolder(SearchMultiSelectField $folder) {
        $this->folder = $folder;
        return $this;
    }

    /**
     * Get folder
     *
     * @return SearchMultiSelectField
     */
    public function getFolder() {
        return $this->folder;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return FileSearchBasic
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
     * @return FileSearchBasic
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
     * Set isAvailable
     *
     * @param SearchBooleanField $isAvailable
     * @return FileSearchBasic
     */
    public function setIsAvailable(SearchBooleanField $isAvailable) {
        $this->isAvailable = $isAvailable;
        return $this;
    }

    /**
     * Get isAvailable
     *
     * @return SearchBooleanField
     */
    public function getIsAvailable() {
        return $this->isAvailable;
    }


    /**
     * Set isLink
     *
     * @param SearchBooleanField $isLink
     * @return FileSearchBasic
     */
    public function setIsLink(SearchBooleanField $isLink) {
        $this->isLink = $isLink;
        return $this;
    }

    /**
     * Get isLink
     *
     * @return SearchBooleanField
     */
    public function getIsLink() {
        return $this->isLink;
    }


    /**
     * Set modified
     *
     * @param SearchDateField $modified
     * @return FileSearchBasic
     */
    public function setModified(SearchDateField $modified) {
        $this->modified = $modified;
        return $this;
    }

    /**
     * Get modified
     *
     * @return SearchDateField
     */
    public function getModified() {
        return $this->modified;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return FileSearchBasic
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
     * @return FileSearchBasic
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
     * Set url
     *
     * @param SearchStringField $url
     * @return FileSearchBasic
     */
    public function setUrl(SearchStringField $url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return SearchStringField
     */
    public function getUrl() {
        return $this->url;
    }

}