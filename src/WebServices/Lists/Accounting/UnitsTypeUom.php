<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * UnitsTypeUom
 */
class UnitsTypeUom {

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $unitName;

    /**
     * @access public
     * @var string
     */
    protected $pluralName;

    /**
     * @access public
     * @var string
     */
    protected $abbreviation;

    /**
     * @access public
     * @var string
     */
    protected $pluralAbbreviation;

    /**
     * @access public
     * @var float
     */
    protected $conversionRate;

    /**
     * @access public
     * @var boolean
     */
    protected $baseUnit;

    static $paramtypesmap = array(
    	"internalId" => "string",
    	"unitName" => "string",
    	"pluralName" => "string",
    	"abbreviation" => "string",
    	"pluralAbbreviation" => "string",
    	"conversionRate" => "float",
    	"baseUnit" => "boolean",
    );

    /**
     * Set internalId
     *
     * @param string $internalId
     * @return UnitsTypeUom
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set unitName
     *
     * @param string $unitName
     * @return UnitsTypeUom
     */
    public function setUnitName($unitName) {
        $this->unitName = $unitName;
        return $this;
    }

    /**
     * Get unitName
     *
     * @return string
     */
    public function getUnitName() {
        return $this->unitName;
    }


    /**
     * Set pluralName
     *
     * @param string $pluralName
     * @return UnitsTypeUom
     */
    public function setPluralName($pluralName) {
        $this->pluralName = $pluralName;
        return $this;
    }

    /**
     * Get pluralName
     *
     * @return string
     */
    public function getPluralName() {
        return $this->pluralName;
    }


    /**
     * Set abbreviation
     *
     * @param string $abbreviation
     * @return UnitsTypeUom
     */
    public function setAbbreviation($abbreviation) {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    /**
     * Get abbreviation
     *
     * @return string
     */
    public function getAbbreviation() {
        return $this->abbreviation;
    }


    /**
     * Set pluralAbbreviation
     *
     * @param string $pluralAbbreviation
     * @return UnitsTypeUom
     */
    public function setPluralAbbreviation($pluralAbbreviation) {
        $this->pluralAbbreviation = $pluralAbbreviation;
        return $this;
    }

    /**
     * Get pluralAbbreviation
     *
     * @return string
     */
    public function getPluralAbbreviation() {
        return $this->pluralAbbreviation;
    }


    /**
     * Set conversionRate
     *
     * @param float $conversionRate
     * @return UnitsTypeUom
     */
    public function setConversionRate($conversionRate) {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    /**
     * Get conversionRate
     *
     * @return float
     */
    public function getConversionRate() {
        return $this->conversionRate;
    }


    /**
     * Set baseUnit
     *
     * @param boolean $baseUnit
     * @return UnitsTypeUom
     */
    public function setBaseUnit($baseUnit) {
        $this->baseUnit = $baseUnit;
        return $this;
    }

    /**
     * Get baseUnit
     *
     * @return boolean
     */
    public function getBaseUnit() {
        return $this->baseUnit;
    }

}