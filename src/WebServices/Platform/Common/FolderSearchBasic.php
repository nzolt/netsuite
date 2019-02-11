<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;

/**
 * FolderSearchBasic
 */
class FolderSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $class;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $department;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $description;

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
    protected $group;

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
    protected $isTopLevel;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $location;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $numFiles;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $owner;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $parent;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $predecessor;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $private;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $size;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    static $paramtypesmap = array(
    	"class" => "SearchMultiSelectField",
    	"department" => "SearchMultiSelectField",
    	"description" => "SearchStringField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"group" => "SearchMultiSelectField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInactive" => "SearchBooleanField",
    	"isTopLevel" => "SearchBooleanField",
    	"lastModifiedDate" => "SearchDateField",
    	"location" => "SearchMultiSelectField",
    	"name" => "SearchStringField",
    	"numFiles" => "SearchLongField",
    	"owner" => "SearchMultiSelectField",
    	"parent" => "SearchMultiSelectField",
    	"predecessor" => "SearchMultiSelectField",
    	"private" => "SearchBooleanField",
    	"size" => "SearchLongField",
    	"subsidiary" => "SearchMultiSelectField",
    );

    /**
     * Set class
     *
     * @param SearchMultiSelectField $class
     * @return FolderSearchBasic
     */
    public function setClass(SearchMultiSelectField $class) {
        $this->class = $class;
        return $this;
    }

    /**
     * Get class
     *
     * @return SearchMultiSelectField
     */
    public function getClass() {
        return $this->class;
    }


    /**
     * Set department
     *
     * @param SearchMultiSelectField $department
     * @return FolderSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department) {
        $this->department = $department;
        return $this;
    }

    /**
     * Get department
     *
     * @return SearchMultiSelectField
     */
    public function getDepartment() {
        return $this->department;
    }


    /**
     * Set description
     *
     * @param SearchStringField $description
     * @return FolderSearchBasic
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
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return FolderSearchBasic
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
     * @return FolderSearchBasic
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
     * Set group
     *
     * @param SearchMultiSelectField $group
     * @return FolderSearchBasic
     */
    public function setGroup(SearchMultiSelectField $group) {
        $this->group = $group;
        return $this;
    }

    /**
     * Get group
     *
     * @return SearchMultiSelectField
     */
    public function getGroup() {
        return $this->group;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return FolderSearchBasic
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
     * @return FolderSearchBasic
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
     * @return FolderSearchBasic
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
     * Set isTopLevel
     *
     * @param SearchBooleanField $isTopLevel
     * @return FolderSearchBasic
     */
    public function setIsTopLevel(SearchBooleanField $isTopLevel) {
        $this->isTopLevel = $isTopLevel;
        return $this;
    }

    /**
     * Get isTopLevel
     *
     * @return SearchBooleanField
     */
    public function getIsTopLevel() {
        return $this->isTopLevel;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return FolderSearchBasic
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
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return FolderSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return SearchMultiSelectField
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return FolderSearchBasic
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
     * Set numFiles
     *
     * @param SearchLongField $numFiles
     * @return FolderSearchBasic
     */
    public function setNumFiles(SearchLongField $numFiles) {
        $this->numFiles = $numFiles;
        return $this;
    }

    /**
     * Get numFiles
     *
     * @return SearchLongField
     */
    public function getNumFiles() {
        return $this->numFiles;
    }


    /**
     * Set owner
     *
     * @param SearchMultiSelectField $owner
     * @return FolderSearchBasic
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
     * Set parent
     *
     * @param SearchMultiSelectField $parent
     * @return FolderSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get parent
     *
     * @return SearchMultiSelectField
     */
    public function getParent() {
        return $this->parent;
    }


    /**
     * Set predecessor
     *
     * @param SearchMultiSelectField $predecessor
     * @return FolderSearchBasic
     */
    public function setPredecessor(SearchMultiSelectField $predecessor) {
        $this->predecessor = $predecessor;
        return $this;
    }

    /**
     * Get predecessor
     *
     * @return SearchMultiSelectField
     */
    public function getPredecessor() {
        return $this->predecessor;
    }


    /**
     * Set private
     *
     * @param SearchBooleanField $private
     * @return FolderSearchBasic
     */
    public function setPrivate(SearchBooleanField $private) {
        $this->private = $private;
        return $this;
    }

    /**
     * Get private
     *
     * @return SearchBooleanField
     */
    public function getPrivate() {
        return $this->private;
    }


    /**
     * Set size
     *
     * @param SearchLongField $size
     * @return FolderSearchBasic
     */
    public function setSize(SearchLongField $size) {
        $this->size = $size;
        return $this;
    }

    /**
     * Get size
     *
     * @return SearchLongField
     */
    public function getSize() {
        return $this->size;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return FolderSearchBasic
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

}