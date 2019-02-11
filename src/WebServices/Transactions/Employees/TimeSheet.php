<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\Duration;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * TimeSheet
 */
class TimeSheet extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $employee;

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
     * @var Duration
     */
    protected $totalHours;

    /**
     * @access public
     * @var RecordRef
     */
    public $approvalStatus;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var TimeSheetTimeGridList
     */
    protected $timeGridList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"customForm" => "RecordRef",
    	"employee" => "RecordRef",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"totalHours" => "Duration",
    	"approvalStatus" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"timeGridList" => "TimeSheetTimeGridList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return TimeSheet
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
     * @return TimeSheet
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
     * Set totalHours
     *
     * @param Duration $totalHours
     * @return TimeSheet
     */
    public function setTotalHours(Duration $totalHours) {
        $this->totalHours = $totalHours;
        return $this;
    }

    /**
     * Get totalHours
     *
     * @return Duration
     */
    public function getTotalHours() {
        return $this->totalHours;
    }


    /**
     * Set timeGridList
     *
     * @param TimeSheetTimeGridList $timeGridList
     * @return TimeSheet
     */
    public function setTimeGridList(TimeSheetTimeGridList $timeGridList) {
        $this->timeGridList = $timeGridList;
        return $this;
    }

    /**
     * Get timeGridList
     *
     * @return TimeSheetTimeGridList
     */
    public function getTimeGridList() {
        return $this->timeGridList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return TimeSheet
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return TimeSheet
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


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return TimeSheet
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}