<?php

namespace Nzolt\NetSuite;

class UnitsTypeSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $abbreviation
     */
    protected $abbreviation = null;

    /**
     * @var SearchColumnBooleanField[] $baseUnit
     */
    protected $baseUnit = null;

    /**
     * @var SearchColumnStringField[] $conversionRate
     */
    protected $conversionRate = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isInActive
     */
    protected $isInActive = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnStringField[] $pluralAbbreviation
     */
    protected $pluralAbbreviation = null;

    /**
     * @var SearchColumnStringField[] $pluralName
     */
    protected $pluralName = null;

    /**
     * @var SearchColumnStringField[] $unitName
     */
    protected $unitName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAbbreviation()
    {
      return $this->abbreviation;
    }

    /**
     * @param SearchColumnStringField[] $abbreviation
     * @return \Nzolt\NetSuite\UnitsTypeSearchRowBasic
     */
    public function setAbbreviation(array $abbreviation = null)
    {
      $this->abbreviation = $abbreviation;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getBaseUnit()
    {
      return $this->baseUnit;
    }

    /**
     * @param SearchColumnBooleanField[] $baseUnit
     * @return \Nzolt\NetSuite\UnitsTypeSearchRowBasic
     */
    public function setBaseUnit(array $baseUnit = null)
    {
      $this->baseUnit = $baseUnit;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getConversionRate()
    {
      return $this->conversionRate;
    }

    /**
     * @param SearchColumnStringField[] $conversionRate
     * @return \Nzolt\NetSuite\UnitsTypeSearchRowBasic
     */
    public function setConversionRate(array $conversionRate = null)
    {
      $this->conversionRate = $conversionRate;
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
     * @return \Nzolt\NetSuite\UnitsTypeSearchRowBasic
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
     * @return \Nzolt\NetSuite\UnitsTypeSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInActive()
    {
      return $this->isInActive;
    }

    /**
     * @param SearchColumnBooleanField[] $isInActive
     * @return \Nzolt\NetSuite\UnitsTypeSearchRowBasic
     */
    public function setIsInActive(array $isInActive = null)
    {
      $this->isInActive = $isInActive;
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
     * @return \Nzolt\NetSuite\UnitsTypeSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPluralAbbreviation()
    {
      return $this->pluralAbbreviation;
    }

    /**
     * @param SearchColumnStringField[] $pluralAbbreviation
     * @return \Nzolt\NetSuite\UnitsTypeSearchRowBasic
     */
    public function setPluralAbbreviation(array $pluralAbbreviation = null)
    {
      $this->pluralAbbreviation = $pluralAbbreviation;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPluralName()
    {
      return $this->pluralName;
    }

    /**
     * @param SearchColumnStringField[] $pluralName
     * @return \Nzolt\NetSuite\UnitsTypeSearchRowBasic
     */
    public function setPluralName(array $pluralName = null)
    {
      $this->pluralName = $pluralName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUnitName()
    {
      return $this->unitName;
    }

    /**
     * @param SearchColumnStringField[] $unitName
     * @return \Nzolt\NetSuite\UnitsTypeSearchRowBasic
     */
    public function setUnitName(array $unitName = null)
    {
      $this->unitName = $unitName;
      return $this;
    }

}
