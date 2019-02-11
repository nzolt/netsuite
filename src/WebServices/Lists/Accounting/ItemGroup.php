<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemCarrier;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ItemGroup
 */
class ItemGroup extends Record {

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
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var boolean
     */
    protected $includeStartEndLines;

    /**
     * @access public
     * @var boolean
     */
    protected $isVsoeBundle;

    /**
     * @access public
     * @var RecordRef
     */
    public $defaultItemShipMethod;

    /**
     * @access public
     * @var boolean
     */
    protected $availableToPartners;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var string
     */
    protected $itemId;

    /**
     * @access public
     * @var string
     */
    protected $upcCode;

    /**
     * @access public
     * @var string
     */
    protected $displayName;

    /**
     * @access public
     * @var string
     */
    protected $vendorName;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueProduct;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $subsidiaryList;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

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
     * @var ItemCarrier
     */
    protected $itemCarrier;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $itemShipMethodList;

    /**
     * @access public
     * @var boolean
     */
    protected $printItems;

    /**
     * @access public
     * @var ItemMemberList
     */
    protected $memberList;

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
    	"customForm" => "RecordRef",
    	"includeStartEndLines" => "boolean",
    	"isVsoeBundle" => "boolean",
    	"defaultItemShipMethod" => "RecordRef",
    	"availableToPartners" => "boolean",
    	"isInactive" => "boolean",
    	"itemId" => "string",
    	"upcCode" => "string",
    	"displayName" => "string",
    	"vendorName" => "string",
    	"issueProduct" => "RecordRef",
    	"parent" => "RecordRef",
    	"description" => "string",
    	"subsidiaryList" => "RecordRefList",
    	"includeChildren" => "boolean",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"itemCarrier" => "ItemCarrier",
    	"itemShipMethodList" => "RecordRefList",
    	"printItems" => "boolean",
    	"memberList" => "ItemMemberList",
    	"translationsList" => "TranslationList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return ItemGroup
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
     * @return ItemGroup
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
     * Set includeStartEndLines
     *
     * @param boolean $includeStartEndLines
     * @return ItemGroup
     */
    public function setIncludeStartEndLines($includeStartEndLines) {
        $this->includeStartEndLines = $includeStartEndLines;
        return $this;
    }

    /**
     * Get includeStartEndLines
     *
     * @return boolean
     */
    public function getIncludeStartEndLines() {
        return $this->includeStartEndLines;
    }


    /**
     * Set isVsoeBundle
     *
     * @param boolean $isVsoeBundle
     * @return ItemGroup
     */
    public function setIsVsoeBundle($isVsoeBundle) {
        $this->isVsoeBundle = $isVsoeBundle;
        return $this;
    }

    /**
     * Get isVsoeBundle
     *
     * @return boolean
     */
    public function getIsVsoeBundle() {
        return $this->isVsoeBundle;
    }


    /**
     * Set availableToPartners
     *
     * @param boolean $availableToPartners
     * @return ItemGroup
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
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return ItemGroup
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
     * Set itemId
     *
     * @param string $itemId
     * @return ItemGroup
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
     * Set upcCode
     *
     * @param string $upcCode
     * @return ItemGroup
     */
    public function setUpcCode($upcCode) {
        $this->upcCode = $upcCode;
        return $this;
    }

    /**
     * Get upcCode
     *
     * @return string
     */
    public function getUpcCode() {
        return $this->upcCode;
    }


    /**
     * Set displayName
     *
     * @param string $displayName
     * @return ItemGroup
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
     * Set vendorName
     *
     * @param string $vendorName
     * @return ItemGroup
     */
    public function setVendorName($vendorName) {
        $this->vendorName = $vendorName;
        return $this;
    }

    /**
     * Get vendorName
     *
     * @return string
     */
    public function getVendorName() {
        return $this->vendorName;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return ItemGroup
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
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return ItemGroup
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
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return ItemGroup
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
     * Set itemCarrier
     *
     * @param ItemCarrier $itemCarrier
     * @return ItemGroup
     */
    public function setItemCarrier(ItemCarrier $itemCarrier) {
        $this->itemCarrier = $itemCarrier;
        return $this;
    }

    /**
     * Get itemCarrier
     *
     * @return ItemCarrier
     */
    public function getItemCarrier() {
        return $this->itemCarrier;
    }


    /**
     * Set itemShipMethodList
     *
     * @param RecordRefList $itemShipMethodList
     * @return ItemGroup
     */
    public function setItemShipMethodList(RecordRefList $itemShipMethodList) {
        $this->itemShipMethodList = $itemShipMethodList;
        return $this;
    }

    /**
     * Get itemShipMethodList
     *
     * @return RecordRefList
     */
    public function getItemShipMethodList() {
        return $this->itemShipMethodList;
    }


    /**
     * Set printItems
     *
     * @param boolean $printItems
     * @return ItemGroup
     */
    public function setPrintItems($printItems) {
        $this->printItems = $printItems;
        return $this;
    }

    /**
     * Get printItems
     *
     * @return boolean
     */
    public function getPrintItems() {
        return $this->printItems;
    }


    /**
     * Set memberList
     *
     * @param ItemMemberList $memberList
     * @return ItemGroup
     */
    public function setMemberList(ItemMemberList $memberList) {
        $this->memberList = $memberList;
        return $this;
    }

    /**
     * Get memberList
     *
     * @return ItemMemberList
     */
    public function getMemberList() {
        return $this->memberList;
    }


    /**
     * Set translationsList
     *
     * @param TranslationList $translationsList
     * @return ItemGroup
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
     * @return ItemGroup
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
     * @return ItemGroup
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
     * @return ItemGroup
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