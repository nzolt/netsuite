<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Customers;

/**
 * CustomerPaymentApply
 */
class CustomerPaymentApply {

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
    protected $applyDate;

    /**
     * @access public
     * @var string
     */
    protected $job;

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
     * @var dateTime
     */
    protected $discDate;

    /**
     * @access public
     * @var float
     */
    protected $discAmt;

    /**
     * @access public
     * @var float
     */
    protected $disc;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    static $paramtypesmap = array(
    	"apply" => "boolean",
    	"doc" => "integer",
    	"line" => "integer",
    	"applyDate" => "dateTime",
    	"job" => "string",
    	"type" => "string",
    	"refNum" => "string",
    	"total" => "float",
    	"due" => "float",
    	"currency" => "string",
    	"discDate" => "dateTime",
    	"discAmt" => "float",
    	"disc" => "float",
    	"amount" => "float",
    );

    /**
     * Set apply
     *
     * @param boolean $apply
     * @return CustomerPaymentApply
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
     * @return CustomerPaymentApply
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
     * @return CustomerPaymentApply
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
     * Set applyDate
     *
     * @param \DateTime $applyDate
     * @return CustomerPaymentApply
     */
    public function setApplyDate(\DateTime $applyDate) {
        $this->applyDate = $applyDate->format('c');
        return $this;
    }

    /**
     * Get applyDate
     *
     * @return \DateTime
     */
    public function getApplyDate() {
        return new \DateTime($this->applyDate);
    }


    /**
     * Set job
     *
     * @param string $job
     * @return CustomerPaymentApply
     */
    public function setJob($job) {
        $this->job = $job;
        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob() {
        return $this->job;
    }


    /**
     * Set type
     *
     * @param string $type
     * @return CustomerPaymentApply
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
     * @return CustomerPaymentApply
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
     * Set total
     *
     * @param float $total
     * @return CustomerPaymentApply
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
     * @return CustomerPaymentApply
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
     * @return CustomerPaymentApply
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
     * Set discDate
     *
     * @param \DateTime $discDate
     * @return CustomerPaymentApply
     */
    public function setDiscDate(\DateTime $discDate) {
        $this->discDate = $discDate->format('c');
        return $this;
    }

    /**
     * Get discDate
     *
     * @return \DateTime
     */
    public function getDiscDate() {
        return new \DateTime($this->discDate);
    }


    /**
     * Set discAmt
     *
     * @param float $discAmt
     * @return CustomerPaymentApply
     */
    public function setDiscAmt($discAmt) {
        $this->discAmt = $discAmt;
        return $this;
    }

    /**
     * Get discAmt
     *
     * @return float
     */
    public function getDiscAmt() {
        return $this->discAmt;
    }


    /**
     * Set disc
     *
     * @param float $disc
     * @return CustomerPaymentApply
     */
    public function setDisc($disc) {
        $this->disc = $disc;
        return $this;
    }

    /**
     * Get disc
     *
     * @return float
     */
    public function getDisc() {
        return $this->disc;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return CustomerPaymentApply
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