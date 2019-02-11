<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\EntityGroupType;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * EntityGroup
 */
class EntityGroup extends Record {

    /**
     * @access public
     * @var string
     */
    protected $groupName;

    /**
     * @access public
     * @var EntityGroupType
     */
    protected $groupType;

    /**
     * @access public
     * @var string
     */
    protected $email;

    /**
     * @access public
     * @var RecordRef
     */
    public $groupOwner;

    /**
     * @access public
     * @var boolean
     */
    protected $isSavedSearch;

    /**
     * @access public
     * @var EntityGroupType
     */
    protected $parentGroupType;

    /**
     * @access public
     * @var RecordRef
     */
    public $savedSearch;

    /**
     * @access public
     * @var boolean
     */
    protected $isSalesTeam;

    /**
     * @access public
     * @var string
     */
    protected $comments;

    /**
     * @access public
     * @var boolean
     */
    protected $isPrivate;

    /**
     * @access public
     * @var RecordRef
     */
    public $restrictionGroup;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var boolean
     */
    protected $isSalesRep;

    /**
     * @access public
     * @var boolean
     */
    protected $isSupportRep;

    /**
     * @access public
     * @var boolean
     */
    protected $isProductTeam;

    /**
     * @access public
     * @var boolean
     */
    protected $isFunctionalTeam;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueRole;

    /**
     * @access public
     * @var boolean
     */
    protected $isManufacturingWorkCenter;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var integer
     */
    protected $machineResources;

    /**
     * @access public
     * @var integer
     */
    protected $laborResources;

    /**
     * @access public
     * @var RecordRef
     */
    public $workCalendar;

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
    	"groupName" => "string",
    	"groupType" => "EntityGroupType",
    	"email" => "string",
    	"groupOwner" => "RecordRef",
    	"isSavedSearch" => "boolean",
    	"parentGroupType" => "EntityGroupType",
    	"savedSearch" => "RecordRef",
    	"isSalesTeam" => "boolean",
    	"comments" => "string",
    	"isPrivate" => "boolean",
    	"restrictionGroup" => "RecordRef",
    	"isInactive" => "boolean",
    	"isSalesRep" => "boolean",
    	"isSupportRep" => "boolean",
    	"isProductTeam" => "boolean",
    	"isFunctionalTeam" => "boolean",
    	"issueRole" => "RecordRef",
    	"isManufacturingWorkCenter" => "boolean",
    	"subsidiary" => "RecordRef",
    	"machineResources" => "integer",
    	"laborResources" => "integer",
    	"workCalendar" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set groupName
     *
     * @param string $groupName
     * @return EntityGroup
     */
    public function setGroupName($groupName) {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName() {
        return $this->groupName;
    }


    /**
     * Set groupType
     *
     * @param EntityGroupType $groupType
     * @return EntityGroup
     */
    public function setGroupType(EntityGroupType $groupType) {
        $this->groupType = $groupType;
        return $this;
    }

    /**
     * Get groupType
     *
     * @return EntityGroupType
     */
    public function getGroupType() {
        return $this->groupType;
    }


    /**
     * Set email
     *
     * @param string $email
     * @return EntityGroup
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }


    /**
     * Set isSavedSearch
     *
     * @param boolean $isSavedSearch
     * @return EntityGroup
     */
    public function setIsSavedSearch($isSavedSearch) {
        $this->isSavedSearch = $isSavedSearch;
        return $this;
    }

    /**
     * Get isSavedSearch
     *
     * @return boolean
     */
    public function getIsSavedSearch() {
        return $this->isSavedSearch;
    }


    /**
     * Set parentGroupType
     *
     * @param EntityGroupType $parentGroupType
     * @return EntityGroup
     */
    public function setParentGroupType(EntityGroupType $parentGroupType) {
        $this->parentGroupType = $parentGroupType;
        return $this;
    }

    /**
     * Get parentGroupType
     *
     * @return EntityGroupType
     */
    public function getParentGroupType() {
        return $this->parentGroupType;
    }


    /**
     * Set isSalesTeam
     *
     * @param boolean $isSalesTeam
     * @return EntityGroup
     */
    public function setIsSalesTeam($isSalesTeam) {
        $this->isSalesTeam = $isSalesTeam;
        return $this;
    }

    /**
     * Get isSalesTeam
     *
     * @return boolean
     */
    public function getIsSalesTeam() {
        return $this->isSalesTeam;
    }


    /**
     * Set comments
     *
     * @param string $comments
     * @return EntityGroup
     */
    public function setComments($comments) {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments() {
        return $this->comments;
    }


    /**
     * Set isPrivate
     *
     * @param boolean $isPrivate
     * @return EntityGroup
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
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return EntityGroup
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
     * Set isSalesRep
     *
     * @param boolean $isSalesRep
     * @return EntityGroup
     */
    public function setIsSalesRep($isSalesRep) {
        $this->isSalesRep = $isSalesRep;
        return $this;
    }

    /**
     * Get isSalesRep
     *
     * @return boolean
     */
    public function getIsSalesRep() {
        return $this->isSalesRep;
    }


    /**
     * Set isSupportRep
     *
     * @param boolean $isSupportRep
     * @return EntityGroup
     */
    public function setIsSupportRep($isSupportRep) {
        $this->isSupportRep = $isSupportRep;
        return $this;
    }

    /**
     * Get isSupportRep
     *
     * @return boolean
     */
    public function getIsSupportRep() {
        return $this->isSupportRep;
    }


    /**
     * Set isProductTeam
     *
     * @param boolean $isProductTeam
     * @return EntityGroup
     */
    public function setIsProductTeam($isProductTeam) {
        $this->isProductTeam = $isProductTeam;
        return $this;
    }

    /**
     * Get isProductTeam
     *
     * @return boolean
     */
    public function getIsProductTeam() {
        return $this->isProductTeam;
    }


    /**
     * Set isFunctionalTeam
     *
     * @param boolean $isFunctionalTeam
     * @return EntityGroup
     */
    public function setIsFunctionalTeam($isFunctionalTeam) {
        $this->isFunctionalTeam = $isFunctionalTeam;
        return $this;
    }

    /**
     * Get isFunctionalTeam
     *
     * @return boolean
     */
    public function getIsFunctionalTeam() {
        return $this->isFunctionalTeam;
    }


    /**
     * Set isManufacturingWorkCenter
     *
     * @param boolean $isManufacturingWorkCenter
     * @return EntityGroup
     */
    public function setIsManufacturingWorkCenter($isManufacturingWorkCenter) {
        $this->isManufacturingWorkCenter = $isManufacturingWorkCenter;
        return $this;
    }

    /**
     * Get isManufacturingWorkCenter
     *
     * @return boolean
     */
    public function getIsManufacturingWorkCenter() {
        return $this->isManufacturingWorkCenter;
    }


    /**
     * Set machineResources
     *
     * @param integer $machineResources
     * @return EntityGroup
     */
    public function setMachineResources($machineResources) {
        $this->machineResources = $machineResources;
        return $this;
    }

    /**
     * Get machineResources
     *
     * @return integer
     */
    public function getMachineResources() {
        return $this->machineResources;
    }


    /**
     * Set laborResources
     *
     * @param integer $laborResources
     * @return EntityGroup
     */
    public function setLaborResources($laborResources) {
        $this->laborResources = $laborResources;
        return $this;
    }

    /**
     * Get laborResources
     *
     * @return integer
     */
    public function getLaborResources() {
        return $this->laborResources;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return EntityGroup
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
     * @return EntityGroup
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
     * @return EntityGroup
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