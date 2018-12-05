<?php

namespace Nzolt\NetSuite;

class AccountingPeriodSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnBooleanField[] $allLocked
     */
    protected $allLocked = null;

    /**
     * @var SearchColumnBooleanField[] $allowNonGLChanges
     */
    protected $allowNonGLChanges = null;

    /**
     * @var SearchColumnBooleanField[] $apLocked
     */
    protected $apLocked = null;

    /**
     * @var SearchColumnBooleanField[] $arLocked
     */
    protected $arLocked = null;

    /**
     * @var SearchColumnBooleanField[] $closed
     */
    protected $closed = null;

    /**
     * @var SearchColumnDateField[] $closedOnDate
     */
    protected $closedOnDate = null;

    /**
     * @var SearchColumnDateField[] $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isAdjust
     */
    protected $isAdjust = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnBooleanField[] $isQuarter
     */
    protected $isQuarter = null;

    /**
     * @var SearchColumnBooleanField[] $isYear
     */
    protected $isYear = null;

    /**
     * @var SearchColumnSelectField[] $parent
     */
    protected $parent = null;

    /**
     * @var SearchColumnBooleanField[] $payrollLocked
     */
    protected $payrollLocked = null;

    /**
     * @var SearchColumnStringField[] $periodName
     */
    protected $periodName = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllLocked()
    {
      return $this->allLocked;
    }

    /**
     * @param SearchColumnBooleanField[] $allLocked
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setAllLocked(array $allLocked = null)
    {
      $this->allLocked = $allLocked;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllowNonGLChanges()
    {
      return $this->allowNonGLChanges;
    }

    /**
     * @param SearchColumnBooleanField[] $allowNonGLChanges
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setAllowNonGLChanges(array $allowNonGLChanges = null)
    {
      $this->allowNonGLChanges = $allowNonGLChanges;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getApLocked()
    {
      return $this->apLocked;
    }

    /**
     * @param SearchColumnBooleanField[] $apLocked
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setApLocked(array $apLocked = null)
    {
      $this->apLocked = $apLocked;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getArLocked()
    {
      return $this->arLocked;
    }

    /**
     * @param SearchColumnBooleanField[] $arLocked
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setArLocked(array $arLocked = null)
    {
      $this->arLocked = $arLocked;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getClosed()
    {
      return $this->closed;
    }

    /**
     * @param SearchColumnBooleanField[] $closed
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setClosed(array $closed = null)
    {
      $this->closed = $closed;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getClosedOnDate()
    {
      return $this->closedOnDate;
    }

    /**
     * @param SearchColumnDateField[] $closedOnDate
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setClosedOnDate(array $closedOnDate = null)
    {
      $this->closedOnDate = $closedOnDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setEndDate(array $endDate = null)
    {
      $this->endDate = $endDate;
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
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsAdjust()
    {
      return $this->isAdjust;
    }

    /**
     * @param SearchColumnBooleanField[] $isAdjust
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setIsAdjust(array $isAdjust = null)
    {
      $this->isAdjust = $isAdjust;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsQuarter()
    {
      return $this->isQuarter;
    }

    /**
     * @param SearchColumnBooleanField[] $isQuarter
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setIsQuarter(array $isQuarter = null)
    {
      $this->isQuarter = $isQuarter;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsYear()
    {
      return $this->isYear;
    }

    /**
     * @param SearchColumnBooleanField[] $isYear
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setIsYear(array $isYear = null)
    {
      $this->isYear = $isYear;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param SearchColumnSelectField[] $parent
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setParent(array $parent = null)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPayrollLocked()
    {
      return $this->payrollLocked;
    }

    /**
     * @param SearchColumnBooleanField[] $payrollLocked
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setPayrollLocked(array $payrollLocked = null)
    {
      $this->payrollLocked = $payrollLocked;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPeriodName()
    {
      return $this->periodName;
    }

    /**
     * @param SearchColumnStringField[] $periodName
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setPeriodName(array $periodName = null)
    {
      $this->periodName = $periodName;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return \Nzolt\NetSuite\AccountingPeriodSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
      return $this;
    }

}
