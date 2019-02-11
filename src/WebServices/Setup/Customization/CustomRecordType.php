<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomRecordTypeAccessType;

/**
 * CustomRecordType
 */
class CustomRecordType extends Record {

    /**
     * @access public
     * @var string
     */
    protected $recordName;

    /**
     * @access public
     * @var boolean
     */
    protected $includeName;

    /**
     * @access public
     * @var boolean
     */
    protected $showId;

    /**
     * @access public
     * @var boolean
     */
    protected $showCreationDate;

    /**
     * @access public
     * @var boolean
     */
    protected $showCreationDateOnList;

    /**
     * @access public
     * @var boolean
     */
    protected $showLastModified;

    /**
     * @access public
     * @var boolean
     */
    protected $showLastModifiedOnList;

    /**
     * @access public
     * @var boolean
     */
    protected $showOwner;

    /**
     * @access public
     * @var boolean
     */
    protected $showOwnerOnList;

    /**
     * @access public
     * @var boolean
     */
    protected $showOwnerAllowChange;

    /**
     * @access public
     * @var CustomRecordTypeAccessType
     */
    protected $accessType;

    /**
     * @access public
     * @var boolean
     */
    protected $allowAttachments;

    /**
     * @access public
     * @var boolean
     */
    protected $showNotes;

    /**
     * @access public
     * @var boolean
     */
    protected $enableMailMerge;

    /**
     * @access public
     * @var boolean
     */
    protected $isOrdered;

    /**
     * @access public
     * @var boolean
     */
    protected $isAvailableOffline;

    /**
     * @access public
     * @var boolean
     */
    protected $allowQuickSearch;

    /**
     * @access public
     * @var boolean
     */
    protected $enableDle;

    /**
     * @access public
     * @var boolean
     */
    protected $enableNameTranslation;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var string
     */
    protected $disclaimer;

    /**
     * @access public
     * @var boolean
     */
    protected $enableNumbering;

    /**
     * @access public
     * @var string
     */
    protected $numberingPrefix;

    /**
     * @access public
     * @var string
     */
    protected $numberingSuffix;

    /**
     * @access public
     * @var integer
     */
    protected $numberingMinDigits;

    /**
     * @access public
     * @var integer
     */
    protected $numberingInit;

    /**
     * @access public
     * @var integer
     */
    protected $numberingCurrentNumber;

    /**
     * @access public
     * @var boolean
     */
    protected $allowNumberingOverride;

    /**
     * @access public
     * @var boolean
     */
    protected $isNumberingUpdateable;

    /**
     * @access public
     * @var RecordRef
     */
    public $owner;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var CustomRecordTypeTabsList
     */
    protected $tabsList;

    /**
     * @access public
     * @var CustomRecordTypeSublistsList
     */
    protected $sublistsList;

    /**
     * @access public
     * @var CustomRecordTypeFormsList
     */
    protected $formsList;

    /**
     * @access public
     * @var CustomRecordTypeOnlineFormsList
     */
    protected $onlineFormsList;

    /**
     * @access public
     * @var CustomRecordTypePermissionsList
     */
    protected $permissionsList;

    /**
     * @access public
     * @var CustomRecordTypeLinksList
     */
    protected $linksList;

    /**
     * @access public
     * @var CustomRecordTypeManagersList
     */
    protected $managersList;

    /**
     * @access public
     * @var CustomRecordTypeChildrenList
     */
    protected $childrenList;

    /**
     * @access public
     * @var CustomRecordTypeParentsList
     */
    protected $parentsList;

    /**
     * @access public
     * @var CustomRecordTypeTranslationsList
     */
    protected $translationsList;

    /**
     * @access public
     * @var string
     */
    protected $scriptId;

