<?php

namespace Nzolt\NetSuite;

class EmployeeRates
{

    /**
     * @var RecordRef $entityCurrency
     */
    protected $entityCurrency = null;

    /**
     * @var float $rate
     */
    protected $rate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getEntityCurrency()
    {
      return $this->entityCurrency;
    }

    /**
     * @param RecordRef $entityCurrency
     * @return \Nzolt\NetSuite\EmployeeRates
     */
    public function setEntityCurrency($entityCurrency)
    {
      $this->entityCurrency = $entityCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param float $rate
     * @return \Nzolt\NetSuite\EmployeeRates
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

}
