<?php

namespace Nzolt\NetSuite;

class FolderSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $class
     */
    protected $class = null;

    /**
     * @var SearchColumnSelectField[] $department
     */
    protected $department = null;

    /**
     * @var SearchColumnStringField[] $description
     */
    protected $description = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnLongField[] $folderSize
     */
    protected $folderSize = null;

    /**
     * @var SearchColumnSelectField[] $group
     */
    protected $group = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnLongField[] $numFiles
     */
    protected $numFiles = null;

    /**
     * @var SearchColumnSelectField[] $owner
     */
    protected $owner = null;

    /**
     * @var SearchColumnSelectField[] $parent
     */
    protected $parent = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
     */
    public function setClass(array $class = null)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
     */
    public function setDepartment(array $department = null)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
     */
    public function setDescription(array $description = null)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getFolderSize()
    {
      return $this->folderSize;
    }

    /**
     * @param SearchColumnLongField[] $folderSize
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
     */
    public function setFolderSize(array $folderSize = null)
    {
      $this->folderSize = $folderSize;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getGroup()
    {
      return $this->group;
    }

    /**
     * @param SearchColumnSelectField[] $group
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
     */
    public function setGroup(array $group = null)
    {
      $this->group = $group;
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
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
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
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getNumFiles()
    {
      return $this->numFiles;
    }

    /**
     * @param SearchColumnLongField[] $numFiles
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
     */
    public function setNumFiles(array $numFiles = null)
    {
      $this->numFiles = $numFiles;
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
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
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
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
     */
    public function setParent(array $parent = null)
    {
      $this->parent = $parent;
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
     * @return \Nzolt\NetSuite\FolderSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

}