    /**
     * @access public
     * @var CustomRecordTypeFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    static $paramtypesmap = array(
    	"recordName" => "string",
    	"includeName" => "boolean",
    	"showId" => "boolean",
    	"showCreationDate" => "boolean",
    	"showCreationDateOnList" => "boolean",
    	"showLastModified" => "boolean",
    	"showLastModifiedOnList" => "boolean",
    	"showOwner" => "boolean",
    	"showOwnerOnList" => "boolean",
    	"showOwnerAllowChange" => "boolean",
    	"accessType" => "CustomRecordTypeAccessType",
    	"allowAttachments" => "boolean",
    	"showNotes" => "boolean",
    	"enableMailMerge" => "boolean",
    	"isOrdered" => "boolean",
    	"isAvailableOffline" => "boolean",
    	"allowQuickSearch" => "boolean",
    	"enableDle" => "boolean",
    	"enableNameTranslation" => "boolean",
    	"isInactive" => "boolean",
    	"disclaimer" => "string",
    	"enableNumbering" => "boolean",
    	"numberingPrefix" => "string",
    	"numberingSuffix" => "string",
    	"numberingMinDigits" => "integer",
    	"numberingInit" => "integer",
    	"numberingCurrentNumber" => "integer",
    	"allowNumberingOverride" => "boolean",
    	"isNumberingUpdateable" => "boolean",
    	"owner" => "RecordRef",
    	"description" => "string",
    	"tabsList" => "CustomRecordTypeTabsList",
    	"sublistsList" => "CustomRecordTypeSublistsList",
    	"formsList" => "CustomRecordTypeFormsList",
    	"onlineFormsList" => "CustomRecordTypeOnlineFormsList",
    	"permissionsList" => "CustomRecordTypePermissionsList",
    	"linksList" => "CustomRecordTypeLinksList",
    	"managersList" => "CustomRecordTypeManagersList",
    	"childrenList" => "CustomRecordTypeChildrenList",
    	"parentsList" => "CustomRecordTypeParentsList",
    	"translationsList" => "CustomRecordTypeTranslationsList",
    	"scriptId" => "string",
    	"customFieldList" => "CustomRecordTypeFieldList",
    	"internalId" => "string",
    );

    /**
     * Set recordName
     *
     * @param string $recordName
     * @return CustomRecordType
     */
    public function setRecordName($recordName) {
        $this->recordName = $recordName;
        return $this;
    }

    /**
     * Get recordName
     *
     * @return string
     */
    public function getRecordName() {
        return $this->recordName;
    }


    /**
     * Set includeName
     *
     * @param boolean $includeName
     * @return CustomRecordType
     */
    public function setIncludeName($includeName) {
        $this->includeName = $includeName;
        return $this;
    }

    /**
     * Get includeName
     *
     * @return boolean
     */
    public function getIncludeName() {
        return $this->includeName;
    }


    /**
     * Set showId
     *
     * @param boolean $showId
     * @return CustomRecordType
     */
    public function setShowId($showId) {
        $this->showId = $showId;
        return $this;
    }

    /**
     * Get showId
     *
     * @return boolean
     */
    public function getShowId() {
        return $this->showId;
    }


    /**
     * Set showCreationDate
     *
     * @param boolean $showCreationDate
     * @return CustomRecordType
     */
    public function setShowCreationDate($showCreationDate) {
        $this->showCreationDate = $showCreationDate;
        return $this;
    }

    /**
     * Get showCreationDate
     *
     * @return boolean
     */
    public function getShowCreationDate() {
        return $this->showCreationDate;
    }


    /**
     * Set showCreationDateOnList
     *
     * @param boolean $showCreationDateOnList
     * @return CustomRecordType
     */
    public function setShowCreationDateOnList($showCreationDateOnList) {
        $this->showCreationDateOnList = $showCreationDateOnList;
        return $this;
    }

    /**
     * Get showCreationDateOnList
     *
     * @return boolean
     */
    public function getShowCreationDateOnList() {
        return $this->showCreationDateOnList;
    }


    /**
     * Set showLastModified
     *
     * @param boolean $showLastModified
     * @return CustomRecordType
     */
    public function setShowLastModified($showLastModified) {
        $this->showLastModified = $showLastModified;
        return $this;
    }

    /**
     * Get showLastModified
     *
     * @return boolean
     */
    public function getShowLastModified() {
        return $this->showLastModified;
    }


    /**
     * Set showLastModifiedOnList
     *
     * @param boolean $showLastModifiedOnList
     * @return CustomRecordType
     */
    public function setShowLastModifiedOnList($showLastModifiedOnList) {
        $this->showLastModifiedOnList = $showLastModifiedOnList;
        return $this;
    }

    /**
     * Get showLastModifiedOnList
     *
     * @return boolean
     */
    public function getShowLastModifiedOnList() {
        return $this->showLastModifiedOnList;
    }


    /**
     * Set showOwner
     *
     * @param boolean $showOwner
     * @return CustomRecordType
     */
    public function setShowOwner($showOwner) {
        $this->showOwner = $showOwner;
        return $this;
    }

    /**
     * Get showOwner
     *
     * @return boolean
     */
    public function getShowOwner() {
        return $this->showOwner;
    }


