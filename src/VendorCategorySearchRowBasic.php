<?php

namespace Nzolt\NetSuite;

class VendorCategorySearchRowBasic extends SearchRowBasic
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
     * @var SearchColumnBooleanField[] $isTaxAgency
     */
    protected $isTaxAgency = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    
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
     * @return \Nzolt\NetSuite\VendorCategorySearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorCategorySearchRowBasic
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
     * @return \Nzolt\NetSuite\VendorCategorySearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsTaxAgency()
    {
      return $this->isTaxAgency;
    }

    /**
     * @param SearchColumnBooleanField[] $isTaxAgency
     * @return \Nzolt\NetSuite\VendorCategorySearchRowBasic
     */
    public function setIsTaxAgency(array $isTaxAgency = null)
    {
      $this->isTaxAgency = $isTaxAgency;
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
     * @return \Nzolt\NetSuite\VendorCategorySearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

}
