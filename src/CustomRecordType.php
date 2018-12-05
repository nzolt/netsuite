<?php

namespace Nzolt\NetSuite;

class CustomRecordType extends Record
{

    /**
     * @var string $recordName
     */
    protected $recordName = null;

    /**
     * @var boolean $includeName
     */
    protected $includeName = null;

    /**
     * @var boolean $showId
     */
    protected $showId = null;

    /**
     * @var boolean $showCreationDate
     */
    protected $showCreationDate = null;

    /**
     * @var boolean $showCreationDateOnList
     */
    protected $showCreationDateOnList = null;

    /**
     * @var boolean $showLastModified
     */
    protected $showLastModified = null;

    /**
     * @var boolean $showLastModifiedOnList
     */
    protected $showLastModifiedOnList = null;

    /**
     * @var boolean $showOwner
     */
    protected $showOwner = null;

    /**
     * @var boolean $showOwnerOnList
     */
    protected $showOwnerOnList = null;

    /**
     * @var boolean $showOwnerAllowChange
     */
    protected $showOwnerAllowChange = null;

    /**
     * @var CustomRecordTypeAccessType $accessType
     */
    protected $accessType = null;

    /**
     * @var boolean $allowAttachments
     */
    protected $allowAttachments = null;

    /**
     * @var boolean $showNotes
     */
    protected $showNotes = null;

    /**
     * @var boolean $enableMailMerge
     */
    protected $enableMailMerge = null;

    /**
     * @var boolean $isOrdered
     */
    protected $isOrdered = null;

    /**
     * @var boolean $isAvailableOffline
     */
    protected $isAvailableOffline = null;

    /**
     * @var boolean $allowQuickSearch
     */
    protected $allowQuickSearch = null;

    /**
     * @var boolean $hierarchical
     */
    protected $hierarchical = null;

    /**
     * @var boolean $enableDle
     */
    protected $enableDle = null;

    /**
     * @var boolean $enableNameTranslation
     */
    protected $enableNameTranslation = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var string $disclaimer
     */
    protected $disclaimer = null;

    /**
     * @var boolean $enableNumbering
     */
    protected $enableNumbering = null;

    /**
     * @var string $numberingPrefix
     */
    protected $numberingPrefix = null;

    /**
     * @var string $numberingSuffix
     */
    protected $numberingSuffix = null;

    /**
     * @var int $numberingMinDigits
     */
    protected $numberingMinDigits = null;

    /**
     * @var int $numberingInit
     */
    protected $numberingInit = null;

    /**
     * @var int $numberingCurrentNumber
     */
    protected $numberingCurrentNumber = null;

    /**
     * @var boolean $allowNumberingOverride
     */
    protected $allowNumberingOverride = null;

    /**
     * @var boolean $isNumberingUpdateable
     */
    protected $isNumberingUpdateable = null;

    /**
     * @var RecordRef $owner
     */
    protected $owner = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var CustomRecordTypeTabsList $tabsList
     */
    protected $tabsList = null;

    /**
     * @var CustomRecordTypeSublistsList $sublistsList
     */
    protected $sublistsList = null;

    /**
     * @var CustomRecordTypeFormsList $formsList
     */
    protected $formsList = null;

    /**
     * @var CustomRecordTypeOnlineFormsList $onlineFormsList
     */
    protected $onlineFormsList = null;

    /**
     * @var CustomRecordTypePermissionsList $permissionsList
     */
    protected $permissionsList = null;

    /**
     * @var CustomRecordTypeLinksList $linksList
     */
    protected $linksList = null;

    /**
     * @var CustomRecordTypeManagersList $managersList
     */
    protected $managersList = null;

    /**
     * @var CustomRecordTypeChildrenList $childrenList
     */
    protected $childrenList = null;

    /**
     * @var CustomRecordTypeParentsList $parentsList
     */
    protected $parentsList = null;

    /**
     * @var CustomRecordTypeTranslationsList $translationsList
     */
    protected $translationsList = null;

    /**
     * @var string $scriptId
     */
    protected $scriptId = null;

    /**
     * @var CustomRecordTypeFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @param string $internalId
     */
    public function __construct($internalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
    }

    /**
     * @return string
     */
    public function getRecordName()
    {
      return $this->recordName;
    }

