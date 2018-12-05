<?php

namespace Nzolt\NetSuite;

class AccountingPeriodSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchBooleanField $allLocked
     */
    protected $allLocked = null;

    /**
     * @var SearchBooleanField $allowNonGlChanges
     */
    protected $allowNonGlChanges = null;

    /**
     * @var SearchBooleanField $apLocked
     */
    protected $apLocked = null;

    /**
     * @var SearchBooleanField $arLocked
     */
    protected $arLocked = null;

    /**
     * @var SearchBooleanField $closed
     */
    protected $closed = null;

    /**
     * @var SearchDateField $closedOnDate
     */
    protected $closedOnDate = null;

    /**
     * @var SearchDateField $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isAdjust
     */
    protected $isAdjust = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchBooleanField $isQuarter
     */
    protected $isQuarter = null;

    /**
     * @var SearchBooleanField $isYear
     */
    protected $isYear = null;

    /**
     * @var SearchMultiSelectField $parent
     */
    protected $parent = null;

    /**
     * @var SearchBooleanField $payrollLocked
     */
    protected $payrollLocked = null;

    /**
     * @var SearchStringField $periodName
     */
    protected $periodName = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllLocked()
    {
      return $this->allLocked;
    }

    /**
     * @param SearchBooleanField $allLocked
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setAllLocked($allLocked)
    {
      $this->allLocked = $allLocked;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllowNonGlChanges()
    {
      return $this->allowNonGlChanges;
    }

    /**
     * @param SearchBooleanField $allowNonGlChanges
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setAllowNonGlChanges($allowNonGlChanges)
    {
      $this->allowNonGlChanges = $allowNonGlChanges;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getApLocked()
    {
      return $this->apLocked;
    }

    /**
     * @param SearchBooleanField $apLocked
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setApLocked($apLocked)
    {
      $this->apLocked = $apLocked;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getArLocked()
    {
      return $this->arLocked;
    }

    /**
     * @param SearchBooleanField $arLocked
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setArLocked($arLocked)
    {
      $this->arLocked = $arLocked;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getClosed()
    {
      return $this->closed;
    }

    /**
     * @param SearchBooleanField $closed
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setClosed($closed)
    {
      $this->closed = $closed;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getClosedOnDate()
    {
      return $this->closedOnDate;
    }

    /**
     * @param SearchDateField $closedOnDate
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setClosedOnDate($closedOnDate)
    {
      $this->closedOnDate = $closedOnDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchDateField $endDate
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
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
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
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
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsAdjust()
    {
      return $this->isAdjust;
    }

    /**
     * @param SearchBooleanField $isAdjust
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setIsAdjust($isAdjust)
    {
      $this->isAdjust = $isAdjust;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsQuarter()
    {
      return $this->isQuarter;
    }

    /**
     * @param SearchBooleanField $isQuarter
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setIsQuarter($isQuarter)
    {
      $this->isQuarter = $isQuarter;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsYear()
    {
      return $this->isYear;
    }

    /**
     * @param SearchBooleanField $isYear
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setIsYear($isYear)
    {
      $this->isYear = $isYear;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param SearchMultiSelectField $parent
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPayrollLocked()
    {
      return $this->payrollLocked;
    }

    /**
     * @param SearchBooleanField $payrollLocked
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setPayrollLocked($payrollLocked)
    {
      $this->payrollLocked = $payrollLocked;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPeriodName()
    {
      return $this->periodName;
    }

    /**
     * @param SearchStringField $periodName
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setPeriodName($periodName)
    {
      $this->periodName = $periodName;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchDateField $startDate
     * @return \Nzolt\NetSuite\AccountingPeriodSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

}
