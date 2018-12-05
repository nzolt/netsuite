<?php

namespace Nzolt\NetSuite;

class EntityGroupSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchStringField $email
     */
    protected $email = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchStringField $groupName
     */
    protected $groupName = null;

    /**
     * @var SearchMultiSelectField $groupOwner
     */
    protected $groupOwner = null;

    /**
     * @var SearchMultiSelectField $groupType
     */
    protected $groupType = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isDynamic
     */
    protected $isDynamic = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchBooleanField $isManufacturingWorkCenter
     */
    protected $isManufacturingWorkCenter = null;

    /**
     * @var SearchBooleanField $isPrivate
     */
    protected $isPrivate = null;

    /**
     * @var SearchLongField $laborResources
     */
    protected $laborResources = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchLongField $machineResources
     */
    protected $machineResources = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchMultiSelectField $workCalendar
     */
    protected $workCalendar = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchStringField
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param SearchStringField $email
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGroupName()
    {
      return $this->groupName;
    }

    /**
     * @param SearchStringField $groupName
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setGroupName($groupName)
    {
      $this->groupName = $groupName;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getGroupOwner()
    {
      return $this->groupOwner;
    }

    /**
     * @param SearchMultiSelectField $groupOwner
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setGroupOwner($groupOwner)
    {
      $this->groupOwner = $groupOwner;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getGroupType()
    {
      return $this->groupType;
    }

    /**
     * @param SearchMultiSelectField $groupType
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setGroupType($groupType)
    {
      $this->groupType = $groupType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDynamic()
    {
      return $this->isDynamic;
    }

    /**
     * @param SearchBooleanField $isDynamic
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setIsDynamic($isDynamic)
    {
      $this->isDynamic = $isDynamic;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsManufacturingWorkCenter()
    {
      return $this->isManufacturingWorkCenter;
    }

    /**
     * @param SearchBooleanField $isManufacturingWorkCenter
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setIsManufacturingWorkCenter($isManufacturingWorkCenter)
    {
      $this->isManufacturingWorkCenter = $isManufacturingWorkCenter;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPrivate()
    {
      return $this->isPrivate;
    }

    /**
     * @param SearchBooleanField $isPrivate
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setIsPrivate($isPrivate)
    {
      $this->isPrivate = $isPrivate;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLaborResources()
    {
      return $this->laborResources;
    }

    /**
     * @param SearchLongField $laborResources
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setLaborResources($laborResources)
    {
      $this->laborResources = $laborResources;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getMachineResources()
    {
      return $this->machineResources;
    }

    /**
     * @param SearchLongField $machineResources
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setMachineResources($machineResources)
    {
      $this->machineResources = $machineResources;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWorkCalendar()
    {
      return $this->workCalendar;
    }

    /**
     * @param SearchMultiSelectField $workCalendar
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setWorkCalendar($workCalendar)
    {
      $this->workCalendar = $workCalendar;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\EntityGroupSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
