<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;

/**
 * UnitsTypeSearchBasic
 */
class UnitsTypeSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchStringField
     */
    protected $abbreviation;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $baseUnit;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $conversionRate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isInActive;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $pluralAbbreviation;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $pluralName;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $unitName;

    static $paramtypesmap = array(
    	"abbreviation" => "SearchStringField",
    	"baseUnit" => "SearchBooleanField",
    	"conversionRate" => "SearchStringField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInActive" => "SearchBooleanField",
    	"name" => "SearchStringField",
    	"pluralAbbreviation" => "SearchStringField",
    	"pluralName" => "SearchStringField",
    	"unitName" => "SearchStringField",
    );

    /**
     * Set abbreviation
     *
     * @param SearchStringField $abbreviation
     * @return UnitsTypeSearchBasic
     */
    public function setAbbreviation(SearchStringField $abbreviation) {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    /**
     * Get abbreviation
     *
     * @return SearchStringField
     */
    public function getAbbreviation() {
        return $this->abbreviation;
    }


    /**
     * Set baseUnit
     *
     * @param SearchBooleanField $baseUnit
     * @return UnitsTypeSearchBasic
     */
    public function setBaseUnit(SearchBooleanField $baseUnit) {
        $this->baseUnit = $baseUnit;
        return $this;
    }

    /**
     * Get baseUnit
     *
     * @return SearchBooleanField
     */
    public function getBaseUnit() {
        return $this->baseUnit;
    }


    /**
     * Set conversionRate
     *
     * @param SearchStringField $conversionRate
     * @return UnitsTypeSearchBasic
     */
    public function setConversionRate(SearchStringField $conversionRate) {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    /**
     * Get conversionRate
     *
     * @return SearchStringField
     */
    public function getConversionRate() {
        return $this->conversionRate;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return UnitsTypeSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return UnitsTypeSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return UnitsTypeSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return UnitsTypeSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set isInActive
     *
     * @param SearchBooleanField $isInActive
     * @return UnitsTypeSearchBasic
     */
    public function setIsInActive(SearchBooleanField $isInActive) {
        $this->isInActive = $isInActive;
        return $this;
    }

    /**
     * Get isInActive
     *
     * @return SearchBooleanField
     */
    public function getIsInActive() {
        return $this->isInActive;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return UnitsTypeSearchBasic
     */
    public function setName(SearchStringField $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return SearchStringField
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set pluralAbbreviation
     *
     * @param SearchStringField $pluralAbbreviation
     * @return UnitsTypeSearchBasic
     */
    public function setPluralAbbreviation(SearchStringField $pluralAbbreviation) {
        $this->pluralAbbreviation = $pluralAbbreviation;
        return $this;
    }

    /**
     * Get pluralAbbreviation
     *
     * @return SearchStringField
     */
    public function getPluralAbbreviation() {
        return $this->pluralAbbreviation;
    }


    /**
     * Set pluralName
     *
     * @param SearchStringField $pluralName
     * @return UnitsTypeSearchBasic
     */
    public function setPluralName(SearchStringField $pluralName) {
        $this->pluralName = $pluralName;
        return $this;
    }

    /**
     * Get pluralName
     *
     * @return SearchStringField
     */
    public function getPluralName() {
        return $this->pluralName;
    }


    /**
     * Set unitName
     *
     * @param SearchStringField $unitName
     * @return UnitsTypeSearchBasic
     */
    public function setUnitName(SearchStringField $unitName) {
        $this->unitName = $unitName;
        return $this;
    }

    /**
     * Get unitName
     *
     * @return SearchStringField
     */
    public function getUnitName() {
        return $this->unitName;
    }

}