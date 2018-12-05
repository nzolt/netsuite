<?php

namespace Nzolt\NetSuite;

class Folder extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var boolean $isPrivate
     */
    protected $isPrivate = null;

    /**
     * @var boolean $bundleable
     */
    protected $bundleable = null;

    /**
     * @var boolean $hideInBundle
     */
    protected $hideInBundle = null;

    /**
     * @var boolean $isOnline
     */
    protected $isOnline = null;

    /**
     * @var RecordRef $group
     */
    protected $group = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var FolderFolderType $folderType
     */
    protected $folderType = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

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
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\Folder
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param RecordRef $department
     * @return \Nzolt\NetSuite\Folder
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\Folder
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\Folder
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\Folder
     */
    public function setIsPrivate($isPrivate)
    {
      $this->isPrivate = $isPrivate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBundleable()
    {
      return $this->bundleable;
    }

    /**
     * @param boolean $bundleable
     * @return \Nzolt\NetSuite\Folder
     */
    public function setBundleable($bundleable)
    {
      $this->bundleable = $bundleable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideInBundle()
    {
      return $this->hideInBundle;
    }

    /**
     * @param boolean $hideInBundle
     * @return \Nzolt\NetSuite\Folder
     */
    public function setHideInBundle($hideInBundle)
    {
      $this->hideInBundle = $hideInBundle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnline()
    {
      return $this->isOnline;
    }

    /**
     * @param boolean $isOnline
     * @return \Nzolt\NetSuite\Folder
     */
    public function setIsOnline($isOnline)
    {
      $this->isOnline = $isOnline;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getGroup()
    {
      return $this->group;
    }

    /**
     * @param RecordRef $group
     * @return \Nzolt\NetSuite\Folder
     */
    public function setGroup($group)
    {
      $this->group = $group;
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
     * @return \Nzolt\NetSuite\Folder
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return FolderFolderType
     */
    public function getFolderType()
    {
      return $this->folderType;
    }

    /**
     * @param FolderFolderType $folderType
     * @return \Nzolt\NetSuite\Folder
     */
    public function setFolderType($folderType)
    {
      $this->folderType = $folderType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param RecordRef $class
     * @return \Nzolt\NetSuite\Folder
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRef $location
     * @return \Nzolt\NetSuite\Folder
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\Folder
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\Folder
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
     * @return \Nzolt\NetSuite\Folder
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
