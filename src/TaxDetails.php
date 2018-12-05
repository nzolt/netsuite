<?php

namespace Nzolt\NetSuite;

class TaxDetails
{

    /**
     * @var string $taxDetailsReference
     */
    protected $taxDetailsReference = null;

    /**
     * @var float $netAmount
     */
    protected $netAmount = null;

    /**
     * @var float $grossAmount
     */
    protected $grossAmount = null;

    /**
     * @var RecordRef $taxType
     */
    protected $taxType = null;

    /**
     * @var RecordRef $taxCode
     */
    protected $taxCode = null;

    /**
     * @var float $taxBasis
     */
    protected $taxBasis = null;

    /**
     * @var float $taxRate
     */
    protected $taxRate = null;

    /**
     * @var float $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var string $calcDetail
     */
    protected $calcDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTaxDetailsReference()
    {
      return $this->taxDetailsReference;
    }

    /**
     * @param string $taxDetailsReference
     * @return \Nzolt\NetSuite\TaxDetails
     */
    public function setTaxDetailsReference($taxDetailsReference)
    {
      $this->taxDetailsReference = $taxDetailsReference;
      return $this;
    }

    /**
     * @return float
     */
    public function getNetAmount()
    {
      return $this->netAmount;
    }

    /**
     * @param float $netAmount
     * @return \Nzolt\NetSuite\TaxDetails
     */
    public function setNetAmount($netAmount)
    {
      $this->netAmount = $netAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getGrossAmount()
    {
      return $this->grossAmount;
    }

    /**
     * @param float $grossAmount
     * @return \Nzolt\NetSuite\TaxDetails
     */
    public function setGrossAmount($grossAmount)
    {
      $this->grossAmount = $grossAmount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxType()
    {
      return $this->taxType;
    }

    /**
     * @param RecordRef $taxType
     * @return \Nzolt\NetSuite\TaxDetails
     */
    public function setTaxType($taxType)
    {
      $this->taxType = $taxType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxCode()
    {
      return $this->taxCode;
    }

    /**
     * @param RecordRef $taxCode
     * @return \Nzolt\NetSuite\TaxDetails
     */
    public function setTaxCode($taxCode)
    {
      $this->taxCode = $taxCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxBasis()
    {
      return $this->taxBasis;
    }

    /**
     * @param float $taxBasis
     * @return \Nzolt\NetSuite\TaxDetails
     */
    public function setTaxBasis($taxBasis)
    {
      $this->taxBasis = $taxBasis;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
      return $this->taxRate;
    }

    /**
     * @param float $taxRate
     * @return \Nzolt\NetSuite\TaxDetails
     */
    public function setTaxRate($taxRate)
    {
      $this->taxRate = $taxRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount()
    {
      return $this->taxAmount;
    }

    /**
     * @param float $taxAmount
     * @return \Nzolt\NetSuite\TaxDetails
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCalcDetail()
    {
      return $this->calcDetail;
    }

    /**
     * @param string $calcDetail
     * @return \Nzolt\NetSuite\TaxDetails
     */
    public function setCalcDetail($calcDetail)
    {
      $this->calcDetail = $calcDetail;
      return $this;
    }

}
