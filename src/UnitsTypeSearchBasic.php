<?php

namespace Nzolt\NetSuite;

class UnitsTypeSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchStringField $abbreviation
     */
    protected $abbreviation = null;

    /**
     * @var SearchBooleanField $baseUnit
     */
    protected $baseUnit = null;

    /**
     * @var SearchStringField $conversionRate
     */
    protected $conversionRate = null;

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
     * @var SearchBooleanField $isInActive
     */
    protected $isInActive = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchStringField $pluralAbbreviation
     */
    protected $pluralAbbreviation = null;

    /**
     * @var SearchStringField $pluralName
     */
    protected $pluralName = null;

    /**
     * @var SearchStringField $unitName
     */
    protected $unitName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchStringField
     */
    public function getAbbreviation()
    {
      return $this->abbreviation;
    }

    /**
     * @param SearchStringField $abbreviation
     * @return \Nzolt\NetSuite\UnitsTypeSearchBasic
     */
    public function setAbbreviation($abbreviation)
    {
      $this->abbreviation = $abbreviation;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBaseUnit()
    {
      return $this->baseUnit;
    }

    /**
     * @param SearchBooleanField $baseUnit
     * @return \Nzolt\NetSuite\UnitsTypeSearchBasic
     */
    public function setBaseUnit($baseUnit)
    {
      $this->baseUnit = $baseUnit;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getConversionRate()
    {
      return $this->conversionRate;
    }

    /**
     * @param SearchStringField $conversionRate
     * @return \Nzolt\NetSuite\UnitsTypeSearchBasic
     */
    public function setConversionRate($conversionRate)
    {
      $this->conversionRate = $conversionRate;
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
     * @return \Nzolt\NetSuite\UnitsTypeSearchBasic
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
     * @return \Nzolt\NetSuite\UnitsTypeSearchBasic
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
     * @return \Nzolt\NetSuite\UnitsTypeSearchBasic
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
     * @return \Nzolt\NetSuite\UnitsTypeSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInActive()
    {
      return $this->isInActive;
    }

    /**
     * @param SearchBooleanField $isInActive
     * @return \Nzolt\NetSuite\UnitsTypeSearchBasic
     */
    public function setIsInActive($isInActive)
    {
      $this->isInActive = $isInActive;
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
     * @return \Nzolt\NetSuite\UnitsTypeSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPluralAbbreviation()
    {
      return $this->pluralAbbreviation;
    }

    /**
     * @param SearchStringField $pluralAbbreviation
     * @return \Nzolt\NetSuite\UnitsTypeSearchBasic
     */
    public function setPluralAbbreviation($pluralAbbreviation)
    {
      $this->pluralAbbreviation = $pluralAbbreviation;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPluralName()
    {
      return $this->pluralName;
    }

    /**
     * @param SearchStringField $pluralName
     * @return \Nzolt\NetSuite\UnitsTypeSearchBasic
     */
    public function setPluralName($pluralName)
    {
      $this->pluralName = $pluralName;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getUnitName()
    {
      return $this->unitName;
    }

    /**
     * @param SearchStringField $unitName
     * @return \Nzolt\NetSuite\UnitsTypeSearchBasic
     */
    public function setUnitName($unitName)
    {
      $this->unitName = $unitName;
      return $this;
    }

}
