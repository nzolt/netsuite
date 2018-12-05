<?php

namespace Nzolt\NetSuite;

class RevRecScheduleSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var SearchEnumMultiSelectField $amorStatus
     */
    protected $amorStatus = null;

    /**
     * @var SearchDoubleField $amortizedAmount
     */
    protected $amortizedAmount = null;

    /**
     * @var SearchEnumMultiSelectField $amorType
     */
    protected $amorType = null;

    /**
     * @var SearchDoubleField $amount
     */
    protected $amount = null;

    /**
     * @var SearchMultiSelectField $currency
     */
    protected $currency = null;

    /**
     * @var SearchDoubleField $deferredAmount
     */
    protected $deferredAmount = null;

    /**
     * @var SearchMultiSelectField $destAcct
     */
    protected $destAcct = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchDoubleField $initialAmt
     */
    protected $initialAmt = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isRecognized
     */
    protected $isRecognized = null;

    /**
     * @var SearchMultiSelectField $jeDoc
     */
    protected $jeDoc = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchDoubleField $pctComplete
     */
    protected $pctComplete = null;

    /**
     * @var SearchDoubleField $pctRecognition
     */
    protected $pctRecognition = null;

    /**
     * @var SearchLongField $periodOffset
     */
    protected $periodOffset = null;

    /**
     * @var SearchMultiSelectField $postPeriod
     */
    protected $postPeriod = null;

    /**
     * @var SearchDateField $schedDate
     */
    protected $schedDate = null;

    /**
     * @var SearchLongField $scheduleNumber
     */
    protected $scheduleNumber = null;

    /**
     * @var SearchStringField $scheduleNumberText
     */
    protected $scheduleNumberText = null;

    /**
     * @var SearchMultiSelectField $sourceAcct
     */
    protected $sourceAcct = null;

    /**
     * @var SearchMultiSelectField $srcTranPostPeriod
     */
    protected $srcTranPostPeriod = null;

    /**
     * @var SearchMultiSelectField $srcTranType
     */
    protected $srcTranType = null;

    /**
     * @var SearchLongField $startOffset
     */
    protected $startOffset = null;

    /**
     * @var SearchStringField $templateName
     */
    protected $templateName = null;

    /**
     * @var SearchBooleanField $useForeignAmounts
     */
    protected $useForeignAmounts = null;

    
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setAccountingBook($accountingBook)
    {
      $this->accountingBook = $accountingBook;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAmorStatus()
    {
      return $this->amorStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $amorStatus
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setAmorStatus($amorStatus)
    {
      $this->amorStatus = $amorStatus;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmortizedAmount()
    {
      return $this->amortizedAmount;
    }

    /**
     * @param SearchDoubleField $amortizedAmount
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setAmortizedAmount($amortizedAmount)
    {
      $this->amortizedAmount = $amortizedAmount;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAmorType()
    {
      return $this->amorType;
    }

    /**
     * @param SearchEnumMultiSelectField $amorType
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setAmorType($amorType)
    {
      $this->amorType = $amorType;
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDeferredAmount()
    {
      return $this->deferredAmount;
    }

    /**
     * @param SearchDoubleField $deferredAmount
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setDeferredAmount($deferredAmount)
    {
      $this->deferredAmount = $deferredAmount;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDestAcct()
    {
      return $this->destAcct;
    }

    /**
     * @param SearchMultiSelectField $destAcct
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setDestAcct($destAcct)
    {
      $this->destAcct = $destAcct;
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getInitialAmt()
    {
      return $this->initialAmt;
    }

    /**
     * @param SearchDoubleField $initialAmt
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setInitialAmt($initialAmt)
    {
      $this->initialAmt = $initialAmt;
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsRecognized()
    {
      return $this->isRecognized;
    }

    /**
     * @param SearchBooleanField $isRecognized
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setIsRecognized($isRecognized)
    {
      $this->isRecognized = $isRecognized;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getJeDoc()
    {
      return $this->jeDoc;
    }

    /**
     * @param SearchMultiSelectField $jeDoc
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setJeDoc($jeDoc)
    {
      $this->jeDoc = $jeDoc;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchStringField $name
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPctComplete()
    {
      return $this->pctComplete;
    }

    /**
     * @param SearchDoubleField $pctComplete
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setPctComplete($pctComplete)
    {
      $this->pctComplete = $pctComplete;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPctRecognition()
    {
      return $this->pctRecognition;
    }

    /**
     * @param SearchDoubleField $pctRecognition
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setPctRecognition($pctRecognition)
    {
      $this->pctRecognition = $pctRecognition;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPeriodOffset()
    {
      return $this->periodOffset;
    }

    /**
     * @param SearchLongField $periodOffset
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setPeriodOffset($periodOffset)
    {
      $this->periodOffset = $periodOffset;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPostPeriod()
    {
      return $this->postPeriod;
    }

    /**
     * @param SearchMultiSelectField $postPeriod
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setPostPeriod($postPeriod)
    {
      $this->postPeriod = $postPeriod;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getSchedDate()
    {
      return $this->schedDate;
    }

    /**
     * @param SearchDateField $schedDate
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setSchedDate($schedDate)
    {
      $this->schedDate = $schedDate;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getScheduleNumber()
    {
      return $this->scheduleNumber;
    }

    /**
     * @param SearchLongField $scheduleNumber
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setScheduleNumber($scheduleNumber)
    {
      $this->scheduleNumber = $scheduleNumber;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getScheduleNumberText()
    {
      return $this->scheduleNumberText;
    }

    /**
     * @param SearchStringField $scheduleNumberText
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setScheduleNumberText($scheduleNumberText)
    {
      $this->scheduleNumberText = $scheduleNumberText;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSourceAcct()
    {
      return $this->sourceAcct;
    }

    /**
     * @param SearchMultiSelectField $sourceAcct
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setSourceAcct($sourceAcct)
    {
      $this->sourceAcct = $sourceAcct;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSrcTranPostPeriod()
    {
      return $this->srcTranPostPeriod;
    }

    /**
     * @param SearchMultiSelectField $srcTranPostPeriod
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setSrcTranPostPeriod($srcTranPostPeriod)
    {
      $this->srcTranPostPeriod = $srcTranPostPeriod;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSrcTranType()
    {
      return $this->srcTranType;
    }

    /**
     * @param SearchMultiSelectField $srcTranType
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setSrcTranType($srcTranType)
    {
      $this->srcTranType = $srcTranType;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getStartOffset()
    {
      return $this->startOffset;
    }

    /**
     * @param SearchLongField $startOffset
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setStartOffset($startOffset)
    {
      $this->startOffset = $startOffset;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTemplateName()
    {
      return $this->templateName;
    }

    /**
     * @param SearchStringField $templateName
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setTemplateName($templateName)
    {
      $this->templateName = $templateName;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUseForeignAmounts()
    {
      return $this->useForeignAmounts;
    }

    /**
     * @param SearchBooleanField $useForeignAmounts
     * @return \Nzolt\NetSuite\RevRecScheduleSearchBasic
     */
    public function setUseForeignAmounts($useForeignAmounts)
    {
      $this->useForeignAmounts = $useForeignAmounts;
      return $this;
    }

}
