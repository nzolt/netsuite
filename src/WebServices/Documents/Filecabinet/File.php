<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Documents\Filecabinet;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Documents\Filecabinet\Types\FileAttachFrom;
use Nzolt\NetSuite\WebServices\Documents\Filecabinet\Types\MediaType;
use Nzolt\NetSuite\WebServices\Documents\Filecabinet\Types\TextFileEncoding;
use Nzolt\NetSuite\WebServices\Documents\Filecabinet\Types\FileEncoding;

/**
 * File
 */
class File extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var FileAttachFrom
     */
    protected $attachFrom;

    /**
     * @access public
     * @var string
     */
    protected $mediaTypeName;

    /**
     * @access public
     * @var MediaType
     */
    protected $fileType;

    /**
     * @access public
     * @var base64Binary
     */
    protected $content;

    /**
     * @access public
     * @var RecordRef
     */
    public $folder;

    /**
     * @access public
     * @var float
     */
    protected $fileSize;

    /**
     * @access public
     * @var string
     */
    protected $url;

    /**
     * @access public
     * @var string
     */
    protected $urlComponent;

    /**
     * @access public
     * @var RecordRef
     */
    public $mediaFile;

    /**
     * @access public
     * @var TextFileEncoding
     */
    protected $textFileEncoding;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var FileEncoding
     */
    protected $encoding;

    /**
     * @access public
     * @var string
     */
    protected $altTagCaption;

    /**
     * @access public
     * @var boolean
     */
    protected $isOnline;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var string
     */
    protected $class;

    /**
     * @access public
     * @var boolean
     */
    protected $bundleable;

    /**
     * @access public
     * @var string
     */
    protected $department;

    /**
     * @access public
     * @var boolean
     */
    protected $hideInBundle;

    /**
     * @access public
     * @var boolean
     */
    protected $isPrivate;

    /**
     * @access public
     * @var RecordRef
     */
    public $owner;

    /**
     * @access public
     * @var string
     */
    protected $caption;

    /**
     * @access public
     * @var RecordRef
     */
    public $storeDisplayThumbnail;

    /**
     * @access public
     * @var string
     */
    protected $siteDescription;

    /**
     * @access public
     * @var string
     */
    protected $featuredDescription;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var FileSiteCategoryList
     */
    protected $siteCategoryList;

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
    	"attachFrom" => "FileAttachFrom",
    	"mediaTypeName" => "string",
    	"fileType" => "MediaType",
    	"content" => "base64Binary",
    	"folder" => "RecordRef",
    	"fileSize" => "float",
    	"url" => "string",
    	"urlComponent" => "string",
    	"mediaFile" => "RecordRef",
    	"textFileEncoding" => "TextFileEncoding",
    	"description" => "string",
    	"encoding" => "FileEncoding",
    	"altTagCaption" => "string",
    	"isOnline" => "boolean",
    	"isInactive" => "boolean",
    	"class" => "string",
    	"bundleable" => "boolean",
    	"department" => "string",
    	"hideInBundle" => "boolean",
    	"isPrivate" => "boolean",
    	"owner" => "RecordRef",
    	"caption" => "string",
    	"storeDisplayThumbnail" => "RecordRef",
    	"siteDescription" => "string",
    	"featuredDescription" => "string",
    	"lastModifiedDate" => "dateTime",
    	"createdDate" => "dateTime",
    	"siteCategoryList" => "FileSiteCategoryList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return File
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
     * Set attachFrom
     *
     * @param FileAttachFrom $attachFrom
     * @return File
     */
    public function setAttachFrom(FileAttachFrom $attachFrom) {
        $this->attachFrom = $attachFrom;
        return $this;
    }

    /**
     * Get attachFrom
     *
     * @return FileAttachFrom
     */
    public function getAttachFrom() {
        return $this->attachFrom;
    }


    /**
     * Set mediaTypeName
     *
     * @param string $mediaTypeName
     * @return File
     */
    public function setMediaTypeName($mediaTypeName) {
        $this->mediaTypeName = $mediaTypeName;
        return $this;
    }

    /**
     * Get mediaTypeName
     *
     * @return string
     */
    public function getMediaTypeName() {
        return $this->mediaTypeName;
    }


    /**
     * Set fileType
     *
     * @param MediaType $fileType
     * @return File
     */
    public function setFileType(MediaType $fileType) {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * Get fileType
     *
     * @return MediaType
     */
    public function getFileType() {
        return $this->fileType;
    }


    /**
     * Set content
     *
     * @param base64Binary $content
     * @return File
     */
    public function setContent(base64Binary $content) {
        $this->content = $content;
        return $this;
    }

    /**
     * Get content
     *
     * @return base64Binary
     */
    public function getContent() {
        return $this->content;
    }


    /**
     * Set fileSize
     *
     * @param float $fileSize
     * @return File
     */
    public function setFileSize($fileSize) {
        $this->fileSize = $fileSize;
        return $this;
    }

    /**
     * Get fileSize
     *
     * @return float
     */
    public function getFileSize() {
        return $this->fileSize;
    }


    /**
     * Set url
     *
     * @param string $url
     * @return File
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }


    /**
     * Set urlComponent
     *
     * @param string $urlComponent
     * @return File
     */
    public function setUrlComponent($urlComponent) {
        $this->urlComponent = $urlComponent;
        return $this;
    }

    /**
     * Get urlComponent
     *
     * @return string
     */
    public function getUrlComponent() {
        return $this->urlComponent;
    }


    /**
     * Set textFileEncoding
     *
     * @param TextFileEncoding $textFileEncoding
     * @return File
     */
    public function setTextFileEncoding(TextFileEncoding $textFileEncoding) {
        $this->textFileEncoding = $textFileEncoding;
        return $this;
    }

    /**
     * Get textFileEncoding
     *
     * @return TextFileEncoding
     */
    public function getTextFileEncoding() {
        return $this->textFileEncoding;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return File
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
     * Set encoding
     *
     * @param FileEncoding $encoding
     * @return File
     */
    public function setEncoding(FileEncoding $encoding) {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * Get encoding
     *
     * @return FileEncoding
     */
    public function getEncoding() {
        return $this->encoding;
    }


    /**
     * Set altTagCaption
     *
     * @param string $altTagCaption
     * @return File
     */
    public function setAltTagCaption($altTagCaption) {
        $this->altTagCaption = $altTagCaption;
        return $this;
    }

    /**
     * Get altTagCaption
     *
     * @return string
     */
    public function getAltTagCaption() {
        return $this->altTagCaption;
    }


    /**
     * Set isOnline
     *
     * @param boolean $isOnline
     * @return File
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
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return File
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
     * Set class
     *
     * @param string $class
     * @return File
     */
    public function setClass($class) {
        $this->class = $class;
        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass() {
        return $this->class;
    }


    /**
     * Set bundleable
     *
     * @param boolean $bundleable
     * @return File
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
     * Set department
     *
     * @param string $department
     * @return File
     */
    public function setDepartment($department) {
        $this->department = $department;
        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment() {
        return $this->department;
    }


    /**
     * Set hideInBundle
     *
     * @param boolean $hideInBundle
     * @return File
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
     * Set isPrivate
     *
     * @param boolean $isPrivate
     * @return File
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
     * Set caption
     *
     * @param string $caption
     * @return File
     */
    public function setCaption($caption) {
        $this->caption = $caption;
        return $this;
    }

    /**
     * Get caption
     *
     * @return string
     */
    public function getCaption() {
        return $this->caption;
    }


    /**
     * Set siteDescription
     *
     * @param string $siteDescription
     * @return File
     */
    public function setSiteDescription($siteDescription) {
        $this->siteDescription = $siteDescription;
        return $this;
    }

    /**
     * Get siteDescription
     *
     * @return string
     */
    public function getSiteDescription() {
        return $this->siteDescription;
    }


    /**
     * Set featuredDescription
     *
     * @param string $featuredDescription
     * @return File
     */
    public function setFeaturedDescription($featuredDescription) {
        $this->featuredDescription = $featuredDescription;
        return $this;
    }

    /**
     * Get featuredDescription
     *
     * @return string
     */
    public function getFeaturedDescription() {
        return $this->featuredDescription;
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return File
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate->format('c');
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate() {
        return new \DateTime($this->lastModifiedDate);
    }


    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return File
     */
    public function setCreatedDate(\DateTime $createdDate) {
        $this->createdDate = $createdDate->format('c');
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return new \DateTime($this->createdDate);
    }


    /**
     * Set siteCategoryList
     *
     * @param FileSiteCategoryList $siteCategoryList
     * @return File
     */
    public function setSiteCategoryList(FileSiteCategoryList $siteCategoryList) {
        $this->siteCategoryList = $siteCategoryList;
        return $this;
    }

    /**
     * Get siteCategoryList
     *
     * @return FileSiteCategoryList
     */
    public function getSiteCategoryList() {
        return $this->siteCategoryList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return File
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
     * @return File
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