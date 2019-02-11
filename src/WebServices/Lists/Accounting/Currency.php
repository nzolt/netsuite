<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\CurrencySymbolPlacement;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\CurrencyLocale;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\CurrencyFxRateUpdateTimezone;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\CurrencyCurrencyPrecision;

/**
 * Currency
 */
class Currency extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var string
     */
    protected $symbol;

    /**
     * @access public
     * @var boolean
     */
    protected $isBaseCurrency;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var boolean
     */
    protected $overrideCurrencyFormat;

    /**
     * @access public
     * @var string
     */
    protected $displaySymbol;

    /**
     * @access public
     * @var CurrencySymbolPlacement
     */
    protected $symbolPlacement;

    /**
     * @access public
     * @var CurrencyLocale
     */
    protected $locale;

    /**
     * @access public
     * @var string
     */
    protected $formatSample;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var CurrencyFxRateUpdateTimezone
     */
    protected $fxRateUpdateTimezone;

    /**
     * @access public
     * @var boolean
     */
    protected $inclInFxRateUpdates;

    /**
     * @access public
     * @var CurrencyCurrencyPrecision
     */
    protected $currencyPrecision;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"name" => "string",
    	"symbol" => "string",
    	"isBaseCurrency" => "boolean",
    	"isInactive" => "boolean",
    	"overrideCurrencyFormat" => "boolean",
    	"displaySymbol" => "string",
    	"symbolPlacement" => "CurrencySymbolPlacement",
    	"locale" => "CurrencyLocale",
    	"formatSample" => "string",
    	"exchangeRate" => "float",
    	"fxRateUpdateTimezone" => "CurrencyFxRateUpdateTimezone",
    	"inclInFxRateUpdates" => "boolean",
    	"currencyPrecision" => "CurrencyCurrencyPrecision",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return Currency
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set symbol
     *
     * @param string $symbol
     * @return Currency
     */
    public function setSymbol($symbol) {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol() {
        return $this->symbol;
    }


    /**
     * Set isBaseCurrency
     *
     * @param boolean $isBaseCurrency
     * @return Currency
     */
    public function setIsBaseCurrency($isBaseCurrency) {
        $this->isBaseCurrency = $isBaseCurrency;
        return $this;
    }

    /**
     * Get isBaseCurrency
     *
     * @return boolean
     */
    public function getIsBaseCurrency() {
        return $this->isBaseCurrency;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return Currency
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set overrideCurrencyFormat
     *
     * @param boolean $overrideCurrencyFormat
     * @return Currency
     */
    public function setOverrideCurrencyFormat($overrideCurrencyFormat) {
        $this->overrideCurrencyFormat = $overrideCurrencyFormat;
        return $this;
    }

    /**
     * Get overrideCurrencyFormat
     *
     * @return boolean
     */
    public function getOverrideCurrencyFormat() {
        return $this->overrideCurrencyFormat;
    }


    /**
     * Set displaySymbol
     *
     * @param string $displaySymbol
     * @return Currency
     */
    public function setDisplaySymbol($displaySymbol) {
        $this->displaySymbol = $displaySymbol;
        return $this;
    }

    /**
     * Get displaySymbol
     *
     * @return string
     */
    public function getDisplaySymbol() {
        return $this->displaySymbol;
    }


    /**
     * Set symbolPlacement
     *
     * @param CurrencySymbolPlacement $symbolPlacement
     * @return Currency
     */
    public function setSymbolPlacement(CurrencySymbolPlacement $symbolPlacement) {
        $this->symbolPlacement = $symbolPlacement;
        return $this;
    }

    /**
     * Get symbolPlacement
     *
     * @return CurrencySymbolPlacement
     */
    public function getSymbolPlacement() {
        return $this->symbolPlacement;
    }


    /**
     * Set locale
     *
     * @param CurrencyLocale $locale
     * @return Currency
     */
    public function setLocale(CurrencyLocale $locale) {
        $this->locale = $locale;
        return $this;
    }

    /**
     * Get locale
     *
     * @return CurrencyLocale
     */
    public function getLocale() {
        return $this->locale;
    }


    /**
     * Set formatSample
     *
     * @param string $formatSample
     * @return Currency
     */
    public function setFormatSample($formatSample) {
        $this->formatSample = $formatSample;
        return $this;
    }

    /**
     * Get formatSample
     *
     * @return string
     */
    public function getFormatSample() {
        return $this->formatSample;
    }


    /**
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return Currency
     */
    public function setExchangeRate($exchangeRate) {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Get exchangeRate
     *
     * @return float
     */
    public function getExchangeRate() {
        return $this->exchangeRate;
    }


    /**
     * Set fxRateUpdateTimezone
     *
     * @param CurrencyFxRateUpdateTimezone $fxRateUpdateTimezone
     * @return Currency
     */
    public function setFxRateUpdateTimezone(CurrencyFxRateUpdateTimezone $fxRateUpdateTimezone) {
        $this->fxRateUpdateTimezone = $fxRateUpdateTimezone;
        return $this;
    }

    /**
     * Get fxRateUpdateTimezone
     *
     * @return CurrencyFxRateUpdateTimezone
     */
    public function getFxRateUpdateTimezone() {
        return $this->fxRateUpdateTimezone;
    }


    /**
     * Set inclInFxRateUpdates
     *
     * @param boolean $inclInFxRateUpdates
     * @return Currency
     */
    public function setInclInFxRateUpdates($inclInFxRateUpdates) {
        $this->inclInFxRateUpdates = $inclInFxRateUpdates;
        return $this;
    }

    /**
     * Get inclInFxRateUpdates
     *
     * @return boolean
     */
    public function getInclInFxRateUpdates() {
        return $this->inclInFxRateUpdates;
    }


    /**
     * Set currencyPrecision
     *
     * @param CurrencyCurrencyPrecision $currencyPrecision
     * @return Currency
     */
    public function setCurrencyPrecision(CurrencyCurrencyPrecision $currencyPrecision) {
        $this->currencyPrecision = $currencyPrecision;
        return $this;
    }

    /**
     * Get currencyPrecision
     *
     * @return CurrencyCurrencyPrecision
     */
    public function getCurrencyPrecision() {
        return $this->currencyPrecision;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return Currency
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
     * Set externalId
     *
     * @param string $externalId
     * @return Currency
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}