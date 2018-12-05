<?php

namespace Nzolt\NetSuite;

class ItemAccountingBookDetail
{

    /**
     * @var RecordRef $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var RecordRef $createRevenuePlansOn
     */
    protected $createRevenuePlansOn = null;

    /**
     * @var RecordRef $revenueRecognitionRule
     */
    protected $revenueRecognitionRule = null;

    /**
     * @var RecordRef $revRecForecastRule
     */
    protected $revRecForecastRule = null;

    /**
     * @var RecordRef $revRecSchedule
     */
    protected $revRecSchedule = null;

    /**
     * @var boolean $sameAsPrimaryRevRec
     */
    protected $sameAsPrimaryRevRec = null;

    /**
     * @var RecordRef $amortizationTemplate
     */
    protected $amortizationTemplate = null;

    /**
     * @var boolean $sameAsPrimaryAmortization
     */
    protected $sameAsPrimaryAmortization = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getAccountingBook()
    {
      return $this->accountingBook;
    }

    /**
     * @param RecordRef $accountingBook
     * @return \Nzolt\NetSuite\ItemAccountingBookDetail
     */
    public function setAccountingBook($accountingBook)
    {
      $this->accountingBook = $accountingBook;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreateRevenuePlansOn()
    {
      return $this->createRevenuePlansOn;
    }

    /**
     * @param RecordRef $createRevenuePlansOn
     * @return \Nzolt\NetSuite\ItemAccountingBookDetail
     */
    public function setCreateRevenuePlansOn($createRevenuePlansOn)
    {
      $this->createRevenuePlansOn = $createRevenuePlansOn;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevenueRecognitionRule()
    {
      return $this->revenueRecognitionRule;
    }

    /**
     * @param RecordRef $revenueRecognitionRule
     * @return \Nzolt\NetSuite\ItemAccountingBookDetail
     */
    public function setRevenueRecognitionRule($revenueRecognitionRule)
    {
      $this->revenueRecognitionRule = $revenueRecognitionRule;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecForecastRule()
    {
      return $this->revRecForecastRule;
    }

    /**
     * @param RecordRef $revRecForecastRule
     * @return \Nzolt\NetSuite\ItemAccountingBookDetail
     */
    public function setRevRecForecastRule($revRecForecastRule)
    {
      $this->revRecForecastRule = $revRecForecastRule;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecSchedule()
    {
      return $this->revRecSchedule;
    }

    /**
     * @param RecordRef $revRecSchedule
     * @return \Nzolt\NetSuite\ItemAccountingBookDetail
     */
    public function setRevRecSchedule($revRecSchedule)
    {
      $this->revRecSchedule = $revRecSchedule;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSameAsPrimaryRevRec()
    {
      return $this->sameAsPrimaryRevRec;
    }

    /**
     * @param boolean $sameAsPrimaryRevRec
     * @return \Nzolt\NetSuite\ItemAccountingBookDetail
     */
    public function setSameAsPrimaryRevRec($sameAsPrimaryRevRec)
    {
      $this->sameAsPrimaryRevRec = $sameAsPrimaryRevRec;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAmortizationTemplate()
    {
      return $this->amortizationTemplate;
    }

    /**
     * @param RecordRef $amortizationTemplate
     * @return \Nzolt\NetSuite\ItemAccountingBookDetail
     */
    public function setAmortizationTemplate($amortizationTemplate)
    {
      $this->amortizationTemplate = $amortizationTemplate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSameAsPrimaryAmortization()
    {
      return $this->sameAsPrimaryAmortization;
    }

    /**
     * @param boolean $sameAsPrimaryAmortization
     * @return \Nzolt\NetSuite\ItemAccountingBookDetail
     */
    public function setSameAsPrimaryAmortization($sameAsPrimaryAmortization)
    {
      $this->sameAsPrimaryAmortization = $sameAsPrimaryAmortization;
      return $this;
    }

}
