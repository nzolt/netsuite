<?php

namespace Nzolt\NetSuite;

class CustomRecordSearchRowBasic extends SearchRowBasic
{

    /**
     * @var RecordRef $recType
     */
    protected $recType = null;

    /**
     * @var SearchColumnStringField[] $altName
     */
    protected $altName = null;

    /**
     * @var SearchColumnBooleanField[] $availableOffline
     */
    protected $availableOffline = null;

    /**
     * @var SearchColumnDateField[] $created
     */
    protected $created = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnLongField[] $id
     */
    protected $id = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnDateField[] $lastModified
     */
    protected $lastModified = null;

    /**
     * @var SearchColumnSelectField[] $lastModifiedBy
     */
    protected $lastModifiedBy = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnSelectField[] $owner
     */
    protected $owner = null;

    /**
     * @var SearchColumnSelectField[] $parent
     */
    protected $parent = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
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
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setRecType($recType)
    {
      $this->recType = $recType;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltName()
    {
      return $this->altName;
    }

    /**
     * @param SearchColumnStringField[] $altName
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setAltName(array $altName = null)
    {
      $this->altName = $altName;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAvailableOffline()
    {
      return $this->availableOffline;
    }

    /**
     * @param SearchColumnBooleanField[] $availableOffline
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setAvailableOffline(array $availableOffline = null)
    {
      $this->availableOffline = $availableOffline;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreated()
    {
      return $this->created;
    }

    /**
     * @param SearchColumnDateField[] $created
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setCreated(array $created = null)
    {
      $this->created = $created;
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
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param SearchColumnLongField[] $id
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setId(array $id = null)
    {
      $this->id = $id;
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
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
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
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModified()
    {
      return $this->lastModified;
    }

    /**
     * @param SearchColumnDateField[] $lastModified
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setLastModified(array $lastModified = null)
    {
      $this->lastModified = $lastModified;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLastModifiedBy()
    {
      return $this->lastModifiedBy;
    }

    /**
     * @param SearchColumnSelectField[] $lastModifiedBy
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setLastModifiedBy(array $lastModifiedBy = null)
    {
      $this->lastModifiedBy = $lastModifiedBy;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
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
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setOwner(array $owner = null)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param SearchColumnSelectField[] $parent
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setParent(array $parent = null)
    {
      $this->parent = $parent;
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
     * @return \Nzolt\NetSuite\CustomRecordSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
