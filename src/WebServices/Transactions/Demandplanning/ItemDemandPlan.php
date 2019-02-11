<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Demandplanning;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Transactions\Demandplanning\Types\DemandPlanMonth;
use Nzolt\NetSuite\WebServices\Transactions\Demandplanning\Types\DemandPlanCalendarType;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ItemDemandPlan
 */
class ItemDemandPlan extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var RecordRef
     */
    public $units;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var integer
     */
    protected $year;

    /**
     * @access public
     * @var DemandPlanMonth
     */
    protected $month;

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
     * @var DemandPlanCalendarType
     */
    protected $demandPlanCalendarType;

    /**
     * @access public
     * @var DemandPlanMatrix
     */
    protected $demandPlanMatrix;

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
    	"subsidiary" => "RecordRef",
    	"location" => "RecordRef",
    	"item" => "RecordRef",
    	"units" => "RecordRef",
    	"memo" => "string",
    	"year" => "integer",
    	"month" => "DemandPlanMonth",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"demandPlanCalendarType" => "DemandPlanCalendarType",
    	"demandPlanMatrix" => "DemandPlanMatrix",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set memo
     *
     * @param string $memo
     * @return ItemDemandPlan
     */
    public function setMemo($memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo() {
        return $this->memo;
    }


    /**
     * Set year
     *
     * @param integer $year
     * @return ItemDemandPlan
     */
    public function setYear($year) {
        $this->year = $year;
        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear() {
        return $this->year;
    }


    /**
     * Set month
     *
     * @param DemandPlanMonth $month
     * @return ItemDemandPlan
     */
    public function setMonth(DemandPlanMonth $month) {
        $this->month = $month;
        return $this;
    }

    /**
     * Get month
     *
     * @return DemandPlanMonth
     */
    public function getMonth() {
        return $this->month;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return ItemDemandPlan
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
     * @return ItemDemandPlan
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
     * Set demandPlanCalendarType
     *
     * @param DemandPlanCalendarType $demandPlanCalendarType
     * @return ItemDemandPlan
     */
    public function setDemandPlanCalendarType(DemandPlanCalendarType $demandPlanCalendarType) {
        $this->demandPlanCalendarType = $demandPlanCalendarType;
        return $this;
    }

    /**
     * Get demandPlanCalendarType
     *
     * @return DemandPlanCalendarType
     */
    public function getDemandPlanCalendarType() {
        return $this->demandPlanCalendarType;
    }


    /**
     * Set demandPlanMatrix
     *
     * @param DemandPlanMatrix $demandPlanMatrix
     * @return ItemDemandPlan
     */
    public function setDemandPlanMatrix(DemandPlanMatrix $demandPlanMatrix) {
        $this->demandPlanMatrix = $demandPlanMatrix;
        return $this;
    }

    /**
     * Get demandPlanMatrix
     *
     * @return DemandPlanMatrix
     */
    public function getDemandPlanMatrix() {
        return $this->demandPlanMatrix;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ItemDemandPlan
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
     * @return ItemDemandPlan
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
     * @return ItemDemandPlan
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