<?php

namespace Nzolt\NetSuite;

class AccountingTransactionSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $account
     */
    protected $account = null;

    /**
     * @var SearchColumnSelectField[] $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var SearchColumnStringField[] $accountType
     */
    protected $accountType = null;

    /**
     * @var SearchColumnDoubleField[] $altSalesAmount
     */
    protected $altSalesAmount = null;

    /**
     * @var SearchColumnDoubleField[] $altSalesNetAmount
     */
    protected $altSalesNetAmount = null;

    /**
     * @var SearchColumnDoubleField[] $amount
     */
    protected $amount = null;

    /**
     * @var SearchColumnStringField[] $baseCurrency
     */
    protected $baseCurrency = null;

    /**
     * @var SearchColumnStringField[] $catchUpPeriod
     */
    protected $catchUpPeriod = null;

    /**
     * @var SearchColumnDoubleField[] $creditAmount
     */
    protected $creditAmount = null;

    /**
     * @var SearchColumnBooleanField[] $customGL
     */
    protected $customGL = null;

    /**
     * @var SearchColumnDateField[] $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchColumnDoubleField[] $debitAmount
     */
    protected $debitAmount = null;

    /**
     * @var SearchColumnBooleanField[] $deferRevRec
     */
    protected $deferRevRec = null;

    /**
     * @var SearchColumnDoubleField[] $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var SearchColumnDoubleField[] $fxAmount
     */
    protected $fxAmount = null;

    /**
     * @var SearchColumnDoubleField[] $grossAmount
     */
    protected $grossAmount = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnBooleanField[] $multiSubsidiary
     */
    protected $multiSubsidiary = null;

    /**
     * @var SearchColumnDoubleField[] $netAmount
     */
    protected $netAmount = null;

    /**
     * @var SearchColumnBooleanField[] $posting
     */
    protected $posting = null;

    /**
     * @var SearchColumnDoubleField[] $quantityRevCommitted
     */
    protected $quantityRevCommitted = null;

    /**
     * @var SearchColumnDoubleField[] $recognizedRevenue
     */
    protected $recognizedRevenue = null;

    /**
     * @var SearchColumnEnumSelectField[] $revCommitStatus
     */
    protected $revCommitStatus = null;

    /**
     * @var SearchColumnEnumSelectField[] $revenueStatus
     */
    protected $revenueStatus = null;

    /**
     * @var SearchColumnDateField[] $revRecEndDate
     */
    protected $revRecEndDate = null;

    /**
     * @var SearchColumnBooleanField[] $revRecOnRevCommitment
     */
    protected $revRecOnRevCommitment = null;

    /**
     * @var SearchColumnDateField[] $revRecStartDate
     */
    protected $revRecStartDate = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnBooleanField[] $tranIsVsoeBundle
     */
    protected $tranIsVsoeBundle = null;

    /**
     * @var SearchColumnDoubleField[] $vsoeAllocation
     */
    protected $vsoeAllocation = null;

    
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
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setAccount(array $account = null)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBook()
    {
      return $this->accountingBook;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBook
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setAccountingBook(array $accountingBook = null)
    {
      $this->accountingBook = $accountingBook;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccountType()
    {
      return $this->accountType;
    }

    /**
     * @param SearchColumnStringField[] $accountType
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setAccountType(array $accountType = null)
    {
      $this->accountType = $accountType;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAltSalesAmount()
    {
      return $this->altSalesAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $altSalesAmount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setAltSalesAmount(array $altSalesAmount = null)
    {
      $this->altSalesAmount = $altSalesAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAltSalesNetAmount()
    {
      return $this->altSalesNetAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $altSalesNetAmount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setAltSalesNetAmount(array $altSalesNetAmount = null)
    {
      $this->altSalesNetAmount = $altSalesNetAmount;
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
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setAmount(array $amount = null)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBaseCurrency()
    {
      return $this->baseCurrency;
    }

    /**
     * @param SearchColumnStringField[] $baseCurrency
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setBaseCurrency(array $baseCurrency = null)
    {
      $this->baseCurrency = $baseCurrency;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCatchUpPeriod()
    {
      return $this->catchUpPeriod;
    }

    /**
     * @param SearchColumnStringField[] $catchUpPeriod
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setCatchUpPeriod(array $catchUpPeriod = null)
    {
      $this->catchUpPeriod = $catchUpPeriod;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCreditAmount()
    {
      return $this->creditAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $creditAmount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setCreditAmount(array $creditAmount = null)
    {
      $this->creditAmount = $creditAmount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCustomGL()
    {
      return $this->customGL;
    }

    /**
     * @param SearchColumnBooleanField[] $customGL
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setCustomGL(array $customGL = null)
    {
      $this->customGL = $customGL;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateCreated()
    {
      return $this->dateCreated;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setDateCreated(array $dateCreated = null)
    {
      $this->dateCreated = $dateCreated;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDebitAmount()
    {
      return $this->debitAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $debitAmount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setDebitAmount(array $debitAmount = null)
    {
      $this->debitAmount = $debitAmount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDeferRevRec()
    {
      return $this->deferRevRec;
    }

    /**
     * @param SearchColumnBooleanField[] $deferRevRec
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setDeferRevRec(array $deferRevRec = null)
    {
      $this->deferRevRec = $deferRevRec;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param SearchColumnDoubleField[] $exchangeRate
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setExchangeRate(array $exchangeRate = null)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxAmount()
    {
      return $this->fxAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $fxAmount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setFxAmount(array $fxAmount = null)
    {
      $this->fxAmount = $fxAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGrossAmount()
    {
      return $this->grossAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $grossAmount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setGrossAmount(array $grossAmount = null)
    {
      $this->grossAmount = $grossAmount;
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
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMultiSubsidiary()
    {
      return $this->multiSubsidiary;
    }

    /**
     * @param SearchColumnBooleanField[] $multiSubsidiary
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setMultiSubsidiary(array $multiSubsidiary = null)
    {
      $this->multiSubsidiary = $multiSubsidiary;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getNetAmount()
    {
      return $this->netAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $netAmount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setNetAmount(array $netAmount = null)
    {
      $this->netAmount = $netAmount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPosting()
    {
      return $this->posting;
    }

    /**
     * @param SearchColumnBooleanField[] $posting
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setPosting(array $posting = null)
    {
      $this->posting = $posting;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityRevCommitted()
    {
      return $this->quantityRevCommitted;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityRevCommitted
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setQuantityRevCommitted(array $quantityRevCommitted = null)
    {
      $this->quantityRevCommitted = $quantityRevCommitted;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecognizedRevenue()
    {
      return $this->recognizedRevenue;
    }

    /**
     * @param SearchColumnDoubleField[] $recognizedRevenue
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setRecognizedRevenue(array $recognizedRevenue = null)
    {
      $this->recognizedRevenue = $recognizedRevenue;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getRevCommitStatus()
    {
      return $this->revCommitStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $revCommitStatus
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setRevCommitStatus(array $revCommitStatus = null)
    {
      $this->revCommitStatus = $revCommitStatus;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getRevenueStatus()
    {
      return $this->revenueStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $revenueStatus
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setRevenueStatus(array $revenueStatus = null)
    {
      $this->revenueStatus = $revenueStatus;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getRevRecEndDate()
    {
      return $this->revRecEndDate;
    }

    /**
     * @param SearchColumnDateField[] $revRecEndDate
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setRevRecEndDate(array $revRecEndDate = null)
    {
      $this->revRecEndDate = $revRecEndDate;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getRevRecOnRevCommitment()
    {
      return $this->revRecOnRevCommitment;
    }

    /**
     * @param SearchColumnBooleanField[] $revRecOnRevCommitment
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setRevRecOnRevCommitment(array $revRecOnRevCommitment = null)
    {
      $this->revRecOnRevCommitment = $revRecOnRevCommitment;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getRevRecStartDate()
    {
      return $this->revRecStartDate;
    }

    /**
     * @param SearchColumnDateField[] $revRecStartDate
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setRevRecStartDate(array $revRecStartDate = null)
    {
      $this->revRecStartDate = $revRecStartDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTranIsVsoeBundle()
    {
      return $this->tranIsVsoeBundle;
    }

    /**
     * @param SearchColumnBooleanField[] $tranIsVsoeBundle
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setTranIsVsoeBundle(array $tranIsVsoeBundle = null)
    {
      $this->tranIsVsoeBundle = $tranIsVsoeBundle;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getVsoeAllocation()
    {
      return $this->vsoeAllocation;
    }

    /**
     * @param SearchColumnDoubleField[] $vsoeAllocation
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRowBasic
     */
    public function setVsoeAllocation(array $vsoeAllocation = null)
    {
      $this->vsoeAllocation = $vsoeAllocation;
      return $this;
    }

}
