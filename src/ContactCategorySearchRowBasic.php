<?php

namespace Nzolt\NetSuite;

class ContactCategorySearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnBooleanField[] $private
     */
    protected $private = null;

    /**
     * @var SearchColumnBooleanField[] $sync
     */
    protected $sync = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\ContactCategorySearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
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
     * @return \Nzolt\NetSuite\ContactCategorySearchRowBasic
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
     * @return \Nzolt\NetSuite\ContactCategorySearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\ContactCategorySearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPrivate()
    {
      return $this->private;
    }

    /**
     * @param SearchColumnBooleanField[] $private
     * @return \Nzolt\NetSuite\ContactCategorySearchRowBasic
     */
    public function setPrivate(array $private = null)
    {
      $this->private = $private;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSync()
    {
      return $this->sync;
    }

    /**
     * @param SearchColumnBooleanField[] $sync
     * @return \Nzolt\NetSuite\ContactCategorySearchRowBasic
     */
    public function setSync(array $sync = null)
    {
      $this->sync = $sync;
      return $this;
    }

}