    /**
     * Set showOwnerOnList
     *
     * @param boolean $showOwnerOnList
     * @return CustomRecordType
     */
    public function setShowOwnerOnList($showOwnerOnList) {
        $this->showOwnerOnList = $showOwnerOnList;
        return $this;
    }

    /**
     * Get showOwnerOnList
     *
     * @return boolean
     */
    public function getShowOwnerOnList() {
        return $this->showOwnerOnList;
    }


    /**
     * Set showOwnerAllowChange
     *
     * @param boolean $showOwnerAllowChange
     * @return CustomRecordType
     */
    public function setShowOwnerAllowChange($showOwnerAllowChange) {
        $this->showOwnerAllowChange = $showOwnerAllowChange;
        return $this;
    }

    /**
     * Get showOwnerAllowChange
     *
     * @return boolean
     */
    public function getShowOwnerAllowChange() {
        return $this->showOwnerAllowChange;
    }


    /**
     * Set accessType
     *
     * @param CustomRecordTypeAccessType $accessType
     * @return CustomRecordType
     */
    public function setAccessType(CustomRecordTypeAccessType $accessType) {
        $this->accessType = $accessType;
        return $this;
    }

    /**
     * Get accessType
     *
     * @return CustomRecordTypeAccessType
     */
    public function getAccessType() {
        return $this->accessType;
    }


    /**
     * Set allowAttachments
     *
     * @param boolean $allowAttachments
     * @return CustomRecordType
     */
    public function setAllowAttachments($allowAttachments) {
        $this->allowAttachments = $allowAttachments;
        return $this;
    }

    /**
     * Get allowAttachments
     *
     * @return boolean
     */
    public function getAllowAttachments() {
        return $this->allowAttachments;
    }


    /**
     * Set showNotes
     *
     * @param boolean $showNotes
     * @return CustomRecordType
     */
    public function setShowNotes($showNotes) {
        $this->showNotes = $showNotes;
        return $this;
    }

    /**
     * Get showNotes
     *
     * @return boolean
     */
    public function getShowNotes() {
        return $this->showNotes;
    }


    /**
     * Set enableMailMerge
     *
     * @param boolean $enableMailMerge
     * @return CustomRecordType
     */
    public function setEnableMailMerge($enableMailMerge) {
        $this->enableMailMerge = $enableMailMerge;
        return $this;
    }

    /**
     * Get enableMailMerge
     *
     * @return boolean
     */
    public function getEnableMailMerge() {
        return $this->enableMailMerge;
    }


    /**
     * Set isOrdered
     *
     * @param boolean $isOrdered
     * @return CustomRecordType
     */
    public function setIsOrdered($isOrdered) {
        $this->isOrdered = $isOrdered;
        return $this;
    }

    /**
     * Get isOrdered
     *
     * @return boolean
     */
    public function getIsOrdered() {
        return $this->isOrdered;
    }


    /**
     * Set isAvailableOffline
     *
     * @param boolean $isAvailableOffline
     * @return CustomRecordType
     */
    public function setIsAvailableOffline($isAvailableOffline) {
        $this->isAvailableOffline = $isAvailableOffline;
        return $this;
    }

    /**
     * Get isAvailableOffline
     *
     * @return boolean
     */
    public function getIsAvailableOffline() {
        return $this->isAvailableOffline;
    }


    /**
     * Set allowQuickSearch
     *
     * @param boolean $allowQuickSearch
     * @return CustomRecordType
     */
    public function setAllowQuickSearch($allowQuickSearch) {
        $this->allowQuickSearch = $allowQuickSearch;
        return $this;
    }

    /**
     * Get allowQuickSearch
     *
     * @return boolean
     */
    public function getAllowQuickSearch() {
        return $this->allowQuickSearch;
    }


    /**
     * Set enableDle
     *
     * @param boolean $enableDle
     * @return CustomRecordType
     */
    public function setEnableDle($enableDle) {
        $this->enableDle = $enableDle;
        return $this;
    }

    /**
     * Get enableDle
     *
     * @return boolean
     */
    public function getEnableDle() {
        return $this->enableDle;
    }


    /**
     * Set enableNameTranslation
     *
     * @param boolean $enableNameTranslation
     * @return CustomRecordType
     */
    public function setEnableNameTranslation($enableNameTranslation) {
        $this->enableNameTranslation = $enableNameTranslation;
        return $this;
    }

