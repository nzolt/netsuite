<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;

/**
 * RevRecScheduleSearchBasic
 */
class RevRecScheduleSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $accountingBook;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $amorStatus;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $amortizedAmount;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $amorType;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $amount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $currency;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $deferredAmount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $destAcct;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $initialAmt;

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
    protected $isRecognized;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $jeDoc;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $pctComplete;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $pctRecognition;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $periodOffset;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $postPeriod;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $schedDate;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $scheduleNumber;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $scheduleNumberText;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $sourceAcct;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $srcTranPostPeriod;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $srcTranType;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $startOffset;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $templateName;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $useForeignAmounts;

    static $paramtypesmap = array(
    	"accountingBook" => "SearchMultiSelectField",
    	"amorStatus" => "SearchEnumMultiSelectField",
    	"amortizedAmount" => "SearchDoubleField",
    	"amorType" => "SearchEnumMultiSelectField",
    	"amount" => "SearchDoubleField",
    	"currency" => "SearchMultiSelectField",
    	"deferredAmount" => "SearchDoubleField",
    	"destAcct" => "SearchMultiSelectField",
    	"initialAmt" => "SearchDoubleField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isRecognized" => "SearchBooleanField",
    	"jeDoc" => "SearchMultiSelectField",
    	"name" => "SearchStringField",
    	"pctComplete" => "SearchDoubleField",
    	"pctRecognition" => "SearchDoubleField",
    	"periodOffset" => "SearchLongField",
    	"postPeriod" => "SearchMultiSelectField",
    	"schedDate" => "SearchDateField",
    	"scheduleNumber" => "SearchLongField",
    	"scheduleNumberText" => "SearchStringField",
    	"sourceAcct" => "SearchMultiSelectField",
    	"srcTranPostPeriod" => "SearchMultiSelectField",
    	"srcTranType" => "SearchMultiSelectField",
    	"startOffset" => "SearchLongField",
    	"templateName" => "SearchStringField",
    	"useForeignAmounts" => "SearchBooleanField",
    );

    /**
     * Set accountingBook
     *
     * @param SearchMultiSelectField $accountingBook
     * @return RevRecScheduleSearchBasic
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
     * Set amorStatus
     *
     * @param SearchEnumMultiSelectField $amorStatus
     * @return RevRecScheduleSearchBasic
     */
    public function setAmorStatus(SearchEnumMultiSelectField $amorStatus) {
        $this->amorStatus = $amorStatus;
        return $this;
    }

    /**
     * Get amorStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getAmorStatus() {
        return $this->amorStatus;
    }


    /**
     * Set amortizedAmount
     *
     * @param SearchDoubleField $amortizedAmount
     * @return RevRecScheduleSearchBasic
     */
    public function setAmortizedAmount(SearchDoubleField $amortizedAmount) {
        $this->amortizedAmount = $amortizedAmount;
        return $this;
    }

    /**
     * Get amortizedAmount
     *
     * @return SearchDoubleField
     */
    public function getAmortizedAmount() {
        return $this->amortizedAmount;
    }


    /**
     * Set amorType
     *
     * @param SearchEnumMultiSelectField $amorType
     * @return RevRecScheduleSearchBasic
     */
    public function setAmorType(SearchEnumMultiSelectField $amorType) {
        $this->amorType = $amorType;
        return $this;
    }

    /**
     * Get amorType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getAmorType() {
        return $this->amorType;
    }


    /**
     * Set amount
     *
     * @param SearchDoubleField $amount
     * @return RevRecScheduleSearchBasic
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
     * Set currency
     *
     * @param SearchMultiSelectField $currency
     * @return RevRecScheduleSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return SearchMultiSelectField
     */
    public function getCurrency() {
        return $this->currency;
    }


    /**
     * Set deferredAmount
     *
     * @param SearchDoubleField $deferredAmount
     * @return RevRecScheduleSearchBasic
     */
    public function setDeferredAmount(SearchDoubleField $deferredAmount) {
        $this->deferredAmount = $deferredAmount;
        return $this;
    }

    /**
     * Get deferredAmount
     *
     * @return SearchDoubleField
     */
    public function getDeferredAmount() {
        return $this->deferredAmount;
    }


    /**
     * Set destAcct
     *
     * @param SearchMultiSelectField $destAcct
     * @return RevRecScheduleSearchBasic
     */
    public function setDestAcct(SearchMultiSelectField $destAcct) {
        $this->destAcct = $destAcct;
        return $this;
    }

    /**
     * Get destAcct
     *
     * @return SearchMultiSelectField
     */
    public function getDestAcct() {
        return $this->destAcct;
    }


    /**
     * Set initialAmt
     *
     * @param SearchDoubleField $initialAmt
     * @return RevRecScheduleSearchBasic
     */
    public function setInitialAmt(SearchDoubleField $initialAmt) {
        $this->initialAmt = $initialAmt;
        return $this;
    }

    /**
     * Get initialAmt
     *
     * @return SearchDoubleField
     */
    public function getInitialAmt() {
        return $this->initialAmt;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return RevRecScheduleSearchBasic
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
     * @return RevRecScheduleSearchBasic
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
     * Set isRecognized
     *
     * @param SearchBooleanField $isRecognized
     * @return RevRecScheduleSearchBasic
     */
    public function setIsRecognized(SearchBooleanField $isRecognized) {
        $this->isRecognized = $isRecognized;
        return $this;
    }

    /**
     * Get isRecognized
     *
     * @return SearchBooleanField
     */
    public function getIsRecognized() {
        return $this->isRecognized;
    }


    /**
     * Set jeDoc
     *
     * @param SearchMultiSelectField $jeDoc
     * @return RevRecScheduleSearchBasic
     */
    public function setJeDoc(SearchMultiSelectField $jeDoc) {
        $this->jeDoc = $jeDoc;
        return $this;
    }

    /**
     * Get jeDoc
     *
     * @return SearchMultiSelectField
     */
    public function getJeDoc() {
        return $this->jeDoc;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return RevRecScheduleSearchBasic
     */
    public function setName(SearchStringField $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return SearchStringField
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set pctComplete
     *
     * @param SearchDoubleField $pctComplete
     * @return RevRecScheduleSearchBasic
     */
    public function setPctComplete(SearchDoubleField $pctComplete) {
        $this->pctComplete = $pctComplete;
        return $this;
    }

    /**
     * Get pctComplete
     *
     * @return SearchDoubleField
     */
    public function getPctComplete() {
        return $this->pctComplete;
    }


    /**
     * Set pctRecognition
     *
     * @param SearchDoubleField $pctRecognition
     * @return RevRecScheduleSearchBasic
     */
    public function setPctRecognition(SearchDoubleField $pctRecognition) {
        $this->pctRecognition = $pctRecognition;
        return $this;
    }

    /**
     * Get pctRecognition
     *
     * @return SearchDoubleField
     */
    public function getPctRecognition() {
        return $this->pctRecognition;
    }


    /**
     * Set periodOffset
     *
     * @param SearchLongField $periodOffset
     * @return RevRecScheduleSearchBasic
     */
    public function setPeriodOffset(SearchLongField $periodOffset) {
        $this->periodOffset = $periodOffset;
        return $this;
    }

    /**
     * Get periodOffset
     *
     * @return SearchLongField
     */
    public function getPeriodOffset() {
        return $this->periodOffset;
    }


    /**
     * Set postPeriod
     *
     * @param SearchMultiSelectField $postPeriod
     * @return RevRecScheduleSearchBasic
     */
    public function setPostPeriod(SearchMultiSelectField $postPeriod) {
        $this->postPeriod = $postPeriod;
        return $this;
    }

    /**
     * Get postPeriod
     *
     * @return SearchMultiSelectField
     */
    public function getPostPeriod() {
        return $this->postPeriod;
    }


    /**
     * Set schedDate
     *
     * @param SearchDateField $schedDate
     * @return RevRecScheduleSearchBasic
     */
    public function setSchedDate(SearchDateField $schedDate) {
        $this->schedDate = $schedDate;
        return $this;
    }

    /**
     * Get schedDate
     *
     * @return SearchDateField
     */
    public function getSchedDate() {
        return $this->schedDate;
    }


    /**
     * Set scheduleNumber
     *
     * @param SearchLongField $scheduleNumber
     * @return RevRecScheduleSearchBasic
     */
    public function setScheduleNumber(SearchLongField $scheduleNumber) {
        $this->scheduleNumber = $scheduleNumber;
        return $this;
    }

    /**
     * Get scheduleNumber
     *
     * @return SearchLongField
     */
    public function getScheduleNumber() {
        return $this->scheduleNumber;
    }


    /**
     * Set scheduleNumberText
     *
     * @param SearchStringField $scheduleNumberText
     * @return RevRecScheduleSearchBasic
     */
    public function setScheduleNumberText(SearchStringField $scheduleNumberText) {
        $this->scheduleNumberText = $scheduleNumberText;
        return $this;
    }

    /**
     * Get scheduleNumberText
     *
     * @return SearchStringField
     */
    public function getScheduleNumberText() {
        return $this->scheduleNumberText;
    }


    /**
     * Set sourceAcct
     *
     * @param SearchMultiSelectField $sourceAcct
     * @return RevRecScheduleSearchBasic
     */
    public function setSourceAcct(SearchMultiSelectField $sourceAcct) {
        $this->sourceAcct = $sourceAcct;
        return $this;
    }

    /**
     * Get sourceAcct
     *
     * @return SearchMultiSelectField
     */
    public function getSourceAcct() {
        return $this->sourceAcct;
    }


    /**
     * Set srcTranPostPeriod
     *
     * @param SearchMultiSelectField $srcTranPostPeriod
     * @return RevRecScheduleSearchBasic
     */
    public function setSrcTranPostPeriod(SearchMultiSelectField $srcTranPostPeriod) {
        $this->srcTranPostPeriod = $srcTranPostPeriod;
        return $this;
    }

    /**
     * Get srcTranPostPeriod
     *
     * @return SearchMultiSelectField
     */
    public function getSrcTranPostPeriod() {
        return $this->srcTranPostPeriod;
    }


    /**
     * Set srcTranType
     *
     * @param SearchMultiSelectField $srcTranType
     * @return RevRecScheduleSearchBasic
     */
    public function setSrcTranType(SearchMultiSelectField $srcTranType) {
        $this->srcTranType = $srcTranType;
        return $this;
    }

    /**
     * Get srcTranType
     *
     * @return SearchMultiSelectField
     */
    public function getSrcTranType() {
        return $this->srcTranType;
    }


    /**
     * Set startOffset
     *
     * @param SearchLongField $startOffset
     * @return RevRecScheduleSearchBasic
     */
    public function setStartOffset(SearchLongField $startOffset) {
        $this->startOffset = $startOffset;
        return $this;
    }

    /**
     * Get startOffset
     *
     * @return SearchLongField
     */
    public function getStartOffset() {
        return $this->startOffset;
    }


    /**
     * Set templateName
     *
     * @param SearchStringField $templateName
     * @return RevRecScheduleSearchBasic
     */
    public function setTemplateName(SearchStringField $templateName) {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * Get templateName
     *
     * @return SearchStringField
     */
    public function getTemplateName() {
        return $this->templateName;
    }


    /**
     * Set useForeignAmounts
     *
     * @param SearchBooleanField $useForeignAmounts
     * @return RevRecScheduleSearchBasic
     */
    public function setUseForeignAmounts(SearchBooleanField $useForeignAmounts) {
        $this->useForeignAmounts = $useForeignAmounts;
        return $this;
    }

    /**
     * Get useForeignAmounts
     *
     * @return SearchBooleanField
     */
    public function getUseForeignAmounts() {
        return $this->useForeignAmounts;
    }

}