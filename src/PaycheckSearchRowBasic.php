<?php

namespace Nzolt\NetSuite;

class PaycheckSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $account
     */
    protected $account = null;

    /**
     * @var SearchColumnDateField[] $amendedDate
     */
    protected $amendedDate = null;

    /**
     * @var SearchColumnDoubleField[] $amount
     */
    protected $amount = null;

    /**
     * @var SearchColumnLongField[] $batchNumber
     */
    protected $batchNumber = null;

    /**
     * @var SearchColumnDateField[] $checkDate
     */
    protected $checkDate = null;

    /**
     * @var SearchColumnSelectField[] $employee
     */
    protected $employee = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnBooleanField[] $hasGLImpact
     */
    protected $hasGLImpact = null;

    /**
     * @var SearchColumnDoubleField[] $hours
     */
    protected $hours = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnSelectField[] $payrollItem
     */
    protected $payrollItem = null;

    /**
     * @var SearchColumnSelectField[] $payrollItemType
     */
    protected $payrollItemType = null;

    /**
     * @var SearchColumnDoubleField[] $subjectWages
     */
    protected $subjectWages = null;

    /**
     * @var SearchColumnDoubleField[] $taxableWages
     */
    protected $taxableWages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param SearchColumnSelectField[] $account
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setAccount(array $account = null)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getAmendedDate()
    {
      return $this->amendedDate;
    }

    /**
     * @param SearchColumnDateField[] $amendedDate
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setAmendedDate(array $amendedDate = null)
    {
      $this->amendedDate = $amendedDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param SearchColumnDoubleField[] $amount
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setAmount(array $amount = null)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getBatchNumber()
    {
      return $this->batchNumber;
    }

    /**
     * @param SearchColumnLongField[] $batchNumber
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setBatchNumber(array $batchNumber = null)
    {
      $this->batchNumber = $batchNumber;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCheckDate()
    {
      return $this->checkDate;
    }

    /**
     * @param SearchColumnDateField[] $checkDate
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setCheckDate(array $checkDate = null)
    {
      $this->checkDate = $checkDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEmployee()
    {
      return $this->employee;
    }

    /**
     * @param SearchColumnSelectField[] $employee
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setEmployee(array $employee = null)
    {
      $this->employee = $employee;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getHasGLImpact()
    {
      return $this->hasGLImpact;
    }

    /**
     * @param SearchColumnBooleanField[] $hasGLImpact
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setHasGLImpact(array $hasGLImpact = null)
    {
      $this->hasGLImpact = $hasGLImpact;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getHours()
    {
      return $this->hours;
    }

    /**
     * @param SearchColumnDoubleField[] $hours
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setHours(array $hours = null)
    {
      $this->hours = $hours;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPayrollItem()
    {
      return $this->payrollItem;
    }

    /**
     * @param SearchColumnSelectField[] $payrollItem
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setPayrollItem(array $payrollItem = null)
    {
      $this->payrollItem = $payrollItem;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPayrollItemType()
    {
      return $this->payrollItemType;
    }

    /**
     * @param SearchColumnSelectField[] $payrollItemType
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setPayrollItemType(array $payrollItemType = null)
    {
      $this->payrollItemType = $payrollItemType;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSubjectWages()
    {
      return $this->subjectWages;
    }

    /**
     * @param SearchColumnDoubleField[] $subjectWages
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setSubjectWages(array $subjectWages = null)
    {
      $this->subjectWages = $subjectWages;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTaxableWages()
    {
      return $this->taxableWages;
    }

    /**
     * @param SearchColumnDoubleField[] $taxableWages
     * @return \Nzolt\NetSuite\PaycheckSearchRowBasic
     */
    public function setTaxableWages(array $taxableWages = null)
    {
      $this->taxableWages = $taxableWages;
      return $this;
    }

}
