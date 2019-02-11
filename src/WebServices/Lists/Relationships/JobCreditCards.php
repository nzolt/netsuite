<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * JobCreditCards
 */
class JobCreditCards {

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $ccNumber;

    /**
     * @access public
     * @var dateTime
     */
    protected $ccExpireDate;

    /**
     * @access public
     * @var string
     */
    protected $ccName;

    /**
     * @access public
     * @var RecordRef
     */
    public $paymentMethod;

    /**
     * @access public
     * @var string
     */
    protected $ccMemo;

    /**
     * @access public
     * @var boolean
     */
    protected $ccDefault;

    /**
     * @access public
     * @var string
     */
    protected $debitCardIssueNo;

    /**
     * @access public
     * @var dateTime
     */
    protected $validFrom;

    static $paramtypesmap = array(
    	"internalId" => "string",
    	"ccNumber" => "string",
    	"ccExpireDate" => "dateTime",
    	"ccName" => "string",
    	"paymentMethod" => "RecordRef",
    	"ccMemo" => "string",
    	"ccDefault" => "boolean",
    	"debitCardIssueNo" => "string",
    	"validFrom" => "dateTime",
    );

    /**
     * Set internalId
     *
     * @param string $internalId
     * @return JobCreditCards
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
     * Set ccNumber
     *
     * @param string $ccNumber
     * @return JobCreditCards
     */
    public function setCcNumber($ccNumber) {
        $this->ccNumber = $ccNumber;
        return $this;
    }

    /**
     * Get ccNumber
     *
     * @return string
     */
    public function getCcNumber() {
        return $this->ccNumber;
    }


    /**
     * Set ccExpireDate
     *
     * @param \DateTime $ccExpireDate
     * @return JobCreditCards
     */
    public function setCcExpireDate(\DateTime $ccExpireDate) {
        $this->ccExpireDate = $ccExpireDate->format('c');
        return $this;
    }

    /**
     * Get ccExpireDate
     *
     * @return \DateTime
     */
    public function getCcExpireDate() {
        return new \DateTime($this->ccExpireDate);
    }


    /**
     * Set ccName
     *
     * @param string $ccName
     * @return JobCreditCards
     */
    public function setCcName($ccName) {
        $this->ccName = $ccName;
        return $this;
    }

    /**
     * Get ccName
     *
     * @return string
     */
    public function getCcName() {
        return $this->ccName;
    }


    /**
     * Set ccMemo
     *
     * @param string $ccMemo
     * @return JobCreditCards
     */
    public function setCcMemo($ccMemo) {
        $this->ccMemo = $ccMemo;
        return $this;
    }

    /**
     * Get ccMemo
     *
     * @return string
     */
    public function getCcMemo() {
        return $this->ccMemo;
    }


    /**
     * Set ccDefault
     *
     * @param boolean $ccDefault
     * @return JobCreditCards
     */
    public function setCcDefault($ccDefault) {
        $this->ccDefault = $ccDefault;
        return $this;
    }

    /**
     * Get ccDefault
     *
     * @return boolean
     */
    public function getCcDefault() {
        return $this->ccDefault;
    }


    /**
     * Set debitCardIssueNo
     *
     * @param string $debitCardIssueNo
     * @return JobCreditCards
     */
    public function setDebitCardIssueNo($debitCardIssueNo) {
        $this->debitCardIssueNo = $debitCardIssueNo;
        return $this;
    }

    /**
     * Get debitCardIssueNo
     *
     * @return string
     */
    public function getDebitCardIssueNo() {
        return $this->debitCardIssueNo;
    }


    /**
     * Set validFrom
     *
     * @param \DateTime $validFrom
     * @return JobCreditCards
     */
    public function setValidFrom(\DateTime $validFrom) {
        $this->validFrom = $validFrom->format('c');
        return $this;
    }

    /**
     * Get validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom() {
        return new \DateTime($this->validFrom);
    }

}