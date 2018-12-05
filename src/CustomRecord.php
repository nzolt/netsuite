<?php

namespace Nzolt\NetSuite;

class CustomRecord extends Record
{

    /**
     * @var string $customRecordId
     */
    protected $customRecordId = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var string $disclaimer
     */
    protected $disclaimer = null;

    /**
     * @var \DateTime $created
     */
    protected $created = null;

    /**
     * @var \DateTime $lastModified
     */
    protected $lastModified = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $autoName
     */
    protected $autoName = null;

    /**
     * @var string $altName
     */
    protected $altName = null;

    /**
     * @var RecordRef $owner
     */
    protected $owner = null;

    /**
     * @var RecordRef $recType
     */
    protected $recType = null;

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
     * @var string $description
     */
    protected $description = null;

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
     * @var CustomRecordTranslationsList $translationsList
     */
    protected $translationsList = null;

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
     * @var boolean $usePermissions
     */
    protected $usePermissions = null;

    /**
     * @var boolean $allowAttachments
     */
    protected $allowAttachments = null;

    /**
     * @var boolean $showNotes
     */
    protected $showNotes = null;

    /**
     * @var boolean $enablEmailMerge
     */
    protected $enablEmailMerge = null;

    /**
     * @var boolean $isOrdered
     */
    protected $isOrdered = null;

    /**
     * @var boolean $allowInlineEditing
     */
    protected $allowInlineEditing = null;

    /**
     * @var boolean $isAvailableOffline
     */
    protected $isAvailableOffline = null;

    /**
     * @var boolean $allowQuickSearch
     */
    protected $allowQuickSearch = null;

    /**
     * @var string $recordName
     */
    protected $recordName = null;

    /**
     * @var string $scriptId
     */
    protected $scriptId = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return string
     */
    public function getCustomRecordId()
    {
      return $this->customRecordId;
    }

    /**
     * @param string $customRecordId
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setCustomRecordId($customRecordId)
    {
      $this->customRecordId = $customRecordId;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param RecordRef $parent
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
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
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setDisclaimer($disclaimer)
    {
      $this->disclaimer = $disclaimer;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
      if ($this->created == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->created);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $created
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setCreated(\DateTime $created = null)
    {
      if ($created == null) {
       $this->created = null;
      } else {
        $this->created = $created->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModified()
    {
      if ($this->lastModified == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastModified);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastModified
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setLastModified(\DateTime $lastModified = null)
    {
      if ($lastModified == null) {
       $this->lastModified = null;
      } else {
        $this->lastModified = $lastModified->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoName()
    {
      return $this->autoName;
    }

    /**
     * @param boolean $autoName
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setAutoName($autoName)
    {
      $this->autoName = $autoName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAltName()
    {
      return $this->altName;
    }

    /**
     * @param string $altName
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setAltName($altName)
    {
      $this->altName = $altName;
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
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecType()
    {
      return $this->recType;
    }

    /**
     * @param RecordRef $recType
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setRecType($recType)
    {
      $this->recType = $recType;
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setNumberingMinDigits($numberingMinDigits)
    {
      $this->numberingMinDigits = $numberingMinDigits;
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
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setIsNumberingUpdateable($isNumberingUpdateable)
    {
      $this->isNumberingUpdateable = $isNumberingUpdateable;
      return $this;
    }

    /**
     * @return CustomRecordTranslationsList
     */
    public function getTranslationsList()
    {
      return $this->translationsList;
    }

    /**
     * @param CustomRecordTranslationsList $translationsList
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setTranslationsList($translationsList)
    {
      $this->translationsList = $translationsList;
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setShowOwnerAllowChange($showOwnerAllowChange)
    {
      $this->showOwnerAllowChange = $showOwnerAllowChange;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsePermissions()
    {
      return $this->usePermissions;
    }

    /**
     * @param boolean $usePermissions
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setUsePermissions($usePermissions)
    {
      $this->usePermissions = $usePermissions;
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setShowNotes($showNotes)
    {
      $this->showNotes = $showNotes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnablEmailMerge()
    {
      return $this->enablEmailMerge;
    }

    /**
     * @param boolean $enablEmailMerge
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setEnablEmailMerge($enablEmailMerge)
    {
      $this->enablEmailMerge = $enablEmailMerge;
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
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setIsOrdered($isOrdered)
    {
      $this->isOrdered = $isOrdered;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowInlineEditing()
    {
      return $this->allowInlineEditing;
    }

    /**
     * @param boolean $allowInlineEditing
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setAllowInlineEditing($allowInlineEditing)
    {
      $this->allowInlineEditing = $allowInlineEditing;
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
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setAllowQuickSearch($allowQuickSearch)
    {
      $this->allowQuickSearch = $allowQuickSearch;
      return $this;
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
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setRecordName($recordName)
    {
      $this->recordName = $recordName;
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
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setScriptId($scriptId)
    {
      $this->scriptId = $scriptId;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\CustomRecord
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
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\CustomRecord
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
