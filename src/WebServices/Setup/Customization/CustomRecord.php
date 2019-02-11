<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * CustomRecord
 */
class CustomRecord extends Record {

    /**
     * @access public
     * @var string
     */
    protected $customRecordId;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

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
     * @var dateTime
     */
    protected $created;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModified;

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var boolean
     */
    protected $autoName;

    /**
     * @access public
     * @var string
     */
    protected $altName;

    /**
     * @access public
     * @var RecordRef
     */
    public $owner;

    /**
     * @access public
     * @var RecordRef
     */
    public $recType;

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
     * @var string
     */
    protected $description;

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
     * @var CustomRecordTranslationsList
     */
    protected $translationsList;

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
     * @var boolean
     */
    protected $usePermissions;

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
    protected $enablEmailMerge;

    /**
     * @access public
     * @var boolean
     */
    protected $isOrdered;

    /**
     * @access public
     * @var boolean
     */
    protected $allowInlineEditing;

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
     * @var string
     */
    protected $recordName;

    /**
     * @access public
     * @var string
     */
    protected $scriptId;

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
    	"customRecordId" => "string",
    	"customForm" => "RecordRef",
    	"isInactive" => "boolean",
    	"disclaimer" => "string",
    	"created" => "dateTime",
    	"lastModified" => "dateTime",
    	"name" => "string",
    	"autoName" => "boolean",
    	"altName" => "string",
    	"owner" => "RecordRef",
    	"recType" => "RecordRef",
    	"enableNumbering" => "boolean",
    	"numberingPrefix" => "string",
    	"numberingSuffix" => "string",
    	"numberingMinDigits" => "integer",
    	"description" => "string",
    	"numberingInit" => "integer",
    	"numberingCurrentNumber" => "integer",
    	"allowNumberingOverride" => "boolean",
    	"isNumberingUpdateable" => "boolean",
    	"translationsList" => "CustomRecordTranslationsList",
    	"includeName" => "boolean",
    	"showId" => "boolean",
    	"showCreationDate" => "boolean",
    	"showCreationDateOnList" => "boolean",
    	"showLastModified" => "boolean",
    	"showLastModifiedOnList" => "boolean",
    	"showOwner" => "boolean",
    	"showOwnerOnList" => "boolean",
    	"showOwnerAllowChange" => "boolean",
    	"usePermissions" => "boolean",
    	"allowAttachments" => "boolean",
    	"showNotes" => "boolean",
    	"enablEmailMerge" => "boolean",
    	"isOrdered" => "boolean",
    	"allowInlineEditing" => "boolean",
    	"isAvailableOffline" => "boolean",
    	"allowQuickSearch" => "boolean",
    	"recordName" => "string",
    	"scriptId" => "string",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set customRecordId
     *
     * @param string $customRecordId
     * @return CustomRecord
     */
    public function setCustomRecordId($customRecordId) {
        $this->customRecordId = $customRecordId;
        return $this;
    }

    /**
     * Get customRecordId
     *
     * @return string
     */
    public function getCustomRecordId() {
        return $this->customRecordId;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return CustomRecord
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
     * @return CustomRecord
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
     * Set created
     *
     * @param \DateTime $created
     * @return CustomRecord
     */
    public function setCreated(\DateTime $created) {
        $this->created = $created->format('c');
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated() {
        return new \DateTime($this->created);
    }


    /**
     * Set lastModified
     *
     * @param \DateTime $lastModified
     * @return CustomRecord
     */
    public function setLastModified(\DateTime $lastModified) {
        $this->lastModified = $lastModified->format('c');
        return $this;
    }

    /**
     * Get lastModified
     *
     * @return \DateTime
     */
    public function getLastModified() {
        return new \DateTime($this->lastModified);
    }


    /**
     * Set name
     *
     * @param string $name
     * @return CustomRecord
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
     * Set autoName
     *
     * @param boolean $autoName
     * @return CustomRecord
     */
    public function setAutoName($autoName) {
        $this->autoName = $autoName;
        return $this;
    }

    /**
     * Get autoName
     *
     * @return boolean
     */
    public function getAutoName() {
        return $this->autoName;
    }


    /**
     * Set altName
     *
     * @param string $altName
     * @return CustomRecord
     */
    public function setAltName($altName) {
        $this->altName = $altName;
        return $this;
    }

    /**
     * Get altName
     *
     * @return string
     */
    public function getAltName() {
        return $this->altName;
    }


    /**
     * Set enableNumbering
     *
     * @param boolean $enableNumbering
     * @return CustomRecord
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
     * @return CustomRecord
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
     * @return CustomRecord
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
     * @return CustomRecord
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
     * Set description
     *
     * @param string $description
     * @return CustomRecord
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
     * Set numberingInit
     *
     * @param integer $numberingInit
     * @return CustomRecord
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
     * @return CustomRecord
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
     * @return CustomRecord
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
     * @return CustomRecord
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
     * Set translationsList
     *
     * @param CustomRecordTranslationsList $translationsList
     * @return CustomRecord
     */
    public function setTranslationsList(CustomRecordTranslationsList $translationsList) {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * Get translationsList
     *
     * @return CustomRecordTranslationsList
     */
    public function getTranslationsList() {
        return $this->translationsList;
    }


    /**
     * Set includeName
     *
     * @param boolean $includeName
     * @return CustomRecord
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
     * @return CustomRecord
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
     * @return CustomRecord
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
     * @return CustomRecord
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
     * @return CustomRecord
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
     * @return CustomRecord
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
     * @return CustomRecord
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
     * @return CustomRecord
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
     * @return CustomRecord
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
     * Set usePermissions
     *
     * @param boolean $usePermissions
     * @return CustomRecord
     */
    public function setUsePermissions($usePermissions) {
        $this->usePermissions = $usePermissions;
        return $this;
    }

    /**
     * Get usePermissions
     *
     * @return boolean
     */
    public function getUsePermissions() {
        return $this->usePermissions;
    }


    /**
     * Set allowAttachments
     *
     * @param boolean $allowAttachments
     * @return CustomRecord
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
     * @return CustomRecord
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
     * Set enablEmailMerge
     *
     * @param boolean $enablEmailMerge
     * @return CustomRecord
     */
    public function setEnablEmailMerge($enablEmailMerge) {
        $this->enablEmailMerge = $enablEmailMerge;
        return $this;
    }

    /**
     * Get enablEmailMerge
     *
     * @return boolean
     */
    public function getEnablEmailMerge() {
        return $this->enablEmailMerge;
    }


    /**
     * Set isOrdered
     *
     * @param boolean $isOrdered
     * @return CustomRecord
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
     * Set allowInlineEditing
     *
     * @param boolean $allowInlineEditing
     * @return CustomRecord
     */
    public function setAllowInlineEditing($allowInlineEditing) {
        $this->allowInlineEditing = $allowInlineEditing;
        return $this;
    }

    /**
     * Get allowInlineEditing
     *
     * @return boolean
     */
    public function getAllowInlineEditing() {
        return $this->allowInlineEditing;
    }


    /**
     * Set isAvailableOffline
     *
     * @param boolean $isAvailableOffline
     * @return CustomRecord
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
     * @return CustomRecord
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
     * Set recordName
     *
     * @param string $recordName
     * @return CustomRecord
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
     * Set scriptId
     *
     * @param string $scriptId
     * @return CustomRecord
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
     * @param CustomFieldList $customFieldList
     * @return CustomRecord
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
     * @return CustomRecord
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
     * @return CustomRecord
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