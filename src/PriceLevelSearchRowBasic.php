<?php

namespace Nzolt\NetSuite;

class PriceLevelSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnDoubleField[] $discountPct
     */
    protected $discountPct = null;

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
     * @var SearchColumnBooleanField[] $isOnline
     */
    protected $isOnline = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDiscountPct()
    {
      return $this->discountPct;
    }

    /**
     * @param SearchColumnDoubleField[] $discountPct
     * @return \Nzolt\NetSuite\PriceLevelSearchRowBasic
     */
    public function setDiscountPct(array $discountPct = null)
    {
      $this->discountPct = $discountPct;
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
     * @return \Nzolt\NetSuite\PriceLevelSearchRowBasic
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
     * @return \Nzolt\NetSuite\PriceLevelSearchRowBasic
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
     * @return \Nzolt\NetSuite\PriceLevelSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsOnline()
    {
      return $this->isOnline;
    }

    /**
     * @param SearchColumnBooleanField[] $isOnline
     * @return \Nzolt\NetSuite\PriceLevelSearchRowBasic
     */
    public function setIsOnline(array $isOnline = null)
    {
      $this->isOnline = $isOnline;
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
     * @return \Nzolt\NetSuite\PriceLevelSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

}
