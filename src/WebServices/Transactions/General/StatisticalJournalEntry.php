<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\General;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * StatisticalJournalEntry
 */
class StatisticalJournalEntry extends Record {

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var string
     */
    protected $tranId;

    /**
     * @access public
     * @var RecordRef
     */
    public $parentExpenseAlloc;

    /**
     * @access public
     * @var boolean
     */
    protected $approved;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

    /**
     * @access public
     * @var dateTime
     */
    protected $reversalDate;

    /**
     * @access public
     * @var boolean
     */
    protected $reversalDefer;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $unitsType;

    /**
     * @access public
     * @var StatisticalJournalEntryLineList
     */
    protected $lineList;

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
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"customForm" => "RecordRef",
    	"tranId" => "string",
    	"parentExpenseAlloc" => "RecordRef",
    	"approved" => "boolean",
    	"tranDate" => "dateTime",
    	"postingPeriod" => "RecordRef",
    	"reversalDate" => "dateTime",
    	"reversalDefer" => "boolean",
    	"subsidiary" => "RecordRef",
    	"unitsType" => "RecordRef",
    	"lineList" => "StatisticalJournalEntryLineList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return StatisticalJournalEntry
     */
    public function setCreatedDate(\DateTime $createdDate) {
        $this->createdDate = $createdDate->format('c');
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return new \DateTime($this->createdDate);
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return StatisticalJournalEntry
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate->format('c');
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate() {
        return new \DateTime($this->lastModifiedDate);
    }


    /**
     * Set tranId
     *
     * @param string $tranId
     * @return StatisticalJournalEntry
     */
    public function setTranId($tranId) {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * Get tranId
     *
     * @return string
     */
    public function getTranId() {
        return $this->tranId;
    }


    /**
     * Set approved
     *
     * @param boolean $approved
     * @return StatisticalJournalEntry
     */
    public function setApproved($approved) {
        $this->approved = $approved;
        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean
     */
    public function getApproved() {
        return $this->approved;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return StatisticalJournalEntry
     */
    public function setTranDate(\DateTime $tranDate) {
        $this->tranDate = $tranDate->format('c');
        return $this;
    }

    /**
     * Get tranDate
     *
     * @return \DateTime
     */
    public function getTranDate() {
        return new \DateTime($this->tranDate);
    }


    /**
     * Set reversalDate
     *
     * @param \DateTime $reversalDate
     * @return StatisticalJournalEntry
     */
    public function setReversalDate(\DateTime $reversalDate) {
        $this->reversalDate = $reversalDate->format('c');
        return $this;
    }

    /**
     * Get reversalDate
     *
     * @return \DateTime
     */
    public function getReversalDate() {
        return new \DateTime($this->reversalDate);
    }


    /**
     * Set reversalDefer
     *
     * @param boolean $reversalDefer
     * @return StatisticalJournalEntry
     */
    public function setReversalDefer($reversalDefer) {
        $this->reversalDefer = $reversalDefer;
        return $this;
    }

    /**
     * Get reversalDefer
     *
     * @return boolean
     */
    public function getReversalDefer() {
        return $this->reversalDefer;
    }


    /**
     * Set lineList
     *
     * @param StatisticalJournalEntryLineList $lineList
     * @return StatisticalJournalEntry
     */
    public function setLineList(StatisticalJournalEntryLineList $lineList) {
        $this->lineList = $lineList;
        return $this;
    }

    /**
     * Get lineList
     *
     * @return StatisticalJournalEntryLineList
     */
    public function getLineList() {
        return $this->lineList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return StatisticalJournalEntry
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
     * @return StatisticalJournalEntry
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
     * @return StatisticalJournalEntry
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