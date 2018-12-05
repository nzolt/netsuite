<?php

namespace Nzolt\NetSuite;

class RevRecScheduleSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var SearchColumnEnumSelectField[] $amorStatus
     */
    protected $amorStatus = null;

    /**
     * @var SearchColumnStringField[] $amorTemplate
     */
    protected $amorTemplate = null;

    /**
     * @var SearchColumnDoubleField[] $amortizedAmount
     */
    protected $amortizedAmount = null;

    /**
     * @var SearchColumnEnumSelectField[] $amorType
     */
    protected $amorType = null;

    /**
     * @var SearchColumnDoubleField[] $amount
     */
    protected $amount = null;

    /**
     * @var SearchColumnStringField[] $currency
     */
    protected $currency = null;

    /**
     * @var SearchColumnDoubleField[] $deferredAmount
     */
    protected $deferredAmount = null;

    /**
     * @var SearchColumnStringField[] $destAcct
     */
    protected $destAcct = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnDoubleField[] $initialAmt
     */
    protected $initialAmt = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isRecognized
     */
    protected $isRecognized = null;

    /**
     * @var SearchColumnStringField[] $jeDoc
     */
    protected $jeDoc = null;

    /**
     * @var SearchColumnLongField[] $lineSequenceNumber
     */
    protected $lineSequenceNumber = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnStringField[] $nameUrl
     */
    protected $nameUrl = null;

    /**
     * @var SearchColumnDoubleField[] $pctComplete
     */
    protected $pctComplete = null;

    /**
     * @var SearchColumnDoubleField[] $pctRecognition
     */
    protected $pctRecognition = null;

    /**
     * @var SearchColumnLongField[] $periodOffset
     */
    protected $periodOffset = null;

    /**
     * @var SearchColumnDoubleField[] $recurAmount
     */
    protected $recurAmount = null;

    /**
     * @var SearchColumnDoubleField[] $recurFxAmount
     */
    protected $recurFxAmount = null;

    /**
     * @var SearchColumnDateField[] $schedDate
     */
    protected $schedDate = null;

    /**
     * @var SearchColumnStringField[] $scheduleNumber
     */
    protected $scheduleNumber = null;

    /**
     * @var SearchColumnStringField[] $sourceAcct
     */
    protected $sourceAcct = null;

    /**
     * @var SearchColumnStringField[] $srcDocLine
     */
    protected $srcDocLine = null;

    /**
     * @var SearchColumnStringField[] $srcTran
     */
    protected $srcTran = null;

    /**
     * @var SearchColumnStringField[] $srcTranPostPeriod
     */
    protected $srcTranPostPeriod = null;

    /**
     * @var SearchColumnLongField[] $startOffset
     */
    protected $startOffset = null;

    /**
     * @var SearchColumnBooleanField[] $useForeignAmounts
     */
    protected $useForeignAmounts = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setAccountingBook(array $accountingBook = null)
    {
      $this->accountingBook = $accountingBook;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAmorStatus()
    {
      return $this->amorStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $amorStatus
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setAmorStatus(array $amorStatus = null)
    {
      $this->amorStatus = $amorStatus;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAmorTemplate()
    {
      return $this->amorTemplate;
    }

    /**
     * @param SearchColumnStringField[] $amorTemplate
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setAmorTemplate(array $amorTemplate = null)
    {
      $this->amorTemplate = $amorTemplate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmortizedAmount()
    {
      return $this->amortizedAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $amortizedAmount
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setAmortizedAmount(array $amortizedAmount = null)
    {
      $this->amortizedAmount = $amortizedAmount;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAmorType()
    {
      return $this->amorType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $amorType
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setAmorType(array $amorType = null)
    {
      $this->amorType = $amorType;
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setAmount(array $amount = null)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchColumnStringField[] $currency
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setCurrency(array $currency = null)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDeferredAmount()
    {
      return $this->deferredAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $deferredAmount
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setDeferredAmount(array $deferredAmount = null)
    {
      $this->deferredAmount = $deferredAmount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDestAcct()
    {
      return $this->destAcct;
    }

    /**
     * @param SearchColumnStringField[] $destAcct
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setDestAcct(array $destAcct = null)
    {
      $this->destAcct = $destAcct;
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getInitialAmt()
    {
      return $this->initialAmt;
    }

    /**
     * @param SearchColumnDoubleField[] $initialAmt
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setInitialAmt(array $initialAmt = null)
    {
      $this->initialAmt = $initialAmt;
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsRecognized()
    {
      return $this->isRecognized;
    }

    /**
     * @param SearchColumnBooleanField[] $isRecognized
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setIsRecognized(array $isRecognized = null)
    {
      $this->isRecognized = $isRecognized;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getJeDoc()
    {
      return $this->jeDoc;
    }

    /**
     * @param SearchColumnStringField[] $jeDoc
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setJeDoc(array $jeDoc = null)
    {
      $this->jeDoc = $jeDoc;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLineSequenceNumber()
    {
      return $this->lineSequenceNumber;
    }

    /**
     * @param SearchColumnLongField[] $lineSequenceNumber
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setLineSequenceNumber(array $lineSequenceNumber = null)
    {
      $this->lineSequenceNumber = $lineSequenceNumber;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNameUrl()
    {
      return $this->nameUrl;
    }

    /**
     * @param SearchColumnStringField[] $nameUrl
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setNameUrl(array $nameUrl = null)
    {
      $this->nameUrl = $nameUrl;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPctComplete()
    {
      return $this->pctComplete;
    }

    /**
     * @param SearchColumnDoubleField[] $pctComplete
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setPctComplete(array $pctComplete = null)
    {
      $this->pctComplete = $pctComplete;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPctRecognition()
    {
      return $this->pctRecognition;
    }

    /**
     * @param SearchColumnDoubleField[] $pctRecognition
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setPctRecognition(array $pctRecognition = null)
    {
      $this->pctRecognition = $pctRecognition;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getPeriodOffset()
    {
      return $this->periodOffset;
    }

    /**
     * @param SearchColumnLongField[] $periodOffset
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setPeriodOffset(array $periodOffset = null)
    {
      $this->periodOffset = $periodOffset;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecurAmount()
    {
      return $this->recurAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $recurAmount
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setRecurAmount(array $recurAmount = null)
    {
      $this->recurAmount = $recurAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecurFxAmount()
    {
      return $this->recurFxAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $recurFxAmount
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setRecurFxAmount(array $recurFxAmount = null)
    {
      $this->recurFxAmount = $recurFxAmount;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getSchedDate()
    {
      return $this->schedDate;
    }

    /**
     * @param SearchColumnDateField[] $schedDate
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setSchedDate(array $schedDate = null)
    {
      $this->schedDate = $schedDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getScheduleNumber()
    {
      return $this->scheduleNumber;
    }

    /**
     * @param SearchColumnStringField[] $scheduleNumber
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setScheduleNumber(array $scheduleNumber = null)
    {
      $this->scheduleNumber = $scheduleNumber;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSourceAcct()
    {
      return $this->sourceAcct;
    }

    /**
     * @param SearchColumnStringField[] $sourceAcct
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setSourceAcct(array $sourceAcct = null)
    {
      $this->sourceAcct = $sourceAcct;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSrcDocLine()
    {
      return $this->srcDocLine;
    }

    /**
     * @param SearchColumnStringField[] $srcDocLine
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setSrcDocLine(array $srcDocLine = null)
    {
      $this->srcDocLine = $srcDocLine;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSrcTran()
    {
      return $this->srcTran;
    }

    /**
     * @param SearchColumnStringField[] $srcTran
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setSrcTran(array $srcTran = null)
    {
      $this->srcTran = $srcTran;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSrcTranPostPeriod()
    {
      return $this->srcTranPostPeriod;
    }

    /**
     * @param SearchColumnStringField[] $srcTranPostPeriod
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setSrcTranPostPeriod(array $srcTranPostPeriod = null)
    {
      $this->srcTranPostPeriod = $srcTranPostPeriod;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getStartOffset()
    {
      return $this->startOffset;
    }

    /**
     * @param SearchColumnLongField[] $startOffset
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setStartOffset(array $startOffset = null)
    {
      $this->startOffset = $startOffset;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUseForeignAmounts()
    {
      return $this->useForeignAmounts;
    }

    /**
     * @param SearchColumnBooleanField[] $useForeignAmounts
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRowBasic
     */
    public function setUseForeignAmounts(array $useForeignAmounts = null)
    {
      $this->useForeignAmounts = $useForeignAmounts;
      return $this;
    }

}
