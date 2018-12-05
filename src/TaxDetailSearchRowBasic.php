<?php

namespace Nzolt\NetSuite;

class TaxDetailSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $account
     */
    protected $account = null;

    /**
     * @var SearchColumnStringField[] $details
     */
    protected $details = null;

    /**
     * @var SearchColumnLongField[] $lineNumber
     */
    protected $lineNumber = null;

    /**
     * @var SearchColumnDoubleField[] $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var SearchColumnDoubleField[] $taxBasis
     */
    protected $taxBasis = null;

    /**
     * @var SearchColumnSelectField[] $taxCode
     */
    protected $taxCode = null;

    /**
     * @var SearchColumnDoubleField[] $taxRate
     */
    protected $taxRate = null;

    /**
     * @var SearchColumnSelectField[] $taxType
     */
    protected $taxType = null;

    /**
     * @var SearchColumnLongField[] $tranId
     */
    protected $tranId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param SearchColumnStringField[] $account
     * @return \Nzolt\NetSuite\TaxDetailSearchRowBasic
     */
    public function setAccount(array $account = null)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDetails()
    {
      return $this->details;
    }

    /**
     * @param SearchColumnStringField[] $details
     * @return \Nzolt\NetSuite\TaxDetailSearchRowBasic
     */
    public function setDetails(array $details = null)
    {
      $this->details = $details;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLineNumber()
    {
      return $this->lineNumber;
    }

    /**
     * @param SearchColumnLongField[] $lineNumber
     * @return \Nzolt\NetSuite\TaxDetailSearchRowBasic
     */
    public function setLineNumber(array $lineNumber = null)
    {
      $this->lineNumber = $lineNumber;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTaxAmount()
    {
      return $this->taxAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $taxAmount
     * @return \Nzolt\NetSuite\TaxDetailSearchRowBasic
     */
    public function setTaxAmount(array $taxAmount = null)
    {
      $this->taxAmount = $taxAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTaxBasis()
    {
      return $this->taxBasis;
    }

    /**
     * @param SearchColumnDoubleField[] $taxBasis
     * @return \Nzolt\NetSuite\TaxDetailSearchRowBasic
     */
    public function setTaxBasis(array $taxBasis = null)
    {
      $this->taxBasis = $taxBasis;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxCode()
    {
      return $this->taxCode;
    }

    /**
     * @param SearchColumnSelectField[] $taxCode
     * @return \Nzolt\NetSuite\TaxDetailSearchRowBasic
     */
    public function setTaxCode(array $taxCode = null)
    {
      $this->taxCode = $taxCode;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTaxRate()
    {
      return $this->taxRate;
    }

    /**
     * @param SearchColumnDoubleField[] $taxRate
     * @return \Nzolt\NetSuite\TaxDetailSearchRowBasic
     */
    public function setTaxRate(array $taxRate = null)
    {
      $this->taxRate = $taxRate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxType()
    {
      return $this->taxType;
    }

    /**
     * @param SearchColumnSelectField[] $taxType
     * @return \Nzolt\NetSuite\TaxDetailSearchRowBasic
     */
    public function setTaxType(array $taxType = null)
    {
      $this->taxType = $taxType;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param SearchColumnLongField[] $tranId
     * @return \Nzolt\NetSuite\TaxDetailSearchRowBasic
     */
    public function setTranId(array $tranId = null)
    {
      $this->tranId = $tranId;
      return $this;
    }

}
