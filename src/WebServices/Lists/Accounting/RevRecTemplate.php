<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\RevRecScheduleAmortizationType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\RevRecScheduleRecurrenceType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\RevRecScheduleRecogIntervalSrc;

/**
 * RevRecTemplate
 */
class RevRecTemplate extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var RevRecScheduleAmortizationType
     */
    protected $amortizationType;

    /**
     * @access public
     * @var RevRecScheduleRecurrenceType
     */
    protected $recurrenceType;

    /**
     * @access public
     * @var RevRecScheduleRecogIntervalSrc
     */
    protected $recogIntervalSrc;

    /**
     * @access public
     * @var integer
     */
    protected $amortizationPeriod;

    /**
     * @access public
     * @var integer
     */
    protected $periodOffset;

    /**
     * @access public
     * @var integer
     */
    protected $revRecOffset;

    /**
     * @access public
     * @var float
     */
    protected $initialAmount;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var RevRecTemplateRecurrenceList
     */
    protected $recurrenceList;

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
    	"name" => "string",
    	"amortizationType" => "RevRecScheduleAmortizationType",
    	"recurrenceType" => "RevRecScheduleRecurrenceType",
    	"recogIntervalSrc" => "RevRecScheduleRecogIntervalSrc",
    	"amortizationPeriod" => "integer",
    	"periodOffset" => "integer",
    	"revRecOffset" => "integer",
    	"initialAmount" => "float",
    	"isInactive" => "boolean",
    	"recurrenceList" => "RevRecTemplateRecurrenceList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return RevRecTemplate
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set amortizationType
     *
     * @param RevRecScheduleAmortizationType $amortizationType
     * @return RevRecTemplate
     */
    public function setAmortizationType(RevRecScheduleAmortizationType $amortizationType) {
        $this->amortizationType = $amortizationType;
        return $this;
    }

    /**
     * Get amortizationType
     *
     * @return RevRecScheduleAmortizationType
     */
    public function getAmortizationType() {
        return $this->amortizationType;
    }


    /**
     * Set recurrenceType
     *
     * @param RevRecScheduleRecurrenceType $recurrenceType
     * @return RevRecTemplate
     */
    public function setRecurrenceType(RevRecScheduleRecurrenceType $recurrenceType) {
        $this->recurrenceType = $recurrenceType;
        return $this;
    }

    /**
     * Get recurrenceType
     *
     * @return RevRecScheduleRecurrenceType
     */
    public function getRecurrenceType() {
        return $this->recurrenceType;
    }


    /**
     * Set recogIntervalSrc
     *
     * @param RevRecScheduleRecogIntervalSrc $recogIntervalSrc
     * @return RevRecTemplate
     */
    public function setRecogIntervalSrc(RevRecScheduleRecogIntervalSrc $recogIntervalSrc) {
        $this->recogIntervalSrc = $recogIntervalSrc;
        return $this;
    }

    /**
     * Get recogIntervalSrc
     *
     * @return RevRecScheduleRecogIntervalSrc
     */
    public function getRecogIntervalSrc() {
        return $this->recogIntervalSrc;
    }


    /**
     * Set amortizationPeriod
     *
     * @param integer $amortizationPeriod
     * @return RevRecTemplate
     */
    public function setAmortizationPeriod($amortizationPeriod) {
        $this->amortizationPeriod = $amortizationPeriod;
        return $this;
    }

    /**
     * Get amortizationPeriod
     *
     * @return integer
     */
    public function getAmortizationPeriod() {
        return $this->amortizationPeriod;
    }


    /**
     * Set periodOffset
     *
     * @param integer $periodOffset
     * @return RevRecTemplate
     */
    public function setPeriodOffset($periodOffset) {
        $this->periodOffset = $periodOffset;
        return $this;
    }

    /**
     * Get periodOffset
     *
     * @return integer
     */
    public function getPeriodOffset() {
        return $this->periodOffset;
    }


    /**
     * Set revRecOffset
     *
     * @param integer $revRecOffset
     * @return RevRecTemplate
     */
    public function setRevRecOffset($revRecOffset) {
        $this->revRecOffset = $revRecOffset;
        return $this;
    }

    /**
     * Get revRecOffset
     *
     * @return integer
     */
    public function getRevRecOffset() {
        return $this->revRecOffset;
    }


    /**
     * Set initialAmount
     *
     * @param float $initialAmount
     * @return RevRecTemplate
     */
    public function setInitialAmount($initialAmount) {
        $this->initialAmount = $initialAmount;
        return $this;
    }

    /**
     * Get initialAmount
     *
     * @return float
     */
    public function getInitialAmount() {
        return $this->initialAmount;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return RevRecTemplate
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set recurrenceList
     *
     * @param RevRecTemplateRecurrenceList $recurrenceList
     * @return RevRecTemplate
     */
    public function setRecurrenceList(RevRecTemplateRecurrenceList $recurrenceList) {
        $this->recurrenceList = $recurrenceList;
        return $this;
    }

    /**
     * Get recurrenceList
     *
     * @return RevRecTemplateRecurrenceList
     */
    public function getRecurrenceList() {
        return $this->recurrenceList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return RevRecTemplate
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
     * @return RevRecTemplate
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