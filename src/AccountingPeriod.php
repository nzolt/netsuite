<?php

namespace Nzolt\NetSuite;

class AccountingPeriod extends Record
{

    /**
     * @var string $periodName
     */
    protected $periodName = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var RecordRef $fiscalCalendar
     */
    protected $fiscalCalendar = null;

    /**
     * @var \DateTime $closedOnDate
     */
    protected $closedOnDate = null;

    /**
     * @var boolean $isAdjust
     */
    protected $isAdjust = null;

    /**
     * @var AccountingPeriodFiscalCalendarsList $fiscalCalendarsList
     */
    protected $fiscalCalendarsList = null;

    /**
     * @var boolean $isQuarter
     */
    protected $isQuarter = null;

    /**
     * @var boolean $isYear
     */
    protected $isYear = null;

    /**
     * @var boolean $closed
     */
    protected $closed = null;

    /**
     * @var boolean $apLocked
     */
    protected $apLocked = null;

    /**
     * @var boolean $arLocked
     */
    protected $arLocked = null;

    /**
     * @var boolean $payrollLocked
     */
    protected $payrollLocked = null;

    /**
     * @var boolean $allLocked
     */
    protected $allLocked = null;

    /**
     * @var boolean $allowNonGLChanges
     */
    protected $allowNonGLChanges = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @param string $internalId
     */
    public function __construct($internalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
    }

    /**
     * @return string
     */
    public function getPeriodName()
    {
      return $this->periodName;
    }

    /**
     * @param string $periodName
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setPeriodName($periodName)
    {
      $this->periodName = $periodName;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param RecordRef $parent
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFiscalCalendar()
    {
      return $this->fiscalCalendar;
    }

    /**
     * @param RecordRef $fiscalCalendar
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setFiscalCalendar($fiscalCalendar)
    {
      $this->fiscalCalendar = $fiscalCalendar;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getClosedOnDate()
    {
      if ($this->closedOnDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->closedOnDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $closedOnDate
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setClosedOnDate(\DateTime $closedOnDate = null)
    {
      if ($closedOnDate == null) {
       $this->closedOnDate = null;
      } else {
        $this->closedOnDate = $closedOnDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAdjust()
    {
      return $this->isAdjust;
    }

    /**
     * @param boolean $isAdjust
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setIsAdjust($isAdjust)
    {
      $this->isAdjust = $isAdjust;
      return $this;
    }

    /**
     * @return AccountingPeriodFiscalCalendarsList
     */
    public function getFiscalCalendarsList()
    {
      return $this->fiscalCalendarsList;
    }

    /**
     * @param AccountingPeriodFiscalCalendarsList $fiscalCalendarsList
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setFiscalCalendarsList($fiscalCalendarsList)
    {
      $this->fiscalCalendarsList = $fiscalCalendarsList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsQuarter()
    {
      return $this->isQuarter;
    }

    /**
     * @param boolean $isQuarter
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setIsQuarter($isQuarter)
    {
      $this->isQuarter = $isQuarter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsYear()
    {
      return $this->isYear;
    }

    /**
     * @param boolean $isYear
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setIsYear($isYear)
    {
      $this->isYear = $isYear;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClosed()
    {
      return $this->closed;
    }

    /**
     * @param boolean $closed
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setClosed($closed)
    {
      $this->closed = $closed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApLocked()
    {
      return $this->apLocked;
    }

    /**
     * @param boolean $apLocked
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setApLocked($apLocked)
    {
      $this->apLocked = $apLocked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getArLocked()
    {
      return $this->arLocked;
    }

    /**
     * @param boolean $arLocked
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setArLocked($arLocked)
    {
      $this->arLocked = $arLocked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPayrollLocked()
    {
      return $this->payrollLocked;
    }

    /**
     * @param boolean $payrollLocked
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setPayrollLocked($payrollLocked)
    {
      $this->payrollLocked = $payrollLocked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllLocked()
    {
      return $this->allLocked;
    }

    /**
     * @param boolean $allLocked
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setAllLocked($allLocked)
    {
      $this->allLocked = $allLocked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowNonGLChanges()
    {
      return $this->allowNonGLChanges;
    }

    /**
     * @param boolean $allowNonGLChanges
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setAllowNonGLChanges($allowNonGLChanges)
    {
      $this->allowNonGLChanges = $allowNonGLChanges;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\AccountingPeriod
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
