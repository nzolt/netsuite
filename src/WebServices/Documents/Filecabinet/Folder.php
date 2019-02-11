<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Documents\Filecabinet;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Documents\Filecabinet\Types\FolderFolderType;

/**
 * Folder
 */
class Folder extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var boolean
     */
    protected $isPrivate;

    /**
     * @access public
     * @var boolean
     */
    protected $bundleable;

    /**
     * @access public
     * @var boolean
     */
    protected $hideInBundle;

    /**
     * @access public
     * @var boolean
     */
    protected $isOnline;

    /**
     * @access public
     * @var RecordRef
     */
    public $group;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    /**
     * @access public
     * @var FolderFolderType
     */
    protected $folderType;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"name" => "string",
    	"department" => "RecordRef",
    	"description" => "string",
    	"isInactive" => "boolean",
    	"isPrivate" => "boolean",
    	"bundleable" => "boolean",
    	"hideInBundle" => "boolean",
    	"isOnline" => "boolean",
    	"group" => "RecordRef",
    	"parent" => "RecordRef",
    	"folderType" => "FolderFolderType",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return Folder
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return Folder
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return Folder
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set isPrivate
     *
     * @param boolean $isPrivate
     * @return Folder
     */
    public function setIsPrivate($isPrivate) {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * Get isPrivate
     *
     * @return boolean
     */
    public function getIsPrivate() {
        return $this->isPrivate;
    }


    /**
     * Set bundleable
     *
     * @param boolean $bundleable
     * @return Folder
     */
    public function setBundleable($bundleable) {
        $this->bundleable = $bundleable;
        return $this;
    }

    /**
     * Get bundleable
     *
     * @return boolean
     */
    public function getBundleable() {
        return $this->bundleable;
    }


    /**
     * Set hideInBundle
     *
     * @param boolean $hideInBundle
     * @return Folder
     */
    public function setHideInBundle($hideInBundle) {
        $this->hideInBundle = $hideInBundle;
        return $this;
    }

    /**
     * Get hideInBundle
     *
     * @return boolean
     */
    public function getHideInBundle() {
        return $this->hideInBundle;
    }


    /**
     * Set isOnline
     *
     * @param boolean $isOnline
     * @return Folder
     */
    public function setIsOnline($isOnline) {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * Get isOnline
     *
     * @return boolean
     */
    public function getIsOnline() {
        return $this->isOnline;
    }


    /**
     * Set folderType
     *
     * @param FolderFolderType $folderType
     * @return Folder
     */
    public function setFolderType(FolderFolderType $folderType) {
        $this->folderType = $folderType;
        return $this;
    }

    /**
     * Get folderType
     *
     * @return FolderFolderType
     */
    public function getFolderType() {
        return $this->folderType;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return Folder
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
     * Set externalId
     *
     * @param string $externalId
     * @return Folder
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}