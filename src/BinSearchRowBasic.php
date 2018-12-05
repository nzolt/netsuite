<?php

namespace Nzolt\NetSuite;

class BinSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $binNumber
     */
    protected $binNumber = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnBooleanField[] $inactive
     */
    protected $inactive = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnStringField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnStringField[] $memo
     */
    protected $memo = null;

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
    public function getBinNumber()
    {
      return $this->binNumber;
    }

    /**
     * @param SearchColumnStringField[] $binNumber
     * @return \Nzolt\NetSuite\BinSearchRowBasic
     */
    public function setBinNumber(array $binNumber = null)
    {
      $this->binNumber = $binNumber;
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
     * @return \Nzolt\NetSuite\BinSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getInactive()
    {
      return $this->inactive;
    }

    /**
     * @param SearchColumnBooleanField[] $inactive
     * @return \Nzolt\NetSuite\BinSearchRowBasic
     */
    public function setInactive(array $inactive = null)
    {
      $this->inactive = $inactive;
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
     * @return \Nzolt\NetSuite\BinSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnStringField[] $location
     * @return \Nzolt\NetSuite\BinSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return \Nzolt\NetSuite\BinSearchRowBasic
     */
    public function setMemo(array $memo = null)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\BinSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
