<?php

namespace Nzolt\NetSuite;

class EntityGroupSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $email
     */
    protected $email = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnStringField[] $groupName
     */
    protected $groupName = null;

    /**
     * @var SearchColumnStringField[] $groupType
     */
    protected $groupType = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isDynamic
     */
    protected $isDynamic = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnBooleanField[] $isManufacturingWorkCenter
     */
    protected $isManufacturingWorkCenter = null;

    /**
     * @var SearchColumnBooleanField[] $isPrivate
     */
    protected $isPrivate = null;

    /**
     * @var SearchColumnLongField[] $laborResources
     */
    protected $laborResources = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnLongField[] $machineResources
     */
    protected $machineResources = null;

    /**
     * @var SearchColumnSelectField[] $owner
     */
    protected $owner = null;

    /**
     * @var SearchColumnStringField[] $savedSearch
     */
    protected $savedSearch = null;

    /**
     * @var SearchColumnLongField[] $size
     */
    protected $size = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnSelectField[] $workCalendar
     */
    protected $workCalendar = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param SearchColumnStringField[] $email
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setEmail(array $email = null)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGroupName()
    {
      return $this->groupName;
    }

    /**
     * @param SearchColumnStringField[] $groupName
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setGroupName(array $groupName = null)
    {
      $this->groupName = $groupName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGroupType()
    {
      return $this->groupType;
    }

    /**
     * @param SearchColumnStringField[] $groupType
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setGroupType(array $groupType = null)
    {
      $this->groupType = $groupType;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDynamic()
    {
      return $this->isDynamic;
    }

    /**
     * @param SearchColumnBooleanField[] $isDynamic
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setIsDynamic(array $isDynamic = null)
    {
      $this->isDynamic = $isDynamic;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsManufacturingWorkCenter()
    {
      return $this->isManufacturingWorkCenter;
    }

    /**
     * @param SearchColumnBooleanField[] $isManufacturingWorkCenter
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setIsManufacturingWorkCenter(array $isManufacturingWorkCenter = null)
    {
      $this->isManufacturingWorkCenter = $isManufacturingWorkCenter;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsPrivate()
    {
      return $this->isPrivate;
    }

    /**
     * @param SearchColumnBooleanField[] $isPrivate
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setIsPrivate(array $isPrivate = null)
    {
      $this->isPrivate = $isPrivate;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLaborResources()
    {
      return $this->laborResources;
    }

    /**
     * @param SearchColumnLongField[] $laborResources
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setLaborResources(array $laborResources = null)
    {
      $this->laborResources = $laborResources;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getMachineResources()
    {
      return $this->machineResources;
    }

    /**
     * @param SearchColumnLongField[] $machineResources
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setMachineResources(array $machineResources = null)
    {
      $this->machineResources = $machineResources;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param SearchColumnSelectField[] $owner
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setOwner(array $owner = null)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSavedSearch()
    {
      return $this->savedSearch;
    }

    /**
     * @param SearchColumnStringField[] $savedSearch
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setSavedSearch(array $savedSearch = null)
    {
      $this->savedSearch = $savedSearch;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param SearchColumnLongField[] $size
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setSize(array $size = null)
    {
      $this->size = $size;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWorkCalendar()
    {
      return $this->workCalendar;
    }

    /**
     * @param SearchColumnSelectField[] $workCalendar
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setWorkCalendar(array $workCalendar = null)
    {
      $this->workCalendar = $workCalendar;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\EntityGroupSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
