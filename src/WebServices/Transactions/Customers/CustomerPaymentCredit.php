<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Customers;

/**
 * CustomerPaymentCredit
 */
class CustomerPaymentCredit {

    /**
     * @access public
     * @var boolean
     */
    protected $apply;

    /**
     * @access public
     * @var integer
     */
    protected $doc;

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var dateTime
     */
    protected $creditDate;

    /**
     * @access public
     * @var string
     */
    protected $type;

    /**
     * @access public
     * @var string
     */
    protected $refNum;

    /**
     * @access public
     * @var string
     */
    protected $appliedTo;

    /**
     * @access public
     * @var float
     */
    protected $total;

    /**
     * @access public
     * @var float
     */
    protected $due;

    /**
     * @access public
     * @var string
     */
    protected $currency;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    static $paramtypesmap = array(
    	"apply" => "boolean",
    	"doc" => "integer",
    	"line" => "integer",
    	"creditDate" => "dateTime",
    	"type" => "string",
    	"refNum" => "string",
    	"appliedTo" => "string",
    	"total" => "float",
    	"due" => "float",
    	"currency" => "string",
    	"amount" => "float",
    );

    /**
     * Set apply
     *
     * @param boolean $apply
     * @return CustomerPaymentCredit
     */
    public function setApply($apply) {
        $this->apply = $apply;
        return $this;
    }

    /**
     * Get apply
     *
     * @return boolean
     */
    public function getApply() {
        return $this->apply;
    }


    /**
     * Set doc
     *
     * @param integer $doc
     * @return CustomerPaymentCredit
     */
    public function setDoc($doc) {
        $this->doc = $doc;
        return $this;
    }

    /**
     * Get doc
     *
     * @return integer
     */
    public function getDoc() {
        return $this->doc;
    }


    /**
     * Set line
     *
     * @param integer $line
     * @return CustomerPaymentCredit
     */
    public function setLine($line) {
        $this->line = $line;
        return $this;
    }

    /**
     * Get line
     *
     * @return integer
     */
    public function getLine() {
        return $this->line;
    }


    /**
     * Set creditDate
     *
     * @param \DateTime $creditDate
     * @return CustomerPaymentCredit
     */
    public function setCreditDate(\DateTime $creditDate) {
        $this->creditDate = $creditDate->format('c');
        return $this;
    }

    /**
     * Get creditDate
     *
     * @return \DateTime
     */
    public function getCreditDate() {
        return new \DateTime($this->creditDate);
    }


    /**
     * Set type
     *
     * @param string $type
     * @return CustomerPaymentCredit
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set refNum
     *
     * @param string $refNum
     * @return CustomerPaymentCredit
     */
    public function setRefNum($refNum) {
        $this->refNum = $refNum;
        return $this;
    }

    /**
     * Get refNum
     *
     * @return string
     */
    public function getRefNum() {
        return $this->refNum;
    }


    /**
     * Set appliedTo
     *
     * @param string $appliedTo
     * @return CustomerPaymentCredit
     */
    public function setAppliedTo($appliedTo) {
        $this->appliedTo = $appliedTo;
        return $this;
    }

    /**
     * Get appliedTo
     *
     * @return string
     */
    public function getAppliedTo() {
        return $this->appliedTo;
    }


    /**
     * Set total
     *
     * @param float $total
     * @return CustomerPaymentCredit
     */
    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal() {
        return $this->total;
    }


    /**
     * Set due
     *
     * @param float $due
     * @return CustomerPaymentCredit
     */
    public function setDue($due) {
        $this->due = $due;
        return $this;
    }

    /**
     * Get due
     *
     * @return float
     */
    public function getDue() {
        return $this->due;
    }


    /**
     * Set currency
     *
     * @param string $currency
     * @return CustomerPaymentCredit
     */
    public function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency() {
        return $this->currency;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return CustomerPaymentCredit
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount() {
        return $this->amount;
    }

}