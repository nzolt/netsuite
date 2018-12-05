<?php

namespace Nzolt\NetSuite;

class NexusSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnEnumSelectField[] $country
     */
    protected $country = null;

    /**
     * @var SearchColumnStringField[] $description
     */
    protected $description = null;

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
     * @var SearchColumnSelectField[] $parentNexus
     */
    protected $parentNexus = null;

    /**
     * @var SearchColumnSelectField[] $state
     */
    protected $state = null;

    /**
     * @var SearchColumnSelectField[] $taxAgency
     */
    protected $taxAgency = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param SearchColumnEnumSelectField[] $country
     * @return \Nzolt\NetSuite\NexusSearchRowBasic
     */
    public function setCountry(array $country = null)
    {
      $this->country = $country;
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
     * @return \Nzolt\NetSuite\NexusSearchRowBasic
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
     * @return \Nzolt\NetSuite\NexusSearchRowBasic
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
     * @return \Nzolt\NetSuite\NexusSearchRowBasic
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
     * @return \Nzolt\NetSuite\NexusSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getParentNexus()
    {
      return $this->parentNexus;
    }

    /**
     * @param SearchColumnSelectField[] $parentNexus
     * @return \Nzolt\NetSuite\NexusSearchRowBasic
     */
    public function setParentNexus(array $parentNexus = null)
    {
      $this->parentNexus = $parentNexus;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param SearchColumnSelectField[] $state
     * @return \Nzolt\NetSuite\NexusSearchRowBasic
     */
    public function setState(array $state = null)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxAgency()
    {
      return $this->taxAgency;
    }

    /**
     * @param SearchColumnSelectField[] $taxAgency
     * @return \Nzolt\NetSuite\NexusSearchRowBasic
     */
    public function setTaxAgency(array $taxAgency = null)
    {
      $this->taxAgency = $taxAgency;
      return $this;
    }

}
