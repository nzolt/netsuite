<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * SubtotalItem
 */
class SubtotalItem extends Record {

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var string
     */
    protected $displayName;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueProduct;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var string
     */
    protected $itemId;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var boolean
     */
    protected $availableToPartners;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

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
     * @var RecordRefList
     */
    protected $subsidiaryList;

    /**
     * @access public
     * @var TranslationList
     */
    protected $translationsList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

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
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"displayName" => "string",
    	"issueProduct" => "RecordRef",
    	"description" => "string",
    	"includeChildren" => "boolean",
    	"customForm" => "RecordRef",
    	"itemId" => "string",
    	"isInactive" => "boolean",
    	"availableToPartners" => "boolean",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"subsidiaryList" => "RecordRefList",
    	"translationsList" => "TranslationList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return SubtotalItem
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
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return SubtotalItem
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
     * Set displayName
     *
     * @param string $displayName
     * @return SubtotalItem
     */
    public function setDisplayName($displayName) {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * Get displayName
     *
     * @return string
     */
    public function getDisplayName() {
        return $this->displayName;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return SubtotalItem
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
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return SubtotalItem
     */
    public function setIncludeChildren($includeChildren) {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * Get includeChildren
     *
     * @return boolean
     */
    public function getIncludeChildren() {
        return $this->includeChildren;
    }


    /**
     * Set itemId
     *
     * @param string $itemId
     * @return SubtotalItem
     */
    public function setItemId($itemId) {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * Get itemId
     *
     * @return string
     */
    public function getItemId() {
        return $this->itemId;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return SubtotalItem
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
     * Set availableToPartners
     *
     * @param boolean $availableToPartners
     * @return SubtotalItem
     */
    public function setAvailableToPartners($availableToPartners) {
        $this->availableToPartners = $availableToPartners;
        return $this;
    }

    /**
     * Get availableToPartners
     *
     * @return boolean
     */
    public function getAvailableToPartners() {
        return $this->availableToPartners;
    }


    /**
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return SubtotalItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList) {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * Get subsidiaryList
     *
     * @return RecordRefList
     */
    public function getSubsidiaryList() {
        return $this->subsidiaryList;
    }


    /**
     * Set translationsList
     *
     * @param TranslationList $translationsList
     * @return SubtotalItem
     */
    public function setTranslationsList(TranslationList $translationsList) {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * Get translationsList
     *
     * @return TranslationList
     */
    public function getTranslationsList() {
        return $this->translationsList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return SubtotalItem
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


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return SubtotalItem
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
     * @return SubtotalItem
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