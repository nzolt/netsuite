<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Platform\Common\Address;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Location
 */
class Location extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $subsidiaryList;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var string
     */
    protected $tranPrefix;

    /**
     * @access public
     * @var Address
     */
    protected $mainAddress;

    /**
     * @access public
     * @var Address
     */
    protected $returnAddress;

    /**
     * @access public
     * @var RecordRef
     */
    public $logo;

    /**
     * @access public
     * @var boolean
     */
    protected $makeInventoryAvailable;

    /**
     * @access public
     * @var boolean
     */
    protected $makeInventoryAvailableStore;

    /**
     * @access public
     * @var ClassTranslationList
     */
    protected $classTranslationList;

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
    	"name" => "string",
    	"parent" => "RecordRef",
    	"includeChildren" => "boolean",
    	"subsidiaryList" => "RecordRefList",
    	"isInactive" => "boolean",
    	"tranPrefix" => "string",
    	"mainAddress" => "Address",
    	"returnAddress" => "Address",
    	"logo" => "RecordRef",
    	"makeInventoryAvailable" => "boolean",
    	"makeInventoryAvailableStore" => "boolean",
    	"classTranslationList" => "ClassTranslationList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return Location
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
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return Location
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
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return Location
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
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return Location
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
     * Set tranPrefix
     *
     * @param string $tranPrefix
     * @return Location
     */
    public function setTranPrefix($tranPrefix) {
        $this->tranPrefix = $tranPrefix;
        return $this;
    }

    /**
     * Get tranPrefix
     *
     * @return string
     */
    public function getTranPrefix() {
        return $this->tranPrefix;
    }


    /**
     * Set mainAddress
     *
     * @param Address $mainAddress
     * @return Location
     */
    public function setMainAddress(Address $mainAddress) {
        $this->mainAddress = $mainAddress;
        return $this;
    }

    /**
     * Get mainAddress
     *
     * @return Address
     */
    public function getMainAddress() {
        return $this->mainAddress;
    }


    /**
     * Set returnAddress
     *
     * @param Address $returnAddress
     * @return Location
     */
    public function setReturnAddress(Address $returnAddress) {
        $this->returnAddress = $returnAddress;
        return $this;
    }

    /**
     * Get returnAddress
     *
     * @return Address
     */
    public function getReturnAddress() {
        return $this->returnAddress;
    }


    /**
     * Set makeInventoryAvailable
     *
     * @param boolean $makeInventoryAvailable
     * @return Location
     */
    public function setMakeInventoryAvailable($makeInventoryAvailable) {
        $this->makeInventoryAvailable = $makeInventoryAvailable;
        return $this;
    }

    /**
     * Get makeInventoryAvailable
     *
     * @return boolean
     */
    public function getMakeInventoryAvailable() {
        return $this->makeInventoryAvailable;
    }


    /**
     * Set makeInventoryAvailableStore
     *
     * @param boolean $makeInventoryAvailableStore
     * @return Location
     */
    public function setMakeInventoryAvailableStore($makeInventoryAvailableStore) {
        $this->makeInventoryAvailableStore = $makeInventoryAvailableStore;
        return $this;
    }

    /**
     * Get makeInventoryAvailableStore
     *
     * @return boolean
     */
    public function getMakeInventoryAvailableStore() {
        return $this->makeInventoryAvailableStore;
    }


    /**
     * Set classTranslationList
     *
     * @param ClassTranslationList $classTranslationList
     * @return Location
     */
    public function setClassTranslationList(ClassTranslationList $classTranslationList) {
        $this->classTranslationList = $classTranslationList;
        return $this;
    }

    /**
     * Get classTranslationList
     *
     * @return ClassTranslationList
     */
    public function getClassTranslationList() {
        return $this->classTranslationList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Location
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
     * @return Location
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
     * @return Location
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