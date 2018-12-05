<?php

namespace Nzolt\NetSuite;

class Currency extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $symbol
     */
    protected $symbol = null;

    /**
     * @var boolean $isBaseCurrency
     */
    protected $isBaseCurrency = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var boolean $overrideCurrencyFormat
     */
    protected $overrideCurrencyFormat = null;

    /**
     * @var string $displaySymbol
     */
    protected $displaySymbol = null;

    /**
     * @var CurrencySymbolPlacement $symbolPlacement
     */
    protected $symbolPlacement = null;

    /**
     * @var CurrencyLocale $locale
     */
    protected $locale = null;

    /**
     * @var string $formatSample
     */
    protected $formatSample = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var CurrencyFxRateUpdateTimezone $fxRateUpdateTimezone
     */
    protected $fxRateUpdateTimezone = null;

    /**
     * @var boolean $inclInFxRateUpdates
     */
    protected $inclInFxRateUpdates = null;

    /**
     * @var CurrencyCurrencyPrecision $currencyPrecision
     */
    protected $currencyPrecision = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\Currency
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
      return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return \Nzolt\NetSuite\Currency
     */
    public function setSymbol($symbol)
    {
      $this->symbol = $symbol;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBaseCurrency()
    {
      return $this->isBaseCurrency;
    }

    /**
     * @param boolean $isBaseCurrency
     * @return \Nzolt\NetSuite\Currency
     */
    public function setIsBaseCurrency($isBaseCurrency)
    {
      $this->isBaseCurrency = $isBaseCurrency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\Currency
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideCurrencyFormat()
    {
      return $this->overrideCurrencyFormat;
    }

    /**
     * @param boolean $overrideCurrencyFormat
     * @return \Nzolt\NetSuite\Currency
     */
    public function setOverrideCurrencyFormat($overrideCurrencyFormat)
    {
      $this->overrideCurrencyFormat = $overrideCurrencyFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplaySymbol()
    {
      return $this->displaySymbol;
    }

    /**
     * @param string $displaySymbol
     * @return \Nzolt\NetSuite\Currency
     */
    public function setDisplaySymbol($displaySymbol)
    {
      $this->displaySymbol = $displaySymbol;
      return $this;
    }

    /**
     * @return CurrencySymbolPlacement
     */
    public function getSymbolPlacement()
    {
      return $this->symbolPlacement;
    }

    /**
     * @param CurrencySymbolPlacement $symbolPlacement
     * @return \Nzolt\NetSuite\Currency
     */
    public function setSymbolPlacement($symbolPlacement)
    {
      $this->symbolPlacement = $symbolPlacement;
      return $this;
    }

    /**
     * @return CurrencyLocale
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param CurrencyLocale $locale
     * @return \Nzolt\NetSuite\Currency
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormatSample()
    {
      return $this->formatSample;
    }

    /**
     * @param string $formatSample
     * @return \Nzolt\NetSuite\Currency
     */
    public function setFormatSample($formatSample)
    {
      $this->formatSample = $formatSample;
      return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param float $exchangeRate
     * @return \Nzolt\NetSuite\Currency
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return CurrencyFxRateUpdateTimezone
     */
    public function getFxRateUpdateTimezone()
    {
      return $this->fxRateUpdateTimezone;
    }

    /**
     * @param CurrencyFxRateUpdateTimezone $fxRateUpdateTimezone
     * @return \Nzolt\NetSuite\Currency
     */
    public function setFxRateUpdateTimezone($fxRateUpdateTimezone)
    {
      $this->fxRateUpdateTimezone = $fxRateUpdateTimezone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInclInFxRateUpdates()
    {
      return $this->inclInFxRateUpdates;
    }

    /**
     * @param boolean $inclInFxRateUpdates
     * @return \Nzolt\NetSuite\Currency
     */
    public function setInclInFxRateUpdates($inclInFxRateUpdates)
    {
      $this->inclInFxRateUpdates = $inclInFxRateUpdates;
      return $this;
    }

    /**
     * @return CurrencyCurrencyPrecision
     */
    public function getCurrencyPrecision()
    {
      return $this->currencyPrecision;
    }

    /**
     * @param CurrencyCurrencyPrecision $currencyPrecision
     * @return \Nzolt\NetSuite\Currency
     */
    public function setCurrencyPrecision($currencyPrecision)
    {
      $this->currencyPrecision = $currencyPrecision;
      return $this;
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
     * @return \Nzolt\NetSuite\Currency
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\Currency
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