    /**
     * Get enableNameTranslation
     *
     * @return boolean
     */
    public function getEnableNameTranslation() {
        return $this->enableNameTranslation;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return CustomRecordType
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
     * Set disclaimer
     *
     * @param string $disclaimer
     * @return CustomRecordType
     */
    public function setDisclaimer($disclaimer) {
        $this->disclaimer = $disclaimer;
        return $this;
    }

    /**
     * Get disclaimer
     *
     * @return string
     */
    public function getDisclaimer() {
        return $this->disclaimer;
    }


    /**
     * Set enableNumbering
     *
     * @param boolean $enableNumbering
     * @return CustomRecordType
     */
    public function setEnableNumbering($enableNumbering) {
        $this->enableNumbering = $enableNumbering;
        return $this;
    }

    /**
     * Get enableNumbering
     *
     * @return boolean
     */
    public function getEnableNumbering() {
        return $this->enableNumbering;
    }


    /**
     * Set numberingPrefix
     *
     * @param string $numberingPrefix
     * @return CustomRecordType
     */
    public function setNumberingPrefix($numberingPrefix) {
        $this->numberingPrefix = $numberingPrefix;
        return $this;
    }

    /**
     * Get numberingPrefix
     *
     * @return string
     */
    public function getNumberingPrefix() {
        return $this->numberingPrefix;
    }


    /**
     * Set numberingSuffix
     *
     * @param string $numberingSuffix
     * @return CustomRecordType
     */
    public function setNumberingSuffix($numberingSuffix) {
        $this->numberingSuffix = $numberingSuffix;
        return $this;
    }

    /**
     * Get numberingSuffix
     *
     * @return string
     */
    public function getNumberingSuffix() {
        return $this->numberingSuffix;
    }


    /**
     * Set numberingMinDigits
     *
     * @param integer $numberingMinDigits
     * @return CustomRecordType
     */
    public function setNumberingMinDigits($numberingMinDigits) {
        $this->numberingMinDigits = $numberingMinDigits;
        return $this;
    }

    /**
     * Get numberingMinDigits
     *
     * @return integer
     */
    public function getNumberingMinDigits() {
        return $this->numberingMinDigits;
    }


    /**
     * Set numberingInit
     *
     * @param integer $numberingInit
     * @return CustomRecordType
     */
    public function setNumberingInit($numberingInit) {
        $this->numberingInit = $numberingInit;
        return $this;
    }

    /**
     * Get numberingInit
     *
     * @return integer
     */
    public function getNumberingInit() {
        return $this->numberingInit;
    }


    /**
     * Set numberingCurrentNumber
     *
     * @param integer $numberingCurrentNumber
     * @return CustomRecordType
     */
    public function setNumberingCurrentNumber($numberingCurrentNumber) {
        $this->numberingCurrentNumber = $numberingCurrentNumber;
        return $this;
    }

    /**
     * Get numberingCurrentNumber
     *
     * @return integer
     */
    public function getNumberingCurrentNumber() {
        return $this->numberingCurrentNumber;
    }


    /**
     * Set allowNumberingOverride
     *
     * @param boolean $allowNumberingOverride
     * @return CustomRecordType
     */
    public function setAllowNumberingOverride($allowNumberingOverride) {
        $this->allowNumberingOverride = $allowNumberingOverride;
        return $this;
    }

    /**
     * Get allowNumberingOverride
     *
     * @return boolean
     */
    public function getAllowNumberingOverride() {
        return $this->allowNumberingOverride;
    }


    /**
     * Set isNumberingUpdateable
     *
     * @param boolean $isNumberingUpdateable
     * @return CustomRecordType
     */
    public function setIsNumberingUpdateable($isNumberingUpdateable) {
        $this->isNumberingUpdateable = $isNumberingUpdateable;
        return $this;
    }

    /**
     * Get isNumberingUpdateable
     *
     * @return boolean
     */
    public function getIsNumberingUpdateable() {
        return $this->isNumberingUpdateable;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return CustomRecordType
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
     * Set tabsList
     *
     * @param CustomRecordTypeTabsList $tabsList
     * @return CustomRecordType
     */
    public function setTabsList(CustomRecordTypeTabsList $tabsList) {
        $this->tabsList = $tabsList;
        return $this;
    }

    /**
     * Get tabsList
     *
     * @return CustomRecordTypeTabsList
     */
    public function getTabsList() {
        return $this->tabsList;
    }


    /**
     * Set sublistsList
     *
     * @param CustomRecordTypeSublistsList $sublistsList
     * @return CustomRecordType
     */
    public function setSublistsList(CustomRecordTypeSublistsList $sublistsList) {
        $this->sublistsList = $sublistsList;
        return $this;
    }

    /**
     * Get sublistsList
     *
     * @return CustomRecordTypeSublistsList
     */
    public function getSublistsList() {
        return $this->sublistsList;
    }


    /**
     * Set formsList
     *
     * @param CustomRecordTypeFormsList $formsList
     * @return CustomRecordType
     */
    public function setFormsList(CustomRecordTypeFormsList $formsList) {
        $this->formsList = $formsList;
        return $this;
    }

    /**
     * Get formsList
     *
     * @return CustomRecordTypeFormsList
     */
    public function getFormsList() {
        return $this->formsList;
    }


    /**
     * Set onlineFormsList
     *
     * @param CustomRecordTypeOnlineFormsList $onlineFormsList
     * @return CustomRecordType
     */
    public function setOnlineFormsList(CustomRecordTypeOnlineFormsList $onlineFormsList) {
        $this->onlineFormsList = $onlineFormsList;
        return $this;
    }

    /**
     * Get onlineFormsList
     *
     * @return CustomRecordTypeOnlineFormsList
     */
    public function getOnlineFormsList() {
        return $this->onlineFormsList;
    }


    /**
     * Set permissionsList
     *
     * @param CustomRecordTypePermissionsList $permissionsList
     * @return CustomRecordType
     */
    public function setPermissionsList(CustomRecordTypePermissionsList $permissionsList) {
        $this->permissionsList = $permissionsList;
        return $this;
    }

    /**
     * Get permissionsList
     *
     * @return CustomRecordTypePermissionsList
     */
    public function getPermissionsList() {
        return $this->permissionsList;
    }


    /**
     * Set linksList
     *
     * @param CustomRecordTypeLinksList $linksList
     * @return CustomRecordType
     */
    public function setLinksList(CustomRecordTypeLinksList $linksList) {
        $this->linksList = $linksList;
        return $this;
    }

    /**
     * Get linksList
     *
     * @return CustomRecordTypeLinksList
     */
    public function getLinksList() {
        return $this->linksList;
    }


    /**
     * Set managersList
     *
     * @param CustomRecordTypeManagersList $managersList
     * @return CustomRecordType
     */
    public function setManagersList(CustomRecordTypeManagersList $managersList) {
        $this->managersList = $managersList;
        return $this;
    }

    /**
     * Get managersList
     *
     * @return CustomRecordTypeManagersList
     */
    public function getManagersList() {
        return $this->managersList;
    }


    /**
     * Set childrenList
     *
     * @param CustomRecordTypeChildrenList $childrenList
     * @return CustomRecordType
     */
    public function setChildrenList(CustomRecordTypeChildrenList $childrenList) {
        $this->childrenList = $childrenList;
        return $this;
    }

    /**
     * Get childrenList
     *
     * @return CustomRecordTypeChildrenList
     */
    public function getChildrenList() {
        return $this->childrenList;
    }


    /**
     * Set parentsList
     *
     * @param CustomRecordTypeParentsList $parentsList
     * @return CustomRecordType
     */
    public function setParentsList(CustomRecordTypeParentsList $parentsList) {
        $this->parentsList = $parentsList;
        return $this;
    }

    /**
     * Get parentsList
     *
     * @return CustomRecordTypeParentsList
     */
    public function getParentsList() {
        return $this->parentsList;
    }


    /**
     * Set translationsList
     *
     * @param CustomRecordTypeTranslationsList $translationsList
     * @return CustomRecordType
     */
    public function setTranslationsList(CustomRecordTypeTranslationsList $translationsList) {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * Get translationsList
     *
     * @return CustomRecordTypeTranslationsList
     */
    public function getTranslationsList() {
        return $this->translationsList;
    }


    /**
     * Set scriptId
     *
     * @param string $scriptId
     * @return CustomRecordType
     */
    public function setScriptId($scriptId) {
        $this->scriptId = $scriptId;
        return $this;
    }

    /**
     * Get scriptId
     *
     * @return string
     */
    public function getScriptId() {
        return $this->scriptId;
    }


    /**
     * Set customFieldList
     *
     * @param CustomRecordTypeFieldList $customFieldList
     * @return CustomRecordType
     */
    public function setCustomFieldList(CustomRecordTypeFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomRecordTypeFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return CustomRecordType
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

}