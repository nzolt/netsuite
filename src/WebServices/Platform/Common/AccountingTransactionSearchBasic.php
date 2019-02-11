<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;

/**
 * AccountingTransactionSearchBasic
 */
class AccountingTransactionSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $account;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $accountingBook;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $accountType;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $altSalesAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $altSalesNetAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $amount;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $bookSpecificTransaction;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $catchUpPeriod;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $creditAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $debitAmount;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $deferRevRec;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $grossAmount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $multiSubsidiary;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $netAmount;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $posting;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityRevCommitted;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $recognizedRevenue;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $revCommitStatus;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $revenueStatus;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $revRecEndDate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $revRecOnRevCommitment;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $revRecStartDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $tranIsVsoeBundle;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $type;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $vsoeAllocation;

    static $paramtypesmap = array(
    	"account" => "SearchMultiSelectField",
    	"accountingBook" => "SearchMultiSelectField",
    	"accountType" => "SearchMultiSelectField",
    	"altSalesAmount" => "SearchDoubleField",
    	"altSalesNetAmount" => "SearchDoubleField",
    	"amount" => "SearchDoubleField",
    	"bookSpecificTransaction" => "SearchBooleanField",
    	"catchUpPeriod" => "SearchMultiSelectField",
    	"creditAmount" => "SearchDoubleField",
    	"debitAmount" => "SearchDoubleField",
    	"deferRevRec" => "SearchBooleanField",
    	"exchangeRate" => "SearchDoubleField",
    	"grossAmount" => "SearchDoubleField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"multiSubsidiary" => "SearchBooleanField",
    	"netAmount" => "SearchDoubleField",
    	"posting" => "SearchBooleanField",
    	"quantityRevCommitted" => "SearchDoubleField",
    	"recognizedRevenue" => "SearchDoubleField",
    	"revCommitStatus" => "SearchEnumMultiSelectField",
    	"revenueStatus" => "SearchEnumMultiSelectField",
    	"revRecEndDate" => "SearchDateField",
    	"revRecOnRevCommitment" => "SearchBooleanField",
    	"revRecStartDate" => "SearchDateField",
    	"subsidiary" => "SearchMultiSelectField",
    	"tranIsVsoeBundle" => "SearchBooleanField",
    	"type" => "SearchEnumMultiSelectField",
    	"vsoeAllocation" => "SearchDoubleField",
    );

    /**
     * Set account
     *
     * @param SearchMultiSelectField $account
     * @return AccountingTransactionSearchBasic
     */
    public function setAccount(SearchMultiSelectField $account) {
        $this->account = $account;
        return $this;
    }

    /**
     * Get account
     *
     * @return SearchMultiSelectField
     */
    public function getAccount() {
        return $this->account;
    }


    /**
     * Set accountingBook
     *
     * @param SearchMultiSelectField $accountingBook
     * @return AccountingTransactionSearchBasic
     */
    public function setAccountingBook(SearchMultiSelectField $accountingBook) {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * Get accountingBook
     *
     * @return SearchMultiSelectField
     */
    public function getAccountingBook() {
        return $this->accountingBook;
    }


    /**
     * Set accountType
     *
     * @param SearchMultiSelectField $accountType
     * @return AccountingTransactionSearchBasic
     */
    public function setAccountType(SearchMultiSelectField $accountType) {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * Get accountType
     *
     * @return SearchMultiSelectField
     */
    public function getAccountType() {
        return $this->accountType;
    }


    /**
     * Set altSalesAmount
     *
     * @param SearchDoubleField $altSalesAmount
     * @return AccountingTransactionSearchBasic
     */
    public function setAltSalesAmount(SearchDoubleField $altSalesAmount) {
        $this->altSalesAmount = $altSalesAmount;
        return $this;
    }

    /**
     * Get altSalesAmount
     *
     * @return SearchDoubleField
     */
    public function getAltSalesAmount() {
        return $this->altSalesAmount;
    }


    /**
     * Set altSalesNetAmount
     *
     * @param SearchDoubleField $altSalesNetAmount
     * @return AccountingTransactionSearchBasic
     */
    public function setAltSalesNetAmount(SearchDoubleField $altSalesNetAmount) {
        $this->altSalesNetAmount = $altSalesNetAmount;
        return $this;
    }

    /**
     * Get altSalesNetAmount
     *
     * @return SearchDoubleField
     */
    public function getAltSalesNetAmount() {
        return $this->altSalesNetAmount;
    }


    /**
     * Set amount
     *
     * @param SearchDoubleField $amount
     * @return AccountingTransactionSearchBasic
     */
    public function setAmount(SearchDoubleField $amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return SearchDoubleField
     */
    public function getAmount() {
        return $this->amount;
    }


    /**
     * Set bookSpecificTransaction
     *
     * @param SearchBooleanField $bookSpecificTransaction
     * @return AccountingTransactionSearchBasic
     */
    public function setBookSpecificTransaction(SearchBooleanField $bookSpecificTransaction) {
        $this->bookSpecificTransaction = $bookSpecificTransaction;
        return $this;
    }

    /**
     * Get bookSpecificTransaction
     *
     * @return SearchBooleanField
     */
    public function getBookSpecificTransaction() {
        return $this->bookSpecificTransaction;
    }


    /**
     * Set catchUpPeriod
     *
     * @param SearchMultiSelectField $catchUpPeriod
     * @return AccountingTransactionSearchBasic
     */
    public function setCatchUpPeriod(SearchMultiSelectField $catchUpPeriod) {
        $this->catchUpPeriod = $catchUpPeriod;
        return $this;
    }

    /**
     * Get catchUpPeriod
     *
     * @return SearchMultiSelectField
     */
    public function getCatchUpPeriod() {
        return $this->catchUpPeriod;
    }


    /**
     * Set creditAmount
     *
     * @param SearchDoubleField $creditAmount
     * @return AccountingTransactionSearchBasic
     */
    public function setCreditAmount(SearchDoubleField $creditAmount) {
        $this->creditAmount = $creditAmount;
        return $this;
    }

    /**
     * Get creditAmount
     *
     * @return SearchDoubleField
     */
    public function getCreditAmount() {
        return $this->creditAmount;
    }


    /**
     * Set debitAmount
     *
     * @param SearchDoubleField $debitAmount
     * @return AccountingTransactionSearchBasic
     */
    public function setDebitAmount(SearchDoubleField $debitAmount) {
        $this->debitAmount = $debitAmount;
        return $this;
    }

    /**
     * Get debitAmount
     *
     * @return SearchDoubleField
     */
    public function getDebitAmount() {
        return $this->debitAmount;
    }


    /**
     * Set deferRevRec
     *
     * @param SearchBooleanField $deferRevRec
     * @return AccountingTransactionSearchBasic
     */
    public function setDeferRevRec(SearchBooleanField $deferRevRec) {
        $this->deferRevRec = $deferRevRec;
        return $this;
    }

    /**
     * Get deferRevRec
     *
     * @return SearchBooleanField
     */
    public function getDeferRevRec() {
        return $this->deferRevRec;
    }


    /**
     * Set exchangeRate
     *
     * @param SearchDoubleField $exchangeRate
     * @return AccountingTransactionSearchBasic
     */
    public function setExchangeRate(SearchDoubleField $exchangeRate) {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Get exchangeRate
     *
     * @return SearchDoubleField
     */
    public function getExchangeRate() {
        return $this->exchangeRate;
    }


    /**
     * Set grossAmount
     *
     * @param SearchDoubleField $grossAmount
     * @return AccountingTransactionSearchBasic
     */
    public function setGrossAmount(SearchDoubleField $grossAmount) {
        $this->grossAmount = $grossAmount;
        return $this;
    }

    /**
     * Get grossAmount
     *
     * @return SearchDoubleField
     */
    public function getGrossAmount() {
        return $this->grossAmount;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return AccountingTransactionSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return AccountingTransactionSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set multiSubsidiary
     *
     * @param SearchBooleanField $multiSubsidiary
     * @return AccountingTransactionSearchBasic
     */
    public function setMultiSubsidiary(SearchBooleanField $multiSubsidiary) {
        $this->multiSubsidiary = $multiSubsidiary;
        return $this;
    }

    /**
     * Get multiSubsidiary
     *
     * @return SearchBooleanField
     */
    public function getMultiSubsidiary() {
        return $this->multiSubsidiary;
    }


    /**
     * Set netAmount
     *
     * @param SearchDoubleField $netAmount
     * @return AccountingTransactionSearchBasic
     */
    public function setNetAmount(SearchDoubleField $netAmount) {
        $this->netAmount = $netAmount;
        return $this;
    }

    /**
     * Get netAmount
     *
     * @return SearchDoubleField
     */
    public function getNetAmount() {
        return $this->netAmount;
    }


    /**
     * Set posting
     *
     * @param SearchBooleanField $posting
     * @return AccountingTransactionSearchBasic
     */
    public function setPosting(SearchBooleanField $posting) {
        $this->posting = $posting;
        return $this;
    }

    /**
     * Get posting
     *
     * @return SearchBooleanField
     */
    public function getPosting() {
        return $this->posting;
    }


    /**
     * Set quantityRevCommitted
     *
     * @param SearchDoubleField $quantityRevCommitted
     * @return AccountingTransactionSearchBasic
     */
    public function setQuantityRevCommitted(SearchDoubleField $quantityRevCommitted) {
        $this->quantityRevCommitted = $quantityRevCommitted;
        return $this;
    }

    /**
     * Get quantityRevCommitted
     *
     * @return SearchDoubleField
     */
    public function getQuantityRevCommitted() {
        return $this->quantityRevCommitted;
    }


    /**
     * Set recognizedRevenue
     *
     * @param SearchDoubleField $recognizedRevenue
     * @return AccountingTransactionSearchBasic
     */
    public function setRecognizedRevenue(SearchDoubleField $recognizedRevenue) {
        $this->recognizedRevenue = $recognizedRevenue;
        return $this;
    }

    /**
     * Get recognizedRevenue
     *
     * @return SearchDoubleField
     */
    public function getRecognizedRevenue() {
        return $this->recognizedRevenue;
    }


    /**
     * Set revCommitStatus
     *
     * @param SearchEnumMultiSelectField $revCommitStatus
     * @return AccountingTransactionSearchBasic
     */
    public function setRevCommitStatus(SearchEnumMultiSelectField $revCommitStatus) {
        $this->revCommitStatus = $revCommitStatus;
        return $this;
    }

    /**
     * Get revCommitStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getRevCommitStatus() {
        return $this->revCommitStatus;
    }


    /**
     * Set revenueStatus
     *
     * @param SearchEnumMultiSelectField $revenueStatus
     * @return AccountingTransactionSearchBasic
     */
    public function setRevenueStatus(SearchEnumMultiSelectField $revenueStatus) {
        $this->revenueStatus = $revenueStatus;
        return $this;
    }

    /**
     * Get revenueStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getRevenueStatus() {
        return $this->revenueStatus;
    }


    /**
     * Set revRecEndDate
     *
     * @param SearchDateField $revRecEndDate
     * @return AccountingTransactionSearchBasic
     */
    public function setRevRecEndDate(SearchDateField $revRecEndDate) {
        $this->revRecEndDate = $revRecEndDate;
        return $this;
    }

    /**
     * Get revRecEndDate
     *
     * @return SearchDateField
     */
    public function getRevRecEndDate() {
        return $this->revRecEndDate;
    }


    /**
     * Set revRecOnRevCommitment
     *
     * @param SearchBooleanField $revRecOnRevCommitment
     * @return AccountingTransactionSearchBasic
     */
    public function setRevRecOnRevCommitment(SearchBooleanField $revRecOnRevCommitment) {
        $this->revRecOnRevCommitment = $revRecOnRevCommitment;
        return $this;
    }

    /**
     * Get revRecOnRevCommitment
     *
     * @return SearchBooleanField
     */
    public function getRevRecOnRevCommitment() {
        return $this->revRecOnRevCommitment;
    }


    /**
     * Set revRecStartDate
     *
     * @param SearchDateField $revRecStartDate
     * @return AccountingTransactionSearchBasic
     */
    public function setRevRecStartDate(SearchDateField $revRecStartDate) {
        $this->revRecStartDate = $revRecStartDate;
        return $this;
    }

    /**
     * Get revRecStartDate
     *
     * @return SearchDateField
     */
    public function getRevRecStartDate() {
        return $this->revRecStartDate;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return AccountingTransactionSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary) {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return SearchMultiSelectField
     */
    public function getSubsidiary() {
        return $this->subsidiary;
    }


    /**
     * Set tranIsVsoeBundle
     *
     * @param SearchBooleanField $tranIsVsoeBundle
     * @return AccountingTransactionSearchBasic
     */
    public function setTranIsVsoeBundle(SearchBooleanField $tranIsVsoeBundle) {
        $this->tranIsVsoeBundle = $tranIsVsoeBundle;
        return $this;
    }

    /**
     * Get tranIsVsoeBundle
     *
     * @return SearchBooleanField
     */
    public function getTranIsVsoeBundle() {
        return $this->tranIsVsoeBundle;
    }


    /**
     * Set type
     *
     * @param SearchEnumMultiSelectField $type
     * @return AccountingTransactionSearchBasic
     */
    public function setType(SearchEnumMultiSelectField $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return SearchEnumMultiSelectField
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set vsoeAllocation
     *
     * @param SearchDoubleField $vsoeAllocation
     * @return AccountingTransactionSearchBasic
     */
    public function setVsoeAllocation(SearchDoubleField $vsoeAllocation) {
        $this->vsoeAllocation = $vsoeAllocation;
        return $this;
    }

    /**
     * Get vsoeAllocation
     *
     * @return SearchDoubleField
     */
    public function getVsoeAllocation() {
        return $this->vsoeAllocation;
    }

}