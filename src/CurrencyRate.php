<?php

namespace Nzolt\NetSuite;

class CurrencyRate
{

    /**
     * @var RecordRef $baseCurrency
     */
    protected $baseCurrency = null;

    /**
     * @var RecordRef $transactionCurrency
     */
    protected $transactionCurrency = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var \DateTime $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @param RecordRef $baseCurrency
     * @param RecordRef $transactionCurrency
     * @param float $exchangeRate
     * @param \DateTime $effectiveDate
     * @param string $internalId
     */
    public function __construct($baseCurrency, $transactionCurrency, $exchangeRate, \DateTime $effectiveDate, $internalId)
    {
      $this->baseCurrency = $baseCurrency;
      $this->transactionCurrency = $transactionCurrency;
      $this->exchangeRate = $exchangeRate;
      $this->effectiveDate = $effectiveDate->format(\DateTime::ATOM);
      $this->internalId = $internalId;
    }

    /**
     * @return RecordRef
     */
    public function getBaseCurrency()
    {
      return $this->baseCurrency;
    }

    /**
     * @param RecordRef $baseCurrency
     * @return \Nzolt\NetSuite\CurrencyRate
     */
    public function setBaseCurrency($baseCurrency)
    {
      $this->baseCurrency = $baseCurrency;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransactionCurrency()
    {
      return $this->transactionCurrency;
    }

    /**
     * @param RecordRef $transactionCurrency
     * @return \Nzolt\NetSuite\CurrencyRate
     */
    public function setTransactionCurrency($transactionCurrency)
    {
      $this->transactionCurrency = $transactionCurrency;
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
     * @return \Nzolt\NetSuite\CurrencyRate
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
      if ($this->effectiveDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->effectiveDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $effectiveDate
     * @return \Nzolt\NetSuite\CurrencyRate
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
      $this->effectiveDate = $effectiveDate->format(\DateTime::ATOM);
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
     * @return \Nzolt\NetSuite\CurrencyRate
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