    /**
     * @param string $recordName
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setRecordName($recordName)
    {
      $this->recordName = $recordName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeName()
    {
      return $this->includeName;
    }

    /**
     * @param boolean $includeName
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setIncludeName($includeName)
    {
      $this->includeName = $includeName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowId()
    {
      return $this->showId;
    }

    /**
     * @param boolean $showId
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setShowId($showId)
    {
      $this->showId = $showId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowCreationDate()
    {
      return $this->showCreationDate;
    }

    /**
     * @param boolean $showCreationDate
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setShowCreationDate($showCreationDate)
    {
      $this->showCreationDate = $showCreationDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowCreationDateOnList()
    {
      return $this->showCreationDateOnList;
    }

    /**
     * @param boolean $showCreationDateOnList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setShowCreationDateOnList($showCreationDateOnList)
    {
      $this->showCreationDateOnList = $showCreationDateOnList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowLastModified()
    {
      return $this->showLastModified;
    }

    /**
     * @param boolean $showLastModified
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setShowLastModified($showLastModified)
    {
      $this->showLastModified = $showLastModified;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowLastModifiedOnList()
    {
      return $this->showLastModifiedOnList;
    }

    /**
     * @param boolean $showLastModifiedOnList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setShowLastModifiedOnList($showLastModifiedOnList)
    {
      $this->showLastModifiedOnList = $showLastModifiedOnList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowOwner()
    {
      return $this->showOwner;
    }

    /**
     * @param boolean $showOwner
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setShowOwner($showOwner)
    {
      $this->showOwner = $showOwner;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowOwnerOnList()
    {
      return $this->showOwnerOnList;
    }

    /**
     * @param boolean $showOwnerOnList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setShowOwnerOnList($showOwnerOnList)
    {
      $this->showOwnerOnList = $showOwnerOnList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowOwnerAllowChange()
    {
      return $this->showOwnerAllowChange;
    }

    /**
     * @param boolean $showOwnerAllowChange
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setShowOwnerAllowChange($showOwnerAllowChange)
    {
      $this->showOwnerAllowChange = $showOwnerAllowChange;
      return $this;
    }

    /**
     * @return CustomRecordTypeAccessType
     */
    public function getAccessType()
    {
      return $this->accessType;
    }

    /**
     * @param CustomRecordTypeAccessType $accessType
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setAccessType($accessType)
    {
      $this->accessType = $accessType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowAttachments()
    {
      return $this->allowAttachments;
    }

    /**
     * @param boolean $allowAttachments
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setAllowAttachments($allowAttachments)
    {
      $this->allowAttachments = $allowAttachments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowNotes()
    {
      return $this->showNotes;
    }

    /**
     * @param boolean $showNotes
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setShowNotes($showNotes)
    {
      $this->showNotes = $showNotes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableMailMerge()
    {
      return $this->enableMailMerge;
    }

    /**
     * @param boolean $enableMailMerge
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setEnableMailMerge($enableMailMerge)
    {
      $this->enableMailMerge = $enableMailMerge;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOrdered()
    {
      return $this->isOrdered;
    }

    /**
     * @param boolean $isOrdered
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setIsOrdered($isOrdered)
    {
      $this->isOrdered = $isOrdered;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAvailableOffline()
    {
      return $this->isAvailableOffline;
    }

    /**
     * @param boolean $isAvailableOffline
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setIsAvailableOffline($isAvailableOffline)
    {
      $this->isAvailableOffline = $isAvailableOffline;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowQuickSearch()
    {
      return $this->allowQuickSearch;
    }

    /**
     * @param boolean $allowQuickSearch
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setAllowQuickSearch($allowQuickSearch)
    {
      $this->allowQuickSearch = $allowQuickSearch;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHierarchical()
    {
      return $this->hierarchical;
    }

    /**
     * @param boolean $hierarchical
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setHierarchical($hierarchical)
    {
      $this->hierarchical = $hierarchical;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableDle()
    {
      return $this->enableDle;
    }

    /**
     * @param boolean $enableDle
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setEnableDle($enableDle)
    {
      $this->enableDle = $enableDle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableNameTranslation()
    {
      return $this->enableNameTranslation;
    }

    /**
     * @param boolean $enableNameTranslation
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setEnableNameTranslation($enableNameTranslation)
    {
      $this->enableNameTranslation = $enableNameTranslation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisclaimer()
    {
      return $this->disclaimer;
    }

    /**
     * @param string $disclaimer
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setDisclaimer($disclaimer)
    {
      $this->disclaimer = $disclaimer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableNumbering()
    {
      return $this->enableNumbering;
    }

    /**
     * @param boolean $enableNumbering
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setEnableNumbering($enableNumbering)
    {
      $this->enableNumbering = $enableNumbering;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumberingPrefix()
    {
      return $this->numberingPrefix;
    }

    /**
     * @param string $numberingPrefix
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setNumberingPrefix($numberingPrefix)
    {
      $this->numberingPrefix = $numberingPrefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumberingSuffix()
    {
      return $this->numberingSuffix;
    }

    /**
     * @param string $numberingSuffix
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setNumberingSuffix($numberingSuffix)
    {
      $this->numberingSuffix = $numberingSuffix;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberingMinDigits()
    {
      return $this->numberingMinDigits;
    }

    /**
     * @param int $numberingMinDigits
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setNumberingMinDigits($numberingMinDigits)
    {
      $this->numberingMinDigits = $numberingMinDigits;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberingInit()
    {
      return $this->numberingInit;
    }

    /**
     * @param int $numberingInit
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setNumberingInit($numberingInit)
    {
      $this->numberingInit = $numberingInit;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberingCurrentNumber()
    {
      return $this->numberingCurrentNumber;
    }

    /**
     * @param int $numberingCurrentNumber
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setNumberingCurrentNumber($numberingCurrentNumber)
    {
      $this->numberingCurrentNumber = $numberingCurrentNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowNumberingOverride()
    {
      return $this->allowNumberingOverride;
    }

    /**
     * @param boolean $allowNumberingOverride
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setAllowNumberingOverride($allowNumberingOverride)
    {
      $this->allowNumberingOverride = $allowNumberingOverride;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNumberingUpdateable()
    {
      return $this->isNumberingUpdateable;
    }

    /**
     * @param boolean $isNumberingUpdateable
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setIsNumberingUpdateable($isNumberingUpdateable)
    {
      $this->isNumberingUpdateable = $isNumberingUpdateable;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param RecordRef $owner
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return CustomRecordTypeTabsList
     */
    public function getTabsList()
    {
      return $this->tabsList;
    }

