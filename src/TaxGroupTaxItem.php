<?php

namespace Nzolt\NetSuite;

class TaxGroupTaxItem
{

    /**
     * @var RecordRef $taxName
     */
    protected $taxName = null;

    /**
     * @var float $rate
     */
    protected $rate = null;

    /**
     * @var float $basis
     */
    protected $basis = null;

    /**
     * @var string $taxType
     */
    protected $taxType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getTaxName()
    {
      return $this->taxName;
    }

    /**
     * @param RecordRef $taxName
     * @return \Nzolt\NetSuite\TaxGroupTaxItem
     */
    public function setTaxName($taxName)
    {
      $this->taxName = $taxName;
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
     * @return \Nzolt\NetSuite\TaxGroupTaxItem
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return float
     */
    public function getBasis()
    {
      return $this->basis;
    }

    /**
     * @param float $basis
     * @return \Nzolt\NetSuite\TaxGroupTaxItem
     */
    public function setBasis($basis)
    {
      $this->basis = $basis;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxType()
    {
      return $this->taxType;
    }

    /**
     * @param string $taxType
     * @return \Nzolt\NetSuite\TaxGroupTaxItem
     */
    public function setTaxType($taxType)
    {
      $this->taxType = $taxType;
      return $this;
    }

}
