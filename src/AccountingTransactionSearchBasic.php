<?php

namespace Nzolt\NetSuite;

class AccountingTransactionSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $account
     */
    protected $account = null;

    /**
     * @var SearchMultiSelectField $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var SearchMultiSelectField $accountType
     */
    protected $accountType = null;

    /**
     * @var SearchDoubleField $altSalesAmount
     */
    protected $altSalesAmount = null;

    /**
     * @var SearchDoubleField $altSalesNetAmount
     */
    protected $altSalesNetAmount = null;

    /**
     * @var SearchDoubleField $amount
     */
    protected $amount = null;

    /**
     * @var SearchBooleanField $bookSpecificTransaction
     */
    protected $bookSpecificTransaction = null;

    /**
     * @var SearchMultiSelectField $catchUpPeriod
     */
    protected $catchUpPeriod = null;

    /**
     * @var SearchDoubleField $creditAmount
     */
    protected $creditAmount = null;

    /**
     * @var SearchBooleanField $customGL
     */
    protected $customGL = null;

    /**
     * @var SearchDoubleField $debitAmount
     */
    protected $debitAmount = null;

    /**
     * @var SearchBooleanField $deferRevRec
     */
    protected $deferRevRec = null;

    /**
     * @var SearchDoubleField $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var SearchDoubleField $grossAmount
     */
    protected $grossAmount = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $multiSubsidiary
     */
    protected $multiSubsidiary = null;

    /**
     * @var SearchDoubleField $netAmount
     */
    protected $netAmount = null;

    /**
     * @var SearchBooleanField $posting
     */
    protected $posting = null;

    /**
     * @var SearchDoubleField $quantityRevCommitted
     */
    protected $quantityRevCommitted = null;

    /**
     * @var SearchDoubleField $recognizedRevenue
     */
    protected $recognizedRevenue = null;

    /**
     * @var SearchEnumMultiSelectField $revCommitStatus
     */
    protected $revCommitStatus = null;

    /**
     * @var SearchEnumMultiSelectField $revenueStatus
     */
    protected $revenueStatus = null;

    /**
     * @var SearchDateField $revRecEndDate
     */
    protected $revRecEndDate = null;

    /**
     * @var SearchBooleanField $revRecOnRevCommitment
     */
    protected $revRecOnRevCommitment = null;

    /**
     * @var SearchDateField $revRecStartDate
     */
    protected $revRecStartDate = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchBooleanField $tranIsVsoeBundle
     */
    protected $tranIsVsoeBundle = null;

    /**
     * @var SearchEnumMultiSelectField $type
     */
    protected $type = null;

    /**
     * @var SearchDoubleField $vsoeAllocation
     */
    protected $vsoeAllocation = null;

    
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
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
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
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setAccountingBook($accountingBook)
    {
      $this->accountingBook = $accountingBook;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountType()
    {
      return $this->accountType;
    }

    /**
     * @param SearchMultiSelectField $accountType
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setAccountType($accountType)
    {
      $this->accountType = $accountType;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAltSalesAmount()
    {
      return $this->altSalesAmount;
    }

    /**
     * @param SearchDoubleField $altSalesAmount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setAltSalesAmount($altSalesAmount)
    {
      $this->altSalesAmount = $altSalesAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAltSalesNetAmount()
    {
      return $this->altSalesNetAmount;
    }

    /**
     * @param SearchDoubleField $altSalesNetAmount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setAltSalesNetAmount($altSalesNetAmount)
    {
      $this->altSalesNetAmount = $altSalesNetAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param SearchDoubleField $amount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBookSpecificTransaction()
    {
      return $this->bookSpecificTransaction;
    }

    /**
     * @param SearchBooleanField $bookSpecificTransaction
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setBookSpecificTransaction($bookSpecificTransaction)
    {
      $this->bookSpecificTransaction = $bookSpecificTransaction;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCatchUpPeriod()
    {
      return $this->catchUpPeriod;
    }

    /**
     * @param SearchMultiSelectField $catchUpPeriod
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setCatchUpPeriod($catchUpPeriod)
    {
      $this->catchUpPeriod = $catchUpPeriod;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCreditAmount()
    {
      return $this->creditAmount;
    }

    /**
     * @param SearchDoubleField $creditAmount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setCreditAmount($creditAmount)
    {
      $this->creditAmount = $creditAmount;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCustomGL()
    {
      return $this->customGL;
    }

    /**
     * @param SearchBooleanField $customGL
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setCustomGL($customGL)
    {
      $this->customGL = $customGL;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDebitAmount()
    {
      return $this->debitAmount;
    }

    /**
     * @param SearchDoubleField $debitAmount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setDebitAmount($debitAmount)
    {
      $this->debitAmount = $debitAmount;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDeferRevRec()
    {
      return $this->deferRevRec;
    }

    /**
     * @param SearchBooleanField $deferRevRec
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setDeferRevRec($deferRevRec)
    {
      $this->deferRevRec = $deferRevRec;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param SearchDoubleField $exchangeRate
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGrossAmount()
    {
      return $this->grossAmount;
    }

    /**
     * @param SearchDoubleField $grossAmount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setGrossAmount($grossAmount)
    {
      $this->grossAmount = $grossAmount;
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
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
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
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMultiSubsidiary()
    {
      return $this->multiSubsidiary;
    }

    /**
     * @param SearchBooleanField $multiSubsidiary
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setMultiSubsidiary($multiSubsidiary)
    {
      $this->multiSubsidiary = $multiSubsidiary;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getNetAmount()
    {
      return $this->netAmount;
    }

    /**
     * @param SearchDoubleField $netAmount
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setNetAmount($netAmount)
    {
      $this->netAmount = $netAmount;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPosting()
    {
      return $this->posting;
    }

    /**
     * @param SearchBooleanField $posting
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setPosting($posting)
    {
      $this->posting = $posting;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityRevCommitted()
    {
      return $this->quantityRevCommitted;
    }

    /**
     * @param SearchDoubleField $quantityRevCommitted
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setQuantityRevCommitted($quantityRevCommitted)
    {
      $this->quantityRevCommitted = $quantityRevCommitted;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRecognizedRevenue()
    {
      return $this->recognizedRevenue;
    }

    /**
     * @param SearchDoubleField $recognizedRevenue
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setRecognizedRevenue($recognizedRevenue)
    {
      $this->recognizedRevenue = $recognizedRevenue;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getRevCommitStatus()
    {
      return $this->revCommitStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $revCommitStatus
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setRevCommitStatus($revCommitStatus)
    {
      $this->revCommitStatus = $revCommitStatus;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getRevenueStatus()
    {
      return $this->revenueStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $revenueStatus
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setRevenueStatus($revenueStatus)
    {
      $this->revenueStatus = $revenueStatus;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getRevRecEndDate()
    {
      return $this->revRecEndDate;
    }

    /**
     * @param SearchDateField $revRecEndDate
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setRevRecEndDate($revRecEndDate)
    {
      $this->revRecEndDate = $revRecEndDate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getRevRecOnRevCommitment()
    {
      return $this->revRecOnRevCommitment;
    }

    /**
     * @param SearchBooleanField $revRecOnRevCommitment
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setRevRecOnRevCommitment($revRecOnRevCommitment)
    {
      $this->revRecOnRevCommitment = $revRecOnRevCommitment;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getRevRecStartDate()
    {
      return $this->revRecStartDate;
    }

    /**
     * @param SearchDateField $revRecStartDate
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setRevRecStartDate($revRecStartDate)
    {
      $this->revRecStartDate = $revRecStartDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTranIsVsoeBundle()
    {
      return $this->tranIsVsoeBundle;
    }

    /**
     * @param SearchBooleanField $tranIsVsoeBundle
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setTranIsVsoeBundle($tranIsVsoeBundle)
    {
      $this->tranIsVsoeBundle = $tranIsVsoeBundle;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param SearchEnumMultiSelectField $type
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getVsoeAllocation()
    {
      return $this->vsoeAllocation;
    }

    /**
     * @param SearchDoubleField $vsoeAllocation
     * @return \Nzolt\NetSuite\AccountingTransactionSearchBasic
     */
    public function setVsoeAllocation($vsoeAllocation)
    {
      $this->vsoeAllocation = $vsoeAllocation;
      return $this;
    }

}