    /**
     * @param CustomRecordTypeTabsList $tabsList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setTabsList($tabsList)
    {
      $this->tabsList = $tabsList;
      return $this;
    }

    /**
     * @return CustomRecordTypeSublistsList
     */
    public function getSublistsList()
    {
      return $this->sublistsList;
    }

    /**
     * @param CustomRecordTypeSublistsList $sublistsList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setSublistsList($sublistsList)
    {
      $this->sublistsList = $sublistsList;
      return $this;
    }

    /**
     * @return CustomRecordTypeFormsList
     */
    public function getFormsList()
    {
      return $this->formsList;
    }

    /**
     * @param CustomRecordTypeFormsList $formsList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setFormsList($formsList)
    {
      $this->formsList = $formsList;
      return $this;
    }

    /**
     * @return CustomRecordTypeOnlineFormsList
     */
    public function getOnlineFormsList()
    {
      return $this->onlineFormsList;
    }

    /**
     * @param CustomRecordTypeOnlineFormsList $onlineFormsList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setOnlineFormsList($onlineFormsList)
    {
      $this->onlineFormsList = $onlineFormsList;
      return $this;
    }

    /**
     * @return CustomRecordTypePermissionsList
     */
    public function getPermissionsList()
    {
      return $this->permissionsList;
    }

    /**
     * @param CustomRecordTypePermissionsList $permissionsList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setPermissionsList($permissionsList)
    {
      $this->permissionsList = $permissionsList;
      return $this;
    }

    /**
     * @return CustomRecordTypeLinksList
     */
    public function getLinksList()
    {
      return $this->linksList;
    }

    /**
     * @param CustomRecordTypeLinksList $linksList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setLinksList($linksList)
    {
      $this->linksList = $linksList;
      return $this;
    }

    /**
     * @return CustomRecordTypeManagersList
     */
    public function getManagersList()
    {
      return $this->managersList;
    }

    /**
     * @param CustomRecordTypeManagersList $managersList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setManagersList($managersList)
    {
      $this->managersList = $managersList;
      return $this;
    }

    /**
     * @return CustomRecordTypeChildrenList
     */
    public function getChildrenList()
    {
      return $this->childrenList;
    }

    /**
     * @param CustomRecordTypeChildrenList $childrenList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setChildrenList($childrenList)
    {
      $this->childrenList = $childrenList;
      return $this;
    }

    /**
     * @return CustomRecordTypeParentsList
     */
    public function getParentsList()
    {
      return $this->parentsList;
    }

    /**
     * @param CustomRecordTypeParentsList $parentsList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setParentsList($parentsList)
    {
      $this->parentsList = $parentsList;
      return $this;
    }

    /**
     * @return CustomRecordTypeTranslationsList
     */
    public function getTranslationsList()
    {
      return $this->translationsList;
    }

    /**
     * @param CustomRecordTypeTranslationsList $translationsList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setTranslationsList($translationsList)
    {
      $this->translationsList = $translationsList;
      return $this;
    }

    /**
     * @return string
     */
    public function getScriptId()
    {
      return $this->scriptId;
    }

    /**
     * @param string $scriptId
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setScriptId($scriptId)
    {
      $this->scriptId = $scriptId;
      return $this;
    }

    /**
     * @return CustomRecordTypeFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomRecordTypeFieldList $customFieldList
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\CustomRecordType
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
