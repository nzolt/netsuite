<?php

namespace Nzolt\NetSuite;

class FolderSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $class
     */
    protected $class = null;

    /**
     * @var SearchMultiSelectField $department
     */
    protected $department = null;

    /**
     * @var SearchStringField $description
     */
    protected $description = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $group
     */
    protected $group = null;

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
     * @var SearchBooleanField $isTopLevel
     */
    protected $isTopLevel = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchLongField $numFiles
     */
    protected $numFiles = null;

    /**
     * @var SearchMultiSelectField $owner
     */
    protected $owner = null;

    /**
     * @var SearchMultiSelectField $parent
     */
    protected $parent = null;

    /**
     * @var SearchMultiSelectField $predecessor
     */
    protected $predecessor = null;

    /**
     * @var SearchBooleanField $private
     */
    protected $private = null;

    /**
     * @var SearchLongField $size
     */
    protected $size = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchStringField $description
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\FolderSearchBasic
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
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getGroup()
    {
      return $this->group;
    }

    /**
     * @param SearchMultiSelectField $group
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setGroup($group)
    {
      $this->group = $group;
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
     * @return \Nzolt\NetSuite\FolderSearchBasic
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
     * @return \Nzolt\NetSuite\FolderSearchBasic
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
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsTopLevel()
    {
      return $this->isTopLevel;
    }

    /**
     * @param SearchBooleanField $isTopLevel
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setIsTopLevel($isTopLevel)
    {
      $this->isTopLevel = $isTopLevel;
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
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumFiles()
    {
      return $this->numFiles;
    }

    /**
     * @param SearchLongField $numFiles
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setNumFiles($numFiles)
    {
      $this->numFiles = $numFiles;
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
     * @return \Nzolt\NetSuite\FolderSearchBasic
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
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPredecessor()
    {
      return $this->predecessor;
    }

    /**
     * @param SearchMultiSelectField $predecessor
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setPredecessor($predecessor)
    {
      $this->predecessor = $predecessor;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPrivate()
    {
      return $this->private;
    }

    /**
     * @param SearchBooleanField $private
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setPrivate($private)
    {
      $this->private = $private;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param SearchLongField $size
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setSize($size)
    {
      $this->size = $size;
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
     * @return \Nzolt\NetSuite\FolderSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

}
