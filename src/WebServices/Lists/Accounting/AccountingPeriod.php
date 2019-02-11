<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * AccountingPeriod
 */
class AccountingPeriod extends Record {

    /**
     * @access public
     * @var string
     */
    protected $periodName;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $fiscalCalendar;

    /**
     * @access public
     * @var dateTime
     */
    protected $closedOnDate;

    /**
     * @access public
     * @var boolean
     */
    protected $isAdjust;

    /**
     * @access public
     * @var AccountingPeriodFiscalCalendarsList
     */
    protected $fiscalCalendarsList;

    /**
     * @access public
     * @var boolean
     */
    protected $isQuarter;

    /**
     * @access public
     * @var boolean
     */
    protected $isYear;

    /**
     * @access public
     * @var boolean
     */
    protected $closed;

    /**
     * @access public
     * @var boolean
     */
    protected $apLocked;

    /**
     * @access public
     * @var boolean
     */
    protected $arLocked;

    /**
     * @access public
     * @var boolean
     */
    protected $payrollLocked;

    /**
     * @access public
     * @var boolean
     */
    protected $allLocked;

    /**
     * @access public
     * @var boolean
     */
    protected $allowNonGLChanges;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    static $paramtypesmap = array(
    	"periodName" => "string",
    	"parent" => "RecordRef",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"fiscalCalendar" => "RecordRef",
    	"closedOnDate" => "dateTime",
    	"isAdjust" => "boolean",
    	"fiscalCalendarsList" => "AccountingPeriodFiscalCalendarsList",
    	"isQuarter" => "boolean",
    	"isYear" => "boolean",
    	"closed" => "boolean",
    	"apLocked" => "boolean",
    	"arLocked" => "boolean",
    	"payrollLocked" => "boolean",
    	"allLocked" => "boolean",
    	"allowNonGLChanges" => "boolean",
    	"internalId" => "string",
    );

    /**
     * Set periodName
     *
     * @param string $periodName
     * @return AccountingPeriod
     */
    public function setPeriodName($periodName) {
        $this->periodName = $periodName;
        return $this;
    }

    /**
     * Get periodName
     *
     * @return string
     */
    public function getPeriodName() {
        return $this->periodName;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return AccountingPeriod
     */
    public function setStartDate(\DateTime $startDate) {
        $this->startDate = $startDate->format('c');
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate() {
        return new \DateTime($this->startDate);
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return AccountingPeriod
     */
    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate->format('c');
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return new \DateTime($this->endDate);
    }


    /**
     * Set closedOnDate
     *
     * @param \DateTime $closedOnDate
     * @return AccountingPeriod
     */
    public function setClosedOnDate(\DateTime $closedOnDate) {
        $this->closedOnDate = $closedOnDate->format('c');
        return $this;
    }

    /**
     * Get closedOnDate
     *
     * @return \DateTime
     */
    public function getClosedOnDate() {
        return new \DateTime($this->closedOnDate);
    }


    /**
     * Set isAdjust
     *
     * @param boolean $isAdjust
     * @return AccountingPeriod
     */
    public function setIsAdjust($isAdjust) {
        $this->isAdjust = $isAdjust;
        return $this;
    }

    /**
     * Get isAdjust
     *
     * @return boolean
     */
    public function getIsAdjust() {
        return $this->isAdjust;
    }


    /**
     * Set fiscalCalendarsList
     *
     * @param AccountingPeriodFiscalCalendarsList $fiscalCalendarsList
     * @return AccountingPeriod
     */
    public function setFiscalCalendarsList(AccountingPeriodFiscalCalendarsList $fiscalCalendarsList) {
        $this->fiscalCalendarsList = $fiscalCalendarsList;
        return $this;
    }

    /**
     * Get fiscalCalendarsList
     *
     * @return AccountingPeriodFiscalCalendarsList
     */
    public function getFiscalCalendarsList() {
        return $this->fiscalCalendarsList;
    }


    /**
     * Set isQuarter
     *
     * @param boolean $isQuarter
     * @return AccountingPeriod
     */
    public function setIsQuarter($isQuarter) {
        $this->isQuarter = $isQuarter;
        return $this;
    }

    /**
     * Get isQuarter
     *
     * @return boolean
     */
    public function getIsQuarter() {
        return $this->isQuarter;
    }


    /**
     * Set isYear
     *
     * @param boolean $isYear
     * @return AccountingPeriod
     */
    public function setIsYear($isYear) {
        $this->isYear = $isYear;
        return $this;
    }

    /**
     * Get isYear
     *
     * @return boolean
     */
    public function getIsYear() {
        return $this->isYear;
    }


    /**
     * Set closed
     *
     * @param boolean $closed
     * @return AccountingPeriod
     */
    public function setClosed($closed) {
        $this->closed = $closed;
        return $this;
    }

    /**
     * Get closed
     *
     * @return boolean
     */
    public function getClosed() {
        return $this->closed;
    }


    /**
     * Set apLocked
     *
     * @param boolean $apLocked
     * @return AccountingPeriod
     */
    public function setApLocked($apLocked) {
        $this->apLocked = $apLocked;
        return $this;
    }

    /**
     * Get apLocked
     *
     * @return boolean
     */
    public function getApLocked() {
        return $this->apLocked;
    }


    /**
     * Set arLocked
     *
     * @param boolean $arLocked
     * @return AccountingPeriod
     */
    public function setArLocked($arLocked) {
        $this->arLocked = $arLocked;
        return $this;
    }

    /**
     * Get arLocked
     *
     * @return boolean
     */
    public function getArLocked() {
        return $this->arLocked;
    }


    /**
     * Set payrollLocked
     *
     * @param boolean $payrollLocked
     * @return AccountingPeriod
     */
    public function setPayrollLocked($payrollLocked) {
        $this->payrollLocked = $payrollLocked;
        return $this;
    }

    /**
     * Get payrollLocked
     *
     * @return boolean
     */
    public function getPayrollLocked() {
        return $this->payrollLocked;
    }


    /**
     * Set allLocked
     *
     * @param boolean $allLocked
     * @return AccountingPeriod
     */
    public function setAllLocked($allLocked) {
        $this->allLocked = $allLocked;
        return $this;
    }

    /**
     * Get allLocked
     *
     * @return boolean
     */
    public function getAllLocked() {
        return $this->allLocked;
    }


    /**
     * Set allowNonGLChanges
     *
     * @param boolean $allowNonGLChanges
     * @return AccountingPeriod
     */
    public function setAllowNonGLChanges($allowNonGLChanges) {
        $this->allowNonGLChanges = $allowNonGLChanges;
        return $this;
    }

    /**
     * Get allowNonGLChanges
     *
     * @return boolean
     */
    public function getAllowNonGLChanges() {
        return $this->allowNonGLChanges;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return AccountingPeriod
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }

}