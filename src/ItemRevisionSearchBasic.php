<?php

namespace Nzolt\NetSuite;

class ItemRevisionSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchDateField $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchDateField $obsoleteDate
     */
    protected $obsoleteDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchDateField
     */
    public function getEffectiveDate()
    {
      return $this->effectiveDate;
    }

    /**
     * @param SearchDateField $effectiveDate
     * @return \Nzolt\NetSuite\ItemRevisionSearchBasic
     */
    public function setEffectiveDate($effectiveDate)
    {
      $this->effectiveDate = $effectiveDate;
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
     * @return \Nzolt\NetSuite\ItemRevisionSearchBasic
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
     * @return \Nzolt\NetSuite\ItemRevisionSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
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
     * @return \Nzolt\NetSuite\ItemRevisionSearchBasic
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
     * @return \Nzolt\NetSuite\ItemRevisionSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return \Nzolt\NetSuite\ItemRevisionSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\ItemRevisionSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getObsoleteDate()
    {
      return $this->obsoleteDate;
    }

    /**
     * @param SearchDateField $obsoleteDate
     * @return \Nzolt\NetSuite\ItemRevisionSearchBasic
     */
    public function setObsoleteDate($obsoleteDate)
    {
      $this->obsoleteDate = $obsoleteDate;
      return $this;
    }

}
