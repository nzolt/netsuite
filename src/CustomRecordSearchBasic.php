<?php

namespace Nzolt\NetSuite;

class CustomRecordSearchBasic extends SearchRecordBasic
{

    /**
     * @var RecordRef $recType
     */
    protected $recType = null;

    /**
     * @var SearchBooleanField $availableOffline
     */
    protected $availableOffline = null;

    /**
     * @var SearchDateField $created
     */
    protected $created = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchLongField $id
     */
    protected $id = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchDateField $lastModified
     */
    protected $lastModified = null;

    /**
     * @var SearchMultiSelectField $lastModifiedBy
     */
    protected $lastModifiedBy = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchMultiSelectField $owner
     */
    protected $owner = null;

    /**
     * @var SearchMultiSelectField $parent
     */
    protected $parent = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @param RecordRef $recType
     */
    public function __construct($recType)
    {
      $this->recType = $recType;
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
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
     */
    public function setRecType($recType)
    {
      $this->recType = $recType;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAvailableOffline()
    {
      return $this->availableOffline;
    }

    /**
     * @param SearchBooleanField $availableOffline
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
     */
    public function setAvailableOffline($availableOffline)
    {
      $this->availableOffline = $availableOffline;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreated()
    {
      return $this->created;
    }

    /**
     * @param SearchDateField $created
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
     */
    public function setCreated($created)
    {
      $this->created = $created;
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
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
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
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param SearchLongField $id
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
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
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
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
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModified()
    {
      return $this->lastModified;
    }

    /**
     * @param SearchDateField $lastModified
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
     */
    public function setLastModified($lastModified)
    {
      $this->lastModified = $lastModified;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLastModifiedBy()
    {
      return $this->lastModifiedBy;
    }

    /**
     * @param SearchMultiSelectField $lastModifiedBy
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
     */
    public function setLastModifiedBy($lastModifiedBy)
    {
      $this->lastModifiedBy = $lastModifiedBy;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchStringField $name
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param SearchMultiSelectField $owner
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param SearchMultiSelectField $parent
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
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
     * @return \Nzolt\NetSuite\CustomRecordSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
