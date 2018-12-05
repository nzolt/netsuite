<?php

namespace Nzolt\NetSuite;

class TaxDetailSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $account
     */
    protected $account = null;

    /**
     * @var SearchLongField $lineNumber
     */
    protected $lineNumber = null;

    /**
     * @var SearchDoubleField $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var SearchDoubleField $taxBasis
     */
    protected $taxBasis = null;

    /**
     * @var SearchMultiSelectField $taxCode
     */
    protected $taxCode = null;

    /**
     * @var SearchDoubleField $taxRate
     */
    protected $taxRate = null;

    /**
     * @var SearchMultiSelectField $taxType
     */
    protected $taxType = null;

    /**
     * @var SearchMultiSelectField $tranId
     */
    protected $tranId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param SearchMultiSelectField $account
     * @return \Nzolt\NetSuite\TaxDetailSearchBasic
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLineNumber()
    {
      return $this->lineNumber;
    }

    /**
     * @param SearchLongField $lineNumber
     * @return \Nzolt\NetSuite\TaxDetailSearchBasic
     */
    public function setLineNumber($lineNumber)
    {
      $this->lineNumber = $lineNumber;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTaxAmount()
    {
      return $this->taxAmount;
    }

    /**
     * @param SearchDoubleField $taxAmount
     * @return \Nzolt\NetSuite\TaxDetailSearchBasic
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTaxBasis()
    {
      return $this->taxBasis;
    }

    /**
     * @param SearchDoubleField $taxBasis
     * @return \Nzolt\NetSuite\TaxDetailSearchBasic
     */
    public function setTaxBasis($taxBasis)
    {
      $this->taxBasis = $taxBasis;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxCode()
    {
      return $this->taxCode;
    }

    /**
     * @param SearchMultiSelectField $taxCode
     * @return \Nzolt\NetSuite\TaxDetailSearchBasic
     */
    public function setTaxCode($taxCode)
    {
      $this->taxCode = $taxCode;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTaxRate()
    {
      return $this->taxRate;
    }

    /**
     * @param SearchDoubleField $taxRate
     * @return \Nzolt\NetSuite\TaxDetailSearchBasic
     */
    public function setTaxRate($taxRate)
    {
      $this->taxRate = $taxRate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxType()
    {
      return $this->taxType;
    }

    /**
     * @param SearchMultiSelectField $taxType
     * @return \Nzolt\NetSuite\TaxDetailSearchBasic
     */
    public function setTaxType($taxType)
    {
      $this->taxType = $taxType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param SearchMultiSelectField $tranId
     * @return \Nzolt\NetSuite\TaxDetailSearchBasic
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

}
