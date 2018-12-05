<?php

namespace Nzolt\NetSuite;

class CurrencyRateFilter
{

    /**
     * @var RecordRef $baseCurrency
     */
    protected $baseCurrency = null;

    /**
     * @var RecordRef $fromCurrency
     */
    protected $fromCurrency = null;

    /**
     * @var \DateTime $effectiveDate
     */
    protected $effectiveDate = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\CurrencyRateFilter
     */
    public function setBaseCurrency($baseCurrency)
    {
      $this->baseCurrency = $baseCurrency;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFromCurrency()
    {
      return $this->fromCurrency;
    }

    /**
     * @param RecordRef $fromCurrency
     * @return \Nzolt\NetSuite\CurrencyRateFilter
     */
    public function setFromCurrency($fromCurrency)
    {
      $this->fromCurrency = $fromCurrency;
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
     * @return \Nzolt\NetSuite\CurrencyRateFilter
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
      if ($effectiveDate == null) {
       $this->effectiveDate = null;
      } else {
        $this->effectiveDate = $effectiveDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
