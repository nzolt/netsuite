<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\General;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * JournalEntry
 */
class JournalEntry extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var string
     */
    protected $tranId;

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
    public $parentExpenseAlloc;

    /**
     * @access public
     * @var boolean
     */
    protected $isBookSpecific;

    /**
     * @access public
     * @var RecordRef
     */
    public $accountingBook;

    /**
     * @access public
     * @var string
     */
    protected $reversalEntry;

    /**
     * @access public
     * @var RecordRef
     */
    public $createdFrom;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $toSubsidiary;

    /**
     * @access public
     * @var boolean
     */
    protected $approved;

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
     * @var JournalEntryLineList
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
    	"postingPeriod" => "RecordRef",
    	"tranDate" => "dateTime",
    	"currency" => "RecordRef",
    	"exchangeRate" => "float",
    	"tranId" => "string",
    	"reversalDate" => "dateTime",
    	"reversalDefer" => "boolean",
    	"parentExpenseAlloc" => "RecordRef",
    	"isBookSpecific" => "boolean",
    	"accountingBook" => "RecordRef",
    	"reversalEntry" => "string",
    	"createdFrom" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"toSubsidiary" => "RecordRef",
    	"approved" => "boolean",
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"customForm" => "RecordRef",
    	"lineList" => "JournalEntryLineList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return JournalEntry
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
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return JournalEntry
     */
    public function setExchangeRate($exchangeRate) {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Get exchangeRate
     *
     * @return float
     */
    public function getExchangeRate() {
        return $this->exchangeRate;
    }


    /**
     * Set tranId
     *
     * @param string $tranId
     * @return JournalEntry
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
     * Set reversalDate
     *
     * @param \DateTime $reversalDate
     * @return JournalEntry
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
     * @return JournalEntry
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
     * Set isBookSpecific
     *
     * @param boolean $isBookSpecific
     * @return JournalEntry
     */
    public function setIsBookSpecific($isBookSpecific) {
        $this->isBookSpecific = $isBookSpecific;
        return $this;
    }

    /**
     * Get isBookSpecific
     *
     * @return boolean
     */
    public function getIsBookSpecific() {
        return $this->isBookSpecific;
    }


    /**
     * Set reversalEntry
     *
     * @param string $reversalEntry
     * @return JournalEntry
     */
    public function setReversalEntry($reversalEntry) {
        $this->reversalEntry = $reversalEntry;
        return $this;
    }

    /**
     * Get reversalEntry
     *
     * @return string
     */
    public function getReversalEntry() {
        return $this->reversalEntry;
    }


    /**
     * Set approved
     *
     * @param boolean $approved
     * @return JournalEntry
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
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return JournalEntry
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
     * @return JournalEntry
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
     * Set lineList
     *
     * @param JournalEntryLineList $lineList
     * @return JournalEntry
     */
    public function setLineList(JournalEntryLineList $lineList) {
        $this->lineList = $lineList;
        return $this;
    }

    /**
     * Get lineList
     *
     * @return JournalEntryLineList
     */
    public function getLineList() {
        return $this->lineList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return JournalEntry
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
     * @return JournalEntry
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
     * @return JournalEntry
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