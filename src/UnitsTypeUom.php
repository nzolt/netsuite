<?php

namespace Nzolt\NetSuite;

class UnitsTypeUom
{

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $unitName
     */
    protected $unitName = null;

    /**
     * @var string $pluralName
     */
    protected $pluralName = null;

    /**
     * @var string $abbreviation
     */
    protected $abbreviation = null;

    /**
     * @var string $pluralAbbreviation
     */
    protected $pluralAbbreviation = null;

    /**
     * @var float $conversionRate
     */
    protected $conversionRate = null;

    /**
     * @var boolean $baseUnit
     */
    protected $baseUnit = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\UnitsTypeUom
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitName()
    {
      return $this->unitName;
    }

    /**
     * @param string $unitName
     * @return \Nzolt\NetSuite\UnitsTypeUom
     */
    public function setUnitName($unitName)
    {
      $this->unitName = $unitName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPluralName()
    {
      return $this->pluralName;
    }

    /**
     * @param string $pluralName
     * @return \Nzolt\NetSuite\UnitsTypeUom
     */
    public function setPluralName($pluralName)
    {
      $this->pluralName = $pluralName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAbbreviation()
    {
      return $this->abbreviation;
    }

    /**
     * @param string $abbreviation
     * @return \Nzolt\NetSuite\UnitsTypeUom
     */
    public function setAbbreviation($abbreviation)
    {
      $this->abbreviation = $abbreviation;
      return $this;
    }

    /**
     * @return string
     */
    public function getPluralAbbreviation()
    {
      return $this->pluralAbbreviation;
    }

    /**
     * @param string $pluralAbbreviation
     * @return \Nzolt\NetSuite\UnitsTypeUom
     */
    public function setPluralAbbreviation($pluralAbbreviation)
    {
      $this->pluralAbbreviation = $pluralAbbreviation;
      return $this;
    }

    /**
     * @return float
     */
    public function getConversionRate()
    {
      return $this->conversionRate;
    }

    /**
     * @param float $conversionRate
     * @return \Nzolt\NetSuite\UnitsTypeUom
     */
    public function setConversionRate($conversionRate)
    {
      $this->conversionRate = $conversionRate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBaseUnit()
    {
      return $this->baseUnit;
    }

    /**
     * @param boolean $baseUnit
     * @return \Nzolt\NetSuite\UnitsTypeUom
     */
    public function setBaseUnit($baseUnit)
    {
      $this->baseUnit = $baseUnit;
      return $this;
    }

}
