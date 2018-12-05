<?php

namespace Nzolt\NetSuite;

class ConsolidatedExchangeRateSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $fromSubsidiary
     */
    protected $fromSubsidiary = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isDerivedRate
     */
    protected $isDerivedRate = null;

    /**
     * @var SearchMultiSelectField $period
     */
    protected $period = null;

    /**
     * @var SearchDateField $periodStartDate
     */
    protected $periodStartDate = null;

    /**
     * @var SearchMultiSelectField $toSubsidiary
     */
    protected $toSubsidiary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBook()
    {
      return $this->accountingBook;
    }

    /**
     * @param SearchMultiSelectField $accountingBook
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchBasic
     */
    public function setAccountingBook($accountingBook)
    {
      $this->accountingBook = $accountingBook;
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
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchBasic
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
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFromSubsidiary()
    {
      return $this->fromSubsidiary;
    }

    /**
     * @param SearchMultiSelectField $fromSubsidiary
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchBasic
     */
    public function setFromSubsidiary($fromSubsidiary)
    {
      $this->fromSubsidiary = $fromSubsidiary;
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
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchBasic
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
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDerivedRate()
    {
      return $this->isDerivedRate;
    }

    /**
     * @param SearchBooleanField $isDerivedRate
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchBasic
     */
    public function setIsDerivedRate($isDerivedRate)
    {
      $this->isDerivedRate = $isDerivedRate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPeriod()
    {
      return $this->period;
    }

    /**
     * @param SearchMultiSelectField $period
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchBasic
     */
    public function setPeriod($period)
    {
      $this->period = $period;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getPeriodStartDate()
    {
      return $this->periodStartDate;
    }

    /**
     * @param SearchDateField $periodStartDate
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchBasic
     */
    public function setPeriodStartDate($periodStartDate)
    {
      $this->periodStartDate = $periodStartDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getToSubsidiary()
    {
      return $this->toSubsidiary;
    }

    /**
     * @param SearchMultiSelectField $toSubsidiary
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchBasic
     */
    public function setToSubsidiary($toSubsidiary)
    {
      $this->toSubsidiary = $toSubsidiary;
      return $this;
    }

}
