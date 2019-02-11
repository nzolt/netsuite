<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * TimeSheetSearchBasic
 */
class TimeSheetSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $approvalStatus;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $employee;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $id;

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
     * @var SearchDateField
     */
    protected $timeSheetDate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $totalHours;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"approvalStatus" => "SearchMultiSelectField",
    	"employee" => "SearchMultiSelectField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"id" => "SearchLongField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"timeSheetDate" => "SearchDateField",
    	"totalHours" => "SearchDoubleField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set approvalStatus
     *
     * @param SearchMultiSelectField $approvalStatus
     * @return TimeSheetSearchBasic
     */
    public function setApprovalStatus(SearchMultiSelectField $approvalStatus) {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * Get approvalStatus
     *
     * @return SearchMultiSelectField
     */
    public function getApprovalStatus() {
        return $this->approvalStatus;
    }


    /**
     * Set employee
     *
     * @param SearchMultiSelectField $employee
     * @return TimeSheetSearchBasic
     */
    public function setEmployee(SearchMultiSelectField $employee) {
        $this->employee = $employee;
        return $this;
    }

    /**
     * Get employee
     *
     * @return SearchMultiSelectField
     */
    public function getEmployee() {
        return $this->employee;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return TimeSheetSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return TimeSheetSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set id
     *
     * @param SearchLongField $id
     * @return TimeSheetSearchBasic
     */
    public function setId(SearchLongField $id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return SearchLongField
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return TimeSheetSearchBasic
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
     * @return TimeSheetSearchBasic
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
     * Set timeSheetDate
     *
     * @param SearchDateField $timeSheetDate
     * @return TimeSheetSearchBasic
     */
    public function setTimeSheetDate(SearchDateField $timeSheetDate) {
        $this->timeSheetDate = $timeSheetDate;
        return $this;
    }

    /**
     * Get timeSheetDate
     *
     * @return SearchDateField
     */
    public function getTimeSheetDate() {
        return $this->timeSheetDate;
    }


    /**
     * Set totalHours
     *
     * @param SearchDoubleField $totalHours
     * @return TimeSheetSearchBasic
     */
    public function setTotalHours(SearchDoubleField $totalHours) {
        $this->totalHours = $totalHours;
        return $this;
    }

    /**
     * Get totalHours
     *
     * @return SearchDoubleField
     */
    public function getTotalHours() {
        return $this->totalHours;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return TimeSheetSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}