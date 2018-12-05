<?php

namespace Nzolt\NetSuite;

class PaycheckSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $account
     */
    protected $account = null;

    /**
     * @var SearchLongField $batchNumber
     */
    protected $batchNumber = null;

    /**
     * @var SearchDateField $checkDate
     */
    protected $checkDate = null;

    /**
     * @var SearchMultiSelectField $employee
     */
    protected $employee = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchBooleanField $hasGLImpact
     */
    protected $hasGLImpact = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchMultiSelectField $payrollItem
     */
    protected $payrollItem = null;

    /**
     * @var SearchMultiSelectField $payrollItemType
     */
    protected $payrollItemType = null;

    
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
     * @return \Nzolt\NetSuite\PaycheckSearchBasic
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getBatchNumber()
    {
      return $this->batchNumber;
    }

    /**
     * @param SearchLongField $batchNumber
     * @return \Nzolt\NetSuite\PaycheckSearchBasic
     */
    public function setBatchNumber($batchNumber)
    {
      $this->batchNumber = $batchNumber;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCheckDate()
    {
      return $this->checkDate;
    }

    /**
     * @param SearchDateField $checkDate
     * @return \Nzolt\NetSuite\PaycheckSearchBasic
     */
    public function setCheckDate($checkDate)
    {
      $this->checkDate = $checkDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEmployee()
    {
      return $this->employee;
    }

    /**
     * @param SearchMultiSelectField $employee
     * @return \Nzolt\NetSuite\PaycheckSearchBasic
     */
    public function setEmployee($employee)
    {
      $this->employee = $employee;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\PaycheckSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\PaycheckSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getHasGLImpact()
    {
      return $this->hasGLImpact;
    }

    /**
     * @param SearchBooleanField $hasGLImpact
     * @return \Nzolt\NetSuite\PaycheckSearchBasic
     */
    public function setHasGLImpact($hasGLImpact)
    {
      $this->hasGLImpact = $hasGLImpact;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\PaycheckSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\PaycheckSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPayrollItem()
    {
      return $this->payrollItem;
    }

    /**
     * @param SearchMultiSelectField $payrollItem
     * @return \Nzolt\NetSuite\PaycheckSearchBasic
     */
    public function setPayrollItem($payrollItem)
    {
      $this->payrollItem = $payrollItem;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPayrollItemType()
    {
      return $this->payrollItemType;
    }

    /**
     * @param SearchMultiSelectField $payrollItemType
     * @return \Nzolt\NetSuite\PaycheckSearchBasic
     */
    public function setPayrollItemType($payrollItemType)
    {
      $this->payrollItemType = $payrollItemType;
      return $this;
    }

}
