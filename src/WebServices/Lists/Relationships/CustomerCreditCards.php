<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * CustomerCreditCards
 */
class CustomerCreditCards {

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
     * @var RecordRef
     */
    public $cardState;

    /**
     * @access public
     * @var dateTime
     */
    protected $stateFrom;

    /**
     * @access public
     * @var string
     */
    protected $debitcardIssueNo;

    /**
     * @access public
     * @var string
     */
    protected $ccMemo;

    /**
     * @access public
     * @var dateTime
     */
    protected $validfrom;

    /**
     * @access public
     * @var boolean
     */
    protected $ccDefault;

    static $paramtypesmap = array(
    	"internalId" => "string",
    	"ccNumber" => "string",
    	"ccExpireDate" => "dateTime",
    	"ccName" => "string",
    	"paymentMethod" => "RecordRef",
    	"cardState" => "RecordRef",
    	"stateFrom" => "dateTime",
    	"debitcardIssueNo" => "string",
    	"ccMemo" => "string",
    	"validfrom" => "dateTime",
    	"ccDefault" => "boolean",
    );

    /**
     * Set internalId
     *
     * @param string $internalId
     * @return CustomerCreditCards
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
     * @return CustomerCreditCards
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
     * @return CustomerCreditCards
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
     * @return CustomerCreditCards
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
     * Set stateFrom
     *
     * @param \DateTime $stateFrom
     * @return CustomerCreditCards
     */
    public function setStateFrom(\DateTime $stateFrom) {
        $this->stateFrom = $stateFrom->format('c');
        return $this;
    }

    /**
     * Get stateFrom
     *
     * @return \DateTime
     */
    public function getStateFrom() {
        return new \DateTime($this->stateFrom);
    }


    /**
     * Set debitcardIssueNo
     *
     * @param string $debitcardIssueNo
     * @return CustomerCreditCards
     */
    public function setDebitcardIssueNo($debitcardIssueNo) {
        $this->debitcardIssueNo = $debitcardIssueNo;
        return $this;
    }

    /**
     * Get debitcardIssueNo
     *
     * @return string
     */
    public function getDebitcardIssueNo() {
        return $this->debitcardIssueNo;
    }


    /**
     * Set ccMemo
     *
     * @param string $ccMemo
     * @return CustomerCreditCards
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
     * Set validfrom
     *
     * @param \DateTime $validfrom
     * @return CustomerCreditCards
     */
    public function setValidfrom(\DateTime $validfrom) {
        $this->validfrom = $validfrom->format('c');
        return $this;
    }

    /**
     * Get validfrom
     *
     * @return \DateTime
     */
    public function getValidfrom() {
        return new \DateTime($this->validfrom);
    }


    /**
     * Set ccDefault
     *
     * @param boolean $ccDefault
     * @return CustomerCreditCards
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

}