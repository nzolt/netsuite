<?php

namespace Nzolt\NetSuite;

class EntityGroup extends Record
{

    /**
     * @var string $groupName
     */
    protected $groupName = null;

    /**
     * @var EntityGroupType $groupType
     */
    protected $groupType = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var RecordRef $groupOwner
     */
    protected $groupOwner = null;

    /**
     * @var boolean $isSavedSearch
     */
    protected $isSavedSearch = null;

    /**
     * @var EntityGroupType $parentGroupType
     */
    protected $parentGroupType = null;

    /**
     * @var RecordRef $savedSearch
     */
    protected $savedSearch = null;

    /**
     * @var boolean $isSalesTeam
     */
    protected $isSalesTeam = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    /**
     * @var boolean $isPrivate
     */
    protected $isPrivate = null;

    /**
     * @var RecordRef $restrictionGroup
     */
    protected $restrictionGroup = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var boolean $isSalesRep
     */
    protected $isSalesRep = null;

    /**
     * @var boolean $isSupportRep
     */
    protected $isSupportRep = null;

    /**
     * @var boolean $isProductTeam
     */
    protected $isProductTeam = null;

    /**
     * @var boolean $isFunctionalTeam
     */
    protected $isFunctionalTeam = null;

    /**
     * @var RecordRef $issueRole
     */
    protected $issueRole = null;

    /**
     * @var boolean $isManufacturingWorkCenter
     */
    protected $isManufacturingWorkCenter = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var int $machineResources
     */
    protected $machineResources = null;

    /**
     * @var int $laborResources
     */
    protected $laborResources = null;

    /**
     * @var RecordRef $workCalendar
     */
    protected $workCalendar = null;

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
    public function getGroupName()
    {
      return $this->groupName;
    }

    /**
     * @param string $groupName
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setGroupName($groupName)
    {
      $this->groupName = $groupName;
      return $this;
    }

    /**
     * @return EntityGroupType
     */
    public function getGroupType()
    {
      return $this->groupType;
    }

    /**
     * @param EntityGroupType $groupType
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setGroupType($groupType)
    {
      $this->groupType = $groupType;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getGroupOwner()
    {
      return $this->groupOwner;
    }

    /**
     * @param RecordRef $groupOwner
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setGroupOwner($groupOwner)
    {
      $this->groupOwner = $groupOwner;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSavedSearch()
    {
      return $this->isSavedSearch;
    }

    /**
     * @param boolean $isSavedSearch
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setIsSavedSearch($isSavedSearch)
    {
      $this->isSavedSearch = $isSavedSearch;
      return $this;
    }

    /**
     * @return EntityGroupType
     */
    public function getParentGroupType()
    {
      return $this->parentGroupType;
    }

    /**
     * @param EntityGroupType $parentGroupType
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setParentGroupType($parentGroupType)
    {
      $this->parentGroupType = $parentGroupType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSavedSearch()
    {
      return $this->savedSearch;
    }

    /**
     * @param RecordRef $savedSearch
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setSavedSearch($savedSearch)
    {
      $this->savedSearch = $savedSearch;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSalesTeam()
    {
      return $this->isSalesTeam;
    }

    /**
     * @param boolean $isSalesTeam
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setIsSalesTeam($isSalesTeam)
    {
      $this->isSalesTeam = $isSalesTeam;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param string $comments
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrivate()
    {
      return $this->isPrivate;
    }

    /**
     * @param boolean $isPrivate
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setIsPrivate($isPrivate)
    {
      $this->isPrivate = $isPrivate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRestrictionGroup()
    {
      return $this->restrictionGroup;
    }

    /**
     * @param RecordRef $restrictionGroup
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setRestrictionGroup($restrictionGroup)
    {
      $this->restrictionGroup = $restrictionGroup;
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
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSalesRep()
    {
      return $this->isSalesRep;
    }

    /**
     * @param boolean $isSalesRep
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setIsSalesRep($isSalesRep)
    {
      $this->isSalesRep = $isSalesRep;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSupportRep()
    {
      return $this->isSupportRep;
    }

    /**
     * @param boolean $isSupportRep
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setIsSupportRep($isSupportRep)
    {
      $this->isSupportRep = $isSupportRep;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProductTeam()
    {
      return $this->isProductTeam;
    }

    /**
     * @param boolean $isProductTeam
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setIsProductTeam($isProductTeam)
    {
      $this->isProductTeam = $isProductTeam;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFunctionalTeam()
    {
      return $this->isFunctionalTeam;
    }

    /**
     * @param boolean $isFunctionalTeam
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setIsFunctionalTeam($isFunctionalTeam)
    {
      $this->isFunctionalTeam = $isFunctionalTeam;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueRole()
    {
      return $this->issueRole;
    }

    /**
     * @param RecordRef $issueRole
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setIssueRole($issueRole)
    {
      $this->issueRole = $issueRole;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsManufacturingWorkCenter()
    {
      return $this->isManufacturingWorkCenter;
    }

    /**
     * @param boolean $isManufacturingWorkCenter
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setIsManufacturingWorkCenter($isManufacturingWorkCenter)
    {
      $this->isManufacturingWorkCenter = $isManufacturingWorkCenter;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param RecordRef $subsidiary
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return int
     */
    public function getMachineResources()
    {
      return $this->machineResources;
    }

    /**
     * @param int $machineResources
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setMachineResources($machineResources)
    {
      $this->machineResources = $machineResources;
      return $this;
    }

    /**
     * @return int
     */
    public function getLaborResources()
    {
      return $this->laborResources;
    }

    /**
     * @param int $laborResources
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setLaborResources($laborResources)
    {
      $this->laborResources = $laborResources;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWorkCalendar()
    {
      return $this->workCalendar;
    }

    /**
     * @param RecordRef $workCalendar
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setWorkCalendar($workCalendar)
    {
      $this->workCalendar = $workCalendar;
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
     * @return \Nzolt\NetSuite\EntityGroup
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
     * @return \Nzolt\NetSuite\EntityGroup
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
     * @return \Nzolt\NetSuite\EntityGroup
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
