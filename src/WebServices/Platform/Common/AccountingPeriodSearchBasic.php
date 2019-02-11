<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;

/**
 * AccountingPeriodSearchBasic
 */
class AccountingPeriodSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $allLocked;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $allowNonGlChanges;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $apLocked;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $arLocked;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $closed;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $closedOnDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $endDate;

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
    protected $isAdjust;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isInactive;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isQuarter;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isYear;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $parent;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $payrollLocked;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $periodName;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDate;

    static $paramtypesmap = array(
    	"allLocked" => "SearchBooleanField",
    	"allowNonGlChanges" => "SearchBooleanField",
    	"apLocked" => "SearchBooleanField",
    	"arLocked" => "SearchBooleanField",
    	"closed" => "SearchBooleanField",
    	"closedOnDate" => "SearchDateField",
    	"endDate" => "SearchDateField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isAdjust" => "SearchBooleanField",
    	"isInactive" => "SearchBooleanField",
    	"isQuarter" => "SearchBooleanField",
    	"isYear" => "SearchBooleanField",
    	"parent" => "SearchMultiSelectField",
    	"payrollLocked" => "SearchBooleanField",
    	"periodName" => "SearchStringField",
    	"startDate" => "SearchDateField",
    );

    /**
     * Set allLocked
     *
     * @param SearchBooleanField $allLocked
     * @return AccountingPeriodSearchBasic
     */
    public function setAllLocked(SearchBooleanField $allLocked) {
        $this->allLocked = $allLocked;
        return $this;
    }

    /**
     * Get allLocked
     *
     * @return SearchBooleanField
     */
    public function getAllLocked() {
        return $this->allLocked;
    }


    /**
     * Set allowNonGlChanges
     *
     * @param SearchBooleanField $allowNonGlChanges
     * @return AccountingPeriodSearchBasic
     */
    public function setAllowNonGlChanges(SearchBooleanField $allowNonGlChanges) {
        $this->allowNonGlChanges = $allowNonGlChanges;
        return $this;
    }

    /**
     * Get allowNonGlChanges
     *
     * @return SearchBooleanField
     */
    public function getAllowNonGlChanges() {
        return $this->allowNonGlChanges;
    }


    /**
     * Set apLocked
     *
     * @param SearchBooleanField $apLocked
     * @return AccountingPeriodSearchBasic
     */
    public function setApLocked(SearchBooleanField $apLocked) {
        $this->apLocked = $apLocked;
        return $this;
    }

    /**
     * Get apLocked
     *
     * @return SearchBooleanField
     */
    public function getApLocked() {
        return $this->apLocked;
    }


    /**
     * Set arLocked
     *
     * @param SearchBooleanField $arLocked
     * @return AccountingPeriodSearchBasic
     */
    public function setArLocked(SearchBooleanField $arLocked) {
        $this->arLocked = $arLocked;
        return $this;
    }

    /**
     * Get arLocked
     *
     * @return SearchBooleanField
     */
    public function getArLocked() {
        return $this->arLocked;
    }


    /**
     * Set closed
     *
     * @param SearchBooleanField $closed
     * @return AccountingPeriodSearchBasic
     */
    public function setClosed(SearchBooleanField $closed) {
        $this->closed = $closed;
        return $this;
    }

    /**
     * Get closed
     *
     * @return SearchBooleanField
     */
    public function getClosed() {
        return $this->closed;
    }


    /**
     * Set closedOnDate
     *
     * @param SearchDateField $closedOnDate
     * @return AccountingPeriodSearchBasic
     */
    public function setClosedOnDate(SearchDateField $closedOnDate) {
        $this->closedOnDate = $closedOnDate;
        return $this;
    }

    /**
     * Get closedOnDate
     *
     * @return SearchDateField
     */
    public function getClosedOnDate() {
        return $this->closedOnDate;
    }


    /**
     * Set endDate
     *
     * @param SearchDateField $endDate
     * @return AccountingPeriodSearchBasic
     */
    public function setEndDate(SearchDateField $endDate) {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Get endDate
     *
     * @return SearchDateField
     */
    public function getEndDate() {
        return $this->endDate;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return AccountingPeriodSearchBasic
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
     * @return AccountingPeriodSearchBasic
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
     * Set isAdjust
     *
     * @param SearchBooleanField $isAdjust
     * @return AccountingPeriodSearchBasic
     */
    public function setIsAdjust(SearchBooleanField $isAdjust) {
        $this->isAdjust = $isAdjust;
        return $this;
    }

    /**
     * Get isAdjust
     *
     * @return SearchBooleanField
     */
    public function getIsAdjust() {
        return $this->isAdjust;
    }


    /**
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return AccountingPeriodSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return SearchBooleanField
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set isQuarter
     *
     * @param SearchBooleanField $isQuarter
     * @return AccountingPeriodSearchBasic
     */
    public function setIsQuarter(SearchBooleanField $isQuarter) {
        $this->isQuarter = $isQuarter;
        return $this;
    }

    /**
     * Get isQuarter
     *
     * @return SearchBooleanField
     */
    public function getIsQuarter() {
        return $this->isQuarter;
    }


    /**
     * Set isYear
     *
     * @param SearchBooleanField $isYear
     * @return AccountingPeriodSearchBasic
     */
    public function setIsYear(SearchBooleanField $isYear) {
        $this->isYear = $isYear;
        return $this;
    }

    /**
     * Get isYear
     *
     * @return SearchBooleanField
     */
    public function getIsYear() {
        return $this->isYear;
    }


    /**
     * Set parent
     *
     * @param SearchMultiSelectField $parent
     * @return AccountingPeriodSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get parent
     *
     * @return SearchMultiSelectField
     */
    public function getParent() {
        return $this->parent;
    }


    /**
     * Set payrollLocked
     *
     * @param SearchBooleanField $payrollLocked
     * @return AccountingPeriodSearchBasic
     */
    public function setPayrollLocked(SearchBooleanField $payrollLocked) {
        $this->payrollLocked = $payrollLocked;
        return $this;
    }

    /**
     * Get payrollLocked
     *
     * @return SearchBooleanField
     */
    public function getPayrollLocked() {
        return $this->payrollLocked;
    }


    /**
     * Set periodName
     *
     * @param SearchStringField $periodName
     * @return AccountingPeriodSearchBasic
     */
    public function setPeriodName(SearchStringField $periodName) {
        $this->periodName = $periodName;
        return $this;
    }

    /**
     * Get periodName
     *
     * @return SearchStringField
     */
    public function getPeriodName() {
        return $this->periodName;
    }


    /**
     * Set startDate
     *
     * @param SearchDateField $startDate
     * @return AccountingPeriodSearchBasic
     */
    public function setStartDate(SearchDateField $startDate) {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Get startDate
     *
     * @return SearchDateField
     */
    public function getStartDate() {
        return $this->startDate;
    }

}